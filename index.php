
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
				<div class="py-2 mb-4 text-center">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-12">
								<h1 class="display-4 mt-5 mb-2">Welcome to Redwood</h1>
								<p class="lead mb-5">We are a business management and marketing company dedicated to helping you grow your business.</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Container -->
				<div class="container-fluid">
					<div class="row">
						<!--Left side-->
						<div class="col-lg-3 align-self-center homeLeftPane">
							<div class="card coreCard mb-4">
								<div class="card-body">
									<h4 style="color: #77B813"> Market Analysis </h4>
									<p>An in-depth report report analysing your market segmentation, the key opportunities you can't afford to miss out on and how to get ahead of the competition</p>
								</div>
							</div>
							<div class="card coreCard mb-4">
								<div class="card-body">
									<h4 style="color: #19B082"> Relaunch Events </h4>
									<p>This is a small description of one of the services we offer here at redoow</p>
								</div>
							</div>
							<div class="card coreCard mb-4">
								<div class="card-body">
									<h4 style="color: #963AE4"> Financial Advice </h4>
									<p>This is a small description of one of the services we offer here at redoow</p>
								</div>
							</div>
						</div>
						<!--Middle-->
						<div class="col-lg-6 align-self-center">
							<img class="d-block m-auto" src="/resources/images/homepage.svg">
						</div>
						<!--Right Side-->
						<div class="col-lg-3 align-self-center homeRightPane">
							<div class="card coreCard mb-4">
								<div class="card-body">
									<h4 style="color: #D5396B"> Social Media Marketing </h4>
									<p>This is a small description of one of the services we offer here at redoow</p>
								</div>
							</div>
							<div class="card coreCard mb-4">
								<div class="card-body">
									<h4 style="color: #EBA800"> Creative Content Ideas </h4>
									<p>This is a small description of one of the services we offer here at redoow</p>
								</div>
							</div>
							<div class="card coreCard mb-4">
								<div class="card-body">
									<h4 style="color: #00AFF6"> Graphic Design </h4>
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
