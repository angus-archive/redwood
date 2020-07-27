<?php
//Start a PHP session
session_start();

//Import secret keys
$secret_file=dirname($_SERVER["DOCUMENT_ROOT"])."/private_data/secret_keys.php";
if (file_exists($secret_file)) {
    require $secret_file;
    $DATABASE_HOST = get_redwood_db_host();
    $DATABASE_USER = get_redwood_db_username();
    $DATABASE_PASS = get_redwood_db_password();
    $DATABASE_NAME = get_redwood_db_name();
    try {
      $pdo = new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
      // If there is an error with the connection, stop the script and display the error.
      header('location: /login?connection=failed');
    }

}
else {
    header('location: /login?connection=failed');
}
?>