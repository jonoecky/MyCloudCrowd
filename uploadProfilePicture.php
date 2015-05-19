<?php
include 'scripts/PHP_Includes/checklogin.php';
include 'scripts/PHP_Includes/header.php';
?>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="styles/global.css"/>
		<link rel="stylesheet" type="text/css" href="styles/home.css"/>
		<link rel="stylesheet" type="text/css" href="styles/uploadProfilePic.css"/>
		<link rel="stylesheet" type="text/css" href="scripts/javascript/jcrop.css"/>
		<script src="scripts/javascript/jcrop/color.js"></script>
		<script src="//code.jquery.com/jquery-1.9.1.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="scripts/javascript/jcrop/jcrop.min.js"></script>
		
		<script language="Javascript">
  
		//JCrop Bits
		  $(function(){
			  
		    $('#jcrop_target').Jcrop({
		      aspectRatio: 1,
			  setSelect:   [ 200,200,37,49 ],
		      onSelect: updateCoords
		    });

		  });

		  function updateCoords(c)
		  {
		    $('#x').val(c.x);
		    $('#y').val(c.y);
		    $('#w').val(c.w);
		    $('#h').val(c.h);
		  };

		  function checkCoords()
		  {
		    if (parseInt($('#w').val())) return true;
		    alert('Please select a crop region then press submit.');
		    return false;
		  }; 
		//End JCrop Bits

			function cancelCrop(){
				//Refresh page				
				top.location = 'uploadProfilePicture.php?cancel';
				return false;
			}
			
//AJAX call to PHP script and update the progress bar
			function _(el){
				return document.getElementById(el);
			}
			function uploadFile(){
				var file = _("newPic").files[0];
				var formdata = new FormData();
				formdata.append("newPic", file);
				var ajax = new XMLHttpRequest();
				ajax.upload.addEventListener("progress", progressHandler, false);
				ajax.addEventListener("load", completeHandler, false);
				ajax.addEventListener("error", errorHandler, false);
				ajax.addEventListener("abort", abortHandler, false);
				ajax.open("POST", "scripts/PHP_Includes/profilePictureUploader.php", true);
				ajax.send(formdata);
			}
			function progressHandler(event){
				var percent = (event.loaded / event.total) * 100;
				_("progressBar").value = Math.round(percent);
				_("status").innerHTML = Math.round(percent)+"% uploaded... please wait";
			}
			function completeHandler(event){
				_("status").innerHTML = event.target.responseText;
				_("progressBar").value = 0;
			}
			function errorHandler(event){
				_("status").innerHTML = "Upload Failed";
			}
			function abortHandler(event){
				_("status").innerHTML = "Upload Aborted";
			}
			
			
  			
        </script>
		<meta>
		<title>Upload Profile Picture</title>
	</head>
<body>

<form id="upload_form" enctype="multipart/form-data" method="post">
	<input type="file" name="newPic" id="newPic">
	<input type="button" value="Upload File" onclick="uploadFile()"><p>
	<progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
	<span id="status"></span>
</form>

<div id="Overlay"></div>
<div id="wrapper" >

    <div id="CroppingContainer" >  
    
        <div id="CroppingArea" >	
            <img src="<?=$profilePicTarget?>" border="0" id="jcrop_target" style="border:0px #990000 solid; position:relative; margin:0px 0px 0px 0px; padding:0px; " />
        </div>  
        <div id="InfoArea" >	
           <p style="margin:0px; padding:0px; color:#444; font-size:18px;">          
                <b>Crop Profile Image</b><br /><br />
                <span style="font-size:14px;">
                    Using this tool crop / resize your uploaded profile image. <br />
                    Once you are happy with your profile image then please click save.
                </span>
           </p>
        </div>  
        <br />
            <div id="CropImageForm"  >  
                <form action="scripts/PHP_Includes/crop.php" method="post" onsubmit="return checkCoords();" >
                    <input type="hidden" id="x" name="x" />
                    <input type="hidden" id="y" name="y" />
                    <input type="hidden" id="w" name="w" />
                    <input type="hidden" id="h" name="h" />
                    <input type="hidden" value="jpeg" name="type" /> <?php // $type ?> 
                    <input type="hidden" value="<?=$profilePicTarget?>" name="src" />
                    <input type="submit" value="Crop Image" style="width:100px; height:30px;"   />
                </form>
            </div>
            
            <div id="CropImageForm2"  >  
                <form action="<?php $_SESSION['uploadFinished'] = false ?>" method="post" onsubmit="return cancelCrop();">
                    <input type="submit" value="Cancel Crop" style="width:100px; height:30px;"   />
                </form>
            </div>            
            
    </div><!-- CroppingContainer -->
 
 
    <br /><br />
</div>
    
</body>
<?php 
include 'scripts/PHP_Includes/footer.php';
?>