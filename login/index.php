<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (isset($_SESSION['loggedin'])) {
	header('Location: /login/home.php');
	exit;
}

$valid_details=true;
//Check for get parameters
if (isset($_GET["details"])){
	$valid_details=$_GET["details"];
}

?>
<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/login/includes/l_config.php";include_once($path); ?>
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

		<!-- Spacer-->
		<div class="mSpacer-y-40"></div>

		<div class="container">
			<h2 class="text-center mb-4">Employee Login</h2>
			<?php if ($valid_details === "false"): ?>
			<div class="alert alert-danger" role="alert">
			  Incorrect Details
			</div>
			<?php endif; ?>
			<div class="pSpacer-y-10"></div>
			<div style="max-width: 50%; background-color: white;box-shadow: 0px 0px 20px -11px rgba(0,0,0,0.75); border-radius: 8px" class="mx-auto p-3">
				<form method="post" action="/login/functions/authenticate">
					<!--Row 1-->
					<div class="form-row">
						<!--Username -->
						<div class="col-md-12 mb-3">
							<label for="username">Username</label>
							<input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
						</div>

					</div>
					<!--Row 2-->
					<div class="form-row">
						<!--Password -->
						<div class="col-md-12 mb-3">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
						</div>

					</div>
					<div class="text-center">
						<!--Submit -->
						<button class="btn btn-primary my-2" type="submit">Submit</button>
					</div>
				</form>
			</div>
		</div>
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

