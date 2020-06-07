<title><?php print $PAGE_TITLE;?></title>
<meta charset="UTF-8">
<!--DOCTYPE-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<!--Stylesheets-->
<link rel="stylesheet" href="/resources/styles/normalisze.css">

<?php
//Check the User agent to see what browser is requesting the website
$ua = htmlentities($_SERVER['HTTP_USER_AGENT'], ENT_QUOTES, 'UTF-8');
//If the browser is IE, load a special stylesheet
if (preg_match('~MSIE|Internet Explorer~i', $ua) || (strpos($ua, 'Trident/7.0') !== false && strpos($ua, 'rv:11.0') !== false)) {
    // do stuff for IE
	echo "<link rel=\"stylesheet\" href=\"/resources/styles/ieOnly.css\">";
}
//Load the standard stylesheet
else{
	echo "<link rel=\"stylesheet\" href=\"/resources/styles/stylesheet.css\">";
}
?>

<!--Viewports-->
<meta name="viewport" content="width=device-width> initial-scale=1">
<!--Scripts-->
<script src="/resources/scripts/main.js"></script>
<!--Favicons-->
<link rel="shortcut icon" type="image/png" href="/resources/coreImages/favicon-48.png"/>