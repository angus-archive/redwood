<div id="navContainer">
	<a href="javascript:void(0);" class="burger" onclick="burgerClicked()">Menu</a>
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