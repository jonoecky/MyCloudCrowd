<?php 
include 'scripts/PHP_Includes/db_conx.php';
//GET USERS PROFILE PICTURE TARGET TO BE DISPLAYED
	$profilePicTarget = "../../users/" . "$username" . "/profilePic/" . "$profilePicLastUpdate" . ".jpg";
	
// CHECK IF SIGNED IN USER OR VIEWING OTHER USER PROFILE PICTURE TO BE DISPLAYED
	//$checkUser = $_GET['username'];
	$selectProfPicLastUpda = "SELECT * FROM userData WHERE username='$username'";
	$chKResult = mysql_query($selectProfPicLastUpda, $con)or die("ERROR".mysql_error());
	$RtrnData = mysql_fetch_array($chKResult);
	$lastUpdate = $RtrnData['profilePicLastUpdate'];
	
	
// SET FEEDBACK COLOUR AND BAR LENGHTH BASED ON PERCENTAGE RETURNED
	$percentageBar = $feedbackScore * 2.01;
	
	if($feedbackScore <= 25){
		$feedbackColor = 'background-color:#FF0000;"';
		$feedbackColor2 = 'style="background-color:#FF4F4F;"';
	}elseif($feedbackScore < 50){
		$feedbackColor = 'background-color:#F6FF00;"';
		$feedbackColor2 = 'style="background-color:#FBFF80;"';
		
	}else{
		$feedbackColor = 'background-color:#11E809;"';
		$feedbackColor2 = 'style="background-color:#72FF6E;"';
	}
?>
<body>
<!-- Header -->
<form onsubmit="scripts/PHP_Includes/search.php" name="search">
	<div id="header">
		<div class="holder">
			<div class="logo">
				<a href="home.php"><img id="logo" alt="logo" src="images/Master/logo.gif"/></a>
			</div>
			<span id="helloSpan">
				Hello, <?php echo $username?>
				<br/>
				<div id="headViewProfile"><a href="userProfile.php?userName=<?php echo $username?>">View profile</a></div>
			</span>
				<a href="../../userProfile.php?userName=<?php echo $username?>"><img id="headerUserPictreDiv" src="<?php if($profilePicLastUpdate != null){echo $profilePicTarget;}else
				{echo "../../images/testImages/profilePic.png";}?>" style="width: 30px; height: 30px;"></a>

			<span class="menuInputDiv">
				<input id="menuInput">
			</span>
			<span id="goButtonSpan">
				<input name="search"  id="submitSearch" type="submit" value="GO" style="width: 50px; height: 30px;">
			</span>
			<span id="homeSpan">
				<a href="home.php"> Home	</a>
			</span>
			<span id="myWorksSpan">
				<a href="myWorks.php">myWorks</a>
			</span>
			<span id="supportSpan">
				<a href="support.php">Support</a>
			</span>
			<span id="messageSpan">
				<a href="messages.php">	Messages</a>
			</span>
			<span id="settingsSpan">
				<a href="settings.php"> <img alt="settings" src="images/Master/settings.png">	</a>
			</span>
			<span id="logOutSpan">
				<a href="scripts/PHP_Includes/logOut.php"> Log out	</a>
			</span>
		</div>
	</div>
</form>
	<div id="backgroundOuterBorder">
		<div id="backgroundInnerBorder">


			<div id="leftDiv">
	
				<?php echo $firstname ." ". $lastname?> 
					<div id="userPhotoDiv">
						<a href="uploadProfilePicture.php"><img id="uploadProfilePicture" class="userProfilePic" src="<?php 
						if($checkUser!= null && $checkUser != $username){
							echo "../../users/" . $checkUser . "/profilePic/" . $lastUpdate . ".jpg";
						}
						elseif($profilePicLastUpdate != null){
							echo $profilePicTarget;
						}else{
							echo "../../images/testImages/profilePic.png";
						}?>"></a>
					</div>
				Current Feedback Score
				<div id="userFeedbackDiv">
					<div id="percentageBar" <?php echo $feedbackColor2?>>
						<div id="centerPercentage">
							<div id="percentageColour" <?php echo 'style="width:' . $percentageBar . 'px; ' . $feedbackColor?>>
								<?php echo $feedbackScore ?>%
							</div>
						</div>
					</div>
				</div>
				Your Contacts 
				<a href="toggleContactsView.php"><span id="toggleContactView">(Toggle View)</span></a>
				<div id="leftContactsScroll">
					<div id="contactsDiv">
						<a href="../../userProfile.php?userName=eckloffkj"><img src="../../users/eckloffkj/profilePic/20140225230810.jpg" class="userContacts"></a>
						<img src="images/testImages/headProfilePic.png" class="userContacts">
						<img src="images/testImages/headProfilePic.png" class="userContacts">
						<img src="images/testImages/headProfilePic.png" class="userContacts">
						<img src="images/testImages/headProfilePic.png" class="userContacts">
						<img src="images/testImages/headProfilePic.png" class="userContacts">
						<img src="images/testImages/headProfilePic.png" class="userContacts">
						<img src="images/testImages/headProfilePic.png" class="userContacts">
						<img src="images/testImages/headProfilePic.png" class="userContacts">
						<img src="images/testImages/headProfilePic.png" class="userContacts">
						<img src="images/testImages/headProfilePic.png" class="userContacts">
						<img src="images/testImages/headProfilePic.png" class="userContacts">
						<img src="images/testImages/headProfilePic.png" class="userContacts">
						<img src="images/testImages/headProfilePic.png" class="userContacts">
						<img src="images/testImages/headProfilePic.png" class="userContacts">
						<img src="images/testImages/headProfilePic.png" class="userContacts">
						<img src="images/testImages/headProfilePic.png" class="userContacts">

					</div>
				</div>
			</div>
			<div id="centerWrapper">
			<div id="centerDiv">
			
			
			
			
			
			
			
			
			