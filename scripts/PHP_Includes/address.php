<?php 
include 'scripts/PHP_Includes/db_conx.php';

$addressNumber;
$addressStreet;
$addressTown;
$addressCounty;
$addressPostcode;

function getAddressNumer(){
	$return = $addressNumber;
	return($return);
}

function setAddressNumber($setAddressNumber){
	$addressNumber = $setAddressNumber;
}

function getAddresStreet(){
	$return = $addressStreet;
	return($return);
}

function sertAddress($setAddressStreet){
	$addressStreet = $setAddressStreet;
}

function getAddressTown(){
	$return = $addressTown;
	return($return);
}

function setAddressTown($setAddressStreet){
	$addressStreet = $setAddressStreet;
}

function getAddressCounty(){
	$return = $addresscounty;
	return($return);
}

function setAddressCounty($setAddressCounty){
	$addressCounty = $setAddressCounty;
}

?>