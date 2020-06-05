<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
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
				<h2 class="pageHeading sTextSpacerB" >Thank you <?php echo $_POST["name"]; ?>, your message has been sent</h2>
				<h3> We will be in contact with you shortly</h3>
				<!-- Send Email -->
                <?php
                //Collect Post data
                $customer_name = $_POST["name"];
                $customer_email = $_POST["email"];
                $customer_message = $_POST["message"];

                //Add to string
                $message = "Customer Name: ".$customer_name."\n";
                $message = $message."Customer Email: ".$customer_email."\n";
                $message = $message."Message: ".$customer_message."\n";

                //Send
                $result = mail("Redwoodmain@gmail.com","Customer Inquiry",$message);
                $mystring = "Result from mail is: ".$result;
                //echo $mystring;
                ?>

			<!--BIG footer spacer-->
			<div class="bigSpacer"></div>
		</div>

	</main>

</div>

<!--Import Footer-->
<?php include("includes/footer.php");?>

</body>
</html>