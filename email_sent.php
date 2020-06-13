
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

		//Setup some variables to use
		$first_name="";
		$second_name="";
		$email="";
		$company_name="";
		$message="";



		//Form validation function (removes any SQL injections etc)
		function wash_data($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		//Turn user data into a nice message
		function create_html($fname,$sname,$em,$comp,$mssg){
			//Setup document
			$html_message="<!DOCTYPE html> <html><head><title>Customer Message</title><style>";
			//Add table styles
			$html_message.="table {font-family: arial, sans-serif;border-collapse: collapse;width: 100%;table-layout: fixed;}";
			$html_message.="td, th {border: 1px solid #dddddd;text-align: left;padding: 8px;}";
			$html_message.="</style></head><body>";
			//Add content before table
			$html_message.="<h2 style='text-align: center'>New Enquiry</h2>";
			//Add table & headers
			$html_message.= "<table><tr><th>First Name</th><th>Second Name</th><th>Email</th><th>Company name</th><th>Message</th></tr>";
			//Add data
			$html_message.="<tr><td>$fname</td><td>$sname</td><td>$em</td><td>$comp</td><td>$mssg</td></tr>";
			//End Table
			$html_message.="</table>";
			//Add content after table
			$html_message.="<p style='margin-top: 50px'> Someone has filled out our online form with the above details, ensure you follow the rules below when replying...</p>";
			$html_message.="<ul><li>Use either the support@redwood.business or sales@redwood.business email to reply depending on the nature of the message</li><li>Spell check your reply</li></ul>";
			//End Document
			$html_message.="</body></html>";
			return $html_message;

		}

		//Uses
		use PHPMailer\PHPMailer\PHPMailer;

		require "PHPMailer/src/PHPMailer.php";
		require "PHPMailer/src/Exception.php";
		require "PHPMailer/src/SMTP.php";

		function smtpmailer($to, $from, $from_name, $subject, $body){
			$mail = new PHPMailer();
			$mail->IsSMTP();
			$mail->SMTPAuth = true;

			$mail->SMTPSecure = 'ssl';
			$mail->Host = 'imap.stackmail.com';
			$mail->Port = 465;
			$mail->Username = 'web-client@redwood.business';
			$mail->Password = 'Co4f25353';


			$mail->IsHTML(true);
			$mail->From="web-client@redwood.business";
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



		//Wash our data
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$first_name=wash_data($_POST["first-name"]);
			$second_name=wash_data($_POST["second-name"]);
			$email=wash_data($_POST["email"]);
			$company_name=wash_data($_POST["company-name"]);
			$message=wash_data($_POST["message"]);
			//Parse the user data
			$html_data=create_html($first_name,$second_name,$email,$company_name,$message);

			//Send
			$to   = 'support@redwood.business';
			$from = 'web-client@redwood.business';
			$name = 'Redwood Online Form';
			$subj = 'New potential client';
			$msg = $html_data;

			$error=smtpmailer($to,$from, $name ,$subj, $msg);
			echo "<h3 class='text-center'>".$error."</h3>";
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
