
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
				<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/header-content.php";include_once($path); ?>
				<!-- Page Banner-->
				<div class="py-2 mb-4 pageBannerColour text-center">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-12">
								<h1 class="display-4 text-white mt-5 mb-2">Welcome to Redwood</h1>
								<p class="lead mb-5 text-white-50">We are a business management and marketing company dedicated to helping you grow your business.</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Container -->
				<div class="container-fluid">
					<div class="row">
						<!--Left side-->
						<div class="col-lg-3 align-self-center">
							<div class="card coreCard mb-4">
								<div class="card-body text-right">
									<h4> Service </h4>
									<p>This is a small description of one of the services we offer here at redoow</p>
								</div>
							</div>
							<div class="card coreCard mb-4">
								<div class="card-body text-right">
									<h4> Service </h4>
									<p>This is a small description of one of the services we offer here at redoow</p>
								</div>
							</div>
							<div class="card coreCard mb-4">
								<div class="card-body text-right">
									<h4> Service </h4>
									<p>This is a small description of one of the services we offer here at redoow</p>
								</div>
							</div>
						</div>
						<!--Middle-->
						<div class="col-lg-6 bg-dark align-self-center">
							<img class="d-block m-auto" src="https://via.placeholder.com/300">
						</div>
						<!--Right Side-->
						<div class="col-lg-3 align-self-center">
							<div class="card mb-4">
								<div class="card-body text-left">
									<h4> Service </h4>
									<p>This is a small description of one of the services we offer here at redoow</p>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body text-left">
									<h4> Service </h4>
									<p>This is a small description of one of the services we offer here at redoow</p>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body text-left">
									<h4> Service </h4>
									<p>This is a small description of one of the services we offer here at redoow</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer -->
			<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer.php";include_once($path); ?>
			<!-- Footer - Tags -->
			<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer-tags.php";include_once($path); ?>
		</div>
	</body>

</html>
