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
			<!-- Page Content -->
			<div class="container">
				
				<div class="row">
					<div class="col-md-4 mb-5">
						<div class="card h-100">
							<img class="card-img-top" src="http://placehold.it/300x200" alt="">
							<div class="card-body">
								<h4 class="card-title">Card title</h4>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
							</div>
							<div class="card-footer">
								<a href="#" class="btn btn-primary">Find Out More!</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="card h-100">
							<img class="card-img-top" src="http://placehold.it/300x200" alt="">
							<div class="card-body">
								<h4 class="card-title">Card title</h4>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>
							</div>
							<div class="card-footer">
								<a href="#" class="btn btn-primary">Find Out More!</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="card h-100">
							<img class="card-img-top" src="http://placehold.it/300x200" alt="">
							<div class="card-body">
								<h4 class="card-title">Card title</h4>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
							</div>
							<div class="card-footer">
								<a href="#" class="btn btn-primary">Find Out More!</a>
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
