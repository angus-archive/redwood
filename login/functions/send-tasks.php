<?php
/*
 * File to allow Bossman to send tasks to employees
 */


//Check details are valid
if (isset($_POST['task_name'],$_POST['task_urgency'],$_POST['task_description'],$_POST['task_employee'])){
  //Gather variables
  $task_name=$_POST['task_name'];
  $task_urgency=$_POST['task_urgency'];
  $task_description=$_POST['task_description'];
  $task_employee=$_POST['task_employee'];
  
}