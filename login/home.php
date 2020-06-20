<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/login/includes/auth_redirect.php";include_once($path); ?>
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

		<!-- Profile Header-->
		<div id="profileHeader" class="container-fluid py-4 mb-5" style="background-color: #E8E7E8">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div id="profilePicContainer">
							<img src="/resources/images/icons/profile.svg" alt="Profile Icon">
						</div>
					</div>
					<div class="col-lg-9">
						<h2 class="mb-4"> Welcome, <?php echo $_SESSION["name"] ?></h2>
						<dl class="row">
							<dt class="col-3">Employee ID</dt>
							<dd class="col-9"><?php echo $_SESSION['id']?></dd>

							<dt class="col-3">Job Title</dt>
							<dd class="col-9"><?php echo $_SESSION['Job-Title']?></dd>

						</dl>
					</div>

				</div>
			</div>

		</div>


		<div class="container text-center" style="max-width: 1000px">
			<h3 class="mb-4"> Quick Links...</h3>
			<div class="list-group">
				<a href="/login/create_client_email.php" class="list-group-item list-group-item-action bg-info text-light">Send Client Email</a>
				<a href="#" class="list-group-item list-group-item-action bg-info text-light"">Send Client Invoice</a>
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

