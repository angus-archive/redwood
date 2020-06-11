
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
						<h1 class="display-4 text-white mt-5 mb-2">Contact Us</h1>
						<p class="lead mb-5 text-white-50">Feel free to contact us with any questions you have or if you would like to purchase one of our packages or services.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- Container -->
		<div class="container">


		</div>
	</div>
	<!-- Footer -->
	<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer.php";include_once($path); ?>
	<!-- Footer - Tags -->
	<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer-tags.php";include_once($path); ?>
</div>
</body>

</html>
