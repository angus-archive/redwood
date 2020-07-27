<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/login/includes/auth_redirect.php";include_once($path); ?>
<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/login/includes/l_config.php";include_once($path); ?>
<?php

$error="none";
if(isset($_GET["error"])){
	$error=$_GET["error"];
}

$changed="false";
if(isset($_GET["changed"])){
	$changed=$_GET["changed"];
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
	<div id="content-wrap" class="pb-5">
		<!-- Header-->
		<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/login/includes/login_header.php";include_once($path); ?>
		<!-- Title bar-->
		<div class="jumbotron jumbotron-fluid">
		  <div class="container">
		    <h1 class="display-5">Your Profile</h1>
		    <p class="lead">Here you can change your personal details</p>
		  </div>
		</div>
		<div class="container">
			<!-- Change Password-->
			<h3 class="p-4"> Change Password </h3>
			<?php if ($changed === "confirmed"):?>
			<div class="alert alert-success" role="alert">
			  Password updated
			</div>
			<?php endif; ?>
			<?php if ($error === "password"):?>
			<div class="alert alert-danger" role="alert">
			  Old Password Incorrect
			</div>
			<?php elseif($error === "match"): ?>
			<div class="alert alert-warning" role="alert">
			  Password's Do not Match
			</div>
			<?php endif; ?>
			<form method="post" action="/login/functions/change-password" class="border p-4">
				<!--Row 1-->
				<div class="form-row">
					<!--Old Password -->
					<div class="col-md-12 mb-3">
						<label for="old_password">Old Password</label>
						<input type="password" class="form-control" id="old_password" name="old_password"required>
					</div>

				</div>
				<!--Row 2-->
				<div class="form-row">
					<!--New Password -->
					<div class="col-md-12 mb-3">
						<label for="new_password">New Password</label>
						<input type="password" class="form-control" id="new_password" name="new_password" required>
					</div>
					<!--New Password Confirm -->
					<div class="col-md-12 mb-3">
						<label for="new_password_confirm">Confirm</label>
						<input type="password" class="form-control" id="new_password_confirm" name="new_password_confirm" required>
					</div>

				</div>
				<div class="text-center">
					<!--Submit -->
					<button class="btn btn-warning my-2" type="submit">Update</button>
				</div>
			</form>
		</div>
	</div>
	<!-- Footer -->
	<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer.php";include_once($path); ?>
	<!-- Footer - Tags -->
	<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer-tags.php";include_once($path); ?>
</div>
</body>

</html>

