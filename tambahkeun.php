<?php
include 'koneksi.php';
 

$id_buku = $_POST['id_buku'];
$judul_buku = $_POST['judul_buku'];
$penerbit_buku = $_POST['penerbit_buku'];
$Genre_buku = $_POST['Genre_buku'];
$Harga_buku = $_POST['Harga_buku'];
 

 
mysqli_query($koneksi,"INSERT INTO buku VALUES ('$id_buku', '$judul_buku', '$penerbit_buku','$Genre_buku', '$Harga_buku')")or die(mysqli_error($koneksi));
 

header("location:perpus.php");
?>