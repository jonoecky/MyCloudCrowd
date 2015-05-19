<?php
include_once 'checklogin.php';
include_once 'db_conx.php';


$addContactUsername = $_GET['username'];

$insert = "INSERT INTO contact (username1, username2)
VALUES ('$addContactUsername', '$username')";

//Query
$success = mysql_query($insert, $con) or die("Sorry there was an error, please try again. If this continues to occur, please contact admin@myCloudCrowd.co.uk quoting the error: ".mysql_error());

if($success == 1){
	header("location: ../../home.php");
}