<div class="container body-admin">
	<div class="page-header ">
		<h4>Register</h4>
	</div>
	<?php echo validation_errors() ?>
	<?php echo form_open_multipart('user/tambah_titik'); ?>
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>Nama</th>
			<td><input type="text" name="nama" class="form-control"></td>
		</tr>
		<tr>
			<th>Alamat</th>
			<td><input type="text" name="alamat" class="form-control"></td>
		</tr>
		<tr>
			<th></th>
			<td>
				<input type="submit" value="Bagikan" class="btn btn-sm btn-success">
			</td>
		</tr>
	</table>
	<?php echo form_close(); ?>
</div>