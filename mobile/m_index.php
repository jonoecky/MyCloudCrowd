<?php session_start();
if(isset($_SESSION['userEmail'])){
	header('location: m_home.php');
	exit();
}
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" id="mobile_css" href="../styles/mobile_css/m_index.css"/>
	<title>Home - Sign In</title>
</head>
<body>
	<div id="header">
		<a href="m_index.php"><div id="center_title">My Cloud Crowd</div></a>
	</div>
	
	<div id="content">
			<table id="login_table">
				<tr>
					<td id="td_desc">
						<b>My Cloud Crowd</b> is a service for people to ask for help or offer thier services for 
						jobs big or small. Got a job? Ask the cloud!<p>
				</tr>
				<tr>
					<td id="td_spacer"></td>
				</tr>
				<tr>
					<td>
						Email:
				</tr>
				<tr>
					<td>
						<input name="emailInput" id="emailInput"></input></td>
				</tr>
				<tr>
					<td>
						Password:
				</tr>
				<tr>
					<td>
						<input name="passwordInput" id="passwordInput"></input></td>
				</tr>
				<tr>
					<td id="td_spacer"></td>
				</tr>
				<tr>
					<td><p>
						<a href="m_home.php"><input type="submit" name="loginForm" id="loginPbn" value="Sign In"></input></a></td>
				</tr>
				<tr>
					<td id="td_bottom_spacer"></td>
				</tr>
				<tr>
					<td id="td_signup">
						Need an account? <a href="m_signup.php">Sign Up</a>
					</td>
				</tr>
			</table>
		
	</div>
	
	<div id="footer">
		
	</div>
	
</body>
</html>