<?php
//add dbconnect

include('koneksi.php');

$judul = $_POST['judul_buku'];
$penerbit = $_POST['penerbit_buku'];
$penulis = $_POST['penulis_buku'];
$harga = $_POST['harga_nuku'];

//query

$query =  "INSERT INTO buku(judul_buku , penerbit_buku , penulis_buku , harga_buku) VALUES('$judul' , '$penerbit' , '$penulis' , '$harga')";

if (mysqli_query($conn , $query)) {
 # code redicet setelah insert ke index
 header("location:index.php");
}
else{
 echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>