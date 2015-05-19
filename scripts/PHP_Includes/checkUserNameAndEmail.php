<?php
// Ajax calls this NAME CHECK code to execute
if(isset($_POST["usernamecheck"])){

	include 'scripts/PHP_Includes/db_conx.php';

	$username = preg_replace('#[^a-z0-9]#i', '', $_POST['usernamecheck']);
	$sql = "SELECT id FROM userData WHERE username='$username' LIMIT 1";
	$query = mysql_query($sql, $con);
	$uname_check = mysql_num_rows($query);


	if (strlen($username) < 3 || strlen($username) > 16) {
		echo '<img src="images/Master/cross.png"/>';
		exit();
	}

	if (is_numeric($username[0])) {
		echo '<img src="images/Master/cross.png"/>';
		exit();
	}

	if ($uname_check < 1) {
		echo '<img src="images/Master/tick.png"/>';
		exit();
	} else {
		echo '<img src="images/Master/cross.png"/>';
		exit();
	}
}


// Ajax calls this EMAIL CHECK code to execute
if(isset($_POST["emailcheck"])){

	include 'scripts/PHP_Includes/db_conx.php';

	$email = $_POST['emailcheck'];
	$sql = "SELECT id FROM userData WHERE email='$email' LIMIT 1";
	$query = mysql_query($sql, $con);
	$email_check = mysql_num_rows($query);


	if (strlen($email) < 3 || strlen($email) > 50) {
		echo '<img src="images/Master/cross.png"/>';
		exit();
	}

	if ($email_check < 1) {
		echo '<img src="images/Master/tick.png"/>';
		exit();
	} else {
		echo '<img src="images/Master/cross.png"/>';
		exit();
	}
}
?>