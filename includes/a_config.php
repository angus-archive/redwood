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

//Defaults
$PAGE_DESCRIPTION = "No Description";

//Calculate Canonical
$can_header="https://";
$withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $full); //Remove PHP extension
$PAGE_CANONICAL=$can_header.$_SERVER['SERVER_NAME'].$withoutExt;

//Setup Cache Header
//header('Cache-Control: public, max-age=604800, immutable');
//header('Cache-Control: max-age=31536000');


//Switch case for all pages on the Site
//Setup global variables depending on page request
switch ($dirName) {

    case "/index.php":
        loadIndex();
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
        $PAGE_DESCRIPTION="The story of Redwood";
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
        $PAGE_DESCRIPTION="The page you are looking for does not exist";
		break;

    case "/about.php":
        $NAV_PAGE = "About";
        $CURRENT_PAGE = "About-Page";
        $PAGE_TITLE = "About - Redwood";
        $PAGE_DESCRIPTION="Read the history of our company";
        break;

	case "/forbidden403.php";
		$NAV_PAGE = "NONE";
		$CURRENT_PAGE = "Forbidden-Page";
		$PAGE_TITLE = "Forbidden";
        $PAGE_DESCRIPTION="This page is not available to view";
		break;
	default:
        loadIndex();
        break;
		
}

//Will setup site variables for Homepage and Default case
function loadIndex(){
    //Define Globals
    global $NAV_PAGE;
    global $CURRENT_PAGE;
    global $PAGE_TITLE;
    global $PAGE_DESCRIPTION;
    global $PAGE_CANONICAL;

    //Update globals
    $NAV_PAGE = "Index";
    $CURRENT_PAGE = $NAV_PAGE;
    $PAGE_TITLE = "Redwood Marketing";
    $PAGE_DESCRIPTION="Tamworth based online business marketing, design and consultancy services, we offer high quality business services at a very competitive price";

    //Special Canonical
    $PAGE_CANONICAL="https://".$_SERVER['SERVER_NAME']; 
}

//Setup Base URL
$REDWOOD_ROOT = $_SERVER['DOCUMENT_ROOT'];
?>
