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
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<div class="col-lg-12">
						<h1 class="display-4 mt-5 mb-2 redwoodCol font-weight-bold">Redwood Package</h1>
						<p class="lead mb-5">This is a brief description of the economy package, who it is for etc</p>
					</div>
				</div>
			</div>
		</div>
		<!-- Package Bar-->
        <?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/packageBar.php";include_once($path); ?>
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