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

        <!-- Spacer-->
        <div class="mSpacer-y-40"></div>

        <div class="container">
            <h2 class="text-center"> Error, the page you are looking for does not exist</h2>
            <div class="mx-auto">
                <img class="mx-auto d-block" src="/resources/images/kitty.png" style="width: 450px; height: auto" alt="Cute Kitty">
            </div>
        </div>

		<!-- Spacer-->
		<div class="mSpacer-y-80"></div>


    </div>
    <!-- Footer -->
    <?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer.php";include_once($path); ?>
    <!-- Footer - Tags -->
    <?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer-tags.php";include_once($path); ?>
</div>
</body>

</html>
