<?php

session_start();
include '../koneksi.php';


$id = $_GET['id'];
$id_nama_pelatihan = $_GET['id_nama_pelatihan'];
$nama_pelatihan = $_GET['nama_pelatihan'];
$abc= $_GET['id_karyawan'];
$nama_karyawan = $_GET['nama_karyawan'];
$jabatan_karyawan = $_GET['jabatan_karyawan'];
// $id_detail_pelatihan = $_GET['id_detail_pelatihan'];


    $sql2 = mysqli_query($koneksi, "select count(id_karyawan) as jumlah from penjadwalan where id_karyawan='".$abc."' and id_nama_pelatihan='".$id_nama_pelatihan."'");
    $l = mysqli_fetch_array($sql2);
    if ($l['jumlah'] == '1'){
        echo "<script>
        alert('Id Karyawan Sudah Terdaftar');
        window.location.href='addemployeetraining.php?id=$id';
        </script>";} else{
    try {
        $sql = "INSERT INTO `penjadwalan`(`id`, `id_nama_pelatihan`, `nama_pelatihan`, `id_karyawan`, `nama_karyawan`, `jabatan_karyawan`, `id_detail_pelatihan`) 
        VALUES ('','$id_nama_pelatihan','$nama_pelatihan','$abc','$nama_karyawan','$jabatan_karyawan','$id')";
        if(!$koneksi->query($sql)){
            echo $koneksi->error;
            die();
        }

    } catch (Exception $e) {
        echo $e;
        die();
    }
    echo "<script>
    alert('Data berhasil di simpan');
    window.location.href='addemployeetraining.php?id=$id';
    </script>";}



// $query1="select count(id_karyawan) as jumlah from penjadwalan where id_karyawan='".$abc."' and id_detail_penjadwalan='".$id."'"; 
// $sql1 = mysqli_query($koneksi, $query1);
// $l = mysqli_fetch_array($sql1);
// if ($l['jumlah'] == '1'){
//     echo "<script>
//     alert('Id Karyawan Sudah Terdaftar');
//     window.location.href='addemployeetraining.php?id=$id'';
//     </script>";} else{
// // $sql = mysqli_query($koneksi,"INSERT INTO `penjadwalan`(`id`,`id_pelatihan`, `nama_pelatihan`, `id_karyawan`, `nama_karyawan`, `jabatan_karyawan`) 
// $query = "INSERT INTO `penjadwalan`(`id`, `id_nama_pelatihan`, `nama_pelatihan`, `id_karyawan`, `nama_karyawan`, `jabatan_karyawan`, `id_detail_pelatihan`) 
// VALUES ('','$id_nama_pelatihan','$nama_pelatihan','$abc','$nama_karyawan','$jabatan_karyawan','$id')";
// $sql = mysqli_query($koneksi, $query);
// // VALUES ('','$id_pelatihan','$nama_pelatihan','$id_karyawan','$nama_karyawan','$jabatan_karyawan')");
 
// if ($sql){
//         // echo "<script> alert('Data Berhasil di input');window.location.href='addemployeetraining.php?id=$id'</script>";
        
//     } else {
//         // echo "<script> alert('Data gagal di simpan');window.location.href='addemployeetraining.php?id=$id'</script>";
//     }
// }
  
// if($sql){
//         echo "<script> alert('Data Berhasil di input');window.location.href='addemployeetraining.php?id=$id'</script>";
// 	}else{
// 		echo "<script> alert('Data gagal di simpan');window.location.href='addemployeetraining.php?id=$id'</script>";
// 	}
   ?>          
