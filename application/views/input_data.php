<!DOCTYPE html>
<html>
<head>
	<title>APSI Modul 5</title>
</head>
<body>
	<center>
		<h1>Menambahkan Data Baru</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). 'index.php/crud/tambah_data'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Id</td>
				<td><input type="text" name="id_kader"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama_kader"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat_kader"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>