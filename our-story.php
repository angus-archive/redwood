<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/a_config.php";include_once($path); ?>
<html lang="en">
<head>
	<!--Head Tags-->
    <?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/head-tags.php";include_once($path);?>
</head>
<body>

<div id="content">
	<!--Header-->
    <?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/header-content.php";include_once($path);?>
	<!--Nav-Bar-->
    <?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/navigation.php";include_once($path); ?>

    <!--Main Content-->
    <main>
        <div class="wrapper">
            <!--spacer-->
            <div class="spacer"></div>
            <div class="alignDiv">
                <h1 class="pageHeading sTextSpacerB"> Our Story </h1>
                <p style="width: 50%; text-align: center; max-width: 500px" class="mTextSpacerB"> Meet our team</p>
                <div class="flexGrid">

                    <!-- Jamie -->
                    <div class="personContainer">
                        <div class="personImageContainer">
                            <img src="resources/images/jamie.jpg" alt="Portrait picture of Jamie">
                        </div>
                        <div class="personInfoContainer">
                            <h3> Jamie </h3>
                            <div class="personSkillsBar">
                                <div class="personSkill">
                                    <div class="tooltip">
                                        <span class="tooltiptext">Business strategy specialist</span>
                                        <img class="personIcon" src="resources/images/ideasIcon.png" alt="Business strategy specialist Icon">
                                    </div>
                                </div>
                            </div>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                        </div>

                    </div>
                    <!-- James -->
                    <div class="personContainer">
                        <div class="personImageContainer">
                            <img src="resources/images/james.jpg" alt="Portrait picture of James">
                        </div>
                        <div class="personInfoContainer">
                            <h3> James </h3>
                            <div class="personSkillsBar">
                                <div class="personSkill">
                                    <div class="tooltip">
                                        <span class="tooltiptext">Financial Specialist</span>
                                        <img class="personIcon" src="resources/images/financeIcon.png" alt="Financial Specialist Icon">
                                    </div>
                                </div>
                            </div>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                        </div>
                    </div>
                    <!-- Jordan -->
                    <div class="personContainer">
                        <div class="personImageContainer">
                            <img src="resources/images/jordan.jpg" alt="Portrait picture of Jordan">
                        </div>
                        <div class="personInfoContainer">
                            <h3> Jordan </h3>
                            <div class="personSkillsBar">
                                <div class="personSkill">
                                    <div class="tooltip">
                                        <span class="tooltiptext">Customer Support</span>
                                        <img class="personIcon" src="resources/images/supportIcon.png" alt="Customer Support Icon">
                                    </div>
                                </div>
                                <div class="personSkill">
                                    <div class="tooltip">
                                        <span class="tooltiptext">Trading Expert</span>
                                        <img class="personIcon" src="resources/images/stockIcon.png" alt="Trading Expert Icon">
                                    </div>
                                </div>
                            </div>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                        </div>
                    </div>
                    <!-- Dylan -->
                    <div class="personContainer">
                        <div class="personImageContainer">
                            <img src="resources/images/dylan.jpeg" alt="Portrait picture of Dylan">
                        </div>
                        <div class="personInfoContainer">
                            <h3> Dylan </h3>
                            <div class="personSkillsBar">
                                <div class="personSkill">
                                    <div class="tooltip">
                                        <span class="tooltiptext">Catering specialist</span>
                                        <img class="personIcon" src="resources/images/foodIcon.png" alt="Catering Specialist Icon">
                                    </div>
                                </div>
                            </div>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                        </div>
                    </div>
                    <!-- Angus -->
                    <div class="personContainer">
                        <div class="personImageContainer">
                            <img src="resources/images/angus.jpg" alt="Portrait picture of Angus">
                        </div>
                        <div class="personInfoContainer">
                            <h3> Angus </h3>
                            <div class="personSkillsBar">
                                <div class="personSkill">
                                    <div class="tooltip">
                                        <span class="tooltiptext">Technology Specialist</span>
                                        <img class="personIcon" src="resources/images/techIcon.png" alt="Technology Specialist Icon">
                                    </div>
                                </div>
                                <div class="personSkill">
                                    <div class="tooltip">
                                        <span class="tooltiptext">Designer</span>
                                        <img class="personIcon" src="resources/images/designIcon.png" alt="Designer Icon">
                                    </div>
                                </div>
                            </div>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                        </div>
                    </div>
                    <!-- Cameron -->
                    <div class="personContainer">
                        <div class="personImageContainer">
                            <img src="resources/images/cameron.jpg" alt="Portrait of Cameron">
                        </div>
                        <div class="personInfoContainer">
                            <h3> Cameron </h3>
                            <div class="personSkillsBar">
                                <div class="personSkill">
                                    <div class="tooltip">
                                        <span class="tooltiptext">Social media marketing specialist</span>
                                        <img class="personIcon" src="resources/images/socialIcon.png" alt="Social media marketing specialist icon">
                                    </div>
                                </div>
                            </div>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--BIG footer spacer-->
        <div class="bigSpacer"></div>
    </main>

</div>

<!--Footer-->
<?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/includes/footer.php";include_once($path);?>

</body>
</html>