<?php

switch ($_SERVER["PHP_SELF"]) {
    case "/contact.php":
        $CURRENT_PAGE = "Contact";
        $PAGE_TITLE = "Contact";
        break;
    case "/our-story.php":
        $CURRENT_PAGE = "Our-Story";
        $PAGE_TITLE = "Our Story";
        break;
    case "/packages.php":
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

?>
