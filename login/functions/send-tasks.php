<?php
/*
 * File to allow Bossman to send tasks to employees
 */

//Connect to database
require $_SERVER['DOCUMENT_ROOT']."/login/functions/connect-to-database.php";

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

  //Get Employee ID
  $stmt = $pdo->prepare('SELECT id FROM accounts WHERE username = ?');
  $stmt->execute(array($task_employee));
  $user_id=$stmt->fetch()["id"];

  //Add to the ALL tasks database
  $stmt = $pdo->prepare('INSERT INTO all_tasks (user_id,task_id,status) VALUES (?,?,?);');
  $stmt->execute(array($user_id,$task_id,0));

  //Redirect
  header('location: /login/home?sent=true');

}