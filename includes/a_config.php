<!--Redwood, created by Angus Goody 05/2020-->
<?php
//Get the root folder
$full = ($_SERVER["PHP_SELF"]);
$dirName = dirname($full);
$baseName = basename($full);
//If this is not a folder reset to original
if ($dirName == "/"){
    $dirName = $_SERVER["PHP_SELF"];
}

switch ($dirName) {
    
    case "/index.php":
        $NAV_PAGE = "Index";
        $CURRENT_PAGE = $NAV_PAGE;
        $PAGE_TITLE = "Welcome to Redwood";
	break;

	case "/contact.php":
        $NAV_PAGE = "Contact";
        $CURRENT_PAGE = $NAV_PAGE;
        $PAGE_TITLE = "Contact";
        break;
    case "/our-story.php":
        $NAV_PAGE = "Our-Story";
        $CURRENT_PAGE = $NAV_PAGE;
        $PAGE_TITLE = "Our Story";
        break;
    case "/packages":
        $NAV_PAGE = "Packages";
        //Check which subpage we're on
        switch ($baseName) {
            case "economy.php":
                $CURRENT_PAGE = "Economy-P";
                $PAGE_TITLE = "Economy Package";
                break;
            case "redwood.php":
                $CURRENT_PAGE = "Redwood-P";
                $PAGE_TITLE = "Redwood Package";
                break;
            case "deluxe.php":
                $CURRENT_PAGE = "Deluxe-P";
                $PAGE_TITLE = "Deluxe Package";
                break;
            case "relaunch.php":
                $CURRENT_PAGE = "Relaunch-P";
                $PAGE_TITLE = "Relaunch Package";
                break;
            default:
            	//Values for "Index.php"
                $CURRENT_PAGE = $NAV_PAGE;
                $PAGE_TITLE = "Packages";
        }
        break;

	case "/email_sent.php":
		$NAV_PAGE = "Contact";
		$CURRENT_PAGE = $NAV_PAGE;
		$PAGE_TITLE = "Message Sent";
		break;

	case "/privacy-policy.php":
		$NAV_PAGE = "NONE";
		$CURRENT_PAGE = "Privacy-Policy";
		$PAGE_TITLE = "Privacy Policy";
		break;

	case "/invalid404.php";
		$NAV_PAGE = "NONE";
		$CURRENT_PAGE = "Invalid-Page";
		$PAGE_TITLE = "Page not found";
		break;
	default:
        $NAV_PAGE = "Index";
        $CURRENT_PAGE = $NAV_PAGE;
        $PAGE_TITLE = "Welcome to Redwood";
}

//Setup Base URL
$REDWOOD_ROOT = $_SERVER['DOCUMENT_ROOT'];
?>
