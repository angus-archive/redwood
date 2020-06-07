<div id="navContainer">
	<div class="burger" id="burgerContainer" onclick="burgerClicked()">
		<div class="burgerLine1"></div>
		<div class="burgerLine2"></div>
		<div class="burgerLine3"></div>
	</div>
	<div id="jsNav" class="navLinkList">
		<!--HOME PAGE-->
		<a href="/index.php" <?php if($CURRENT_PAGE == "Index"){echo "id=currentNavItem";}?> >Our Services</a>
		<!--PACKAGES-->
		<a href="/packages" <?php if($CURRENT_PAGE == "Packages"){echo "id=currentNavItem";}?> >Packages</a>
		<!--OUR STORY-->
		<a href="/our-story.php" <?php if($CURRENT_PAGE == "Our-Story"){echo "id=currentNavItem";}?> >Our Story</a>
		<!--CONTACT-->
		<a href="/contact.php" <?php if($CURRENT_PAGE == "Contact"){echo "id=currentNavItem";}?> >Contact</a>
	</div>
</div>