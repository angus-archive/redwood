<?php

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
	$mail->Port = 993;
	$mail->Username = 'web-client@redwood.business';
	$mail->Password = 'Co4f25353';

	//   $path = 'reseller.pdf';
	//   $mail->AddAttachment($path);

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
		$error ="Please try Later, Error Occured while Processing...";
		return $error;
	}
	else
	{
		$error = "Thanks You !! Your email is sent.";
		return $error;
	}
}

$to   = 'support@redwood.business';
$from = 'web-client@redwood.business';
$name = 'Redwood Testing thing';
$subj = 'Message from client';
$msg = 'This is an example message from a client';

$error=smtpmailer($to,$from, $name ,$subj, $msg);

?>