
<nav class="navbar navbar-expand-md navbar-light">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
		<ul class="navbar-nav nav-justified">
			<li class="nav-item">
				<!--HOME PAGE-->
				<a class="nav-link text-nowrap" href="/index.php" <?php if($CURRENT_PAGE == "Index"){echo "";}?> >Our Services</a>
			</li>
			<li class="nav-item">
				<!--PACKAGES-->
				<a class="nav-link text-nowrap" href="/packages" <?php if($CURRENT_PAGE == "Packages"){echo "";}?> >Packages</a>
			</li>
			<li class="nav-item">
				<!--OUR STORY-->
				<a class="nav-link text-nowrap" href="/our-story.php" <?php if($CURRENT_PAGE == "Our-Story"){echo "id=currentNavItem";}?> >Our Story</a>
			</li>
			<li class="nav-item">
				<!--CONTACT-->
				<a class="nav-link text-nowrap" href="/contact.php" <?php if($CURRENT_PAGE == "Contact"){echo "id=currentNavItem";}?> >Contact</a>
			</li>
		</ul>
	</div>
</nav>


