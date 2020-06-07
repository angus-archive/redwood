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
		<div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
			<h1 class="display-4">Packages</h1>
			<p class="lead">Take a look at some of the packages we offer...</p>
		</div>

		<div class="container pack-container">
			<div class="card-deck mb-3 text-center" style="height:22rem;">
				<div class="card mb-4 pack-box-shadow">
					<div class="card-header blueSteelBackground text-light">
						<h4 class="my-0 font-weight-normal">Economy</h4>
					</div>
					<div class="card-body d-flex flex-column">
						<ul class="text-left mt-3 mb-4">
							<li>Monthly Meetings</li>
							<li>Social media advice</li>
							<li>Creative content ideas</li>
						</ul>
						<button type="button" class="btn btn-lg btn-block btn-primary econBackground border-0 mt-auto" onclick="location.href='/packages/economy.php';">More info</button>
					</div>
				</div>
				<div class="card mb-4 pack-box-shadow">
					<div class="card-header blueSteelBackground text-light">
						<h4 class="my-0 font-weight-normal">Redwood</h4>
					</div>
					<div class="card-body d-flex flex-column">
						<ul class="text-left mt-3 mb-4">
							<li>Fortnightly meetings</li>
							<li>Social media management</li>
							<li>Build online presence</li>
						</ul>
						<button type="button" class="btn btn-lg btn-block btn-primary redwoodBackground border-0 mt-auto">More Info</button>
					</div>
				</div>
				<div class="card mb-4 pack-box-shadow">
					<div class="card-header blueSteelBackground text-light">
						<h4 class="my-0 font-weight-normal">Deluxe</h4>
					</div>
					<div class="card-body d-flex flex-column">
						<ul class="text-left mt-3 mb-4">
							<li>Weekly meetings</li>
							<li>Opportunity reach analysis</li>
							<li>Monthly business review</li>
							<li>Photography sessions</li>
						</ul>
						<button type="button" class="btn btn-lg btn-block btn-primary deluxeBackground border-0 mt-auto">More Info</button>
					</div>
				</div>
			</div>

		</div>
	</main>

</div>

<!--Footer-->
<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer.php";include_once($path);?>

</body>
</html>
