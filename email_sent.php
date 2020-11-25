<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/a_config.php";include_once($path); ?>
<?php

//Import Email functions
require $_SERVER['DOCUMENT_ROOT']."/login/functions/email-functions.php";

//If there is not a post request redirect
if (!isset($_POST["first-name"],$_POST["second-name"],$_POST["email"],$_POST["company-name"],$_POST["message"])) {
	header("location: /contact.php");

}
else{
	//Check for spambots
	$is_bot=0;
	if(isset($_POST['website']) && ($_POST['website'] != '')){
	    $is_bot=1;
	}else{


		//Wash data
		$first_name=wash_data($_POST["first-name"]);
		$second_name=wash_data($_POST["second-name"]);
		$email=wash_data($_POST["email"]);
		$company_name=wash_data($_POST["company-name"]);
		$message=wash_data($_POST["message"]);
		//Parse the user data
		$html_data=generate_potential_client_email($first_name,$second_name,$email,$company_name,$message);

		//Send
		$to   = 'support@redwood.business';
		$from = 'web-client@redwood.business';
		$name = 'Redwood Online Form';
		$subj = 'New potential client';
		$msg = $html_data;

		//Send email and get confirmation
		$email_sent=smtpmailer($to,$from, $name ,$subj, $msg);
	}

}



?>
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
		<div class="pSpacer-y-20"></div>
		<?php if($email_sent == "true"):?>
			<h2 class="text-center">Thank you</h2>
			<h4 class='text-center py-2'>Your email was sent succesfully</h4>
		<?php elseif($is_bot == 1): ?>
			<h2 class="text-center">Spam</h2>
			<h4 class='text-center py-2'>Anti spam detection prevented this email from being sent</h4>
		<?php else: ?>
			<h2 class="text-center">Error</h2>
			<h4 class='text-center py-2'>A problem occurred sending your email</h4>
		<?php endif; ?>
	</div>
	<!-- Footer -->
	<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer.php";include_once($path); ?>
	<!-- Footer - Tags -->
	<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer-tags.php";include_once($path); ?>
</div>
</body>

</html>
