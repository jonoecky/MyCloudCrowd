<?php session_start();
if(isset($_SESSION['userEmail'])){
	header('location: m_home.php');
	exit();
}
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" id="mobile_css" href="../styles/mobile_css/m_home.css"/>
	<script>
	function menuOpenClose(){
		document.getElementById("menu_div").setAttribute("display", "none");
	}
	
	</script>
	<title>Home - Sign In</title>
</head>
<body>

	<div id="menu_div">
		<table>
			<tr>
				<td>
					<a href="#" onclick="menuOpenClose();" id="close_icon"><img alt="menu" src="../images/Master/mobile/close.png"></a>
				</td>
			</tr>
			<tr>
				<td>
					
				</td>
			</tr>		
			<tr>
				<td>
					
				</td>
			</tr>	
			<tr>
				<td>
					
				</td>
			</tr>	
			<tr>
				<td>
					
				</td>
			</tr>	
			<tr>
				<td>
					
				</td>
			</tr>	
			<tr>
				<td>
					
				</td>
			</tr>	
			<tr>
				<td>
					
				</td>
			</tr>	
			<tr>
				<td>
					
				</td>
			</tr>	
			<tr>
				<td>
					
				</td>
			</tr>	
		</table>
	</div>
	
	
	
	
	<div id="main_page">
		<div id="header">
			<a href="" id="menu_icon"><img alt="menu" src="../images/Master/mobile/menu.png"></a>
			<a href="m_index.php"><div id="center_title">My Cloud Crowd</div></a>
		</div>
		
		<div id="content">
			<div id="wrapper">
				
			</div>
		</div>
		
		
	</div>
	
	
</body>
</html>