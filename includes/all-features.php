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

//Find out what colour for border should be used
$border_col="";
switch ($CURRENT_PAGE){
	case "Economy-P":
		$border_col = "econBorderTop";
		break;
	case "Redwood-P":
		$border_col = "redwoodBorderTop";
		break;
	case "Deluxe-P":
		$border_col = "deluxeBorderTop";
		break;
	case "Relaunch-P":
		$border_col = "relaunchBorderTop";
		break;
	default:
		$border_col = "defaultBorderTop";
		break;
}

//Meetings Card
function meetings() { global $border_col ?>
    <!--Meetings Feature -->
    <div class="card text-center coreCard">
        <div class="card-body">
			<img class="featureIcon mb-2" src="/resources/images/icons/meetings.svg" alt="Meetings icon">
            <h3 class="mt-sm-2">Meetings</h3>
			<div class="featureDivider <?php echo $border_col ?>"></div>
            <p class="p-1">If you wish, we can conduct meetings in person to discuss any problems we can help you with.</p>
        </div>
    </div>
<?php }

//Calendar Card
function calendar() { global $border_col ?>
	<!--Calendar Feature -->
	<div class="card text-center coreCard">
		<div class="card-body">
			<img class="featureIcon mb-2" src="/resources/images/icons/calendar.svg" alt="Calendar icon">
			<h3 class="mt-sm-2">Calendar</h3>
			<div class="featureDivider <?php echo $border_col ?>"></div>
			<p class="p-1"> This is a brief description of the feature</p>
		</div>
	</div>
<?php }

//Calendar Card
function social_advice() { global $border_col ?>
	<!--Social Advice Feature -->
	<div class="card text-center coreCard">
		<div class="card-body">
			<img class="featureIcon mb-2" src="/resources/images/icons/advice.svg" alt="Advice icon">
			<h3 class="mt-sm-2">Advice</h3>
			<div class="featureDivider <?php echo $border_col ?>"></div>
			<p class="p-1"> This is a brief description of the feature</p>
		</div>
	</div>
<?php }

//Creative ideas Card
function creative_ideas() { global $border_col ?>
	<!--Creative Content Ideas Feature -->
	<div class="card text-center coreCard">
		<div class="card-body">
			<img class="featureIcon mb-2" src="/resources/images/icons/ideas.svg" alt="Creative ideas icon">
			<h3 class="mt-sm-2">Creative Ideas</h3>
			<div class="featureDivider <?php echo $border_col ?>"></div>
			<p class="p-1"> This is a brief description of the feature</p>
		</div>
	</div>
<?php }

/* ----- Tier 2 --- */

//Social Media account management
function account_management() { global $border_col ?>
	<!--Social Media Management Feature -->
	<div class="card text-center coreCard">
		<div class="card-body">
			<img class="featureIcon mb-2" src="/resources/images/icons/social_media.svg" alt="Social Media Management icon">
			<h3 class="mt-sm-2">Social Media Management</h3>
			<div class="featureDivider <?php echo $border_col ?>"></div>
			<p class="p-1">We will manage your social media accounts to give you more time to focus on your business.</p>
		</div>
	</div>
<?php }

//Build online precence
function build_online_presence() { global $border_col ?>
	<!--Build online presence Feature -->
	<div class="card text-center coreCard">
		<div class="card-body">
			<img class="featureIcon" src="/resources/images/icons/online.svg" alt="Online presence icon">
			<h3 class="mt-sm-2">Build online presence</h3>
			<div class="featureDivider <?php echo $border_col ?>"></div>
			<p class="p-1"> This is a brief description of the feature</p>
		</div>
	</div>
<?php }

/* ----- Tier 3 --- */

//Social Media account management
function reach_analysis_reports() { global $border_col ?>
	<!--Opportunity reach analysis-->
	<div class="card text-center coreCard">
		<div class="card-body">
			<img class="featureIcon mb-2" src="/resources/images/icons/reach_analysis.svg" alt="Reach Analysis report icon">
			<h3 class="mt-sm-2">Reach Analysis Report</h3>
			<div class="featureDivider <?php echo $border_col ?>"></div>
			<p class="p-1"> This is a brief description of the feature</p>
		</div>
	</div>
<?php }

//Photography
function photography() { global $border_col ?>
	<!--Photography Sessions Feature -->
	<div class="card text-center coreCard">
		<div class="card-body">
			<img class="featureIcon mb-2" src="/resources/images/icons/photography.svg" alt="Photography icon">
			<h3 class="mt-sm-2">Photography Sessions</h3>
			<div class="featureDivider <?php echo $border_col ?>"></div>
			<p class="p-1"> This is a brief description of the feature</p>
		</div>
	</div>
<?php }

//Microsoft Masterclass
function microsoft_masterclass() { global $border_col ?>
	<!--Microsoft Masterclass Feature -->
	<div class="card text-center coreCard">
		<div class="card-body">
			<img class="featureIcon mb-2" src="/resources/images/icons/microsoft.svg" alt="Microsoft Masterclass icon">
			<h3 class="mt-sm-2">Microsoft Masterclass</h3>
			<div class="featureDivider <?php echo $border_col ?>"></div>
			<p class="p-1"> This is a brief description of the feature</p>
		</div>
	</div>
<?php }

/* ----- Relaunch --- */


//Online reopening event
function online_reopening() { global $border_col ?>
	<!--Online reopening event -->
	<div class="card text-center coreCard">
		<div class="card-body">
			<img class="featureIcon mb-2" src="/resources/images/icons/relaunch_event.svg" alt="Relaunch Event Rocket icon">
			<h3 class="mt-sm-2">Online Reopening event</h3>
			<div class="featureDivider <?php echo $border_col ?>"></div>
			<p class="p-1"> This is a brief description of the feature</p>
		</div>
	</div>
<?php }

//Advert
function advert_creation() { global $border_col ?>
	<!--Advert creation feature-->
	<div class="card text-center coreCard">
		<div class="card-body">
			<img class="featureIcon mb-2" src="/resources/images/icons/advert_creation.svg" alt="Advert creation icon">
			<h3 class="mt-sm-2">Multiple Advert Creation</h3>
			<div class="featureDivider <?php echo $border_col ?>"></div>
			<p class="p-1"> This is a brief description of the feature</p>
		</div>
	</div>
<?php }

//Active Marketing
function active_marketing() { global $border_col ?>
	<!--Active Marketing feature -->
	<div class="card text-center coreCard">
		<div class="card-body">
			<img class="featureIcon mb-2" src="/resources/images/icons/active_marketing.svg" alt="Active marketing icon">
			<h3 class="mt-sm-2">Active Marketing</h3>
			<div class="featureDivider <?php echo $border_col ?>"></div>
			<p class="p-1"> Times are changing; stop passively marketing and allow us to help you actively market your business </p>
		</div>
	</div>
<?php }

//Report
function personalised_report() { global $border_col ?>
	<!--Get back to business report -->
	<div class="card text-center coreCard">
		<div class="card-body">
			<img class="featureIcon mb-2" src="/resources/images/icons/personalised_report.svg" alt="Personalised report icon">
			<h3 class="mt-sm-2">Personalised Report</h3>
			<div class="featureDivider <?php echo $border_col ?>"></div>
			<p class="p-1"> This is a brief description of the feature</p>
		</div>
	</div>
<?php }

?>


