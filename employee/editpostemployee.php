<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$id_karyawan = $_POST['id_karyawan'];
$password_karyawan = $_POST['password_karyawan'];
$nama_karyawan = $_POST['nama_karyawan'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jabatan_karyawan = $_POST['jabatan_karyawan'];
$alamat_karyawan = $_POST['alamat_karyawan'];
 
// update data ke database
mysqli_query($koneksi,"update karyawan set 
id_karyawan='$id_karyawan', 
password_karyawan='$password_karyawan', 
nama_karyawan='$nama_karyawan', 
tanggal_lahir='$tanggal_lahir', 
jabatan_karyawan='$jabatan_karyawan', 
alamat_karyawan='$alamat_karyawan'  
where id='$id'");

// $a = mysqli_query($koneksi, "select COUNT(`id_karyawan`) from `penjadwalan` where `id_karyawan`='$id_karyawan'");

// $jum = mysqli_fetch_array($koneksi, $a);
$query = "select COUNT(id_karyawan) from penjadwalan where id_karyawan='$id_karyawan'";
$data = mysqli_query($koneksi,$query);
$d = mysqli_fetch_array($data);
//print_r ($d);

if ($d > 0){
	mysqli_query($koneksi,"update penjadwalan set 
         id_karyawan='$id_karyawan', 
         nama_karyawan='$nama_karyawan', 
         jabatan_karyawan='$jabatan_karyawan'         
		 where id_karyawan='$id_karyawan'");
} 

// $query = mysqli_query($koneksi, "SELECT * FROM pejadwalan WHERE id_karyawan=$id_karyawan");
// $row_cnt = mysqli_num_rows($query);
// 	if($row_cnt> 0){
// 		mysqli_query($koneksi,"update penjadwalan set 
//         id_karyawan='$id_karyawan', 
//         nama_karyawan='$nama_karyawan', 
//         jabatan_karyawan='$jabatan_karyawan',
//         where id_karyawan='$id_karyawan'");
// 	}
 
#mengalihkan halaman kembali ke index.php
echo "<script>
	alert('Data berhasil di update');
	window.location.href='index.php';
	</script>" ;

?>