<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_buku'];
$judul = $_GET['judul_buku'];
$penerbit = $_GET['penerbit_buku'];
$genre = $_GET['penulis_buku'];
$harga = $_GET['harga_buku'];

//query update
$query = "UPDATE buku SET judul_buku='$judul' , penerbit_buku='$penerbit' , penulis_buku='$penulis' , harga_buku='$harga' WHERE id_buku='$id' ";

if (mysqli_query($conn, $query)) {
 # credirect ke page index
 header("location:index.php");
 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

mysqli_close($conn);
?>