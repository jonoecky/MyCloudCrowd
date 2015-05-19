/**
 * 
 */
function checkusername(){
    	var u = document.getElementById('usernameInput').value;
    	if(u != "Enter Username"){
    		document.getElementById('usernameInputLbl').innerHTML = '...';
    		var ajax = ajaxObj("POST", "index.php");
            ajax.onreadystatechange = function() {
    	        if(ajaxReturn(ajax) == true) {
    	        	document.getElementById('usernameInputLbl').innerHTML = ajax.responseText;
    	        }
            }
            ajax.send("usernamecheck="+u);
    	}
    }

function checkemail(){
	var u = document.getElementById('enterEmailInput').value;
	if(u != "Enter Email"){
		document.getElementById('emailLbl').innerHTML = '...';
		var ajax = ajaxObj("POST", "index.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
	        	document.getElementById('emailLbl').innerHTML = ajax.responseText;
	        }
        }
        ajax.send("emailcheck="+u);
	}
}