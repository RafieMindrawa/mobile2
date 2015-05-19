<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD</title>
</head>
<body>
	<h2>Simple CRUD</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Tambah Data Siswa</h3>
	
	<form action="tambah-proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>aktivitas</td>
				<td>:</td>
				<td><input type="text" name="aktivitas" required></td>
			</tr>
			<tr>
				<td>deskripsi</td>
				<td>:</td>
				<td><input type="text" name="deskripsi" size="30" required></td>
			</tr>
			<tr>
				<td>tanggal deadline</td>
				<td>:</td>
				<td>
					<input type= "text" name="tanggal deadline" required>
				</td>
			</tr>
			<tr>
				<td>status</td>
				<td>:</td>
				<td>
					<select name="status" required>
						<option value="">Pilih status</option>
						<option value="berlangsung">berlangsung</option>
						<option value="selesai">selesai</option>
						<option value="berakhir">berakhir</option>
						</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>