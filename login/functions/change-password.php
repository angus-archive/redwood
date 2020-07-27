<?php
/*
 * File will update a users password
 * they need to specify the old password in order to update the new one
 */

//Connect to database
include_once 'connect-to-database.php';

//Check Request
if (isset($_POST['old_password'],$_POST['new_password'],$_POST['new_password_confirm'],$_SESSION["id"])){
  $old_password=$_POST['old_password'];
  $new_password=$_POST['new_password'];
  $confirm=$_POST['new_password_confirm'];
  if ($new_password === $confirm){
    //Get password from DB
    $stmt = $pdo->prepare('SELECT password FROM accounts WHERE id = :id');
    $stmt->bindParam(':id', $_SESSION['id'], PDO::PARAM_STR);
    $stmt->execute();
    $results=$stmt->fetch();
    $current_password=$results["password"];
    //Check the old password is correct
    if (password_verify($old_password,$current_password)){
      $stmt = $pdo->prepare('UPDATE accounts SET password = :password WHERE id = :id');
      $stmt->bindParam(':id', $_SESSION['id'], PDO::PARAM_STR);
      $stmt->bindParam(':password', password_hash($new_password, PASSWORD_DEFAULT), PDO::PARAM_STR);
      $stmt->execute();
      header("location: /login/profile?changed=confirmed");
    }else{
      header("location: /login/profile?error=password");
    }
  }else{
    header("location: /login/profile?error=match");
  }
  
}else{
  header("location: /login");
}