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

//Calculate Canonical
$can_header="https://";
if ($baseName != "index.php"){
	$withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $full); //Remove PHP extension
}else{
	$withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $dirName);
}
$PAGE_CANONICAL=$can_header.$_SERVER['SERVER_NAME'].$withoutExt;

//Defaults (Overwritten)
$PAGE_DESCRIPTION = "No Description";
$NAV_PAGE = "Home";
$CURRENT_PAGE = $NAV_PAGE;
$PAGE_TITLE = "Home | Redwood Portal";


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
