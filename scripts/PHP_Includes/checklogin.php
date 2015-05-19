<?php
session_start();
// If user is not logged in, header them away
if(!isset($_SESSION['userEmail'])){
	header('location: index.php');
	exit();
}else{
	$profilePicLastUpdate = $_SESSION['userProfilePicLastUpdate'];
	$username 		= $_SESSION['userUsername'];
	$firstname 		= $_SESSION['userFirstName'];
	$lastname 		= $_SESSION['userLastName'];
	$email 			= $_SESSION['userEmail'];
	$password 		= $_SESSION['userPassword'];
	$DOBDay 		= $_SESSION['userDOBDay'];
	$DOBMonth		= $_SESSION['userDOBMonth'];
	$DOBYear		= $_SESSION['userDOBYear'];
	$houseNumber	= $_SESSION['userHouseNumber'];
	$houseStreet	= $_SESSION['userHouseStreet'];
	$houseTown		= $_SESSION['userHouseTown'];
	$houseCounty	= $_SESSION['userHouseCounty'];
	$housePostcode 	= $_SESSION['userHousePostcode'];
	$feedbackScore	= $_SESSION['userFeedbackScore'];
}
