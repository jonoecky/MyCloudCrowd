<?php
include 'scripts/PHP_Includes/db_conx.php';

$getUserName = $_GET['userName'];

$select = "SELECT * FROM userData WHERE username='$getUserName'";
$result = mysql_query($select, $con)or die("ERROR".mysql_error());

$getUserData = mysql_fetch_array($result);

$getId			= $getUserData['id'];
$getFirstName 	= $getUserData['firstName'];
$getLastName 	= $getUserData['lastName'];
$getUsername 	= $getUserData['username'];
$getEmail 		= $getUserData['email'];
$getPassword 	= $getUserData['password'];
$getDOBDay		= $getUserData['DOBDay'];
$getDOBMonth	= $getUserData['DOBMonth'];
$getDOBYear	= $getUserData['DOBYear'];
$getHouseNumber= $getUserData['houseNumber'];
$getHouseStreet= $getUserData['houseStreet'];
$getHouseTown	= $getUserData['houseTown'];
$getHouseCounty= $getUserData['houseCounty'];
$getHousePostcode= $getUserData['housePostcode'];
$getFeedbackScore= $getUserData['feedbackScore'];
