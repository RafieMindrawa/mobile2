<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD</title>
</head>
<body>
	<h2>Simple CRUD</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Edit to do list</h3>
	
	<?php
	//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
	
	//include atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
	$id = $_GET['id'];
	
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	$show = mysql_query("SELECT * FROM siswa WHERE siswa_id='$id'");
	
	//cek apakah data dari hasil query ada atau tidak
	if(mysql_num_rows($show) == 0){
		
		//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
		echo '<script>window.history.back()</script>';
		
	}else{
	
		//jika data ditemukan, maka membuat variabel $data
		$data = mysql_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	
	}
	?>
	
	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>aktivitas</td>
				<td>:</td>
				<td><input type="text" name="aktivitas" value="<?php echo $data['aktivitas']; ?>" required></td>	<!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>deskripsi</td>
				<td>:</td>
				<td><input type="text" name="deskripsi" size="30" value="<?php echo $data['deskripsi']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>tanggal deadline</td>
				<td>:</td>
				<td>
					<input type="text" name="tanggal deadline" required value="<?php echo $data['tanggal deadline'];?>" recuired>
				</td>
			</tr>
			<tr>
				<td>status</td>
				<td>:</td>
				<td>
					<select name="status" required>
						<option value="">Pilih ststus</option>
						<option value="berlangsung" <?php if($data['status'] == 'berlangsung'){ echo 'selected'; } ?>>berlangsung</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						<option value="selesai" <?php if($data['status'] == 'selesai'){ echo 'selected'; } ?>>selesai</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						<option value="berakhir" <?php if($data['status'] == 'berakhir'){ echo 'selected'; } ?>>berakhir</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>