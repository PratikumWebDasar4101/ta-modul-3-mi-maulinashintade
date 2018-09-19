<?php 
session_start();
if (isset($_SESSION["username"])) {
	require("koneksi.php");

	$nim = $_POST["nama"];
	$nama = $_POST["nim"];
	$jeniskelamin = $_POST["jeniskelamin"];
	$fakultas = $_POST["Fakultas"];

	$dir = "upload/";
	$nama_file = $_FILES["file_gbr"]["name"];
	$nama_file_tmp = $_FILES["file_gbr"]["tmp_name"];
	$target_file = $dir . $nama_file;

	$sql = "INSERT into data_mahasiswa values('$nim','$nama', '$jeniskelamin', '$fakultas', '$nama_file');";

	if (mysql_query($sql) and move_uploaded_file($nama_file_tmp, $target_file)) {
	
	}else{
		echo "Terjadi Kesalahan" . mysql_error();
	}
}else{
	header("Location: login.php");
}
?>