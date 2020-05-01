<html>
<head>
	<title>Kader </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<center>
		<h1>Data Kader</h1>
		<h3>Tambahkan Data Diri Anda Jika Belum Terdaftar</h3>
	</center>
	<center><?php echo anchor('crud/input','Tambah Data'); ?></center>
	<table class="table">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($kader as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama_kader ?></td>
			<td><?php echo $u->alamat_kader ?></td>
			<td>
			      <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">EDIT</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">EDIT DATA</h4>
      </div>
      <div class="modal-body">
       <form action="<?php echo base_url(). 'index.php/crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id_kader" value="<?php echo $u->id_kader ?>">
					<input type="text" name="nama_kader" value="<?php echo $u->nama_kader ?>">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat_kader" value="<?php echo $u->alamat_kader ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  
  </div>
</div>
		<button type="button" width="50px" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
		<?php echo anchor('crud_kader/hapus/'.$u->id_kader,'HAPUS'); ?></button>

			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>