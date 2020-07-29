<?php
/*
 * Email Functions for login
*/

//----Imports-----
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";
//Import secret keys (for email password)
require(dirname($_SERVER["DOCUMENT_ROOT"])."/private_data/secret_keys.php");

/*
 * Send an email using our web server
 * @param $to: Address to send email to
 * @param $from: Address sending from
 * @param $from_name: Name to display in "From" part of email
 * @param $subject: Subject of the email
 * @param $body: Body text of the email
 */
function smtpmailer($to, $from, $from_name, $subject, $body){
  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->SMTPAuth = true;

  $mail->SMTPSecure = 'ssl';
  $mail->Host = 'imap.stackmail.com';
  $mail->Port = 465;
  $mail->Username = 'web-client@redwood.business';
  $mail->Password = get_email_password();


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

/*
 * Will generate an email when someone fills out our online form
 * @param $name: Clients first name
 * @param $name: Clients second name
 * @param $name: Clients email address
 * @param $name: Clients company name
 * @param $name: Clients message
 */

function generate_potential_client_email($name,$second,$email,$company_name,$message){
  //Get contents of the template file
  $template = file_get_contents(dirname($_SERVER["DOCUMENT_ROOT"])."/private_data/new-client.html");
  //Gather variables
  $variables = array();
  $variables['name'] = $name;
  $variables['second'] = $second;
  $variables['email'] = $email;
  $variables['company_name'] = $company_name;
  $variables['message'] = $message;
  //Insert
  foreach($variables as $key => $value)
  {
      $template = str_replace('{{ '.$key.' }}', $value, $template);
  }

  echo $template;
}
