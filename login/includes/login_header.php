<header>
	<div class="navWrapper">
		<div id="logoContainer">
			<a href="/login/home.php"><img id="redLogo" src="/resources/coreImages/LogoSVG.svg" alt="Redwood Logo"></a>
		</div>
		<div class="p-2 d-flex justify-content-center align-items-center position-relative" style="background-color:#3885BB">
			<h1 class="text-center text-white mb-0" style="font-size: 1.5rem">Employee Section</h1>
			<?php
			// If the user is not logged in redirect to the login page...
			if (isset($_SESSION['loggedin'])) {
				echo "<a href=\"/login/logout.php\" class=\"btn btn-light position-absolute\" style=\"right: 10px\">Logout</a>";
			}
			?>
		</div>
	</div>
</header>

