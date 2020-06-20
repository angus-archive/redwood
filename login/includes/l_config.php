<!--Redwood Team Login, created by Angus Goody 06/2020-->
<?php
//Get the root folder
$full = ($_SERVER["PHP_SELF"]);
$dirName = dirname($full);
$baseName = basename($full);
//If this is not a folder reset to original
if ($dirName == "/"){
	$dirName = $_SERVER["PHP_SELF"];
}

switch ($baseName) {

	case "home.php":
		$NAV_PAGE = "Home";
		$CURRENT_PAGE = $NAV_PAGE;
		$PAGE_TITLE = "Redwood Team Home";
		break;

	case "create_client_email.php":
		$NAV_PAGE = "Services";
		$CURRENT_PAGE = "Create-Client-Email";
		$PAGE_TITLE = "Send Client Email";
		break;

	case "info.php":
		$NAV_PAGE = "Info";
		$CURRENT_PAGE = $NAV_PAGE;
		$PAGE_TITLE = "Redwood Info";
		break;

	default:
		$NAV_PAGE = "Index";
		$CURRENT_PAGE = $NAV_PAGE;
		$PAGE_TITLE = "Redwood Team Login";
		break;
}
?>
