<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$id_pelatihan = $_POST['id_pelatihan'];
$nama_pelatihan = $_POST['nama_pelatihan'];
// $jadwal_pelatihan = $_POST['jadwal_pelatihan'];
// $jenis_pelatihan = $_POST['jenis_pelatihan'];

 
// update data ke database
mysqli_query($koneksi,"update pelatihan set 
 
nama_pelatihan='$nama_pelatihan'

  
where id='$id'");
 
// mengalihkan halaman kembali ke index.php
echo "<script>
	alert('Data berhasil di update');
	window.location.href='managetraining.php';
	</script>" ;

?>