<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/login/includes/auth_redirect.php";include_once($path); ?>
<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/login/includes/l_config.php";include_once($path); ?>

<?php

//Connect to database
require $_SERVER['DOCUMENT_ROOT']."/login/functions/connect-to-database.php";

//Check user permission
$bossPriv="false";
if ($_SESSION["user_type"] == "boss" || $_SESSION["user_type"] == "admin"){
	$bossPriv="true";
}

if($bossPriv === "true"){
	//Get users
	$stmt = $pdo->prepare('SELECT username from accounts');
	$stmt->execute();
	$employee_names = $stmt->fetchAll();

	//Get all tasks for all users for dashboard
	$stmt = $pdo->prepare('SELECT * FROM all_tasks INNER JOIN tasks ON all_tasks.task_id=tasks.task_id INNER JOIN accounts ON all_tasks.user_id=accounts.id');
	$stmt->execute();
	$all_tasks_ever = $stmt->fetchAll();

}

//Get all tasks for user
$stmt = $pdo->prepare('SELECT * FROM all_tasks INNER JOIN tasks ON all_tasks.task_id=tasks.task_id WHERE user_id = ?');
$stmt->execute(array($_SESSION["id"]));
$all_tasks = $stmt->fetchAll();

//Organise into completed and incomplete tasks
$completed_tasks=array();
$incomplete_tasks=array();
foreach ($all_tasks as $task) {
	if ($task["status"] === "1"){
		array_push($completed_tasks, $task);
	}else{
		array_push($incomplete_tasks, $task);
	}
}


//Get request for Bossman
$sent="false";
if(isset($_GET["sent"])){
	$sent=$_GET["sent"];
}

$email_sent="true";
if(isset($_GET["email_sent"])){
	$email_sent=$_GET["email_sent"];
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
									<?php if($bossPriv === "true"):?>
									&nbsp<span class="badge badge-info"><?=$_SESSION["user_type"]?></span>
									<?php endif; ?>
								</dd>
							</dl>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!--Tabs section -->
		<div class="container">
			<!--Top Text -->
			<div class="text-center">
				<h4> Your Services </h4>
				<p> Your services will appear under here </p>
			</div>
			<!-- Tabs Container -->
			<div class="border p-4 bg-white">
				<!-- Tabs Menu -->
				<nav>
				  <div class="nav nav-pills d-flex flex-column flex-md-row" id="nav-tab" role="tablist">
				  	<?php if($bossPriv === "true"):?>
				  	<a class="nav-item nav-link active" id="nav-create-tab" data-toggle="tab" href="#nav-create" role="tab" aria-controls="nav-create" aria-selected="true">Create Task</a>
				  	<a class="nav-item nav-link" id="nav-dash-tab" data-toggle="tab" href="#nav-dash" role="tab" aria-controls="nav-dash" aria-selected="true">Dashboard</a>
				  	<?php endif; ?>
				    <a class="nav-item nav-link <?php if($bossPriv !== "true"){echo "active";}?>" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab" aria-controls="nav-all" aria-selected="true">Tasks</a>
				    <a class="nav-item nav-link" id="nav-complete-tab" data-toggle="tab" href="#nav-complete" role="tab" aria-controls="nav-complete" aria-selected="false">Completed Tasks</a>
				  </div>
				</nav>
				<!-- Tabs Content -->
				<div class="tab-content py-4" id="nav-tabContent">
					<?php if($bossPriv === "true"):?>
					<!-- Bossman create task -->
					<div class="tab-pane fade show active" id="nav-create" role="tabpanel" aria-labelledby="nav-create-tab">
						<div class="text-center m-3">
							<p> As Bossman you can assign tasks to other team members here </p>
						</div>
						<?php if ($sent === "true"):?>
						<div class="alert alert-success" role="alert">
						  Task Sent
						</div>
						<?php endif; ?>
						<?php if ($email_sent === "false"):?>
						<div class="alert alert-warning" role="alert">
						  Task created, email sending error
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
					<div class="tab-pane fade show" id="nav-dash" role="tabpanel" aria-labelledby="nav-dash-tab">
						<div class="text-center m-3">
							<p> Here you can view the progress of your team</p>
						</div>
						<!-- Table -->
						<div class="table-responsive-sm">
							<table class="table table-striped" style="font-size: 0.8rem;">
							  <thead class="thead-dark">
							    <tr>
							      <th scope="col">Task Name</th>
							      <th scope="col">Employee</th>
							      <th scope="col">Urgency</th>
							      <th scope="col">Status</th>
							    </tr>
							  </thead>
							  <tbody>
							  	<?php if(sizeof($all_tasks_ever) < 1): ?>
							  		<td colspan="4">You have not set any tasks</td>
							  	<?php endif; ?>
							  	<?php foreach($all_tasks_ever as $task): ?>
							    <tr>
							      <th scope="row"><?=$task["task_name"]?></th>
							      <td><?=$task["username"]?></td>
							      <td><?=$task["task_urgency"]?></td>
							      <?php if($task["status"] == "1"):?>
							      	<td><span class="badge badge-success">Completed</span></td>
							    	<?php else: ?>
							    		<td><span class="badge badge-danger">Incomplete</span></td>
							    	<? endif; ?>
							    </tr>
							  	<? endforeach; ?>
							  </tbody>
							</table>
						</div>
					</div>
					<?php endif; ?>
					<!-- All Incomplete tasks -->
				  <div class="tab-pane fade show <?php if($bossPriv !== "true"){echo "active";}?>" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
				  	<div class="text-center m-3">
				  		<p> Any tasks that bossman has set you will appear here </p>
				  	</div>
				  	<div class="row">
				  		<?php if(sizeof($incomplete_tasks) < 1): ?>
				  		<div class="col-12 mt-4 text-center">
				  			<h4> No tasks available </h4>
				  		</div>
				  		<?php endif; ?>
				  		<?php foreach($incomplete_tasks as $task): ?>
				  		<!--Task-->
				  		<div class="col-xl-4 col-lg-6 mt-4">
				  			<div class="card">
				  				<h5 class="card-header"><?=$task["task_name"]?></h5>
				  			  <div class="card-body">
				  			    <p class="card-text"><?=$task["task_description"]?></p>
				  			  </div>
				  			  <ul class="list-group list-group-flush">
				  			    <li class="list-group-item d-flex justify-content-between align-items-center"><span>Urgency:</span><span><b><?=$task["task_urgency"]?></b></span></li>
				  			    <li class="list-group-item d-flex justify-content-between align-items-center"><span>Date added:</span><span><?=$task["date_created"]?></span></li>
				  			    <li class="list-group-item d-flex justify-content-between align-items-center">
				  			    	<span>Status:</span>
			  			    	  <?php if($task["status"] == "1"):?>
			  			    	  	<td><span class="badge badge-success">Completed</span></td>
			  			    		<?php else: ?>
			  			    			<td><span class="badge badge-danger">Incomplete</span></td>
			  			    		<? endif; ?>
				  			    </li>
				  			  </ul>
				  			  <div class="card-body text-center">
				  			  	<form id="mark-<?=$task["task_id"]?>" action="/login/functions/helpers/mark-as-complete" method="post">
				  			  		<input type="hidden" name="task_id" value="<?=$task["task_id"]?>">
				  			  		<input type="hidden" name="user_id" value="<?=$_SESSION["id"]?>">
				  			  	</form>
				  			  	<button class="btn btn-success btn-sm completeButton" formid=<?=$task["task_id"]?>>Mark as complete</button>
				  			  </div>
				  			</div>
				  		</div>
				  		<?php endforeach; ?>
				  	</div>
				  </div>
				  <!-- Completed tasks -->
				  <div class="tab-pane fade" id="nav-complete" role="tabpanel" aria-labelledby="nav-complete-tab">
				  	<div class="text-center m-3">
				  		<p> The tasks you have completed</p>
				  	</div>
				  	<div class="row">
				  		<?php if(sizeof($completed_tasks) < 1): ?>
				  		<div class="col-12 mt-4 text-center">
				  			<h4> No tasks available </h4>
				  		</div>
				  		<?php endif; ?>
				  		<?php foreach($completed_tasks as $task): ?>
				  		<!--Task-->
				  		<div class="col-xl-4 col-lg-6 mt-4">
				  			<div class="card">
				  				<h5 class="card-header"><?=$task["task_name"]?></h5>
				  			  <div class="card-body">
				  			    <p class="card-text"><?=$task["task_description"]?></p>
				  			  </div>
				  			  <ul class="list-group list-group-flush">
				  			    <li class="list-group-item d-flex justify-content-between align-items-center"><span>Urgency:</span><span><b><?=$task["task_urgency"]?></b></span></li>
				  			    <li class="list-group-item d-flex justify-content-between align-items-center"><span>Date added:</span><span><?=$task["date_created"]?></span></li>
				  			    <li class="list-group-item d-flex justify-content-between align-items-center">
				  			    	<span>Status:</span>
			  			    	  <?php if($task["status"] == "1"):?>
			  			    	  	<td><span class="badge badge-success">Completed</span></td>
			  			    		<?php else: ?>
			  			    			<td><span class="badge badge-danger">Incomplete</span></td>
			  			    		<? endif; ?>
				  			    </li>
				  			  </ul>
				  			  <div class="card-body text-center">
				  			  	<form id="markIncom-<?=$task["task_id"]?>" action="/login/functions/helpers/mark-as-incomplete" method="post">
				  			  		<input type="hidden" name="task_id" value="<?=$task["task_id"]?>">
				  			  		<input type="hidden" name="user_id" value="<?=$_SESSION["id"]?>">
				  			  	</form>
				  			  	<button class="btn btn-danger btn-sm incompleteButton" formid=<?=$task["task_id"]?>>Mark as incomplete</button>
				  			  </div>
				  			</div>
				  		</div>
				  		<?php endforeach; ?>
				  	</div>
				  </div>
				</div>
			</div>
		<!-- Spacer-->
		<div class="pSpacer-y-40"></div>

	</div>
	<!-- Footer -->
	<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer.php";include_once($path); ?>
	<!-- Footer - Tags -->
	<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer-tags.php";include_once($path); ?>
	<!--Custom Scripts -->
	<script type="text/javascript">

		//On Document Load
		$(document).ready(function(){

			//When the "mark as complete" button is clicked
			$(".completeButton").click(function(){

				thisButton=$(this);

				//Disable button and show loading icon
				thisButton.prop("disabled", true);
				thisButton.html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span>&nbsp Loading</span>');
				//Get FormID
				formID=$("#mark-"+$(this).attr("formid"));
				//Gather data
				var form=$(formID);
				var url = form.attr("action");
				var formData = $(form).serializeArray();
				//Submit post form
				$.post(url, formData).done(function (data) {
					if (data === "TRUE"){
						//Remove Loading from button
						thisButton.html('Marked As Complete');
					}else{
						//A problem took place 
						thisButton.prop("disabled", false);
						thisButton.html('Mark As Complete');
					}
				});
			});

			//When the "mark as incomplete" button is clicked
			$(".incompleteButton").click(function(){

				thisButton=$(this);

				//Disable button and show loading icon
				thisButton.prop("disabled", true);
				thisButton.html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span>&nbsp Loading</span>');
				//Get FormID
				formID=$("#markIncom-"+$(this).attr("formid"));
				//Gather data
				var form=$(formID);
				var url = form.attr("action");
				var formData = $(form).serializeArray();
				//Submit post form
				$.post(url, formData).done(function (data) {
					if (data === "TRUE"){
						//Remove Loading from button
						thisButton.html('Marked As Incomplete');
					}else{
						//A problem took place 
						thisButton.prop("disabled", false);
						thisButton.html('Mark As Incomplete');
					}
				});
			});

		});
	</script>
</div>
</body>

</html>

