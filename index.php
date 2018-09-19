<?php 
session_start();
if (isset($_SESSION["username"])) {
	$username = $_SESSION["username"];
	echo "Selamat datang $username";
	echo "<a href = 'form_login.php'><br>Upload</a> | <a href = 'logout.php'>Logout</a>";
}else{
	header("Location: login.php");
}

 ?>