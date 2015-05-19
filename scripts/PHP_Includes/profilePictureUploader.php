<?php
include 'checklogin.php';
include 'db_conx.php';

$targetPath = "../../users/" . "$username" . "/profilePic/";

$currentDateTime = new DateTime();
$currentDateTime ->getTimestamp();
$str = $currentDateTime ->format('YmdHis');

$newDateTime = new DateTime();
$newDateTime ->getTimestamp();
$str2 = $newDateTime ->format('ymdhis');

$targetPath = $targetPath. "$str" . ".jpg";

if ($_FILES['uploadedProfilePicture']['name'] < 50000){
	if (move_uploaded_file($_FILES['uploadedProfilePicture']['tmp_name'], $targetPath)){
// CREATE NEW IMAGE AS 500PX WIDE -------------------------------->
		$imgSize = getimagesize($targetPath);
		$imgWidth = $imgSize[0];
		$imgHeight = $imgSize[1];
		$newWidth = 500;
		$newHeight = $imgHeight / ($imgWidth / $newWidth);
		$resizedImgPath = "../../users/" . "$username" . "/profilePic/" . "$str2" . ".jpg";
		
		$newImg = imagecreatetruecolor($newWidth, $newHeight);
		$srcImg = imagecreatefromjpeg($targetPath);
		imagecopyresampled($newImg, $srcImg, 0, 0, 0, 0, $newWidth, $newHeight, $imgWidth, $imgHeight);
		imagejpeg($newImg, $resizedImgPath, 100);
		
// UPDATE DATABASE AND UPDATE SESSION DATA ------------------------->
		$update = "UPDATE userData SET profilePicLastUpdate='$str2' WHERE username='$username'";
				mysql_query($update, $con)or die("ERROR: ".mysql_error());
				
		$select = "SELECT profilePicLastUpdate FROM userData WHERE username='$username'";
		$result = mysql_query($select, $con)or die("ERROR".mysql_error());
		
		$userData = mysql_fetch_array($result);
		$_SESSION['userProfilePicLastUpdate']= $userData['profilePicLastUpdate'];
		
// DELETE ALL FILES IN FOLDER THAT AREN'T THE CURRENT PICTURE ------>
		$path = glob("../../users/" . "$username" . "/profilePic/*");
		
		foreach($path as $file){ 
		  if($file != $resizedImgPath)
		    unlink($file); 
		}
		
		$_SESSION['uploadFinished'] = true;
		
		header('location: ../../uploadProfilePicture.php');
	}else{
		header('location: ../../home.php');
	}
}