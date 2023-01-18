<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$id_spv = $_POST['id_spv'];
$password_spv = $_POST['password_spv'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from auth_spv where id_spv='$id_spv' and password_spv='$password_spv'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['id_spv'] = $id_spv;
	$_SESSION['status'] = "login";
	header("location:spv/index.php");
}else{
	header("location:loginspv.php?pesan=gagal");
	echo "<script>
 	alert('Anda belum login')";
}
?>