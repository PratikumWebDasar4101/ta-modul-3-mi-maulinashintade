<?php 
session_start();
if (empty($_SESSION['username'])) {
	header("location : form_login.php");
}else{
?>
Selamat<b>
<?php
echo $_SESSION['username'];
?>
</b>Berhasil Masuk<br>
<a href="logout.php">Klik di sini untuk keluar</a>
<?php 
}
?>