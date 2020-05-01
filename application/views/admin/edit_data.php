<html>						
						<form action="<?php site_url('admin/crud_karang/edit/') ?>" method="post">

							<input type="text" name="id" value="<?php echo $karang->id?>" />
							<input type="text" name="user_id" value="<?php echo $karang->user_id?>" />
							<input type="text" name="nama_ketua" value="<?php echo $karang->nama_ketua?>" />
							<input type="text" name="nama_kegiatan" value="<?php echo $karang->nama_kegiatan?>" />
							<input type="text" name="tujuan_kegiatan" value="<?php echo $karang->tujuan_kegiatan?>" />
							<input type="text" name="tanggal_kegiatan" value="<?php echo $karang->tujuan_kegiatan?>" />
							<input type="text" name="rab" value="<?php echo $karang->rab?>" />
							<input type="text" name="proposal" value="<?php echo $karang->proposal?>" />
							<div class='form-group'>
								<label>ACTION</label>
									<select class='form-control' name="hasil">
										<option value="0">--PILIH--</option>
										<option value="Terima">Terima</option>
										<option value="Tolak">Tolak</option>
										<option value="Kaji">Kaji</option>
									</select>
							</div>					
							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>
</html>