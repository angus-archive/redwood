
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
				<div id="pageBanner" class="py-2 mb-3">
					<div class="container h-90">
						<div class="row h-100 align-items-center">
							<div class="col-lg-12">
								<h1 class="display-4 text-white mt-5 mb-2">Welcome to Redwood</h1>
								<p class="lead mb-5 text-white-50">We are a business management and marketing company dedicated to helping you grow your business.</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Page Content -->
				<div class="container">

					<div class="row">
						<div class="col-md-8 mb-5">
							<h2>What We Do</h2>
							<hr>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
							<a class="btn btn-primary btn-lg" href="#">Call to Action &raquo;</a>
						</div>
						<div class="col-md-4 mb-5">
							<h2>Contact Us</h2>
							<hr>
							<address>
								<strong>Start Bootstrap</strong>
								<br>3481 Melrose Place
								<br>Beverly Hills, CA 90210
								<br>
							</address>
							<address>
								<abbr title="Phone">P:</abbr>
								(123) 456-7890
								<br>
								<abbr title="Email">E:</abbr>
								<a href="mailto:#">name@example.com</a>
							</address>
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
