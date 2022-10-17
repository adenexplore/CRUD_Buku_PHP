<!DOCTYPE html>
<html>
<head>
	<title>Beli</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
 
	<?php
	require 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from buku where id_buku='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<h2>Pembelian Buku</h2>
		</div>
		<div>
		<form method="post" action="sambung.php">
			<center>
			<table class="layout">
				<tr>
					<td><label>judul_buku</label></td>
					<td>:</td>
					<td>
						<input type="hidden" name="id_buku" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" class="masukan" value="<?php echo $d['judul_buku']; ?>">
					</td>
				</tr>
				
				<tr>
					<td><label>Harga_buku</label></td>
					<td>:</td>
					<td><input type="number" name="harga" class="masukan" value="<?php echo $d['Harga_buku']; ?>"></td>
				</tr>
				<tr>
					<td><label>jumlah</label></td>
					<td>:</td>
					<td><input type="number" name="jumlah" class="masukan" value="<?php echo $d['jumlah']; ?>"></td>
				</tr>
				<tr>
					<td><label>uang</label></td>
					<td>:</td>
					<td><input type="number" name="uang" class="masukan" value="<?php echo $d['uang']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>
						<button type="submit" class="tbl" name="beli">beli</button>
					</td>
				</tr>
			</table>
			</center>
		</form>
		<?php 
	}
	?>
</div>
</div>
<h3><a href="perpus.php"  >kembali</a></h3>
</body>
</html>




