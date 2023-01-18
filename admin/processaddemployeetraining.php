<?php

session_start();
include '../koneksi.php';


$id = $_GET['id'];
$id_pelatihan = $_GET['id_pelatihan'];
$nama_pelatihan = $_GET['nama_pelatihan'];
$abc= $_GET['id_karyawan'];
$nama_karyawan = $_GET['nama_karyawan'];
$jabatan_karyawan = $_GET['jabatan_karyawan'];

// $sql = mysqli_query($koneksi,"INSERT INTO `penjadwalan`(`id`,`id_pelatihan`, `nama_pelatihan`, `id_karyawan`, `nama_karyawan`, `jabatan_karyawan`) 
$query = "INSERT INTO `penjadwalan`(`id`, `id_pelatihan`, `nama_pelatihan`, `id_karyawan`, `nama_karyawan`, `jabatan_karyawan`) 
VALUES ('','$id_pelatihan','$nama_pelatihan','$abc','$nama_karyawan','$jabatan_karyawan')";
$sql = mysqli_query($koneksi, $query);
// VALUES ('','$id_pelatihan','$nama_pelatihan','$id_karyawan','$nama_karyawan','$jabatan_karyawan')");
 
if ($sql){
        echo "<script> alert('Data Berhasil di input');window.location.href='addemployeetraining.php?id=$id'</script>";
        
    } else {
        echo "<script> alert('Data gagal di simpan');window.location.href='addemployeetraining.php?id=$id'</script>";
    }
               
  
// if($sql){
//         echo "<script> alert('Data Berhasil di input');window.location.href='addemployeetraining.php?id=$id'</script>";
// 	}else{
// 		echo "<script> alert('Data gagal di simpan');window.location.href='addemployeetraining.php?id=$id'</script>";
// 	}
             
?>