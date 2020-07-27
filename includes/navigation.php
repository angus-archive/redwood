
<nav class="navbar navbar-expand-md navbar-light">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
		<ul class="navbar-nav nav-justified">
			<li class="nav-item mx-3">
				<!--HOME PAGE-->
				<a class="nav-link text-nowrap  <?php if($NAV_PAGE == "Index"){echo "currentNavItem";}?>" href="/">Our Services</a>
			</li>
			<li class="nav-item dropdown mx-3">
				<!--Packages Page-->
				<a class="nav-link dropdown-toggle <?php if($NAV_PAGE == "Packages"){echo "currentNavItem";}?>" href="/packages" id="packagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Packages
				</a>
				<div class="dropdown-menu" aria-labelledby="packagesDropdown">
					<a class="dropdown-item text-white <?php if($CURRENT_PAGE == "Packages"){echo "activeSub";}?>" href="/packages">All Packages</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item text-white <?php if($CURRENT_PAGE == "Economy-P"){echo "activeSub";}?>" href="/packages/economy">Economy</a>
					<a class="dropdown-item text-white <?php if($CURRENT_PAGE == "Redwood-P"){echo "activeSub";}?>" href="/packages/redwood">Redwood</a>
					<a class="dropdown-item text-white <?php if($CURRENT_PAGE == "Deluxe-P"){echo "activeSub";}?>" href="/packages/deluxe">Deluxe</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item text-white <?php if($CURRENT_PAGE == "Relaunch-P"){echo "activeSub";}?>" href="/packages/relaunch">Relaunch</a>
				</div>
			</li>
			<li class="nav-item mx-3">
				<!--CONTACT-->
				<a class="nav-link text-nowrap <?php if($NAV_PAGE == "Contact"){echo "currentNavItem";}?>" href="/contact" >Contact</a>
			</li>
		</ul>
	</div>
</nav>





