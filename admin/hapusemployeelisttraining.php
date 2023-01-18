<?php
include('../koneksi.php');
$id_karyawan = $_GET['id_karyawan'];
$id_pelatihan = $_GET['id_pelatihan'];
$id = $_GET['id'];
mysqli_query($koneksi, "delete from penjadwalan where id_pelatihan = '$id_pelatihan' and id_karyawan='$id_karyawan'");

echo "<script>
	alert('Data berhasil di hapus');
	window.location.href='listemployeetraining.php?id=$id';
	</script>";

