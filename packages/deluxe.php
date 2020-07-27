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
		<div class="py-2 text-center offWhiteBackground">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-12">
						<h1 class="display-4 mt-5 mb-2 deluxeCol font-weight-bold">Deluxe Package</h1>
						<p class="lead mb-5">Our package with the most to offer, for businesses looking to seriously utilise social media</p>
					</div>
				</div>
			</div>
		</div>
		<div class="pSpacer-y-20">
			<h3 class=" mb-2 text-center">Core features</h3>
		</div>
		<!-- Core Features -->
	    <?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/all-features.php";include_once($path); ?>
		<div class="container pt-sm-4">
			<div class="row">
				<div class="col-lg-4 col-sm-6 gridBottomSpacing">
				    <?php social_advice(); ?>
				</div>
				<div class="col-lg-4 col-sm-6 gridBottomSpacing">
				    <?php creative_ideas(); ?>
				</div>
				<div class="col-lg-4 col-sm-6 gridBottomSpacing">
				    <?php meetings(); ?>
				</div>
				<div class="col-lg-4 col-sm-6 gridBottomSpacing">
				    <?php calendar(); ?>
				</div>
				<div class="col-lg-4 col-sm-6 gridBottomSpacing">
				    <?php build_online_presence(); ?>
				</div>
				<div class="col-lg-4 col-sm-6 gridBottomSpacing">
				    <?php account_management(); ?>
				</div>
				<div class="col-lg-4 col-sm-6 gridBottomSpacing">
					<?php reach_analysis_reports(); ?>
				</div>
				<div class="col-lg-4 col-sm-6 gridBottomSpacing">
					<?php photography(); ?>
				</div>
				<div class="col-lg-4 col-sm-6 gridBottomSpacing">
					<?php microsoft_masterclass(); ?>
				</div>

			</div>
		</div>
		<!-- Package Details -->
		<div class="container p-sm-4">
			<hr class="w-25 mx-auto" style="height:1px;border-width:0;background-color: #9FA0A1;">
			<h3 class=" pb-3 text-center">About the package</h3>
			<p id="packageDescription" class="text-center mx-auto" style="max-width: 75%;">Our Deluxe Package is by far our most exciting package, offering the greatest variety of services; everything your business needs to build a prominent social media presence and expansive reach. From photography sessions to help you showcase your products/service, to a monthly opportunity reach report, this package will help you every step of the way to successfully social media marketing!</p>

		</div>
		<div class="pSpacer-y-40"></div>
    </div>
	<!-- Find-out-more -->
	<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/find-out-more.php";include_once($path); ?>
	<!-- Optional Extras -->
	<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/optional-extras.php";include_once($path); ?>
    <!-- Footer -->
    <?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer.php";include_once($path); ?>
    <!-- Footer - Tags -->
    <?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer-tags.php";include_once($path); ?>
</div>
</body>

</html>
