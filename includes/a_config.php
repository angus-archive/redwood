<!--Redwood, created by Angus Goody 05/2020-->
<?php
//Get the root folder
$base = dirname($_SERVER["PHP_SELF"]);
echo $_SERVER["PHP_SELF"];
//If this is not a folder reset to original
if ($base == "/"){
    $base = $_SERVER["PHP_SELF"];
}

switch ($base) {
    
    case "/index.php":
        $CURRENT_PAGE = "Index";
        $PAGE_TITLE = "Welcome to Redwood";
	break;
    case "/contact.php":
        $CURRENT_PAGE = "Contact";
        $PAGE_TITLE = "Contact";
        break;
    case "/our-story.php":
        $CURRENT_PAGE = "Our-Story";
        $PAGE_TITLE = "Our Story";
        break;
    case "/packages":
        $CURRENT_PAGE = "Packages";
        $PAGE_TITLE = "Packages";
        break;
    case "/email_sent.php":
        $CURRENT_PAGE = "Contact";
        $PAGE_TITLE = "Message Sent";
    default:
        $CURRENT_PAGE = "Index";
        $PAGE_TITLE = "Welcome to Redwood";
}

//Setup Base URL
$REDWOOD_ROOT = $_SERVER['DOCUMENT_ROOT'];

?>
