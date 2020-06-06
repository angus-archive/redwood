<!--Include the Config File -->
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/includes/a_config.php";
   include_once($path);
?>
<!DOCTYPE html>
<html>
<head>
    <!--Import Head tags from PHP includes-->
    <?php 
       $path = $_SERVER['DOCUMENT_ROOT'];
       $path .= "/includes/head-tags.php";
       include_once($path);
    ?>
</head>
<body>

<div id="content">
    <!--Import Header content-->
    <?php 
       $path = $_SERVER['DOCUMENT_ROOT'];
       $path .= "/includes/header-content.php";
       include_once($path);
    ?>
    <!--Import Nav bar-->
    <?php 
       $path = $_SERVER['DOCUMENT_ROOT'];
       $path .= "/includes/navigation.php";
       include_once($path);
    ?>
    <!--Main Content-->
    <main>
        <div id="packageDiv">
            <div class="wrapper">
                <div class="alignDiv">
                    <h1 style="color: white;" class="pageHeading mTextSpacerB bTextSpacerT"> Find a package that suits your business </h1>
                    <!--3 tier pricing-->
                    <div class="flexGrid">
                        <!--ECONOMY PACKAGE-->
                        <div class="packageContainer">
                            <div class="packageTitleSection">
                                <h3>Economy</h3>
                            </div>

                            <div class="packageFeaturesSection">
                                <div class="packageFeature">
                                    <div class="bullet econBackground"></div>
                                    <p>Monthly Meetings</p>
                                </div>
                                <div class="packageFeature">
                                    <div class="bullet econBackground"></div>
                                    <p>Review</p>
                                </div>
                                <div class="packageFeature">
                                    <div class="bullet econBackground"></div>
                                    <p>Dedicated support</p>
                                </div>
                            </div>

                            <div class="packageButtonSection">                
                                <a href="economy.php" class="transButton econBackground sTextSpacerB">Info</a>
                            </div>
                        </div>
                        <!--REDWOOD PACKAGE-->
                        <div class="packageContainer">
                            <div class="packageTitleSection">
                                <h3>Redwood</h3>
                            </div>

                            <div class="packageFeaturesSection">
                                <div class="packageFeature">
                                    <div class="bullet redwoodBackground"></div>
                                    <p>Monthly Meetings</p>
                                </div>
                                <div class="packageFeature">
                                    <div class="bullet redwoodBackground"></div>
                                    <p>Review</p>
                                </div>
                                <div class="packageFeature">
                                    <div class="bullet redwoodBackground"></div>
                                    <p>Dedicated support</p>
                                </div>
                            </div>

                            <div class="packageButtonSection">
                                <button class="transButton redwoodBackground sTextSpacerB">Info</button>
                            </div>
                        </div>
                        <!--DELUXE PACKAGE-->
                        <div class="packageContainer">
                            <div class="packageTitleSection">
                                <h3>Deluxe</h3>
                            </div>

                            <div class="packageFeaturesSection">
                                <div class="packageFeature">
                                    <div class="bullet deluxeBackground"></div>
                                    <p>Monthly Meetings</p>
                                </div>
                                <div class="packageFeature">
                                    <div class="bullet deluxeBackground"></div>
                                    <p>Review</p>
                                </div>
                                <div class="packageFeature">
                                    <div class="bullet deluxeBackground"></div>
                                    <p>Dedicated support</p>
                                </div>
                            </div>

                            <div class="packageButtonSection">
                                <button class="transButton deluxeBackground sTextSpacerB">Info</button>
                            </div>
                        </div>
                    </div>
                    <!--Spacer-->
                    <div class="spacer"></div>
                    <h2 style="color: white;" class="pageHeading mTextSpacerB"> Compare our packages </h2>
                </div>

            </div>
			<!--COMPARISON TABLE-->
			<div id="tableErrorBox">
				<p> Please rotate device to view table</p>
			</div>
			<div id="packagingTableContainer">
				<table id="packagingTable">
				<colgroup>
					<col>
					<col span="1" id="econCol">
					<col span="1" id="redCol">
					<col span="1" id="delCol">
				</colgroup>
				<thead>
				<tr>
					<th></th>
					<th class="econTable">Economy</th>
					<th class="redTable">Redwood</th>
					<th class="delTable">Deluxe</th>
				</tr>
				</thead>

				<tbody>
				<!--Meeting Frequency-->
				<tr>
					<td class="pTableFeature"> Meetings</td>
					<td> Monthly</td>
					<td> Fortnightly</td>
					<td> Weekly</td>
				</tr>

				<tr>
					<td class="pTableFeature" >Advice for better social media posts</td>
					<td><span class="tableBullet econCol">•</span></td>
					<td><span class="tableBullet redwoodCol">•</span></td>
					<td><span class="tableBullet deluxeCol">•</span></td>
				</tr>

				<tr>
					<td class="pTableFeature" >Market analysis</td>
					<td><span class="tableBullet econCol">•</span></td>
					<td><span class="tableBullet redwoodCol">•</span></td>
					<td><span class="tableBullet deluxeCol">•</span></td>
				</tr>

				<tr>
					<td class="pTableFeature">Creative content ideas</td>
					<td><span class="tableBullet econCol">•</span></td>
					<td><span class="tableBullet redwoodCol">•</span></td>
					<td><span class="tableBullet deluxeCol">•</span></td>
				</tr>

				<tr>
					<td class="pTableFeature">Social media management</td>
					<td></td>
					<td><span class="tableBullet redwoodCol">•</span></td>
					<td><span class="tableBullet deluxeCol">•</span></td>
				</tr>

				<tr>
					<td class="pTableFeature">Build Online Presence</td>
					<td></td>
					<td><span class="tableBullet redwoodCol">•</span></td>
					<td><span class="tableBullet deluxeCol">•</span></td>
				</tr>

				<tr>
					<td class="pTableFeature">Opportunity reach analysis</td>
					<td></td>
					<td></td>
					<td><span class="tableBullet deluxeCol">•</span></td>
				</tr>

				<tr>
					<td class="pTableFeature">Industry research
					</td>
					<td></td>
					<td></td>
					<td><span class="tableBullet deluxeCol">•</span></td>
				</tr>

				<tr>
					<td class="pTableFeature">Photography session</td>
					<td></td>
					<td></td>
					<td><span class="tableBullet deluxeCol">•</span></td>
				</tr>
				</tbody>
			</table>
				<div style="padding-bottom: 100px !important;"></div>
			</div>
        </div>
        <!--<div style="width: 100%; height:20px; background-color: white"></div>-->
        <!--relaunch package section-->
        <div style="width: 100%; margin: 0;">
            <div class="alignDiv">
                <h1 class="pageHeading bTextSpacerT bTextSpacerB"> Introducing... </h1>

                <!--Flexbox containing rocket and info-->
                <div id="rocketBox">
                    <!--Rocket-->
                    <img id="relaunchRocket" src="/resources/images/rocket.svg" alt="The redwood rocket">
                    <div class="rocketSideInfo">
                        <div class="rocketTextPanel">
                            <h2> Relaunch Package</h2>
                        </div>
                        <!-- Provide padding around box -->
                        <div style="padding:20px">
                            <div class="alignDiv">
                                <br>
                                <p class="mTextSpacerB"> Here at Redwood we understand the devastating affects Coronavirus has had on businesses, that's why we're introducing our Relaunch package to help you come out of lockdown stronger than ever.  </p>
                                <div class="packageFeaturesSection mTextSpacerB">
                                    <div class="packageFeature">
                                        <div class="bullet relaunchBackground"></div>
                                        <p>Online reopening event</p>
                                    </div>
                                    <div class="packageFeature">
                                        <div class="bullet relaunchBackground"></div>
                                        <p>Multiple advert creation</p>
                                    </div>
                                    <div class="packageFeature">
                                        <div class="bullet relaunchBackground"></div>
                                        <p>Active marketing</p>
                                    </div>
                                </div>
                                <button id="rocketInfoButton" class="transButton" style="background-color: #00AEE0 !important; color: white !important;">Find out more</button>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Spacer at bottom (removed)-->
                <div class="spacer"></div>
            </div>
        </div>
	</main>

</div>

<!--Import Footer-->
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/includes/footer.php";
   include_once($path);
?>

</body>
</html>
