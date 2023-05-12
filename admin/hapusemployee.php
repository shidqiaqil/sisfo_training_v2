<?php
include('../koneksi.php');
$id_karyawan = $_GET['id_karyawan'];

mysqli_query($koneksi, "delete from karyawan where id_karyawan='$id_karyawan'");
mysqli_query($koneksi, "delete from penjadwalan where id_karyawan='$id_karyawan'");

echo "<script>
	alert('Data berhasil di hapus');
	window.location.href='manageemployee.php';
	</script>";

// try {
// 	$sql = "DELETE FROM karyawan WHERE id_karyawan=".$_GET['id_karyawan'];
// 	$koneksi->query($sql);
// } catch (Exception $e) {
// 	echo $e;
// 	die();
// }
//   echo "<script>
// 	alert('Data berhasil di hapus');
// 	window.location.href='manageemployee.php';
// 	</script>";
?>