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

		<?php

		//----Imports-----
		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;
		//Require PHPMailer auto loader
		require $_SERVER["DOCUMENT_ROOT"].'/PHPMailer/vendor/autoload.php';


		//Generate Email
		function generate_email($head,$body){
			$html_content="<!DOCTYPE html>
<html lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft- com:office:office\">
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"x-apple-disable-message-reformatting\">
<meta name=\"format-detection\" content=\"telephone=no,address=no,email=no,date=no,url=no\">
<meta name=\"color-scheme\" content=\"light\">
<meta name=\"supported-color-schemes\" content=\"light\">
<title>Redwood Solutions</title>

<style>
:root {
color-scheme: light;
supported-color-schemes: light;
}
html,
body {
margin: 0 auto !important;
padding: 0 !important;
height: 100% !important;
width: 100% !important;
}
* {
-ms-text-size-adjust: 100%;
-webkit-text-size-adjust: 100%;
}
div[style*=\"margin: 16px 0\"] {
margin: 0 !important;
}
#MessageViewBody, #MessageWebViewDiv{
width: 100% !important;
}
table,
td {
mso-table-lspace: 0pt !important;
mso-table-rspace: 0pt !important;
}
table {
border-spacing: 0 !important;
border-collapse: collapse !important;
table-layout: fixed !important;
margin: 0 auto !important;
}
img {
-ms-interpolation-mode:bicubic;
}

a {
text-decoration: none;
}
a[x-apple-data-detectors],
.unstyle-auto-detected-links a,
.aBn {
border-bottom: 0 !important;
cursor: default !important;
color: inherit !important;
text-decoration: none !important;
font-size: inherit !important;
font-family: inherit !important;
font-weight: inherit !important;
line-height: inherit !important;
}
.a6S {
display: none !important;
opacity: 0.01 !important;
}
.im {
color: inherit !important;
}
img.g-img + div {
display: none !important;
}
@media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
u ~ div .email-container {
min-width: 320px !important;
}
}
@media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
u ~ div .email-container {
min-width: 375px !important;
}
}
@media only screen and (min-device-width: 414px) {
u ~ div .email-container {
min-width: 414px !important;
}
}
</style>
<style>
.button-td,
.button-a {
transition: all 100ms ease-in;
}
.button-td-primary:hover,
.button-a-primary:hover {
background: #555555 !important;
border-color: #555555 !important;
}
@media screen and (max-width: 640px) {
.email-container p {
font-size: 17px !important;
}
}
</style>
</head>
<body width=\"100%\" style=\"margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #ececec;\">
<center role=\"article\" aria-roledescription=\"email\" lang=\"en\" style=\"width: 100%; background-color: #ececec;\">
<!--[if mso | IE]>
<table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"background-color: #ececec;\">
<tr>
<td>
<![endif]-->
<div style=\"max-height:0; overflow:hidden; mso-hide:all;\" aria-hidden=\"true\">
Free Marketing and Business Advice
</div>
<div style=\"display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;\">
</div>
<div style=\"max-width: 640px; margin: 0 auto;\" class=\"email-container\">
<!--[if mso]>
<table align=\"center\" role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"640\">
<tr>
<td>
<![endif]-->
<table align=\"center\" role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\" style=\"margin: auto;\">
<tr>
<td style=\"padding: 20px 0; text-align: center\">
<a href=\"https://redwood.business/\"><img src=\"https://redwood.business/resources/images/email-images/logo.png\" width=\"150\" height=\"75\" alt=\"Redwood Marketing\" border=\"0\" style=\"height: auto; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555;\"></a>
</td>
</tr>
<tr>
</tr><td style=\"background-color: #ffffff; -webkit-box-shadow: 1px 4px 11px 0px rgba(0, 0, 0, 0.15); -moz-box-shadow: 1px 4px 11px 0px rgba(0, 0, 0, 0.15); box-shadow: 1px 4px 11px 0px rgba(0, 0, 0, 0.15);\">
<table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
<tr>
<td style=\"padding: 25px; margin: 10px 0 15px; font-size: 25px; line-height: 30px; color: #333333; font-weight: normal;\">
<h1 style=\"margin: 0 0 20px 0; font-family: sans-serif; font-size: 25px; line-height: 30px; color: #333333; font-weight: normal;\">$head</h1>
<p style=\"margin: 0 0 15px; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif;font-size:16px;font-weight:400;line-height:24px;text-align:left;color:#637381;\">$body</p>
</td>
</tr>
<tr><tr>
<td style=\"padding: 0 20px 20px;\">
	<hr style=\"width: 45%; margin: 0 auto 0 auto;\">
<table align=\"center\" role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"margin: auto;\">
</table>
<tr>
<td style=\"padding: 25px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;\">
<p style=\"margin: 0 0 15px; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif;font-size:16px;font-weight:400;line-height:24px;text-align:left;color:#637381;\">Many thanks</p>
<p style=\"margin: 0 0 15px; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif;font-size:16px;font-weight:400;line-height:24px;text-align:left;color:#637381;\">The <span style='color: #BA3B5A'>Redwood</span> Team</p>
</td>
</tr>
</table>
</td>
</tr>
</table>
<table align=\"center\" role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" max-width=\"640\" style=\"margin: auto; padding:20px 0 0;\" class=\"email-container\">
<tr>
<td align=\"center\" style=\"font-size:0px;padding:30px 0 0;word-break:break-word;\">
<!--[if mso | IE]>
<table
align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"
>
<tr>
<td>
<![endif]-->

</center>
</body>
</html>";
			return $html_content;

		}

		//Function to send email
		function smtpmailer($redAccount,$to, $from_name, $subject, $body){
			$mail = new PHPMailer();
			$mail->IsSMTP();
			$mail->SMTPAuth = true;

			$mail->SMTPSecure = 'ssl';
			$mail->Host = 'imap.stackmail.com';
			$mail->Port = 465;

			//Depending which email was selected
			switch($redAccount){
				case "sales@redwood.business":
					$from="sales@redwood.business";
					$mail->Username = 'sales@redwood.business';
					$mail->From="sales@redwood.business";
					$mail->Password = 'Br853df65';
					break;
				case "web-client@redwood.business":
					$from="web-client@redwood.business";
					$mail->Username = 'web-client@redwood.business';
					$mail->From="web-client@redwood.business";
					$mail->Password = 'Co4f25353';
					break;
				default:
					$from="support@redwood.business";
					$mail->Username = 'support@redwood.business';
					$mail->From="support@redwood.business";
					$mail->Password = 'Rw5d29b15';
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
				return false;
			}
			else
			{
				return true;
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
		$html_content=generate_email($message_heading,$message_body);

		$error=smtpmailer($sender_email,$client_email,"Redwood Marketing",$subject,$html_content);

		if($error){
			$errorMessage="Your Email was sent successfully";
		}else{
			$errorMessage="A problem occurred sending your message";
		}

		?>

		<div class="container text-center">
			<h2 class="mb-4"><?php echo $errorMessage?></h2>
			<img src="/resources/images/icons/<?php if($error){echo "confirmed.svg ";}else{echo "alert.svg ";} ?>" alt="Email status" class="mb-4" style="width: 50px;height: auto">

		</div>




		<!--Confirmed details -->
		<dl class="mx-auto row" style="width: 50% !important;">
			<dt class="col-sm-3">Sent using: </dt>
			<dd class="col-sm-9"> <?php echo $sender_email;?></dd>

			<dt class="col-sm-3">Sent to: </dt>
			<dd class="col-sm-9"> <?php echo $client_email;?></dd>

			<dt class="col-sm-3">Subject: </dt>
			<dd class="col-sm-9"> <?php echo $subject;?></dd>

			<dt class="col-sm-3">Message: </dt>
			<dd class="col-sm-9"> <?php echo $message_body;?></dd>

			<dt class="col-sm-3">Heading: </dt>
			<dd class="col-sm-9"> <?php echo $message_heading;?></dd>

		</dl>
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

