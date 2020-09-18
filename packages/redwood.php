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
						<h1 class="display-4 mt-5 mb-2 redwoodCol font-weight-bold">Redwood Package</h1>
						<p class="lead mb-5">Our standard package, for businesses looking to build up and utilise a social media presence</p>
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

			</div>
		</div>
		<!-- Package Details -->
		<div class="container p-sm-4">
			<hr class="w-25 mx-auto" style="height:1px;border-width:0;background-color: #9FA0A1;">
			<h3 class=" pb-3 text-center">About the package</h3>
			<p id="packageDescription" class="justify-text mx-auto" style="max-width: 75%;">The Redwood Package is a great value package, ideal for businesses who are looking to utilise social media as a marketing tool. This package offers a variety of features that will help your business grow its social media presence</p>
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
