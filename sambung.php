<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Akhir</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <center>
    <h2>Ini Struknya</h2>
  <?php 
  require 'koneksi.php';
    if(isset($_POST['beli'])) {
      $id = $_POST['id_buku'];
      $Nama = $_POST['nama'];
      $Harga = $_POST['harga'];
      $jumlah = $_POST['jumlah'];
      $uang = $_POST['uang'];
      $hargaakhir = $jumlah * $Harga;
      $kembali = $uang - $hargaakhir;

      mysqli_query($koneksi,"update belajar set total='$hargaakhir' where id='$id'");

      }
    ?>

    <table class="layout">
      <tr>
        <td>Judul Buku</td>
        <td><?php echo " : " . $Nama; ?></td>
      </tr>
      <tr>
        <td>Harga</td>
        <td><?php echo " : " . $Harga; ?></td>
      </tr>
      <tr>
        <td>Jumlah</td>
        <td><?php echo " : " . $jumlah; ?></td>
      </tr>
      <tr>
        <td>Uang</td>
        <td><?php echo " : " . $uang; ?></td>
      </tr>
      <tr>
        <td>Harga Akhir</td>
        <td><?php echo " : " . $hargaakhir; ?></td>
      </tr>
      <tr style="color: red">
        <td>Sisa Uang</td>
        <td><?php echo " : " . $kembali; ?></td>
      </tr>
    </table>
    <h3><a href="perpus.php">KEMBALI</a> <br> 
    <br><a href="index.php">logout</a> </h3>
  </center>
</body>
</html>