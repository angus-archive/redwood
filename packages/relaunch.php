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
        <div class="py-2 text-center bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h1 class="display-4 mt-5 mb-2 relaunchCol font-weight-bold">Relaunch Package</h1>
                        <p class="lead mb-5">This is a brief description of the relaunch package, who it is for etc</p>
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
				<div class="col-lg-4 mb-5">
				    <?php online_reopening(); ?>
				</div>
				<div class="col-lg-4 mb-5">
				    <?php advert_creation(); ?>
				</div>
				<div class="col-lg-4 mb-5">
				    <?php active_marketing(); ?>
				</div>
				<div class="col-lg-4 mb-5">
				    <?php personalised_report(); ?>
				</div>

			</div>
		</div>
		<!-- Package Details -->
		<div class="container p-sm-4">
			<h3 class=" pb-3 text-center">About the package</h3>
			<p id="packageDescription" class="text-center mx-auto" style="max-width: 75%;">Here at Redwood we understand the devastating impact the Covid-19 Pandemic has had on business. Your business helps up the backbone of our Great British economy and we want to help you get back to business as normal. To help you achieve this, we have carefully curated a thorough and affordable Relaunch package to help you and your business come back with a bang. Social media marketing and effective opportunity analysis will be crucial in helping your business bring back the customers and pull through this difficult period! The Relaunch Package includes an array of carefully selected features, with the goal of getting your business back to normal at the centre of our attention!</p>
		</div>
		<div class="pSpacer-y-40"></div>
    </div>
    <!-- Footer -->
    <?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer.php";include_once($path); ?>
    <!-- Footer - Tags -->
    <?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer-tags.php";include_once($path); ?>
</div>
</body>

</html>
