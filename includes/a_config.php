<?php
switch ($_SERVER["SCRIPT_NAME"]) {
    case "/redwoodPHP/contact.php":
        $CURRENT_PAGE = "Contact";
        $PAGE_TITLE = "Contact";
        break;
    case "/redwoodPHP/our-story.php":
        $CURRENT_PAGE = "Our-Story";
        $PAGE_TITLE = "Our Story";
        break;
    case "/redwoodPHP/packages.php":
        $CURRENT_PAGE = "Packages";
        $PAGE_TITLE = "Packages";
        break;
    default:
        $CURRENT_PAGE = "Index";
        $PAGE_TITLE = "Welcome to Redwood";
}

