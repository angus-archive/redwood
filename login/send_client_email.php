<?php
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: /login');
	exit;
}

if ($_SERVER["REQUEST_METHOD"] != "POST") {
	header('Location: /login/create_client_email.php');
	exit;
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
		<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/login/includes/login_header.php";include_once($path); ?>

		<!-- Spacer-->
		<div class="mSpacer-y-40"></div>

		<div class="container text-center">
			<h2 class="mb-4"> Client Email sent</h2>
		</div>


		<?php

		//----Imports-----
		//use PHPMailer\PHPMailer\PHPMailer;
		//use PHPMailer\PHPMailer\Exception;
		//Require PHPMailer auto loader
		//require $_SERVER['DOCUMENT_ROOT'].'PHPMailer/vendor/autoload.php';


		//Function to send email
		function smtpmailer($redAccount,$to, $from, $from_name, $subject, $body){
			$mail = new PHPMailer();
			$mail->IsSMTP();
			$mail->SMTPAuth = true;

			$mail->SMTPSecure = 'ssl';
			$mail->Host = 'imap.stackmail.com';
			$mail->Port = 465;

			//Depending which email was selected
			switch($redAccount){
				case "support@redwood.business":
					$mail->Username = 'support@redwood.business';
					$mail->From="support@redwood.business";
					$mail->Password = 'support_password';
					break;
				case "sales@redwood.business":
					$mail->Username = 'sales@redwood.business';
					$mail->From="sales@redwood.business";
					$mail->Password = 'Sales_Password';
					break;
				default:
					$mail->Username = 'web-client@redwood.business';
					$mail->From="web-client@redwood.business";
					$mail->Password = 'Co4f25353';
					break;
			}



			$mail->IsHTML(true);
			$mail->FromName=$from_name;
			$mail->Sender=$from;
			$mail->AddReplyTo($from, $from_name);
			$mail->Subject = $subject;
			$mail->Body = $body;
			$mail->AddAddress($to);
			if(!$mail->Send())
			{
				$error ="Error, a problem occurred sending your email";
				return $error;
			}
			else
			{
				$error = "Your Email was sent successfully";
				return $error;
			}
		}

		//Form validation function (removes any SQL injections etc)
		function wash_data($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		//Wash data
		$sender_email=wash_data($_POST["redEmail"]);
		$client_email=wash_data($_POST["client-email"]);

		$subject=wash_data($_POST["message-subject"]);
		$message_body=wash_data($_POST["message-content"]);
		$message_heading=wash_data($_POST["message-heading"]);

		echo $sender_email;

		?>


		<!-- Spacer-->
		<div class="pSpacer-y-40"></div>

	</div>
	<!-- Footer -->
	<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer.php";include_once($path); ?>
	<!-- Footer - Tags -->
	<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer-tags.php";include_once($path); ?>
</div>
</body>

</html>

