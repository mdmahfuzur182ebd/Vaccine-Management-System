<?php
$mysql_hostname = "localhost";
$mysql_user = "sajib";
$mysql_password = "1234";
$mysql_database = "hms";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

?>