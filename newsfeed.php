<?php
// If user is not logged in, header them away
include 'scripts/PHP_Includes/checklogin.php';
?>

<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="styles/global.css"/>
		<link rel="stylesheet" type="text/css" href="styles/newsfeed.css"/>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<meta>
		<title>Newsfeed</title>
	</head>
<?php
include ('scripts/PHP_Includes/header.php');
?>

<div class="centerHeader">Newsfeed</div>

<div class="newsfeedItem">
	$NewsfeedItem
</div>

<div class="newsfeedItem">
	$NewsfeedItem
</div>

<div class="newsfeedItem">
	$NewsfeedItem
</div>

<div class="newsfeedItem">
	$NewsfeedItem
</div>

<div class="newsfeedItem">
	$NewsfeedItem
</div>


<?php 
include ('scripts/PHP_Includes/footer.php');
?>