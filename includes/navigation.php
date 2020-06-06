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
			<?php
			if ($CURRENT_PAGE == "Index"){
				echo "<a id='currentNavItem' href='#'>Our Services</a>";
			}else{
                echo "<a href='$REDWOOD_ROOT./index.php'>Our Services</a>";
			}
			?>
        </li>

        <li>
			<!--PACKAGES-->
            <?php
            if ($CURRENT_PAGE == "Packages"){
                echo "<a id='currentNavItem' href='#'>Packages</a>";
            }else{
                echo "<a href='$REDWOOD_ROOT./packages'>Packages</a>";
            }
            ?>
        </li>

        <li>
			<!--OUR STORY-->
            <?php
            if ($CURRENT_PAGE == "Our-Story"){
                echo "<a id='currentNavItem' href='#'>Our Story</a>";
            }else{
                echo "<a href='$REDWOOD_ROOT./our-story.php'>Our Story</a>";
            }
            ?>
        </li>

        <li>
			<!--CONTACT-->
            <?php
            if ($CURRENT_PAGE == "Contact"){
                echo "<a id='currentNavItem' href='#'>Contact</a>";
            }else{
                echo "<a href='$REDWOOD_ROOT./contact.php'>Contact</a>";
            }
            ?>
        </li>

    </ul>
</div>