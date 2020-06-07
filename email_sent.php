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
					echo "<h2 class='pageHeading sTextSpacerB'> Ooops :/...</h2>";
					echo "<h3 class='mTextSpacerB'> An Error occurred while sending your email, please use the button below to send an email manually.</h3>";
					echo "<button class='transButton'>Launch Email App</button>";
					
				}
                ?>

			<!--BIG footer spacer-->
			<div class="bigSpacer"></div>
		</div>

	</main>

</div>

<!--Footer-->
<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer.php";include_once($path);?>

</body>
</html>