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
        $PAGE_TITLE = "Redwood Marketing";
		$PAGE_DESCRIPTION="Tamworth based online business marketing, design and consultancy services, we offer high quality business services at a very competitive price";
		
	break;

	case "/contact.php":
        $NAV_PAGE = "Contact";
        $CURRENT_PAGE = $NAV_PAGE;
        $PAGE_TITLE = "Contact - Redwood Marketing";
		$PAGE_DESCRIPTION="Contact the Redwood Team using our online form, we will get back in touch with you as quickly as possible";
		
        break;
    case "/our-story.php":
        $NAV_PAGE = "Our-Story";
        $CURRENT_PAGE = $NAV_PAGE;
        $PAGE_TITLE = "Our Story";
        break;
    case "/packages":
        $NAV_PAGE = "Packages - Redwood Marketing";
		$PAGE_DESCRIPTION="Browse our range of high quality packages, we have a package to suit every type of business, or mix and match package features to create a truly unique experience";
        //Check which subpage we're on
        switch ($baseName) {
            case "economy.php":
                $CURRENT_PAGE = "Economy-P";
                $PAGE_TITLE = "Economy Package - Redwood Marketing";
                break;
            case "redwood.php":
                $CURRENT_PAGE = "Redwood-P";
                $PAGE_TITLE = "Redwood Package - Redwood Marketing";
                break;
            case "deluxe.php":
                $CURRENT_PAGE = "Deluxe-P";
                $PAGE_TITLE = "Deluxe Package - Redwood Marketing";
                break;
            case "relaunch.php":
                $CURRENT_PAGE = "Relaunch-P";
                $PAGE_TITLE = "Relaunch Package - Redwood Marketing";
                break;
            default:
            	//Values for "Index.php"
                $CURRENT_PAGE = $NAV_PAGE;
                $PAGE_TITLE = "Packages - Redwood Marketing";
        }
        break;

	case "/email_sent.php":
		$NAV_PAGE = "Contact - Redwood Marketing";
		$CURRENT_PAGE = $NAV_PAGE;
		$PAGE_TITLE = "Message Sent";
		break;

	case "/privacy-policy.php":
		$NAV_PAGE = "NONE";
		$CURRENT_PAGE = "Privacy-Policy - Redwood Marketing";
		$PAGE_TITLE = "Privacy Policy";
		$PAGE_DESCRIPTION="Here at Redwood we take the security of your data very seriously, please read our privacy policy to see how your data is processed";
		break;

	case "/invalid404.php";
		$NAV_PAGE = "NONE";
		$CURRENT_PAGE = "Invalid-Page";
		$PAGE_TITLE = "Page not found";
		break;
	case "/forbidden403.php";
		$NAV_PAGE = "NONE";
		$CURRENT_PAGE = "Forbidden-Page";
		$PAGE_TITLE = "Forbidden";
		break;
	default:
        $NAV_PAGE = "Index";
        $CURRENT_PAGE = $NAV_PAGE;
        $PAGE_TITLE = "Welcome to Redwood - Redwood Marketing";
		$PAGE_DESCRIPTION="Tamworth based online business marketing, design and consultancy services, we offer high quality business services at a very competitive price";
		
}

//Setup Base URL
$REDWOOD_ROOT = $_SERVER['DOCUMENT_ROOT'];
?>
