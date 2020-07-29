<?php
/*
 * Angus Goody 29/07/2020
 * File containing functions for sending redwood emails
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
    //Problem
    return "false";
  }
  else
  { 
    //Email was sent
    return "true";
  }
}


//Form validation function (removes any SQL injections etc)
function wash_data($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
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

  return $template;
}

/*
 * Will generate an email for when someone gets a new task
 * @param $name: Clients first name
 * @param $name: Clients second name
 */

function generate_task_email($user_name,$task_name,$task_description){
  //Get contents of the template file
  $template = file_get_contents(dirname($_SERVER["DOCUMENT_ROOT"])."/private_data/new-task.html");
  //Gather variables
  $variables = array();
  $variables['user_name'] = $user_name;
  $variables['task_name'] = $task_name;
  $variables['task_description'] = $task_description;
  //Insert
  foreach($variables as $key => $value)
  {
      $template = str_replace('{{ '.$key.' }}', $value, $template);
  }

  return $template;
}

