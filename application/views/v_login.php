<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Dengan CodeIgniter | www.malasngoding.com</title>
</head>
<body>
	<h1>Membuat Login Dengan CodeIgniter <br/> www.malasngoding.com</h1>
	<form action="<?php echo base_url('index.php/crud/aksi_login'); ?>" method="post">		
		<table>
			<tr>
				<td>ID</td>
				<td><input type="text" name="id_kader"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama_kader"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>