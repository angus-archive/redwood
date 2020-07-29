
<?php
//If there is not a post request redirect
if (!isset($_POST["first-name"],$_POST["second-name"],$_POST["email"])) {
	header("location: /contact.php");
}

?>
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
		<div class="pSpacer-y-20"></div>
		<h2 class="text-center">Thank you</h2>
		<!-- Form Data-->
		<?php

		//Import Email functions
		require $_SERVER['DOCUMENT_ROOT']."/login/functions/email-functions.php";

		//Validation
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			//Wash data
			$first_name=wash_data($_POST["first-name"]);
			$second_name=wash_data($_POST["second-name"]);
			$email=wash_data($_POST["email"]);
			$company_name=wash_data($_POST["company-name"]);
			$message=wash_data($_POST["message"]);
			//Parse the user data
			$html_data=generate_potential_client_email($first_name,$second_name,$email,$company_name,$message);

			//Send
			//$to   = 'support@redwood.business';
			$to   = 'angus.goody@outlook.com';
			$from = 'web-client@redwood.business';
			$name = 'Redwood Online Form';
			$subj = 'New potential client';
			$msg = $html_data;

			$error=smtpmailer($to,$from, $name ,$subj, $msg);
			echo "<h4 class='text-center py-2'>".$error."</h4>";
		}

		?>

	</div>
	<!-- Footer -->
	<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer.php";include_once($path); ?>
	<!-- Footer - Tags -->
	<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer-tags.php";include_once($path); ?>
</div>
</body>

</html>
