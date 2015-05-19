/**
 * 
 */

$(document).ready(function() {
	firstNameWatermark();
	lastNameWatermark();
	emailWatermark();
	passwordWatermark();
	enterEmailWatermark();
	enterPasswordWatermark();
	reenterPasswordWatermark();
	usernameWatermark();
	houseNoWatermark();
	streetWatermark();
	townWatermark();
	postcodeWtermark();
	countyWatermark();
	

});

	function emailWatermark(){
		
		var watermark = 'E-mail';
		
		//init, set watermark text and class
		$('#emailInput').val(watermark).addClass('watermark');
		
		//if blur and no value inside, set watermark text and class again.
			$('#emailInput').blur(function(){
				if ($(this).val().length == 0){
				$(this).val(watermark).addClass('watermark');
			}
			});
		
		//if focus and text is watermrk, set it to empty and remove the watermark class
		$('#emailInput').focus(function(){
				if ($(this).val() == watermark){
				$(this).val('').removeClass('watermark');
			}
			});
	};

	function passwordWatermark(){
var watermark = 'Password';
		
		//init, set watermark text and class
		$('#passwordInput').val(watermark).addClass('watermark');
		
		//if blur and no value inside, set watermark text and class again.
			$('#passwordInput').blur(function(){
				if ($(this).val().length == 0){
				$(this).val(watermark).addClass('watermark');
			}
			});
		
		//if focus and text is watermrk, set it to empty and remove the watermark class
		$('#passwordInput').focus(function(){
				if ($(this).val() == watermark){
				$(this).val('').removeClass('watermark');
			}
			});
	};
	
	function firstNameWatermark(){
		
		var watermark = 'First Name';
		
		//init, set watermark text and class
		$('#firstNameInput').val(watermark).addClass('watermark');
		
		//if blur and no value inside, set watermark text and class again.
			$('#firstNameInput').blur(function(){
				if ($(this).val().length == 0){
				$(this).val(watermark).addClass('watermark');
			}
			});
		
		//if focus and text is watermrk, set it to empty and remove the watermark class
		$('#firstNameInput').focus(function(){
				if ($(this).val() == watermark){
				$(this).val('').removeClass('watermark');
			}
			});
	};
	
	function lastNameWatermark(){
		var watermark = 'Last Name';
		
		//init, set watermark text and class
		$('#lastNameInput').val(watermark).addClass('watermark');
		
		//if blur and no value inside, set watermark text and class again.
			$('#lastNameInput').blur(function(){
				if ($(this).val().length == 0){
				$(this).val(watermark).addClass('watermark');
			}
			});
		
		//if focus and text is watermrk, set it to empty and remove the watermark class
		$('#lastNameInput').focus(function(){
				if ($(this).val() == watermark){
				$(this).val('').removeClass('watermark');
			}
			});
	};
	
	function enterEmailWatermark(){
var watermark = 'E-mail';
		
		//init, set watermark text and class
		$('#enterEmailInput').val(watermark).addClass('watermark');
		
		//if blur and no value inside, set watermark text and class again.
			$('#enterEmailInput').blur(function(){
				if ($(this).val().length == 0){
				$(this).val(watermark).addClass('watermark');
			}
			});
		
		//if focus and text is watermrk, set it to empty and remove the watermark class
		$('#enterEmailInput').focus(function(){
				if ($(this).val() == watermark){
				$(this).val('').removeClass('watermark');
			}
			});
	};
	
	function usernameWatermark(){
		
		var watermark = 'Enter Username';
		
		//init, set watermark text and class
		$('#usernameInput').val(watermark).addClass('watermark');
		
		//if blur and no value inside, set watermark text and class again.
			$('#usernameInput').blur(function(){
				if ($(this).val().length == 0){
				$(this).val(watermark).addClass('watermark');
			}
			});
		
		//if focus and text is watermrk, set it to empty and remove the watermark class
		$('#usernameInput').focus(function(){
				if ($(this).val() == watermark){
				$(this).val('').removeClass('watermark');
			}
			});
	};
	
	function enterPasswordWatermark(){
		
		var watermark = 'Password';
		
		//init, set watermark text and class
		$('#enterPasswordInput').val(watermark).addClass('watermark');
		
		//if blur and no value inside, set watermark text and class again.
			$('#enterPasswordInput').blur(function(){
				if ($(this).val().length == 0){
				$(this).val(watermark).addClass('watermark');
			}
			});
		
		//if focus and text is watermrk, set it to empty and remove the watermark class
		$('#enterPasswordInput').focus(function(){
				if ($(this).val() == watermark){
				$(this).val('').removeClass('watermark');
			}
			});
	};

	function reenterPasswordWatermark(){
		
		var watermark = 'Re-enter Password';
		
		//init, set watermark text and class
		$('#reenterPasswordInput').val(watermark).addClass('watermark');
		
		//if blur and no value inside, set watermark text and class again.
			$('#reenterPasswordInput').blur(function(){
				if ($(this).val().length == 0){
				$(this).val(watermark).addClass('watermark');
			}
			});
		
		//if focus and text is watermrk, set it to empty and remove the watermark class
		$('#reenterPasswordInput').focus(function(){
				if ($(this).val() == watermark){
				$(this).val('').removeClass('watermark');
			}
			});
	};
	
	function houseNoWatermark(){
		
		var watermark = 'House Number';
		
		//init, set watermark text and class
		$('#houseNumberInput').val(watermark).addClass('watermark');
		
		//if blur and no value inside, set watermark text and class again.
			$('#houseNumberInput').blur(function(){
				if ($(this).val().length == 0){
				$(this).val(watermark).addClass('watermark');
			}
			});
		
		//if focus and text is watermrk, set it to empty and remove the watermark class
		$('#houseNumberInput').focus(function(){
				if ($(this).val() == watermark){
				$(this).val('').removeClass('watermark');
			}
			});
	};
	
	function streetWatermark(){
		
		var watermark = 'Street';
		
		//init, set watermark text and class
		$('#streetNameInput').val(watermark).addClass('watermark');
		
		//if blur and no value inside, set watermark text and class again.
			$('#streetNameInput').blur(function(){
				if ($(this).val().length == 0){
				$(this).val(watermark).addClass('watermark');
			}
			});
		
		//if focus and text is watermrk, set it to empty and remove the watermark class
		$('#streetNameInput').focus(function(){
				if ($(this).val() == watermark){
				$(this).val('').removeClass('watermark');
			}
			});
	};

	function townWatermark(){
		
		var watermark = 'Town';
		
		//init, set watermark text and class
		$('#townInput').val(watermark).addClass('watermark');
		
		//if blur and no value inside, set watermark text and class again.
			$('#townInput').blur(function(){
				if ($(this).val().length == 0){
				$(this).val(watermark).addClass('watermark');
			}
			});
		
		//if focus and text is watermrk, set it to empty and remove the watermark class
		$('#townInput').focus(function(){
				if ($(this).val() == watermark){
				$(this).val('').removeClass('watermark');
			}
			});
	};
	
	function countyWatermark(){
		
		var watermark = 'County';
		
		//init, set watermark text and class
		$('#countyInput').val(watermark).addClass('watermark');
		
		//if blur and no value inside, set watermark text and class again.
			$('#countyInput').blur(function(){
				if ($(this).val().length == 0){
				$(this).val(watermark).addClass('watermark');
			}
			});
		
		//if focus and text is watermrk, set it to empty and remove the watermark class
		$('#countyInput').focus(function(){
				if ($(this).val() == watermark){
				$(this).val('').removeClass('watermark');
			}
			});
	};

	function postcodeWtermark(){
		
		var watermark = 'Postcode';
		
		//init, set watermark text and class
		$('#postcodeInput').val(watermark).addClass('watermark');
		
		//if blur and no value inside, set watermark text and class again.
			$('#postcodeInput').blur(function(){
				if ($(this).val().length == 0){
				$(this).val(watermark).addClass('watermark');
			}
			});
		
		//if focus and text is watermrk, set it to empty and remove the watermark class
		$('#postcodeInput').focus(function(){
				if ($(this).val() == watermark){
				$(this).val('').removeClass('watermark');
			}
			});
	};
	
	
	
	
	
	