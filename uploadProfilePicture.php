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
  
        </script>
		
		
		<meta>
		<title>Upload Profile Picture</title>
	</head>
<body>
<form enctype="multipart/form-data" action="scripts/PHP_Includes/profilePictureUploader.php" method="post">
	<input type="file" name="uploadedProfilePicture" value="Upload Profile Picture">
	<input type="submit" value="Upload">
</form>

<div id="Overlay"></div>
<div id="wrapper" >

<?php if($_SESSION['uploadFinished'] == true){?>
	<script>
	 $('#Overlay').show();
	</script>

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
 <?php };?>
 
 
    <br /><br />
</div>
    
</body>
<?php 
include 'scripts/PHP_Includes/footer.php';
?>