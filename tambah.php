<!DOCTYPE html>
<html>
<head>
	<title>Tambah Buku</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
	<h3><a href="perpus.php">KEMBALI</a></h3>
	<br/>
	<br/>
	<center>
	<h2 style="color:black;">TAMBAH DATA Buku</h2>
	<form method="post" action="tambahkeun.php">
		<table class="layout">
			<tr>
				<td>id_buku</td>
				<td>:</td>
				<td><input type="number" name="id" class="masukan" placeholder="masukan id buku"></td>
			</tr>
			<tr>			
				<td>judul_buku</td>
				<td>:</td>
				<td><input type="text" name="judul_buku" class="masukan" placeholder="judul buku" required="judul Buku"></td>
			</tr>
			<tr>
				<td>Penerbit_buku</td>
				<td>:</td>
				<td><input type="text" name="penerbit_buku" class="masukan" placeholder="penerbit buku"></td>
			</tr>
			<tr>
				<td>Genre_buku</td>
				<td>:</td>
				<td><input type="text" name="Genre buku" class="masukan" placeholder="Genre buku"></td>
			</tr>
			<tr>
				<td>Harga buku</td>
				<td>:</td>
				<td><input type="number" name="Harga buku" class="masukan" placeholder="Masukan Harga buku"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="simpan" value="SIMPAN" class="tbl"></td>
			</tr>		
		</table>
	</form>
	</center>
</body>
</html>


