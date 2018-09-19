<?php 
session_start();
include("koneksi.php");

$sql = "SELECT * from data_mahasiswa";
$result = mysql_query($sql);
$rowcount = mysql_num_rows($result);

if ($rowcount > 0) {
	?>
	<table>
		<tr>
			<td>Nim</td>
			<td>Nama</td>
			<td>Jenis Kelamin</td>
			<td>Fakultas</td>
			<td>File Gambar</td>
		</tr>
	<?php
	while ($row = mysql_fetch_array($result)) {
	?>
		<tr style="text-align: center">
			<td><?php echo $row["nim"];?></td>
			<td><?php echo $row["nama"];?></td>
			<td><?php echo $row["jeniskelamin"];?></td>
			<td><?php echo $row["fakultas"];?></td>
			<td>
				<img width="100px" src="upload/" <?php echo $row["file_gbr"]; ?> "alt ="">
			</td>
		</tr>
	<?php
	}
}else{
	echo "0 result.";
}
 ?>
 </table>