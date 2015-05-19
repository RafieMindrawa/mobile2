<?php
//mulai proses edit data
 
//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$id			= $_POST['id'];	
	$nis		= $_POST['aktivitas'];
	$nama		= $_POST['deskripsi'];
	$kelas		= $_POST['tanggal deadline'];
	$jurusan	= $_POST['status'];	
	
	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE id='$id' <- diambil dari inputan hidden id
	$update = mysql_query("UPDATE to_do SET aktivitas='$aktivitas', deskripsi='$deskripsi', tanggal deadline='$tanggal deadline', status='$status' WHERE id='$id'") or die(mysql_error());
	
	//jika query update sukses
	if($update){
		
		echo 'Data berhasil di simpan! ';		//Pesan jika proses simpan sukses
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}else{
		
		echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}
 
}else{	//jika tidak terdeteksi tombol simpan di klik
 
	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';
 
}
?>