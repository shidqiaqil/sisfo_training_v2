<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$id_nama_pelatihan = $_POST['id_nama_pelatihan'];
$tanggal_mulai = $_POST['tanggal_mulai'];
$tanggal_selesai = $_POST['tanggal_selesai'];
$tempat_pelatihan = $_POST['tempat_pelatihan'];
$nama_jenis_pelatihan = $_POST['nama_jenis_pelatihan'];
$catatan = $_POST['catatan'];
 
// update data ke database
mysqli_query($koneksi,"update detail_pelatihan set 

tanggal_mulai='$tanggal_mulai', 
tanggal_selesai='$tanggal_selesai', 
tempat_pelatihan='$tempat_pelatihan', 
nama_jenis_pelatihan='$nama_jenis_pelatihan', 
catatan='$catatan'
where id='$id'");
 
// mengalihkan halaman kembali ke index.php
echo "<script>
	alert('Data berhasil di update');
	window.location.href='penjadwalan.php';
	</script>" ;

?>