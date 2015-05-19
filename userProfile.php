<?php
// If user is not logged in, header them away
include 'scripts/PHP_Includes/checklogin.php';
include 'scripts/PHP_Includes/showUser.php';

//IF USER IS VIEWING THERE OWN PROFILE HIDE "ADD CONTACT" & SHOW EDIT ITEMS
$display = "inline;";
$display2 = "none;";

If($username == $getUsername){
	$display = "none;";
	$display2 = "inline;";
}

//CHECK IF USERS ARE ALREADY CONTACTS

?>

<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="styles/global.css"/>
		<link rel="stylesheet" type="text/css" href="styles/userProfile.css"/>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<meta>
		<title>Profile</title>
	</head>

<?php
include ('scripts/PHP_Includes/header.php');
?>
<div class="centerHeader">User Profile</div><span id="addContact" style='display:<?echo $display?>'><a href="scripts/PHP_Includes/addContact.php?username=<?php echo $getUsername?>"> Add Contact</a></span>
<p/>

<div id="userDivLeft">
	<div id="basicInfo">
	<div class="userInfoHeader">
			Basic Information
			<span class="userInfoUpdate">
					<a href="editBasicInfo.php" style='display:<?echo $display2?>'>Edit</a>
			</span>
		</div>
		<span id="userFirstName"><b>Name:</b> <?php echo $getFirstName?></span>
		<span id="userLasttName"><?php echo $getLastName?></span>
		<div id="userDOB"><b>Birth year: </b><?php echo $getDOBYear?></div>
		<div id="usertown"><b>Location: </b><?php echo $getHouseTown?></div>
		<div id="userFeedback"><b>Feedback Score: </b><?php echo $getFeedbackScore?>%</div>
	</div>
	
	<div id="cv">
		<div class="userInfoHeader">
			Download CV
				<span class="userInfoUpdate">
					<a href="updateCV.php" style='display:<?echo $display2?>'> Upload CV</a>
				</span>
		</div>
		<?php
			if(isset($getDownload)){
				echo $getDownloadCV;
			}else{
				echo "There is no information to display about this users CV right now.. <p> 
				Please check back when the user has updated their information.";
			}
		?>
	</div>
	
	<div id="aboutMe">
		<div class="userInfoHeader">
			About Me
			<span class="userInfoUpdate">
					<a href="editAboutMe.php" style='display:<?echo $display2?>'>Edit</a>
			</span>
		</div>
		<?php
			if(isset($getAboutMe)){
				echo $getAboutMe;
			}else{
				echo "There is no ABOUT ME information to display for this user right now.. <p>
				Please check back when the user has updated their information.";
			}
		?>
		<div class="infoShowMore">
			<a href="meShowMore.php">Show more</a>
		</div>
	</div>
	
	<div id="education">
		<div class="userInfoHeader">
			Education
			<span class="userInfoUpdate">
					<a href="editEducation.php" style='display:<?echo $display2?>'>Edit</a>
			</span>
		</div>
		<?php
			if(isset($getEducation)){
				echo $getEducation;
			}else{
				echo "There is no information to display about this user's EDUCATION right now.. <p>
				Please check back when the user has updated their information.";
			}
		?>
		<div class="infoShowMore">
			<a href="educationShowMore.php">Show more</a>
		</div>
	</div>
	
	<div id="training">
		<div class="userInfoHeader">
			Training
			<span class="userInfoUpdate">
					<a href="editTraining.php" style='display:<?echo $display2?>'>Edit</a>
			</span>
		</div>
		<?php
			if(isset($getTraining)){
				echo $getTraining;
			}else{
				echo "There is no information to display about this user's TRAINING right now.. <p>
				Please check back when the user has updated their information.";
			}
		?>
		<div class="infoShowMore">
			<a href="trainingShowMore.php">Show more</a>
		</div>
	</div>
	
	<div id="experience">
		<div class="userInfoHeader">
			Experience
			<span class="userInfoUpdate">
					<a href="editExperience.php" style='display:<?echo $display2?>'>Edit</a>
			</span>
		</div>
		<?php
			if(isset($getExperience)){
				echo $getExperience;
			}else{
				echo "There is no information to display about this user's EXPERIENCES right now.. <p>
				Please check back when the user has updated their information.";
			}
		?>
		<div class="infoShowMore">
			<a href="experienceShowMore.php">Show more</a>
		</div>
	</div>
	
	<div id="workHistory">
		<div class="userInfoHeader">
			Work History
			<span class="userInfoUpdate">
					<a href="editWork.php" style='display:<?echo $display2?>'>Edit</a>
			</span>
		</div>
		<?php
			if(isset($getWorkHistory)){
				echo $getWorkHistory;
			}else{
				echo "There is no information to display about this user's WORK HISTORY right now.. <p>
				Please check back when the user has updated their information.";
			}
		?>
		<div class="infoShowMore">
			<a href="workShowMore.php">Show more</a>
		</div>
	</div>
	
	<div id="keySkills">
		<div class="userInfoHeader">
			Key Skills
			<span class="userInfoUpdate">
					<a href="editSkills.php" style='display:<?echo $display2?>'>Edit</a>
			</span>
		</div>
		<?php
			if(isset($getKeySkills)){
				echo $getKeySkills;
			}else{
				echo "There is no information to display about this user's KEY SKILLS right now.. <p>
				Please check back when the user has updated their information.";
			}
		?>
		<div class="infoShowMore">
			<a href="skillsShowMore.php">Show more</a>
		</div>
	</div>
	
	<div id="aditionalInformation">
		<div class="userInfoHeader">
			Aditional Information
			<span class="userInfoUpdate">
					<a href="editAditionalInfo.php" style='display:<?echo $display2?>'>Edit</a>
			</span>
		</div>
		<?php
			if(isset($getAdditionalInformation)){
				echo $getAdditionalInformation;
			}else{
				echo "There is no ADDITIONAL INFORMATION about this user right now.. <p>
				Please check back when the user has updated their information.";
			}
		?>
		<div class="infoShowMore">
			<a href="infoShowMore.php">Show more</a>
		</div>
	</div>
	
</div>

<div id="userDivRight">
	Completed Jobs
</div>

<?php 
include ('scripts/PHP_Includes/footer.php');
?>