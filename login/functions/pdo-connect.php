<?php
//Import Secret keys
require dirname($_SERVER["DOCUMENT_ROOT"])."/private_data/secret_keys.php";
//Will connect to the MySQL Database
function pdo_connect_mysql() {
  // Connection Details
  $DATABASE_HOST = get_redwood_db_host();
  $DATABASE_USER = get_redwood_db_username();
  $DATABASE_PASS = get_redwood_db_password();
  $DATABASE_NAME = 'redwood';
  try {
    return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
  } catch (PDOException $exception) {
    // If there is an error with the connection, stop the script and display the error.
    header('location: /login?connection=failed');
  }
}
?>