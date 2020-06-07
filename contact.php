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
        <div class="wrapper">
            <!-- Spacer -->
            <div class="spacer"></div>
            <div class="alignDiv">
                <h1 class="pageHeading sTextSpacerB"> Contact </h1>

                <p style="width: 50%; text-align: center; max-width: 500px" class="mTextSpacerB"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>

                <!--Contact Form-->
                <form id="contactForm" action="email_sent.php" method="post" name="contactForm">
                    <input type="text" id="uName" name="name" placeholder="Name" required>
                    <input type="email" id="uEmail" name="email" placeholder="Email" required>
                    <textarea id="uMessage" name="message" rows="4" cols="50" placeholder="Message" required></textarea>
                    <input type="submit" value="Submit" id="submitButton">

                </form>

            </div>

            <!--BIG footer spacer-->
            <div class="bigSpacer"></div>
        </div>

    </main>

</div>

<!--Footer-->
<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer.php";include_once($path);?>

</body>
</html>