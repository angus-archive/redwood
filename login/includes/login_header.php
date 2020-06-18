<header>
	<div class="navWrapper">

		<?php
		if (isset($_SESSION['loggedin'])) {
			$path = $_SERVER['DOCUMENT_ROOT'];$path .= "/login/includes/login_navbar.php";include_once($path);
		}else{
			$path = $_SERVER['DOCUMENT_ROOT'];$path .= "/login/includes/not_logged_in_header.php";include_once($path);
		}
		?>

	</div>
</header>

