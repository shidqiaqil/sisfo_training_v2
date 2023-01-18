<?php
$koneksi = mysqli_connect('localhost', 'root', '','sisfo_training');

if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
} 
?>