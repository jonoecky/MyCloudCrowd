<?php
// If user is not logged in, header them away
include 'scripts/PHP_Includes/checklogin.php';
?>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="styles/global.css"/>
		<link rel="stylesheet" type="text/css" href="styles/messages.css"/>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<meta>
		<title>Messages</title>
	</head>

<?php
include ('scripts/PHP_Includes/header.php');
?>

<div id="messagesLeftScroll">
<div  id="messagesLeftDiv">
	<div class="centerHeader">Contacts</div>
	<p>
	<div class="messagesContacts">
		<img class="messageContactsPic" src="images/testImages/headProfilePic.png">
		$Username
	</div>
	<div class="messagesContacts">
		<img class="messageContactsPic" src="images/testImages/headProfilePic.png">
		$Username
	</div>
	<div class="messagesContacts">
		<img class="messageContactsPic" src="images/testImages/headProfilePic.png">
		$Username
	</div>
	<div class="messagesContacts">
		<img class="messageContactsPic" src="images/testImages/headProfilePic.png">
		$Username
	</div>
	<div class="messagesContacts">
		<img class="messageContactsPic" src="images/testImages/headProfilePic.png">
		$Username
	</div>
	<div class="messagesContacts">
		<img class="messageContactsPic" src="images/testImages/headProfilePic.png">
		$Username
	</div>
	<div class="messagesContacts">
		<img class="messageContactsPic" src="images/testImages/headProfilePic.png">
		$Username
	</div>
	<div class="messagesContacts">
		<img class="messageContactsPic" src="images/testImages/headProfilePic.png">
		$Username
	</div>
	<div class="messagesContacts">
		<img class="messageContactsPic" src="images/testImages/headProfilePic.png">
		$Username
	</div>
	<div class="messagesContacts">
		<img class="messageContactsPic" src="images/testImages/headProfilePic.png">
		$Username
	</div>
	<div class="messagesContacts">
		<img class="messageContactsPic" src="images/testImages/headProfilePic.png">
		$Username
	</div>
	<div class="messagesContacts">
		<img class="messageContactsPic" src="images/testImages/headProfilePic.png">
		$Username
	</div>
	<div class="messagesContacts">
		<img class="messageContactsPic" src="images/testImages/headProfilePic.png">
		$Username
	</div>
	<div class="messagesContacts">
		<img class="messageContactsPic" src="images/testImages/headProfilePic.png">
		$Username
	</div>
	<div class="messagesContacts">
		<img class="messageContactsPic" src="images/testImages/headProfilePic.png">
		$Username
	</div>
	<div class="messagesContacts">
		<img class="messageContactsPic" src="images/testImages/headProfilePic.png">
		$Username
	</div>
	<div class="messagesContacts">
		<img class="messageContactsPic" src="images/testImages/headProfilePic.png">
		$Username
	</div>
	<div class="messagesContacts">
		<img class="messageContactsPic" src="images/testImages/headProfilePic.png">
		$Username
	</div>
	<div class="messagesContacts">
		<img class="messageContactsPic" src="images/testImages/headProfilePic.png">
		$Username
	</div>
</div>
</div>

<div id="messagesRightDiv">
	
	
</div>

<div id="messagesTypeMessage">
		<textarea id="messagesTextArea"></textarea>
		<div id="messagesSubmit">
			Send
		</div>
</div>
<?php 
include ('scripts/PHP_Includes/footer.php');
?>