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
				
				<!-- Send Email -->
                <?php
				
				//TODO Add EMail injection validation
				
                //Collect Post data
                $customer_name = $_POST["name"];
                $customer_email = $_POST["email"];
                $customer_message = $_POST["message"];
				
				//Store Info
				$to = "Redwoodmain@gmail.com";

                //Add to string (Email content)
                $message = "Customer Name: ".$customer_name."\n";
                $message = $message."Customer Email: ".$customer_email."\n";
                $message = $message."Message: ".$customer_message."\n";

                //Send
                $result = mail("Redwoodmain@gmail.com","Customer Inquiry",$message);
                
				if ($result){
					echo "<h2 class='pageHeading sTextSpacerB' >Thank you, ".$customer_name."</h2>";
					echo "<h3> Message Sent Succesfully </h3>";
				}else{
					//TODO add button to open in mail client with existing data
					echo "<h2> Ooops :/...</h2>";
					echo "<h3> An Error occurred while sending your email </h3>";
				}
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