<?php
session_start();
// IF USER IS LOGGED IN, HEADER THEM TO HOME PAGE
if(isset($_SESSION['userEmail'])){
	header('location: home.php');
	exit();
}
//POPULATE MONTH DROPDOWN
$monthArr = array("January", "feburary", "March", "April", "May", "June", "July", "August", "September", "October", "Noveber", "December");

// Ajax calls this USERNAME & EMAIL CHECK code to execute
include 'scripts/PHP_Includes/checkUserNameAndEmail.php';
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" type="text/css" href="styles/indexStyles.css"/>
    <script src="//code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="scripts/javascript/watermark.js"></script>
    <script type="text/javascript" src="scripts/javascript/validateIndexData.js"></script>
    <script type="text/javascript" src="scripts/javascript/ajax.js"></script>
    <script type="text/javascript" src="scripts/javascript/login.js"></script>
    <script type="text/javascript" src="scripts/javascript/checkUsername.js"></script>

    <title>Home - Sign in</title>
</head>
<body>
        <div id="home_header">
            <div id="home_menu_holder">
                
               <span id="home_logo">
                   <a href="index.php"><img src="images/Master/logo.gif" alt="The Cloud Works Logo"/></a><br />
                   Got a job? Big or small - Ask the cloud!
               </span>

                <span id="home_login">
                	<Table>
                			<tr>
                				<form onsubmit="return checkLoginData();" action="scripts/PHP_Includes/loginUser.php" method="post" name="loginForm">
									<td><input name="emailInput"  ID="emailInput" ></input></td>
		                            <td><input name="passwordInput" ID="passwordInput" />
		                            <input type="submit" ID="loginPbn" name="loginForm"  value="Login" />
	                            	</td>
	                         	</form>
	                        </tr>
							<tr><td></td>
								<td><a id="forgotPassword" href="forgotPassword.php">Forgot Password?</a></td>
                           </tr>
					</Table>
                </span>
            </div>
        </div>

        <!-- Content -->
        <div id="home_content">
            <div id="home_signup"/>
                <Table ID="home_content_table" >
                    <tr>
                        <td>
                            <Table >
                                <tr>
    <!----------------------------------- Left Table Cell ------------------------------------>
                                    
                                    <td><img src="images/Master/babysitting.gif" /></td>
                                    <td><img src="images/Master/gardening.gif" /></td>
                                    <td><img src="images/Master/guitar.gif" /></td>
                                </tr>
                                <tr>
                                    <td><img src="images/Master/labor.gif" /></td>
                                    <td><img src="images/Master/pc-help.gif" /></td>
                                    <td><img src="images/Master/proofread.gif" /></td>
                                </tr>
                            </Table>
                            <div id="home_pucture_caption">Got a job, big or small? - Ask the clowd! <span id="home_help"> Want to help - Sign up!</span></div>
                        </td>
     <!--------------------------------- Right Table Cell ---------------------------------->
                        <td>
                        
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
                                
                                Sign up using facebook   <img id="fbLogo" alt="facebook logo" src="images/Master/fbLogo.png"></td></tr>
                                <tr><td>
                                		<div id="policy_text">By clicking Create Account, you agree to My Cloud Crowd's <br /> 
                                							User Agreement, Privacy Policy and Cookie Policy.
                                		</div>
                                </td></tr>                     
                            </Table>
                        </td>
                    </tr>
                </Table>
            <div id="home_how_does_it_work">  </div>
        </div>

        <!-- How to section -->
        <div id="how_does_it_work">So How Does It Work?<span id="hover_over">  Scroll through the images</span></div>
        
        <Table ID="how_does_it_work_table" >
            <tr>
                <td id="leftArrow"><a href=""><img src="images/Master/leftArrow.png" /></a></td>
	                <div class="slider">
					    	<td><img alt="sign Up" src="images/Master/signUp.png"/></td>	
					</div>
                <td id="rightArrow"><a href=""><img alt="rightArrow" src="images/Master/rightArrow.png"></a></td>
            </tr>
        </Table>
        
        
        
        <!------------------------------ Footer ----------------------------------->
        
        <div id="home_footer">
            <div id="home_footer_text">
                <a href="help_center.aspx">Help Center</a> 
                <a href="about.aspx">About</a>
                <a href="blog.aspx">Blogs</a>
                <a href="mobile.aspx">Mobile</a> 
                <p>
                    <img src="images/Master/logoSmallGrey.gif" />&copy <Label ID="year_label"  Text=""></Label></p>
            </div>
        </div>
</form>
</body>
</html>
