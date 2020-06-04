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
            <a id="<?php if ($CURRENT_PAGE == "Index") {?>currentNavItem<?php }?>" href="index.php">Our Services</a>
        </li>

        <li>
            <a id="<?php if ($CURRENT_PAGE == "Packages") {?>currentNavItem<?php }?>" href="packages.php">Packages</a>
        </li>

        <li>
            <a id="<?php if ($CURRENT_PAGE == "Our-Story") {?>currentNavItem<?php }?>" href="our-story.php">Our story</a>
        </li>

        <li>
            <a id="<?php if ($CURRENT_PAGE == "Contact") {?>currentNavItem<?php }?>" href="contact.php">Contact</a>
        </li>

    </ul>
</div>