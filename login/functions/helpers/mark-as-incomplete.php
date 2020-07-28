<?php

//Connect to database
require $_SERVER['DOCUMENT_ROOT']."/login/functions/connect-to-database.php";

if (isset($_POST["task_id"],$_POST["user_id"])){
  //If we have a task ID, just update the database
  $stmt = $pdo->prepare('UPDATE all_tasks SET status = 0 WHERE user_id = ? AND task_id = ?');
  $stmt->execute(array($_POST["user_id"],$_POST["task_id"]));
  echo "TRUE";

}else{
  echo "FALSE";
}
