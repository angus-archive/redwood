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
        <div id="forestContainer">
            <img id="forestPic" src="resources/images/forest.png">
        </div>
        <div class="wrapper">
            <h1 class="pageHeading"> Our Services </h1>
            <p style="width: 50%; text-align: center; max-width: 500px"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
            <button> See what our clients say</button>
        </div>
    </main>

</div>

<!--Footer-->
<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer.php";include_once($path);?>

</body>
</html>