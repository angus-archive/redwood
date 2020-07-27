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
								<dd class="col-md-9 col-6"><?php echo $_SESSION['Job-Title']?></dd>
							</dl>
						</div>

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
</div>
</body>

</html>

