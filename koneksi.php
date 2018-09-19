<?php 

$server = "localhost";
$username = "root";
$password ="";
$db = "ta3_webdas";

$conn = mysql_connect($server, $username, $password);
$db_select = mysql_select_db($db, $conn);

if (!$conn)
	die("Connection failed : " . mysql_error());
else
	echo "Connected succesfully <br>";
if (!$db_select)
	die("Selected failed : " . mysql_error());
else
	echo "Selected succesfully <br>";
?>