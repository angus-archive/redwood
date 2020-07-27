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
		$PAGE_TITLE = "Home | Redwood Portal";
		break;

	case "profile.php":
		$NAV_PAGE = "Profile";
		$CURRENT_PAGE = $NAV_PAGE;
		$PAGE_TITLE = "Profile | Redwood Portal";
		break;

	case "info.php":
		$NAV_PAGE = "Info";
		$CURRENT_PAGE = $NAV_PAGE;
		$PAGE_TITLE = "Info | Redwood Portal";
		break;

	default:
		$NAV_PAGE = "Index";
		$CURRENT_PAGE = $NAV_PAGE;
		$PAGE_TITLE = "Login | Redwood Portal";
		break;
}
?>
