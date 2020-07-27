<?php
//Start a PHP session
session_start();
// Include functions and connect to the database using PDO MySQL
include_once 'pdo-connect.php';
$pdo = pdo_connect_mysql();
?>