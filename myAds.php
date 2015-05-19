<?php
// If user is not logged in, header them away
include 'scripts/PHP_Includes/checklogin.php';
?>

<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="styles/global.css"/>
		<link rel="stylesheet" type="text/css" href="styles/myAds.css"/>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<meta>
		<title>myAds</title>
	</head>
<?php
include ('scripts/PHP_Includes/header.php');
?>

<span class="centerHeader">myAds</span>
<span id="myWorksGoToMyAds"><a href="myWorks.php">myWorks</a></span>
<span id="goTo">Go to</span>
<div id="myWorksCreateAd"><a href="createAd.php">Create an advert</a></div>


<div class="myWorksHideScroll">
	<div id="myWorksWatching">
		<span class="centerHeader">Active Ads</span>
		<span class="myWorksDeleteBtn"><button>Delete</button></span>
		<p>
		<div class="advertBack">
				<div class="advertPicture">
				<div class="innerPicture">
					<img class="adPic" alt="" src="images/Master/Children.jpg">
					<input type="checkbox" class="selectAdChkBx">
				</div>
				</div> 
				<span class="advertTitle">$AdvertTitle</span>
				<span class="advertPrice">$Price</span>
				<div class="advertContent">This is the advert description. Way nor furnished 
				sir procuring therefore but. Warmth far manner myself to.
				</div>
			</div>
			
			
</div>
</div>
<div class="myWorksHideScroll">
	<div id="myWorksBidding">
		<span class="centerHeader">Ended Ads</span>
		<span class="myWorksDeleteBtn"><button>Delete</button></span>
		<p>
		<div class="advertBack">
			<div class="advertPicture">
				<img src="images/testImages/7.jpg">
				<input type="checkbox" class="selectAdChkBx">
			</div> 
			<span class="advertTitle">$AdvertTitle</span>
			<span class="advertPrice">$Price</span>
			<div class="advertContent">This is the advert description. Way nor furnished 
			sir procuring therefore but. Warmth far manner myself to.
			</div>
		</div>
		
		<div class="advertBack">
			<div class="advertPicture">
				<img src="images/testImages/8.jpg">
				<input type="checkbox" class="selectAdChkBx">
			</div> 
			<span class="advertTitle">$AdvertTitle</span>
			<span class="advertPrice">$Price</span>
			<div class="advertContent">This is the advert description. Way nor furnished 
			sir procuring therefore but. Warmth far manner myself to.
			</div>
		</div>
		
		<div class="advertBack">
			<div class="advertPicture">
				<img src="images/testImages/9.jpg">
				<input type="checkbox" class="selectAdChkBx">
			</div> 
			<span class="advertTitle">$AdvertTitle</span>
			<span class="advertPrice">$Price</span>
			<div class="advertContent">This is the advert description. Way nor furnished 
			sir procuring therefore but. Warmth far manner myself to.
			</div>
		</div>
	</div>
</div>

<?php 
include ('scripts/PHP_Includes/footer.php');
?>