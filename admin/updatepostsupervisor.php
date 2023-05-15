<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
// $id = $_POST['id'];
$id_spv= $_POST['id_spv'];
$password_spv = $_POST['password_spv'];
// $jadwal_pelatihan = $_POST['jadwal_pelatihan'];
// $jenis_pelatihan = $_POST['jenis_pelatihan'];

 
// update data ke database
mysqli_query($koneksi,"update auth_spv set

password_spv='$password_spv'
where id_spv='$id_spv'");
 
// mengalihkan halaman kembali ke index.php
echo "<script>
	alert('Data berhasil di update');
	window.location.href='managesupervisor.php';
	</script>" ;

?>