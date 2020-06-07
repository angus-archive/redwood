<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/a_config.php";include_once($path); ?>
<html lang="en">
<head>
	<!--Head Tags-->
    <?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/head-tags.php";include_once($path);?>
</head>
<body>

<div id="content">
	<!--Header-->
    <?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/header-content.php";include_once($path);?>
	<!--Nav-Bar-->
    <?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/navigation.php";include_once($path); ?>

	<!--Main Content-->
    <main>
        <div class="alignDiv">
			<h1 class="mTextSpacerT pageHeading"> Error, the page you are looking for does not exist</h1>
			<div id="kittyContainer">
				<img src="/resources/images/kitty.png" style="width: 500px; height: auto" alt="Cute Kitty">
			</div>
        </div>
    </main>

</div>

<!--Footer-->
<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer.php";include_once($path);?>

</body>
</html>