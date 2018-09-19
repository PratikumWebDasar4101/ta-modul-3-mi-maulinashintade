 
<form method="post" action="uploads.php" enctype="multipart/form-data">
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim" placeholder="NIM Mahasiswa"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" placeholder="Nama Mahasiswa"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jeniskelamin" value="Laki-Laki">L<br>
				<input type="radio" name="jeniskelamin" value="Peremouan">P</td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td>
				<select id="Fakultas" name="Fakultas">
				<option value="0">--Pilih Fakultas--</option>
				<option value="Industri Kreatif">IK</option>
				<option value="Ilmu Terapan">IT</option>
				<option value="Rekayasa Industri">RI</option>
				<option value="Komunikasi Bisnis">KB</option>
				<option value="Ekonomi Bisnis">EB</option>
				<option value="Informatika">IF</option>
			</select>
			</td>
		</tr>
		<tr>
			<td>File Gambar</td>
			<td>:</td>
			<td><input type="file" name="file_gbr" id="file_gbr"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" value="Login"></td>
		</tr>
	</table>
</form>

