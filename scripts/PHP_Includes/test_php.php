<?php
if(isset($_POST['submit'])) {

     if(!preg_match('/^[0-9]{1,3}$/', $_POST['distance'])) {
          //shouldn't need as is dropdown
          $err_distance = true;
		  echo "dis error";
     }
     else {
          //connect to db server; select database - Connected with db_cox
			$host = "mycloudcrowd.co.uk.mysql"; $id = "mycloudcrowd_co"; $psw = "UyvEpWnk"; $db = "mycloudcrowd_co";
			
			$con = mysql_connect($host, $id, $psw) or die('Connection Issues: '.mysql_error());
			mysql_select_db($db) or die('Database selection problem: '. mysql_error());
			          
		
          //query for coordinates of provided ZIP Code
          if(!$postcode = mysql_query("SELECT * FROM postcodelatlng WHERE postcode = '$_POST[postcode]'")) {
               $error = true;
			  echo "error";
          }
          else {
               if(mysql_num_rows($postcode) == 0) {
                    $err_no_match = true;
				   echo "error no match";
				   echo $_POST['postcode'];
               }
               else {
                    //if found, set variables
                    $row = mysql_fetch_array($postcode);
                    $lat1 = $row['latitude'];
                    $lon1 = $row['longitude'];
                    $d = $_POST['distance'];
					
                    //earth's radius in miles
                    $radius = 3959;
 
                    //compute max and min latitudes / longitudes for search square
                    $latN = rad2deg(asin(sin(deg2rad($lat1)) * cos($d / $radius) + cos(deg2rad($lat1)) * sin($d / $radius) * cos(deg2rad(0))));
                    $latS = rad2deg(asin(sin(deg2rad($lat1)) * cos($d / $radius) + cos(deg2rad($lat1)) * sin($d / $radius) * cos(deg2rad(180))));
                    $lonE = rad2deg(deg2rad($lon1) + atan2(sin(deg2rad(90)) * sin($d / $radius) * cos(deg2rad($lat1)), cos($d / $radius) - sin(deg2rad($lat1)) * sin(deg2rad($latN))));
                    $lonW = rad2deg(deg2rad($lon1) + atan2(sin(deg2rad(270)) * sin($d / $radius) * cos(deg2rad($lat1)), cos($d / $radius) - sin(deg2rad($lat1)) * sin(deg2rad($latN))));
 
 
                    //find all coordinates within the search square's area
                    $query = "SELECT * FROM postcodelatlng WHERE (latitude <= $latN AND latitude >= $latS AND longitude <= $lonE AND longitude >= $lonW)";
                    if(!$postcode = mysql_query($query)) {
                         $err_select = true;
						echo "select error";
                    }
                    elseif(mysql_num_rows($postcode) == 0) {
                         $err_none_in_distance = true;
						echo "none in distance error";
                    }
                    else {
                         //output all matches to screen
                         while($row = mysql_fetch_array($postcode)) {
                              echo "$row[postcode]";
							 echo "<br>";
                              //echo $dist_of_each = acos(sin(deg2rad($lat1)) * sin(deg2rad($row['latitude'])) + cos(deg2rad($lat1)) * cos(deg2rad($row['latitude'])) * cos(deg2rad($row['longitude']) - deg2rad($lon1))) * $radius;
                         }
                    }
               }
          }
     }
}
?>