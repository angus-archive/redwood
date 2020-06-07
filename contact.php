<?php include("includes/a_config.php");?>

<html lang="en">
<head>
    <!--Import Head tags from PHP includes-->
    <?php include("includes/head-tags.php");?>
</head>
<body>

<div id="content">
    <!--Import Header content-->
    <?php include("includes/header-content.php");?>
    <!--Import Nav bar-->
    <?php include("includes/navigation.php");?>

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

<!--Import Footer-->
<?php include("includes/footer.php");?>

</body>
</html>