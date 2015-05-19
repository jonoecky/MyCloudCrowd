<?php
// If user is not logged in, header them away
include 'scripts/PHP_Includes/checklogin.php';
?>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="styles/global.css"/>
		<link rel="stylesheet" type="text/css" href="styles/home.css"/>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<meta>
		<title>Home</title>
	</head>
<?php
include ('scripts/PHP_Includes/header.php');
?>
<span class="centerHeader">Adverts</span>

<span id="scrollCheck" >
	<input type="checkbox" value="Show scroll bar">Show scroll bars
</span>
<div id="centerOptions">

	Order by
	<select>
		<option>Date posted</option>
		<option>Current price</option>
		<option>User rating</option>
		<option>Category</option>
	</select>
	<select id="orderBy" >
		<option>Deccending Order</option>
		<option>Accending Order</option>
	</select>
	Filter by
	<select>
		<option>Category</option>
		<option>Price</option>
	</select>
	Search radius
	<select>
		<option>5 miles</option>
		<option>10 miles</option>
		<option>15 miles</option>
		<option>20 miles</option>
		<option>25 miles</option>
		<option>30 miles</option>
		<option>National</option>
	</select>
	<input type="button" value="GO" />
	<p>
</div>


<div id="adverts">

	<a href="AdPage.php">
		<div class="advertBack">
			<div class="advertPicture">
				<img alt="" src="images/Master/Children.jpg">
			</div>	
			<span class="advertTitle">$AdvertTitle</span>
			<span class="advertPrice">$Price</span>
			<div class="advertContent">This is the advert description. Way nor furnished 
			sir procuring therefore but. Warmth far manner myself to.
			</div>
		</div>
	</a>
		
		<div class="advertBack">
			<div class="advertPicture">			
					<img src="images/testImages/1.jpg">
			</div> 
			<span class="advertTitle">$AdvertTitle</span>
			<span class="advertPrice">$Price</span>
			<div class="advertContent">This is the advert description. Way nor furnished 
			sir procuring therefore but. Warmth far manner myself to.
			</div>
		</div>
		
		<div class="advertBack">
			<div class="advertPicture">
			<img src="images/testImages/2.jpg">
			</div> 
			<span class="advertTitle">$AdvertTitle</span>
			<span class="advertPrice">$Price</span>
			<div class="advertContent">This is the advert description. Way nor furnished 
			sir procuring therefore but. Warmth far manner myself to.
			</div>
		</div>
		
		<div class="advertBack">
			<div class="advertPicture">
				<img src="images/testImages/3.jpg">
			</div> 
			<span class="advertTitle">$AdvertTitle</span>
			<span class="advertPrice">$Price</span>
			<div class="advertContent">This is the advert description. Way nor furnished 
			sir procuring therefore but. Warmth far manner myself to.
			</div>
		</div>
		
		<div class="advertBack">
			<div class="advertPicture">
			<img src="images/testImages/4.jpg">
			</div> 
			<span class="advertTitle">$AdvertTitle</span>
			<span class="advertPrice">$Price</span>
			<div class="advertContent">This is the advert description. Way nor furnished 
			sir procuring therefore but. Warmth far manner myself to.
			</div>
		</div>
		
		<div class="advertBack">
			<div class="advertPicture">
				<img src="images/testImages/5.jpg">
			</div> 
			<span class="advertTitle">$AdvertTitle</span>
			<span class="advertPrice">$Price</span>
			<div class="advertContent">This is the advert description. Way nor furnished 
			sir procuring therefore but. Warmth far manner myself to.
			</div>
		</div>
		
		<div class="googleAd"><img class="googleAd" src="images/testImages/google.png"></div>
		
		<div class="advertBack">
			<div class="advertPicture">
				<img src="images/testImages/6.jpg">
			</div> 
			<span class="advertTitle">$AdvertTitle</span>
			<span class="advertPrice">$Price</span>
			<div class="advertContent">This is the advert description. Way nor furnished 
			sir procuring therefore but. Warmth far manner myself to.
			</div>
		</div>
		
		<div class="advertBack">
			<div class="advertPicture">
				<img src="images/testImages/7.jpg">
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
			</div> 
			<span class="advertTitle">$AdvertTitle</span>
			<span class="advertPrice">$Price</span>
			<div class="advertContent">This is the advert description. Way nor furnished 
			sir procuring therefore but. Warmth far manner myself to.
			</div>
		</div>
		
		<div class="advertBack">
			<div class="advertPicture">
				<img src="images/testImages/3.jpg">
			</div> 
			<span class="advertTitle">$AdvertTitle</span>
			<span class="advertPrice">$Price</span>
			<div class="advertContent">This is the advert description. Way nor furnished 
			sir procuring therefore but. Warmth far manner myself to.
			</div>
		</div>
		
		<div class="advertBack">
			<div class="advertPicture">
			<img src="images/testImages/1.jpg">
			</div> 
			<span class="advertTitle">$AdvertTitle</span>
			<span class="advertPrice">$Price</span>
			<div class="advertContent">This is the advert description. Way nor furnished 
			sir procuring therefore but. Warmth far manner myself to.
			</div>
		</div>
		
		<div class="googleAd"><img class="googleAd" src="images/testImages/google.png"></div>
		
		<div class="advertBack">
			<div class="advertPicture">
				<img src="images/testImages/2.jpg">
			</div> 
			<span class="advertTitle">$AdvertTitle</span>
			<span class="advertPrice">$Price</span>
			<div class="advertContent">This is the advert description. Way nor furnished 
			sir procuring therefore but. Warmth far manner myself to.
			</div>
		</div>
		
		<div class="advertBack">
			<div class="advertPicture">
				<img src="images/testImages/5.jpg">
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
			</div> 
			<span class="advertTitle">$AdvertTitle</span>
			<span class="advertPrice">$Price</span>
			<div class="advertContent">This is the advert description. Way nor furnished 
			sir procuring therefore but. Warmth far manner myself to.
			</div>
		</div>
</div>
<?php 
include ('scripts/PHP_Includes/footer.php');
?>