<?php
/*
 * Features PHP File
 * Angus Goody 10/06/2020
 *
 * Instead of having duplicate HTML Code
 * These functions will return feature cards
 * styled to the page that requested them
 * This way, feature cards are updated in one place
 */

//Meetings Card
function meetings() { global $CURRENT_PAGE ?>
    <!--Meetings Feature -->
    <div class="card text-center coreCard">
        <div class="card-body">
            <img class="mb-2" src="https://via.placeholder.com/90" alt="This is alt text">
            <h3 class="mt-sm-2">Meetings</h3>
			<div class="featureDivider <?php
			//Change colour of divider based on which file is being used
			switch ($CURRENT_PAGE){
				case "Economy-P":
					echo "econBorderTop";
					break;
				case "Redwood-P":
					echo "redwoodBorderTop";
					break;
				case "Deluxe-P":
					echo "deluxeBorderTop";
					break;
				case "Relaunch-P":
					echo "relaunchBorderTop";
					break;
				default:
					echo "defaultBorderTop";
					break;
			}
			?>"></div>
            <p class="p-1"> This is a brief description of the feature</p>
        </div>
    </div>
<?php }

//Calendar Card
function calendar() { global $CURRENT_PAGE ?>
	<!--Calendar Feature -->
	<div class="card text-center coreCard">
		<div class="card-body">
			<img class="mb-2" src="https://via.placeholder.com/90" alt="This is alt text">
			<h3 class="mt-sm-2">Calendar</h3>
			<div class="featureDivider <?php
			//Change colour of divider based on which file is being used
			switch ($CURRENT_PAGE){
				case "Economy-P":
					echo "econBorderTop";
					break;
				case "Redwood-P":
					echo "redwoodBorderTop";
					break;
				case "Deluxe-P":
					echo "deluxeBorderTop";
					break;
				case "Relaunch-P":
					echo "relaunchBorderTop";
					break;
				default:
					echo "defaultBorderTop";
					break;
			}
			?>"></div>
			<p class="p-1"> This is a brief description of the feature</p>
		</div>
	</div>
<?php }

//Calendar Card
function social_advice() { global $CURRENT_PAGE ?>
	<!--Social Advice Feature -->
	<div class="card text-center coreCard">
		<div class="card-body">
			<img class="mb-2" src="https://via.placeholder.com/90" alt="This is alt text">
			<h3 class="mt-sm-2">Advice</h3>
			<div class="featureDivider <?php
			//Change colour of divider based on which file is being used
			switch ($CURRENT_PAGE){
				case "Economy-P":
					echo "econBorderTop";
					break;
				case "Redwood-P":
					echo "redwoodBorderTop";
					break;
				case "Deluxe-P":
					echo "deluxeBorderTop";
					break;
				case "Relaunch-P":
					echo "relaunchBorderTop";
					break;
				default:
					echo "defaultBorderTop";
					break;
			}
			?>"></div>
			<p class="p-1"> This is a brief description of the feature</p>
		</div>
	</div>
<?php }

//Calendar Card
function creative_ideas() { global $CURRENT_PAGE ?>
	<!--Creative Content Ideas Feature -->
	<div class="card text-center coreCard">
		<div class="card-body">
			<img class="mb-2" src="https://via.placeholder.com/90" alt="This is alt text">
			<h3 class="mt-sm-2">Ideas</h3>
			<div class="featureDivider <?php
			//Change colour of divider based on which file is being used
			switch ($CURRENT_PAGE){
				case "Economy-P":
					echo "econBorderTop";
					break;
				case "Redwood-P":
					echo "redwoodBorderTop";
					break;
				case "Deluxe-P":
					echo "deluxeBorderTop";
					break;
				case "Relaunch-P":
					echo "relaunchBorderTop";
					break;
				default:
					echo "defaultBorderTop";
					break;
			}
			?>"></div>
			<p class="p-1"> This is a brief description of the feature</p>
		</div>
	</div>
<?php }

/* ----- Tier 2 --- */

//Social Media account management
function account_management() { global $CURRENT_PAGE ?>
	<!--Social Media Management Feature -->
	<div class="card text-center coreCard">
		<div class="card-body">
			<img class="mb-2" src="https://via.placeholder.com/90" alt="This is alt text">
			<h3 class="mt-sm-2">Social Media Management</h3>
			<div class="featureDivider <?php
			//Change colour of divider based on which file is being used
			switch ($CURRENT_PAGE){
				case "Economy-P":
					echo "econBorderTop";
					break;
				case "Redwood-P":
					echo "redwoodBorderTop";
					break;
				case "Deluxe-P":
					echo "deluxeBorderTop";
					break;
				case "Relaunch-P":
					echo "relaunchBorderTop";
					break;
				default:
					echo "defaultBorderTop";
					break;
			}
			?>"></div>
			<p class="p-1"> This is a brief description of the feature</p>
		</div>
	</div>
<?php }

//Build online precence
function build_online_presence() { global $CURRENT_PAGE ?>
	<!--Build online presence Feature -->
	<div class="card text-center coreCard">
		<div class="card-body">
			<img class="mb-2" src="https://via.placeholder.com/90" alt="This is alt text">
			<h3 class="mt-sm-2">Build online presence</h3>
			<div class="featureDivider <?php
			//Change colour of divider based on which file is being used
			switch ($CURRENT_PAGE){
				case "Economy-P":
					echo "econBorderTop";
					break;
				case "Redwood-P":
					echo "redwoodBorderTop";
					break;
				case "Deluxe-P":
					echo "deluxeBorderTop";
					break;
				case "Relaunch-P":
					echo "relaunchBorderTop";
					break;
				default:
					echo "defaultBorderTop";
					break;
			}
			?>"></div>
			<p class="p-1"> This is a brief description of the feature</p>
		</div>
	</div>
<?php }

/* ----- Tier 3 --- */

//Social Media account management
function reach_analysis_reports() { global $CURRENT_PAGE ?>
	<!--Opportunity reach analysis-->
	<div class="card text-center coreCard">
		<div class="card-body">
			<img class="mb-2" src="https://via.placeholder.com/90" alt="This is alt text">
			<h3 class="mt-sm-2">Reach Analysis Report</h3>
			<div class="featureDivider <?php
			//Change colour of divider based on which file is being used
			switch ($CURRENT_PAGE){
				case "Economy-P":
					echo "econBorderTop";
					break;
				case "Redwood-P":
					echo "redwoodBorderTop";
					break;
				case "Deluxe-P":
					echo "deluxeBorderTop";
					break;
				case "Relaunch-P":
					echo "relaunchBorderTop";
					break;
				default:
					echo "defaultBorderTop";
					break;
			}
			?>"></div>
			<p class="p-1"> This is a brief description of the feature</p>
		</div>
	</div>
<?php }

//Photography
function photography() { global $CURRENT_PAGE ?>
	<!--Photography Sessions Feature -->
	<div class="card text-center coreCard">
		<div class="card-body">
			<img class="mb-2" src="https://via.placeholder.com/90" alt="This is alt text">
			<h3 class="mt-sm-2">Photography Sessions</h3>
			<div class="featureDivider <?php
			//Change colour of divider based on which file is being used
			switch ($CURRENT_PAGE){
				case "Economy-P":
					echo "econBorderTop";
					break;
				case "Redwood-P":
					echo "redwoodBorderTop";
					break;
				case "Deluxe-P":
					echo "deluxeBorderTop";
					break;
				case "Relaunch-P":
					echo "relaunchBorderTop";
					break;
				default:
					echo "defaultBorderTop";
					break;
			}
			?>"></div>
			<p class="p-1"> This is a brief description of the feature</p>
		</div>
	</div>
<?php }

//Microsoft Masterclass
function microsoft_masterclass() { global $CURRENT_PAGE ?>
	<!--Microsoft Masterclass Feature -->
	<div class="card text-center coreCard">
		<div class="card-body">
			<img class="mb-2" src="https://via.placeholder.com/90" alt="This is alt text">
			<h3 class="mt-sm-2">Microsoft Masterclass</h3>
			<div class="featureDivider <?php
			//Change colour of divider based on which file is being used
			switch ($CURRENT_PAGE){
				case "Economy-P":
					echo "econBorderTop";
					break;
				case "Redwood-P":
					echo "redwoodBorderTop";
					break;
				case "Deluxe-P":
					echo "deluxeBorderTop";
					break;
				case "Relaunch-P":
					echo "relaunchBorderTop";
					break;
				default:
					echo "defaultBorderTop";
					break;
			}
			?>"></div>
			<p class="p-1"> This is a brief description of the feature</p>
		</div>
	</div>
<?php }

/* ----- Relaunch --- */


//Online reopening event
function online_reopening() { global $CURRENT_PAGE ?>
	<!--Online reopening event -->
	<div class="card text-center coreCard">
		<div class="card-body">
			<img class="mb-2" src="https://via.placeholder.com/90" alt="This is alt text">
			<h3 class="mt-sm-2">Online Reopening event</h3>
			<div class="featureDivider <?php
			//Change colour of divider based on which file is being used
			switch ($CURRENT_PAGE){
				case "Economy-P":
					echo "econBorderTop";
					break;
				case "Redwood-P":
					echo "redwoodBorderTop";
					break;
				case "Deluxe-P":
					echo "deluxeBorderTop";
					break;
				case "Relaunch-P":
					echo "relaunchBorderTop";
					break;
				default:
					echo "defaultBorderTop";
					break;
			}
			?>"></div>
			<p class="p-1"> This is a brief description of the feature</p>
		</div>
	</div>
<?php }

//Advert
function advert_creation() { global $CURRENT_PAGE ?>
	<!--Advert creation feature-->
	<div class="card text-center coreCard">
		<div class="card-body">
			<img class="mb-2" src="https://via.placeholder.com/90" alt="This is alt text">
			<h3 class="mt-sm-2">Multiple Advert Creation</h3>
			<div class="featureDivider <?php
			//Change colour of divider based on which file is being used
			switch ($CURRENT_PAGE){
				case "Economy-P":
					echo "econBorderTop";
					break;
				case "Redwood-P":
					echo "redwoodBorderTop";
					break;
				case "Deluxe-P":
					echo "deluxeBorderTop";
					break;
				case "Relaunch-P":
					echo "relaunchBorderTop";
					break;
				default:
					echo "defaultBorderTop";
					break;
			}
			?>"></div>
			<p class="p-1"> This is a brief description of the feature</p>
		</div>
	</div>
<?php }

//Active Marketing
function active_marketing() { global $CURRENT_PAGE ?>
	<!--Active Marketing feature -->
	<div class="card text-center coreCard">
		<div class="card-body">
			<img class="mb-2" src="https://via.placeholder.com/90" alt="This is alt text">
			<h3 class="mt-sm-2">Active Marketing</h3>
			<div class="featureDivider <?php
			//Change colour of divider based on which file is being used
			switch ($CURRENT_PAGE){
				case "Economy-P":
					echo "econBorderTop";
					break;
				case "Redwood-P":
					echo "redwoodBorderTop";
					break;
				case "Deluxe-P":
					echo "deluxeBorderTop";
					break;
				case "Relaunch-P":
					echo "relaunchBorderTop";
					break;
				default:
					echo "defaultBorderTop";
					break;
			}
			?>"></div>
			<p class="p-1"> This is a brief description of the feature</p>
		</div>
	</div>
<?php }

//Online reopening event
function personalised_report() { global $CURRENT_PAGE ?>
	<!--Get back to business report -->
	<div class="card text-center coreCard">
		<div class="card-body">
			<img class="mb-2" src="https://via.placeholder.com/90" alt="This is alt text">
			<h3 class="mt-sm-2">Personalised Report</h3>
			<div class="featureDivider <?php
			//Change colour of divider based on which file is being used
			switch ($CURRENT_PAGE){
				case "Economy-P":
					echo "econBorderTop";
					break;
				case "Redwood-P":
					echo "redwoodBorderTop";
					break;
				case "Deluxe-P":
					echo "deluxeBorderTop";
					break;
				case "Relaunch-P":
					echo "relaunchBorderTop";
					break;
				default:
					echo "defaultBorderTop";
					break;
			}
			?>"></div>
			<p class="p-1"> This is a brief description of the feature</p>
		</div>
	</div>
<?php }

?>

