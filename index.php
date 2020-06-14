
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
				<!-- First Picture Section -->
				<div class="container-fluid">
					<!--Summary -->
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
				<!-- Features -->
				<div class="container-fluid" style="background-color: #E5E4E6">
					<div class="container pSpacer-y-40">
						<div class="row">
							<div class="col-4">
								<div class="card text-center coreCard">
									<div class="card-body">
										<img class="featureIcon mb-2" src="/resources/images/icons/location_blue.svg" alt="Active marketing icon">
										<h3 class="mt-sm-2">Based in the UK</h3>
										<p class="p-1"> Reason why being based in the UK is good</p>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="card text-center coreCard">
									<div class="card-body">
										<img class="featureIcon mb-2" src="/resources/images/icons/support_green.svg" alt="Active marketing icon">
										<h3 class="mt-sm-2">24/7 Support</h3>
										<p class="p-1">Our support team is on hand 24/7 to answer any questions you have</p>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="card text-center coreCard">
									<div class="card-body">
										<img class="featureIcon mb-2" src="/resources/images/icons/awards_red.svg" alt="Active marketing icon">
										<h3 class="mt-sm-2">Top Rated</h3>
										<p class="p-1"> Times are changing; stop passively marketing and allow us to help you actively market your business </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Quotes -->
				<div class="container-fluid bg-dark pSpacer-y-40">
					<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/quotes.php";include_once($path); ?>
				</div>
			</div>
			<!-- Footer -->
			<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer.php";include_once($path); ?>
			<!-- Footer - Tags -->
			<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer-tags.php";include_once($path); ?>
		</div>
	</body>

</html>
