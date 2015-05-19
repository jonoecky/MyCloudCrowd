


function checkIndexData(){
	var result = 0;
	var same = 0;
	var sameCheck = "";
	
		if (document.getElementById('firstNameInput').value == "First Name"){
			document.getElementById('nameLbl').innerHTML = "*";
			result = result + 1;
			}
		
		if (document.getElementById('lastNameInput').value == "Last Name"){
			document.getElementById('nameLbl').innerHTML = "*";
			result = result + 1;
			}
		
		if (document.getElementById('enterEmailInput').value == "E-mail"){
			document.getElementById('emailLbl').innerHTML = "*";
			result = result + 1;
			}
		
		if (document.getElementById('usernameInput').value == "Enter Username"){
			document.getElementById('usernameInputLbl').innerHTML = "*";
			result = result + 1;
			}
		
		if (document.getElementById('enterPasswordInput').value == "Password"){
			document.getElementById('passLbl').innerHTML = "*";
			result = result + 1;
			}
		
		if (document.getElementById('reenterPasswordInput').value == "Re-enter Password"){
			document.getElementById('reenterPassLbl').innerHTML = "*";
			result = result + 1;
			}
		
		if (document.getElementById('houseNumberInput').value == "House Number"){
			document.getElementById('numberLbl').innerHTML = "*";
			result = result + 1;
			}
		
		if (document.getElementById('streetNameInput').value == "Street"){
			document.getElementById('streetLbl').innerHTML = "*";
			result = result + 1;
			}
		
		if (document.getElementById('townInput').value == "Town"){
			document.getElementById('townLbl').innerHTML = "*";
			result = result + 1;
			}
		
		if (document.getElementById('countyInput').value == "County"){
			document.getElementById('countyLbl').innerHTML = "*";
			result = result + 1;
			}
		
		if (document.getElementById('postcodeInput').value == "Postcode"){
			document.getElementById('postcodeLbl').innerHTML = "*";
			result = result + 1;
			}
		
		if ((document.getElementById('enterPasswordInput').value) != (document.getElementById('reenterPasswordInput').value) 
				&& (document.getElementById('reenterPasswordInput').value != "Re-enter Password")){
			document.getElementById('reenterPasswordInput').value = "Passwords Don't Match";
			document.getElementById('reenterPasswordInput').style.color = "red";
			result = result + 1;
			same = same -1;
		}
		
		if (result != 0){
			return false;
		}else{
			return true;
		}

	
	}