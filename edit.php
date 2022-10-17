<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
 	<center>
	<h2>Edit</h2>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<br/>
	<br/>
	<h3>Data Buku</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from buku where id_buku='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post">
			<table class="layout">
				<tr>			
					<td>Judul_buku</td>
					<td>
						<input type="hidden" name="id_buku" value="<?php echo $d['id']; ?>">
						<input type="text" name="judul_buku" class="masukan" value="<?php echo $d['judul_buku']; ?>">
					</td>
				</tr>
				<tr>
					<td>Penerbit_buku</td>
					<td><input type="text" name="penerbit_buku" class="masukan" value="<?php echo $d['penerbit_buku']; ?>"></td>
				</tr>
				<tr>
					<td>Genre_buku</td>
					<td><input type="text" name="Genre_buku" class="masukan" value="<?php echo $d['Genre_buku']; ?>"></td>
				</tr>
				<tr>
					<td>Harga_buku</td>
					<td><input type="text" name="harga_buku" class="masukan" value="<?php echo $d['harga_buku']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="edit" class="tbl" value="Update"></td>
				</tr>		
			</table>
		</form>
		<?php  
		if(isset($_POST['edit'])) {
			$update = mysqli_query($koneksi, "UPDATE buku SET 
				judul_buku = '".$_POST['judul_buku']."', 
				penerbit_buku = '".$_POST['penerbit_buku']."',
				Genre_buku = '".$_POST['Genre_buku']."',
				harga_buku = '".$_POST['harga_buku']."'
				WHERE id_buku = '".$_GET['id']."'");
				if($update) {
					echo '<br>Berhasil Diedit';
					header("location:perpus.php");
				} else {
					echo '<br>Gagal Diedit';
					header("location:perpus.php");
				}
			}
		}

		
		 ?>
		 <h3><a href="perpus.php">KEMBALI</a></h3>
 	</center>
</body>
</html>