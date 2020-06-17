<?php
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

		<div style="max-width: 75%;" class="mx-auto p-3">
			<form method="post" action="/login/generate_client_email.php">
				<!--Row 1 -->
				<div class="form-group">
					<label for="redEmail">Select Redwood Email</label>
					<select class="form-control" id="redEmail">
						<option>support@redwood.business</option>
						<option>sales@redwood.business</option>
						<option>no-reply@redwood.business</option>
					</select>
				</div>

				<div class="pSpacer-y-10"></div>
				<h3 class="pb-3 text-center"> Core Details</h3>
				<!--Row 2-->
				<div class="form-row">
					<!--To -->
					<div class="col-md-12 mb-3">
						<label for="clientEmail">Client Email</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroupPrepend3">@</span>
							</div>
							<input type="email" class="form-control" id="clientEmail" name="client-email" placeholder="Client Email" required>
						</div>
					</div>

				</div>
				<!--Row 3-->
				<div class="form-row">
					<!--Subject -->
					<div class="col-md-12 mb-3">
						<label for="subject">Subject</label>
						<input type="text" class="form-control" id="subject" name="message-subject" placeholder="Subject" required>
					</div>
				</div>
				<!--Message -->
				<div class="form-group">
					<label for="message">Message</label>
					<textarea class="form-control" id="message" name="message-content" rows="15" style="resize:none"  placeholder="Email message..." required maxlength="5000"></textarea>
				</div>

				<div class="pSpacer-y-10"></div>
				<h3 class="pb-3 text-center"> Extra Details</h3>

				<!--Row 5-->
				<div class="form-row">
					<!--Heading -->
					<div class="col-md-12 mb-3">
						<label for="heading">Message Heading</label>
						<input type="text" class="form-control" id="heading" name="message-heading" placeholder="Hi John,">
					</div>
				</div>

				<div class="text-center">
					<!--Submit -->
					<button class="btn btn-primary my-2" type="submit">Generate Preview</button>
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

