<?php
include 'db_conx.php';

//Variables from form
$firstName 	  	= $_POST['firstNameInput'];
$lastName 		= $_POST['lastNameInput'];
$username		= $_POST['usernameInput'];
$email 			= $_POST['enterEmailInput'];
$password 		= $_POST['enterPasswordInput'];
$DOBDay 		= $_POST['dayDropdown'];
$DOBMonth		= $_POST['monthDropdown'];
$DOBYear		= $_POST['yearDropdown'];
$houseNumber	= $_POST['houseNumberInput'];
$houseStreet	= $_POST['streetNameInput'];
$houseTown		= $_POST['townInput'];
$houseCounty	= $_POST['countyInput'];
$housePostcode 	= $_POST['postcodeInput'];
$feedbackScore	= 50;

//REMINDER - SANITIZE DATA!!

//Insert statement
$insert = "INSERT INTO userData (firstName, lastName, username, email, password, DOBDay, DOBMonth, DOBYear, houseNumber, houseStreet, houseTown, houseCounty, housePostcode, feedbackScore)
VALUES ('$firstName', '$lastName', '$username', '$email', '$password', '$DOBDay', '$DOBMonth', '$DOBYear', '$houseNumber', '$houseStreet', '$houseTown', '$houseCounty', '$housePostcode', '$feedbackScore')";

//Query
$success = mysql_query($insert, $con) or die("Sorry there was an error, please try again. If this continues to occur, please contact admin@myCloudCrowd.co.uk quoting the error: ".mysql_error());
$result = "";

// Create directory to hold each users data
if (!file_exists("../../users/$username")) {
	mkdir("../../users/$username", 0777, true);
}

if (!file_exists("../../users/$username/profilePc")) {
	mkdir("../../users/$username/profilePic", 0777, true);
}

//Check for success
if ($success == 1){
	header("location: http://mycloudcrowd.co.uk/home.php");
}
elseif ($success == 0) {
	$result = "FAIL!";
}
else {
	$result = "UNKNOWN ERROR";
}


echo "<html><body>";

//Output if success
echo $result;

echo"</body></html>";
?>