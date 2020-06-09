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
			<div id="pageBanner" class="bg-primary py-2 mb-3">
				<div class="container h-90">
					<div class="row h-100 align-items-center">
						<div class="col-lg-12">
							<h1 class="display-4 text-white mt-5 mb-2">Packages</h1>
							<p class="lead mb-5 text-white-50">Browse some of our packages...</p>
						</div>
					</div>
				</div>
			</div>
			<!-- Container -->
			<div class="container">
				
				<div class="row">
					<!-- Economy -->
					<div class="col-md-4 mb-5">
						<div class="card h-100">
							<div class="card-header blueSteelBackground text-light">
								<h4 class="my-0 font-weight-normal">Economy</h4>
							</div>
							<div class="card-body">
								<p class="card-text">Our Economy Package features is perfect for people looking to get started on social media</p>

							</div>

							<ul class="list-group list-group-flush">
								<li class="list-group-item"><h5 class="card-text econCol">What's included? </h5></li>
								<li class="list-group-item">Monthly Meetings</li>
								<li class="list-group-item">Social Media Advice</li>
								<li class="list-group-item">Creative content ideas</li>
							</ul>

							<div class="card-footer">
								<a href="#" class="btn btn-primary econBackground" style="border: 0 !important;">Find Out More!</a>
							</div>

						</div>
					</div>
					<!-- Redwood -->
					<div class="col-md-4 mb-5">
						<div class="card h-100">
							<div class="card-header blueSteelBackground text-light">
								<h4 class="my-0 font-weight-normal">Redwood</h4>
							</div>
							<div class="card-body">
								<p class="card-text">Our Economy Package features is perfect for people looking to get started on social media</p>

							</div>

							<ul class="list-group list-group-flush">
								<li class="list-group-item"><h5 class="card-text redwoodCol">What's included? </h5></li>
								<li class="list-group-item">Fortnightly meetings</li>
								<li class="list-group-item">Social Media management</li>
								<li class="list-group-item">Build online presence</li>
							</ul>

							<div class="card-footer">
								<a href="#" class="btn btn-primary redwoodBackground" style="border: 0 !important;">Find Out More!</a>
							</div>

						</div>
					</div>
					<!-- Deluxe -->
					<div class="col-md-4 mb-5">
						<div class="card h-100">
							<div class="card-header blueSteelBackground text-light">
								<h4 class="my-0 font-weight-normal">Deluxe</h4>
							</div>
							<div class="card-body">
								<p class="card-text">Our Economy Package features is perfect for people looking to get started on social media</p>

							</div>

							<ul class="list-group list-group-flush">
								<li class="list-group-item"><h5 class="card-text deluxeCol">What's included? </h5></li>
								<li class="list-group-item">Weekly meetings</li>
								<li class="list-group-item">Opportunity reach analysis</li>
								<li class="list-group-item">Monthly business review</li>
								<li class="list-group-item">Photography session</li>
							</ul>

							<div class="card-footer">
								<a href="#" class="btn btn-primary deluxeBackground" style="border: 0 !important;">Find Out More!</a>
							</div>

						</div>
					</div>
				</div>
				<!-- /.row -->

			</div>
		</div>
		<!-- Footer -->
		<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer.php";include_once($path); ?>
		<!-- Footer - Tags -->
		<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer-tags.php";include_once($path); ?>

	</div>
</body>

</html>
