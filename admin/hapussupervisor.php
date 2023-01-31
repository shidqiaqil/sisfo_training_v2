<?php
include('../koneksi.php');
$id_spv = $_GET['id_spv'];

mysqli_query($koneksi, "delete from auth_spv where id_spv='$id_spv'");

echo "<script>
	alert('Data berhasil di hapus');
	window.location.href='managesupervisor.php';
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