<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<center>
	<h2>Data Buku</h2>
	<br/>
	<h3><a href="tambah.php">+ 	Tambahkan Daftar Buku</a></h3>
	<br/>
	<br/>
	<table border="2" cellspacing="0">
		<tr bgcolor="green">
			<th>No</th>
			<th>Id_buku</th>
			<th>Judul Buku</th>
			<th>Penerbit_buku</th>
			<th>Genre_buku</th>
			<th>Harga_buku</th>
			<th>Ubah</th>
			<th>Beli</th>
		</tr>
		<?php  
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from Buku");
		while($d = mysqli_fetch_array($data)){
			?>
			<center>
			<tr>
				<td bgcolor="green"><?php echo $no++; ?></td>
				<td><?php echo $d['id_buku']; ?></td>
				<td><?php echo $d['judul_buku']; ?></td>
				<td><?php echo $d['penerbit_buku']; ?></td>
				<td><?php echo $d['Genre_buku']; ?></td>
				<td><?php echo $d['harga_buku']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id_buku']; ?>">EDIT | </a>
					<a href="hapus.php?id=<?php echo $d['id_buku']; ?>">HAPUS</a>
				</td>
				<td><a href="membeli.php?id=<?php echo $d['id_buku']; ?>">Beli</a></td>
			</tr>
			<?php 
		}
		?>
	</table><br> <br>
	 <h3><a href="index.php">keluar </a></h3>
	</center>
</body>
</html>