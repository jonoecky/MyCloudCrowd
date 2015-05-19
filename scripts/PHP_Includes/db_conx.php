<?php
//Database information
$host = "localhost"; $id = "root"; $psw = ""; $db = "mycloudcrowd";

//Connection String
$con = mysql_connect($host, $id, $psw) or die('Connection Issues: '.mysql_error());
mysql_select_db($db) or die('Database selection problem: '. mysql_error());
