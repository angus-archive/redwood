
<nav class="navbar navbar-expand-md navbar-light">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
		<ul class="navbar-nav nav-justified">
			<li class="nav-item">
				<!--HOME PAGE-->
				<a class="nav-link text-nowrap  <?php if($NAV_PAGE == "Index"){echo "currentNavItem";}?>" href="/index.php">Our Services</a>
			</li>
			<li class="nav-item dropdown">
				<!--Packages Page-->
				<a class="nav-link dropdown-toggle <?php if($NAV_PAGE == "Packages"){echo "currentNavItem";}?>" href="/packages" id="packagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Packages
				</a>
				<div class="dropdown-menu bg-dark" aria-labelledby="packagesDropdown">
					<a class="dropdown-item text-white <?php if($CURRENT_PAGE == "Packages"){echo "activeSub";}?>" href="/packages">All Packages</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">Standard Packages</h6>
					<a class="dropdown-item text-white <?php if($CURRENT_PAGE == "Economy-P"){echo "activeSub";}?>" href="/packages/economy.php">Economy</a>
					<a class="dropdown-item text-white <?php if($CURRENT_PAGE == "Redwood-P"){echo "activeSub";}?>" href="/packages/redwood.php">Redwood</a>
					<a class="dropdown-item text-white <?php if($CURRENT_PAGE == "Deluxe-P"){echo "activeSub";}?>" href="/packages/deluxe.php">Deluxe</a>
					<h6 class="dropdown-header">Featured Packages</h6>
					<a class="dropdown-item text-white <?php if($CURRENT_PAGE == "Relaunch-P"){echo "activeSub";}?>" href="#">Relaunch</a>
				</div>
			</li>
			<li class="nav-item">
				<!--OUR STORY-->
				<a class="nav-link text-nowrap <?php if($NAV_PAGE == "Our-Story"){echo "currentNavItem";}?>" href="/our-story.php">Our Story</a>
			</li>
			<li class="nav-item">
				<!--CONTACT-->
				<a class="nav-link text-nowrap <?php if($NAV_PAGE == "Contact"){echo "currentNavItem";}?>" href="/contact.php" >Contact</a>
			</li>
		</ul>
	</div>
</nav>





