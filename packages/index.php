<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/a_config.php";include_once($path); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head tags -->
    <?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/head-tags.php";include_once($path); ?>
</head>

<body>
	<div id="page-content">
		<div id="content-wrap">
			<!-- Header-->
			<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/header-content.php";include_once($path); ?>
			<!-- Page Banner-->
			<div class="py-2 mb-3 text-center">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-12">
							<h1 class="display-4 mt-5 mb-2">Packages</h1>
							<p class="lead mb-5">We have a package that will suit your business needs...</p>
						</div>
					</div>
				</div>
			</div>
			<!-- Spacer-->
			<div class="mSpacer-y-40"></div>
			<!-- Packages Container -->
			<div class="container pt-sm-4">
				<!-- Packages -->
				<div class="row">
					<!-- Economy -->
					<div class="col-lg-4 mb-5">
						<div class="card h-100 packageShadow">
							<div class="card-header blueSteelBackground text-light">
								<h4 class="my-0 font-weight-normal">Economy</h4>
							</div>
							<div class="card-body">
								<p class="card-text">Our Economy Package features is perfect for people looking to get started on social media</p>

							</div>

							<ul class="list-group list-group-flush">
								<li class="list-group-item econCol font-weight-bold">What's included?</li>
								<li class="list-group-item">Monthly Meetings</li>
								<li class="list-group-item">Social Media Advice</li>
								<li class="list-group-item">Creative content ideas</li>
							</ul>

							<div class="card-footer">
								<a href="/packages/economy.php" class="btn btn-primary econBackground" style="border: 0 !important;">Find Out More!</a>
							</div>

						</div>
					</div>
					<!-- Redwood -->
					<div class="col-lg-4 mb-5">
						<div class="card h-100 packageShadow">
							<div class="card-header blueSteelBackground text-light">
								<h4 class="my-0 font-weight-normal">Redwood</h4>
							</div>
							<div class="card-body">
								<p class="card-text">Our Economy Package features is perfect for people looking to get started on social media</p>

							</div>

							<ul class="list-group list-group-flush">
								<li class="list-group-item redwoodCol font-weight-bold">What's included?</li>
								<li class="list-group-item">Fortnightly meetings</li>
								<li class="list-group-item">Social Media management</li>
								<li class="list-group-item">Build online presence</li>
								<li class="list-group-item">Photography session</li>
							</ul>

							<div class="card-footer">
								<a href="/packages/redwood.php" class="btn btn-primary redwoodBackground" style="border: 0 !important;">Find Out More!</a>
							</div>

						</div>
					</div>
					<!-- Deluxe -->
					<div class="col-lg-4 mb-5">
						<div class="card h-100 packageShadow">
							<div class="card-header blueSteelBackground text-light">
								<h4 class="my-0 font-weight-normal">Deluxe</h4>
							</div>
							<div class="card-body">
								<p class="card-text">Our Economy Package features is perfect for people looking to get started on social media</p>

							</div>

							<ul class="list-group list-group-flush">
								<li class="list-group-item deluxeCol font-weight-bold">What's included?</li>
								<li class="list-group-item">Weekly meetings</li>
								<li class="list-group-item">Opportunity reach analysis</li>
								<li class="list-group-item">Monthly business review</li>

							</ul>

							<div class="card-footer">
								<a href="/packages/deluxe.php" class="btn btn-primary deluxeBackground" style="border: 0 !important;">Find Out More!</a>
							</div>

						</div>
					</div>

				</div>
			</div>
			<!-- Spacer -->
			<div class="mSpacer-y-80"></div>
			<!-- Relaunch Section -->
			<div class="container pb-sm-4">
				<h1 class="display-5 mb-5 text-center">Featured</h1>
				<div class="pSpacer-y-20"></div>
				<div class="row justify-content-end">
					<div class="col-lg-6 align-self-center mb-5">
						<img id="relaunchRocket" class="w-50 d-block mx-auto" src="/resources/images/rocketDark.svg" alt="Card image cap">
					</div>
					<div class="col-lg-6 align-self-center mb-5">
						<!--Relaunch-->
						<div id="relaunchCard" class="card w-75 text-center mx-auto packageShadow">
							<div class="card-header blueSteelBackground text-light">
								<h4 class="my-0 font-weight-normal">Relaunch</h4>
							</div>
							<div class="card-body">
								<p class="card-text">Here at Redwood we understand the devastating affects Coronavirus has had on businesses, that's why we're introducing our Relaunch package to help you come out lockdown stronger than ever</p>
							</div>

							<ul class="list-group list-group-flush">
								<li class="list-group-item"><h5 class="card-text relaunchCol">What's included? </h5></li>
								<li class="list-group-item">Online reopening event</li>
								<li class="list-group-item">Multiple advert creation</li>
								<li class="list-group-item">Active marketing</li>
							</ul>

							<div class="card-footer">
								<a href="/packages/relaunch.php" class="btn btn-primary relaunchBackground" style="border: 0 !important;">Find Out More!</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Spacer -->
			<div class="mSpacer-y-80"></div>
			<!-- Comparison Table -->
			<div class="container">
				<h1 class="display-5 mb-5 text-center">Compare our packages</h1>
				<table class="table table-bordered" id="compareTable">
					<colgroup>
						<col>
						<col span="1" id="econCol">
						<col span="1" id="redCol">
						<col span="1" id="delCol">
					</colgroup>
					<thead>
					<tr>
						<th></th>
						<th scope="col">Economy</th>
						<th scope="col">Redwood</th>
						<th scope="col">Deluxe</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<th scope="row"> Meetings</th>
						<td> Monthly</td>
						<td> Fortnightly</td>
						<td> Weekly</td>
					</tr>
					<tr>
						<th scope="row">Social Media Advice</th>
						<td>0</td>
						<td>0</td>
						<td>0</td>
					</tr>
					<tr>
						<th scope="row">Creative content ideas</th>
						<td>0</td>
						<td>0</td>
						<td>0</td>
					</tr>
					<tr>
						<th scope="row">Creative content ideas</th>
						<td>0</td>
						<td>0</td>
						<td>0</td>
					</tr>
					<tr>
						<th scope="row">Social Media Management</th>
						<td></td>
						<td>0</td>
						<td>0</td>
					</tr>
					<tr>
						<th scope="row">Build Online Presence</th>
						<td></td>
						<td>0</td>
						<td>0</td>
					</tr>
					<tr>
						<th scope="row">Opportunity reach analysis</th>
						<td></td>
						<td></td>
						<td>0</td>
					</tr>
					<tr>
						<th scope="row">Photography Sessions</th>
						<td></td>
						<td></td>
						<td>0</td>
					</tr>
					<tr>
						<th scope="row">Microsoft Masterclass</th>
						<td></td>
						<td></td>
						<td>0</td>
					</tr>
					</tbody>
				</table>
			</div>
			<div class="pSpacer-y-20"></div>
		</div>
		<!-- Footer -->
		<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer.php";include_once($path); ?>
		<!-- Footer - Tags -->
		<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer-tags.php";include_once($path); ?>

	</div>
</body>

</html>
