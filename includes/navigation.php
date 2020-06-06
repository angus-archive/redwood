<!--Redwood Navigation Bar-->
<div id="nav">
    <ul id="navUL">

        <li id="dropDownLink">
            <div class="burgerContainer" id="burgerNavContainer" onclick="burgerPressed(this)">
                <div class="burgerLine1"></div>
                <div class="burgerLine2"></div>
                <div class="burgerLine3"></div>
            </div>
        </li>

        <li>
			<!--HOME PAGE-->
            <a href="/index.php" <?php if($CURRENT_PAGE == "Index"){echo "id=currentNavItem";}?> >Our Services</a>
        </li>

        <li>
			<!--PACKAGES-->
            <a href="/packages" <?php if($CURRENT_PAGE == "Packages"){echo "id=currentNavItem";}?> >Packages</a>
        </li>

        <li>
			<!--OUR STORY-->
            <a href="/our-story.php" <?php if($CURRENT_PAGE == "Our-Story"){echo "id=currentNavItem";}?> >Our Story</a>
        </li>

        <li>
			<!--CONTACT-->
            <a href="/contact.php" <?php if($CURRENT_PAGE == "Contact"){echo "id=currentNavItem";}?> >Contact</a>
        </li>

    </ul>
</div>