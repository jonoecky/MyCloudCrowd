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

$fileName = $_FILES["newPic"]["name"]; // The file name
$fileTmpLoc = $_FILES["newPic"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["newPic"]["type"]; // The type of file it is
$fileSize = $_FILES["newPic"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["newPic"]["error"]; // 0 for false... and 1 for true

if (!$fileTmpLoc) { // if file not chosen
	echo "ERROR: Please browse for a file before clicking the upload button.";
	exit();
}

if(move_uploaded_file($fileTmpLoc, $targetPath)){
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
		
		echo "Upload Successful";
		$_SESSION['uploadFinished'] = true;
		//header('location: ../../uploadProfilePicture.php');
	}else{
		echo "Upload failed";
	}
