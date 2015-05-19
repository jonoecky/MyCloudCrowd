<?php
include 'checklogin.php';
include 'db_conx.php';

$profilePicTarget = "../../users/" . "$username" . "/profilePic/" . "$profilePicLastUpdate" . ".jpg";

$currentDateTime = new DateTime();
$currentDateTime ->getTimestamp();

$str = $currentDateTime ->format('YmdHis');

$croppedProfilePic = "../../users/" . "$username" . "/profilePic/" . "$str" . ".jpg";

$dst_x = 0;
$dst_y = 0;
$src_x = $_POST['x'];       
$src_y = $_POST['y'];       
$dst_w = $_POST['w'];        
$dst_h = $_POST['h'];        
$src_w = $_POST['w'];  
$src_h = $_POST['h'];

$dst_image = imagecreatetruecolor($dst_w,$dst_h);
$src_image = imagecreatefromjpeg($profilePicTarget);
imagecopyresampled($dst_image, $src_image, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h);

if(imagejpeg($dst_image, $croppedProfilePic)){
	
	$update = "UPDATE userData SET profilePicLastUpdate='$str' WHERE username='$username'";
				mysql_query($update, $con)or die("ERROR: ".mysql_error());
		
		$select = "SELECT profilePicLastUpdate FROM userData WHERE username='$username'";
		$result = mysql_query($select, $con)or die("ERROR".mysql_error());
		
		$userData = mysql_fetch_array($result);
		
		$_SESSION['userProfilePicLastUpdate']= $userData['profilePicLastUpdate'];
		
		$path = glob("../../users/" . "$username" . "/profilePic/*");
		
		foreach($path as $file){
			if($file != $croppedProfilePic)
				unlink($file);
		}
		
		header('location: ../../home.php');
}else{
	echo "ERROR";
}



?>