<?php session_start();
$monthArr = array("January", "feburary", "March", "April", "May", "June", "July", "August", "September", "October", "Noveber", "December");
if(isset($_SESSION['userEmail'])){
	header('location: m_home.php');
	exit();
	
}
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" id="mobile_css" href="../styles/mobile_css/m_signup.css"/>
	<script src="//code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="../scripts/javascript/watermark.js"></script>
    <script type="text/javascript" src="../scripts/javascript/validateIndexData.js"></script>
    <script type="text/javascript" src="../scripts/javascript/ajax.js"></script>
    <script type="text/javascript" src="../scripts/javascript/login.js"></script>
    <script type="text/javascript" src="../scripts/javascript/checkUsername.js"></script>
	<title>Sign Up</title>
</head>
<body>
	<div id="header">
		<a href="m_index.php"><div id="center_title">My Cloud Crowd</div></a>
	</div>
	
	<div id="content">
			<Table ID="signup_table" >
                <form onsubmit="return checkIndexData();" action="scripts/PHP_Includes/postNewUser.php" method="post" name="signUpForm" >
	                <tr><td>	<div id="create_account_text">Sign up now to get involved!</div></td></tr>
	                <tr><td>	<input ID="usernameInput" name="usernameInput" onblur="checkusername()"/>	<span class="missingLbl" id="usernameInputLbl"></span></td></tr>
	                <tr><td>	<input ID="firstNameInput" name="firstNameInput" /></input>
	                            <input ID="lastNameInput" name="lastNameInput" />							<span class="missingLbl" id="nameLbl"></span></td></tr>
	                <tr><td>	<input ID="enterEmailInput" name="enterEmailInput" onblur="checkemail()" />	<span class="missingLbl" id="emailLbl"></span></td></tr>
	                <tr><td>	<input ID="enterPasswordInput" name="enterPasswordInput" />					<span class="missingLbl" id="passLbl"></span></td></tr>
	                <tr><td>	<input ID="reenterPasswordInput" name="reenterPasswordInput" />				<span class="missingLbl" id="reenterPassLbl"></span></td></tr>
	                <tr><td>	<select ID="dayDropdown" name="dayDropdown">
	                              <?php $i = 1; while ($i <= 31){ echo '<option>'. $i .'</option>'; $i = $i + 1; };?></select>
	                            <select ID="monthDropdown" name="monthDropdown">
	                               <?php foreach($monthArr as $value) {echo '<option>'. $value .'</option>'; }; ?></select>
	                            <select ID="yearDropdown" name="yearDropdown">
	                               <?php $year = date('Y'); $year = $year - 16; while ($year >= 1900){ echo '<option>'. $year .'</option>'; $year = $year - 1; };?></select></td></tr>
	                <tr></tr> 
	                <tr><td>	<input ID="houseNumberInput" name="houseNumberInput"/>	<span class="missingLbl" id="numberLbl"></span></td></tr>
	                <tr><td>	<input ID="streetNameInput" name="streetNameInput"/>	<span class="missingLbl" id="streetLbl"></span></td></tr>
	                <tr><td>	<input ID="townInput" name="townInput"/>				<span class="missingLbl" id="townLbl"></span></td></tr>
	                <tr><td>	<input ID="countyInput"name="countyInput" />			<span class="missingLbl" id="countyLbl"></span></td></tr>
	                <tr><td>	<input ID="postcodeInput" name="postcodeInput"/>		<span class="missingLbl" id="postcodeLbl"></span></td></tr> 
                               	
                    <tr><td>	<input type="submit" ID="createAccountBtn"  value="Create Account" name="sugnUpForm" />
                                
                    <div id="facebook_div">
                    	Sign up using facebook   <img id="fbLogo" alt="facebook logo" src="images/Master/fbLogo.png">
                    </div>
                    </td></tr>
                    <tr><td>
                    <div id="policy_text">By clicking Create Account, you agree to My Cloud Crowd's <br /> 
                                User Agreement, Privacy Policy and Cookie Policy.
                        </div>
                      </td></tr>                     
             </Table>
	</div>
	
	<div id="footer">
		
	</div>

</body>
</head>
</html>