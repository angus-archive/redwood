<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: /login');
	exit;
}
?>

<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/a_config.php";include_once($path); ?>
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

		<div class="container text-center">
			<h2 class="mb-4"> Send a client email</h2>
		</div>

		<div class="container">
			<form method="post" action="/login/authenticate.php">
				<!--Row 1-->
				<div class="form-row">
					<!--To -->
					<div class="col-md-12 mb-3">
						<label for="clientEmail">Client Email</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroupPrepend3">@</span>
							</div>
							<input type="email" class="form-control" id="clientEmail" name="clientEmail" placeholder="Client Email" required>
						</div>
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

