
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
		<div class="py-2 mb-4 offWhiteBackground text-center">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-12">
						<h1 class="display-4 mt-5 mb-2 font-weight-bold">About</h1>
						<p class="lead mb-4">Read a young boy's inspiring story</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Spacer -->
		<div class="pSpacer-y-20"></div>
		<!-- Container -->
		<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="container text-center">
				<!--Picture of Jamie-->
				<img style="width: 50%; height: auto" src="/resources/images/jamie.jpeg">
				<!--Spacer-->
				<div class="pSpacer-y-20"></div>
				</div>
			</div>
			<div class="col-md-6">
				<div>
					<h4>My Story</h4>
					<p>Ever since I was a young boy I always dreamed of starting my own business, Every year for Halloween I would dress up as my business role model Donald Trump, he is my inspiration and the reason I started Redwood.</p>
					<h4>History</h4>
					<p>Redwood was founded in 1995 with the sole purpose of providing outstanding business advice for an affordable price. Almost 25 years later and still awaiting our first customer, myself and the Redwood team look forward to working with you.</p>
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
