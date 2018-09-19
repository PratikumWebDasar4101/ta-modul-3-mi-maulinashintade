<?php 
session_start();
include("koneksi.php");

$sql = "SELECT * from data_mahasiswa";
$result = mysql_query($sql);

if (mysql_num_rows($result)>0) {
	while ($row = mysql_fetch_array($result)) {
		echo "<br>";
		echo "<img widht = '200px' src='upload/".$row["file_gambr"]."'>";
	}
}else{
	echo "0 result";
}

 ?>