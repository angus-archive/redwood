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
			<?php
			//Change colour of divider based on which file is being used
			switch ($CURRENT_PAGE){
				case "Economy-P":
					echo "<div class=\"featureDivider econBorderTop\"></div>";
					break;
				case "Redwood-P":
					echo "<div class=\"featureDivider redwoodBorderTop\"></div>";
					break;
				case "Deluxe-P":
					echo "<div class=\"featureDivider deluxeBorderTop\"></div>";
					break;
				default:
					echo "<div class=\"featureDivider defaultBorderTop\"></div>";
					break;
			}
			?>
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
			<?php
			//Change colour of divider based on which file is being used
			switch ($CURRENT_PAGE){
				case "Economy-P":
					echo "<div class=\"featureDivider econBorderTop\"></div>";
					break;
				case "Redwood-P":
					echo "<div class=\"featureDivider redwoodBorderTop\"></div>";
					break;
				case "Deluxe-P":
					echo "<div class=\"featureDivider deluxeBorderTop\"></div>";
					break;
				default:
					echo "<div class=\"featureDivider defaultBorderTop\"></div>";
					break;
			}
			?>
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
			<?php
			//Change colour of divider based on which file is being used
			switch ($CURRENT_PAGE){
				case "Economy-P":
					echo "<div class=\"featureDivider econBorderTop\"></div>";
					break;
				case "Redwood-P":
					echo "<div class=\"featureDivider redwoodBorderTop\"></div>";
					break;
				case "Deluxe-P":
					echo "<div class=\"featureDivider deluxeBorderTop\"></div>";
					break;
				default:
					echo "<div class=\"featureDivider defaultBorderTop\"></div>";
					break;
			}
			?>
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
			<?php
			//Change colour of divider based on which file is being used
			switch ($CURRENT_PAGE){
				case "Economy-P":
					echo "<div class=\"featureDivider econBorderTop\"></div>";
					break;
				case "Redwood-P":
					echo "<div class=\"featureDivider redwoodBorderTop\"></div>";
					break;
				case "Deluxe-P":
					echo "<div class=\"featureDivider deluxeBorderTop\"></div>";
					break;
				default:
					echo "<div class=\"featureDivider defaultBorderTop\"></div>";
					break;
			}
			?>
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
			<?php
			//Change colour of divider based on which file is being used
			switch ($CURRENT_PAGE){
				case "Economy-P":
					echo "<div class=\"featureDivider econBorderTop\"></div>";
					break;
				case "Redwood-P":
					echo "<div class=\"featureDivider redwoodBorderTop\"></div>";
					break;
				case "Deluxe-P":
					echo "<div class=\"featureDivider deluxeBorderTop\"></div>";
					break;
				default:
					echo "<div class=\"featureDivider defaultBorderTop\"></div>";
					break;
			}
			?>
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
			<?php
			//Change colour of divider based on which file is being used
			switch ($CURRENT_PAGE){
				case "Economy-P":
					echo "<div class=\"featureDivider econBorderTop\"></div>";
					break;
				case "Redwood-P":
					echo "<div class=\"featureDivider redwoodBorderTop\"></div>";
					break;
				case "Deluxe-P":
					echo "<div class=\"featureDivider deluxeBorderTop\"></div>";
					break;
				default:
					echo "<div class=\"featureDivider defaultBorderTop\"></div>";
					break;
			}
			?>
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
			<?php
			//Change colour of divider based on which file is being used
			switch ($CURRENT_PAGE){
				case "Economy-P":
					echo "<div class=\"featureDivider econBorderTop\"></div>";
					break;
				case "Redwood-P":
					echo "<div class=\"featureDivider redwoodBorderTop\"></div>";
					break;
				case "Deluxe-P":
					echo "<div class=\"featureDivider deluxeBorderTop\"></div>";
					break;
				default:
					echo "<div class=\"featureDivider defaultBorderTop\"></div>";
					break;
			}
			?>
			<p class="p-1"> This is a brief description of the feature</p>
		</div>
	</div>
<?php }

//Build online presence
function photography() { global $CURRENT_PAGE ?>
	<!--Photography Sessions Feature -->
	<div class="card text-center coreCard">
		<div class="card-body">
			<img class="mb-2" src="https://via.placeholder.com/90" alt="This is alt text">
			<h3 class="mt-sm-2">Photography Sessions</h3>
			<?php
			//Change colour of divider based on which file is being used
			switch ($CURRENT_PAGE){
				case "Economy-P":
					echo "<div class=\"featureDivider econBorderTop\"></div>";
					break;
				case "Redwood-P":
					echo "<div class=\"featureDivider redwoodBorderTop\"></div>";
					break;
				case "Deluxe-P":
					echo "<div class=\"featureDivider deluxeBorderTop\"></div>";
					break;
				default:
					echo "<div class=\"featureDivider defaultBorderTop\"></div>";
					break;
			}
			?>
			<p class="p-1"> This is a brief description of the feature</p>
		</div>
	</div>
<?php }

//Build online precence
function microsoft_masterclass() { global $CURRENT_PAGE ?>
	<!--Microsoft Masterclass Feature -->
	<div class="card text-center coreCard">
		<div class="card-body">
			<img class="mb-2" src="https://via.placeholder.com/90" alt="This is alt text">
			<h3 class="mt-sm-2">Microsoft Masterclass</h3>
			<?php
			//Change colour of divider based on which file is being used
			switch ($CURRENT_PAGE){
				case "Economy-P":
					echo "<div class=\"featureDivider econBorderTop\"></div>";
					break;
				case "Redwood-P":
					echo "<div class=\"featureDivider redwoodBorderTop\"></div>";
					break;
				case "Deluxe-P":
					echo "<div class=\"featureDivider deluxeBorderTop\"></div>";
					break;
				default:
					echo "<div class=\"featureDivider defaultBorderTop\"></div>";
					break;
			}
			?>
			<p class="p-1"> This is a brief description of the feature</p>
		</div>
	</div>
<?php }
?>


