<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/a_config.php";include_once($path); ?>
<html lang="en">
<head>
    <!--Head Tags-->
    <?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/head-tags.php";include_once($path);?>
</head>
<body>

<div id="content">
    <!--Header-->
    <?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/header-content.php";include_once($path);?>
	<!--Nav-Bar-->
    <?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/navigation.php";include_once($path); ?>
    <!--Main Content-->
    <main>
		<div class="spacer"></div>
        <div class="alignDiv">
            <h1 class="pageHeading sTextSpacerB"> ECONOMY PACKAGE</h1>
			<p>The Economy Package is our cheapest package, suitable for businesses who feel as though they would like to begin to build a social media page, in order to support their operations and inform people of what they do. This package is ideal for smaller business who are looking to build a social media presence whilst on a budget. At Redwood we know that as a small business you need to watch where you spend, so this package offers flexibility on pricing, to help you stay within your budget. </p>
        	<!-- Q&A -->
			<div>
				<h3>Who is this package for?</h3>
				<p> Explain who this package is for</p>
			</div>

			<div>
				<h3>Advice for better social media posts</h3>
				<p> This is a brief sentence explaining what the heading point describes, it should be around two or three sentences in length.</p>
			</div>
			<div>
				<h3>Market Analysis</h3>
				<p> This is a brief sentence explaining what the heading point describes, it should be around two or three sentences in length.</p>
			</div>
			<div>
				<h3>Creative content ideas</h3>
				<p> This is a brief sentence explaining what the heading point describes, it should be around two or three sentences in length.</p>
			</div>
		</div>
    </main>

</div>

<!--Footer-->
<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer.php";include_once($path);?>

</body>
</html>