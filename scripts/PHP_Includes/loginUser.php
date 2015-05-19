<?php
ob_start();
session_start();
include ('db_conx.php');

//Variables from form
	$email = $_POST['emailInput']; 	
	$password = $_POST['passwordInput'];

		$select = "SELECT * FROM userData WHERE email='$email'";
		$result = mysql_query($select, $con)or die("ERROR".mysql_error());
		
		$userData = mysql_fetch_array($result);
		
		if(mysql_num_rows($result) == 0 ){
			header('location: ../../index.php');
			exit;
		}

		if($password != $userData['password']){
			header('location: ../../index.php');
			exit();
		} else {
			
			$_SESSION['userid']			= $userData['id'];
			$_SESSION['userProfilePicLastUpdate']= $userData['profilePicLastUpdate'];
			$_SESSION['userFirstName'] 	= $userData['firstName'];
			$_SESSION['userLastName'] 	= $userData['lastName'];
			$_SESSION['userUsername'] 	= $userData['username'];
			$_SESSION['userEmail'] 		= $userData['email'];
			$_SESSION['userPassword'] 	= $userData['password'];
			$_SESSION['userDOBDay']		= $userData['DOBDay'];
			$_SESSION['userDOBMonth']	= $userData['DOBMonth'];
			$_SESSION['userDOBYear']	= $userData['DOBYear'];
			$_SESSION['userHouseNumber']= $userData['houseNumber'];
			$_SESSION['userHouseStreet']= $userData['houseStreet'];
			$_SESSION['userHouseTown']	= $userData['houseTown'];
			$_SESSION['userHouseCounty']= $userData['houseCounty'];
			$_SESSION['userHousePostcode']= $userData['housePostcode'];
			$_SESSION['userFeedbackScore']= $userData['feedbackScore'];
			
			setcookie("cookieEmail", $userData['email'], strtotime( '+30 days' ), "/", "", "", TRUE);
			setcookie("cookiePassword", $userData['password'], strtotime( '+30 days' ), "/", "", "", TRUE);
			
			header('location: ../../home.php');
	}
exit();