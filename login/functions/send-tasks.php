<?php
/*
 * File to allow Bossman to send tasks to employees
 */

//Connect to database
require $_SERVER['DOCUMENT_ROOT']."/login/functions/connect-to-database.php";

//Import email functions
require $_SERVER['DOCUMENT_ROOT']."/login/functions/email-functions.php";


//Check details are valid
if (isset($_POST['task_name'],$_POST['task_urgency'],$_POST['task_description'],$_POST['task_employee'])){

  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //Gather variables
  $task_name=$_POST['task_name'];
  $task_urgency=$_POST['task_urgency'];
  $task_description=$_POST['task_description'];
  $task_employee=$_POST['task_employee'];

  //Add to tasks database first
  $stmt = $pdo->prepare('INSERT IGNORE INTO tasks (task_name,task_description,task_urgency) VALUES (?,?,?);');
  $stmt->execute(array($task_name,$task_description,$task_urgency));

  //Get the Task ID
  $task_id = $pdo->lastInsertId();

  //Get the employee information for the task
  $stmt = $pdo->prepare('SELECT username,id,email FROM accounts WHERE username = ?');
  $stmt->execute(array($task_employee));
  $account_results=$stmt->fetch();
  $user_id=$account_results["id"];
  $user_name=$account_results["username"];
  $user_email=$account_results["email"];

  //Add to the ALL tasks database
  $stmt = $pdo->prepare('INSERT INTO all_tasks (user_id,task_id,status) VALUES (?,?,?);');
  $stmt->execute(array($user_id,$task_id,0));

  //Send Email confirmation
  $html_data=generate_task_email(ucfirst($user_name),$task_name,$task_description);

  //Send
  $to   = $user_email;
  $from = 'web-client@redwood.business';
  $name = 'Redwood Portal';
  $subj = 'New Task Assigned';
  $msg = $html_data;

  //Send email and get confirmation
  $email_sent=smtpmailer($to,$from, $name ,$subj, $msg);

  //Check the email was sent
  if ($email_sent === "true"){
   //Redirect
   header('location: /login/home?sent=true'); 
  }else{
    header('location: /login/home?email_sent=false'); 
  }

  

}