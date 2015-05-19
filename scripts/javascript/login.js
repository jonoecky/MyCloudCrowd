/**
 * 
 */
		function checkLoginData(){
			var email = document.getElementById("emailInput").value;
			var password = document.getElementById("passwordInput").value;
			
			if(password != 'fdsa12'){
				alert("Sorry, this site is still under construction and you do not have Admin privilages. 
				Please check back in the future. Sign up using the form below to be notified of changes. Thank you.");
				return false;
			}else{	
				if(email == "Email" || password == "Password"){
					alert("Enter e-mail & password to login");
				} else {
					return true;
			}
		}