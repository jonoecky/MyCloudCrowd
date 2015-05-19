<?php
// If user is not logged in, header them away
include 'scripts/PHP_Includes/checklogin.php';
?>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="styles/global.css"/>
		<link rel="stylesheet" type="text/css" href="styles/createAd.css"/>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<meta>
		<title>Create myAd</title>
	</head>

<?php
include ('scripts/PHP_Includes/header.php');
?>

<span class="centerHeader">Create Your Advert</span>
<span id="postAd"><a href="postAd.php">Post myAd</a></span>
<span id="finish">Finish and </span>	
	<div id="createAdCenter">
		<div id="createAdLeft">
			<div class="creatAdTtitle">Give it a title
				<span class="maxCharCount" > (Max 20 characters)</span>
			</div>
			<input type="text">
			
			<a href="uploadAdPhoto.php">
				<div id="uploadAdPhoto">
					<div id="uploadAdPhotoPlus">
						<img src="images/Master/plus.png">
					</div>
					<div id="uploadAdPhotoText">
					<p>
						Upload Photo
					</div>
				</div>
			</a>
			
			<div id="adCategory">
				<p>
					<div class="creatAdTtitle">Categories</div>
				<select>
					<option>Arts, Craft & Entertainment </option>
					<option>Building, Construction & Property </option>
					<option>Education & Training </option>
					<option>Health, Care & Community </option>
					<option>Hospitality, Travel & Leisure </option>
					<option>IT, Web, Electronic & Telecoms</option>
					<option>Media & Language</option>
					<option>Office , Secretarial and Admin</option>
					<option>Outdoor , Cleaning  & Other</option>	
					<option>Community Help</option>	
					<option>Transport & Logistics </option>		
				</select>
			</div>
			
			<div id="createAdOverView">
				<div class="creatAdTtitle">
					Overview
					<span class="maxCharCount" > (Max 120 characters)</span>
				</div>
				<textarea class="maxCharCount" id="overViewTextarea"></textarea>
			</div>
		</div>
		
		<div id="createAdRight">
			<div class="creatAdTtitle">
				Willing to Pay
			</div>
			<input type="text">
			<select>
				<option>Per hour</option>
				<option>Whole Job</option>
				<option>N/A - Offers Only</option>
			</select>
		</div>
		
		
			<div id="createAdDetail">
				<div class="creatAdTtitle">
					Detail
					<span class="maxCharCount" > (Max 1000 characters)</span>
				</div>
				<textarea class="maxCharCount" id="detailTextarea"></textarea>
			</div>
	</div>	

<?php 
include ('scripts/PHP_Includes/footer.php');
?>