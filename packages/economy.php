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
                        <h1 class="display-4 mt-5 mb-2 econCol font-weight-bold">Economy Package</h1>
                        <p class="lead mb-5">This is a brief description of the economy package, who it is for etc</p>
                    </div>
                </div>
            </div>
        </div>
		<!-- Spacer-->
		<div class="mSpacer-y-40"></div>
		<h3 class=" mb-2 text-center">Core features</h3>
		<!-- Core Features -->
	    <?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/all-features.php";include_once($path); ?>
		<div class="container pt-sm-4">
			<div class="row">
				<div class="col-lg-4 mb-5">
					<?php social_advice(); ?>
				</div>
				<div class="col-lg-4 mb-5">
					<?php creative_ideas(); ?>
				</div>
				<div class="col-lg-4 mb-5">
					<?php meetings(); ?>
				</div>
				<div class="col-lg-4 mb-5">
					<?php calendar(); ?>
				</div>
			</div>
        </div>
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
