<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/login/includes/auth_redirect.php";include_once($path); ?>
<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/login/includes/l_config.php";include_once($path); ?>

<?php

//Connect to database
require $_SERVER['DOCUMENT_ROOT']."/login/functions/connect-to-database.php";

if($_SESSION["user_type"] === "boss"){
	$stmt = $pdo->prepare('SELECT username from accounts');
	$stmt->execute();
	$employee_names = $stmt->fetchAll();
}

if($_SESSION["user_type"] === "user" && isset($_SESSION["id"])){
	//Get the tasks
	$stmt = $pdo->prepare('SELECT * FROM all_tasks INNER JOIN tasks ON all_tasks.task_id=tasks.task_id WHERE user_id = ?');
	$stmt->execute(array($_SESSION["id"]));
	$all_tasks = $stmt->fetchAll();
}



//Get request for Bossman
$sent="false";
if(isset($_GET["sent"])){
	$sent=$_GET["sent"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Head tags -->
	<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/head-tags.php";include_once($path); ?>
</head>

<body>
<div id="page-content">
	<div id="content-wrap">
		<!-- Header-->
		<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/login/includes/login_header.php";include_once($path); ?>

		<!-- Profile Header-->
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<div class="container">
					<div class="row">
						<div class="col-lg-3">
							<div id="profilePicContainer">
								<img src="/resources/images/profiles/<?=$_SESSION['img']?>" alt="Profile Icon">
							</div>
						</div>
						<div class="col-lg-9 mt-4 mt-lg-0">
							<h2 class="mb-4"> Welcome, <?php echo ucwords($_SESSION["name"]) ?></h2>
							<dl class="row">
								<dt class="col-md-3 col-6">Employee ID</dt>
								<dd class="col-md-9 col-6"><?php echo $_SESSION['id']?></dd>

								<dt class="col-md-3 col-6">Job Title</dt>
								<dd class="col-md-9 col-6">
									<?php echo $_SESSION['Job-Title']?>
									<?php if($_SESSION["user_type"] != "user"):?>
									&nbsp<span class="badge badge-info"><?=$_SESSION["user_type"]?></span>
									<?php endif; ?>
								</dd>
							</dl>
						</div>

					</div>
				</div>
			</div>
		</div>
		<?php if($_SESSION["user_type"] == "boss"):?>
		<!--Boss man section -->
		<div class="container">
			<div class="text-center">
				<h4> Assign tasks </h4>
				<p> As Bossman you can assign tasks to other team members here </p>
			</div>
			<?php if ($sent === "true"):?>
			<div class="alert alert-success" role="alert">
			  Task Sent
			</div>
			<?php endif; ?>
			<!-- Task form -->
			<form action="/login/functions/send-tasks" method="post">

				<!-- Task Name -->
				<div class="form-group">
				    <label for="taskName">Task Name</label>
				    <input name="task_name" type="text" class="form-control" id="taskName" required>
				</div>
				<!-- Task Urgency -->
			  <div class="form-group">
			    <label for="urgency">Urgency</label>
			    <select name="task_urgency" class="form-control" id="urgency">
			      <option>Urgent</option>
			      <option>Quite Important</option>
			      <option>No Rush</option>
			    </select>
			  </div>
			 	
			 	<!-- Task Description -->
			  <div class="form-group">
			    <label for="task_description">Task Description</label>
			    <textarea name="task_description" class="form-control" id="task_description" rows="3" required></textarea>
			  </div>

		  	<!-- Employee Select -->
		    <div class="form-group">
		      <label for="employee_select">Select Employee</label>
		      <select name="task_employee" class="form-control" id="employee_select">
		      	<?php foreach ($employee_names as $e): ?>
		      		<option><?=$e["username"]?></option>
		      	<? endforeach; ?>
		      </select>
		    </div>
			  
			  <!--Submit -->
			  <button type="submit" class="btn btn-primary">Send</button>
			</form>
		</div>
		<?php elseif($_SESSION["user_type"] == "user"): ?>
		<!--User section -->
		<div class="container">
			<!--Top Text -->
			<div class="text-center">
				<h4> Your Tasks </h4>
				<p> Any tasks that bossman has set you will appear here </p>
			</div>

			<!-- Tabs Container -->
			<div class="border p-4 bg-white">
				<!-- Tabs Menu -->
				<nav>
				  <div class="nav nav-tabs" id="nav-tab" role="tablist">
				    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Tasks</a>
				    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Completed Tasks</a>
				  </div>
				</nav>
				<!-- Tabs Content -->
				<div class="tab-content py-4" id="nav-tabContent">
					<!-- All tasks -->
				  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
				  	<div class="row">
				  		<?php if(sizeof($all_tasks) < 1): ?>
				  		<div class="col-12 mt-4 text-center">
				  			<h4> No tasks available </h4>
				  		</div>
				  		<?php endif; ?>
				  		<?php foreach($all_tasks as $task): ?>
				  		<!--Task-->
				  		<div class="col-xl-4 col-lg-6 mt-4">
				  			<div class="card">
				  				<h5 class="card-header"><?=$task["task_name"]?></h5>
				  			  <div class="card-body">
				  			    <p class="card-text"><?=$task["task_description"]?></p>
				  			  </div>
				  			  <ul class="list-group list-group-flush">
				  			    <li class="list-group-item d-flex justify-content-between align-items-center"><span>Urgency:</span><span class="badge badge-danger"><?=$task["task_urgency"]?></span></li>
				  			    <li class="list-group-item d-flex justify-content-between align-items-center"><span>Date added:</span><span><?=$task["date_created"]?></span></li>
				  			    <li class="list-group-item d-flex justify-content-between align-items-center"><span>Status:</span><span class="badge badge-secondary"><?=$task["status"]?></span></li>
				  			  </ul>
				  			  <div class="card-body text-center">
				  			    <a href="#" class="btn btn-success btn-sm">Mark as complete</a>
				  			  </div>
				  			</div>
				  		</div>
				  		<?php endforeach; ?>
				  	</div>
				  </div>
				  <!-- Completed tasks -->
				  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
				  	<h5> Completed </h5>
				  </div>
				</div>
			</div>

		

		<?php endif; ?>
		<!-- Spacer-->
		<div class="pSpacer-y-40"></div>

	</div>
	<!-- Footer -->
	<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer.php";include_once($path); ?>
	<!-- Footer - Tags -->
	<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer-tags.php";include_once($path); ?>

</div>
</body>

</html>

