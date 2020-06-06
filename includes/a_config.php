<?php

$base = dirname($_SERVER["PHP_SELF"]);
if ($base == "/"){
    $base = $_SERVER["PHP_SELF"];
}

echo $base;

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
