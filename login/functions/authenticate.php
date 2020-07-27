<?php

//Connect to database
include_once 'connect-to-database.php';

//Variables
$valid_user=true;

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill both the username and password fields!');
}
// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $pdo->prepare('SELECT id, password FROM accounts WHERE username = :username')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bindParam(':username', $_POST['username'], PDO::PARAM_STR);
	$stmt->execute();
	$results=$stmt->fetch();
	//Check there are results to fetch
	if ($results){
		if (sizeof($results) > 0) {
			$id=$results["id"];
			$password=$results["password"];
			// Account exists, now we verify the password.
			// Note: remember to use password_hash in your registration file to store the hashed passwords.
			if (password_verify($_POST['password'], $password)) {
				// Verification success! User has loggedin!
				// Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
				session_regenerate_id();
				$_SESSION['loggedin'] = TRUE;
				$_SESSION['name'] = $_POST['username'];
				$_SESSION['id'] = $id;
				//Get the extra details
				//$_SESSION['Job-Title'] = $JobTitle;
				//Redirect user to home page
				header('Location: /login/home');
			} else {
				$valid_user=false;
			}
		} else {
			$valid_user=false;
		}
	}else{
		$valid_user=false;
	}

}

//Redirect with get parameters
if (!$valid_user){
	header('Location: /login?details=false');
}

?>
