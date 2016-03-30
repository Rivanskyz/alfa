<div class="container body-admin">
	<div class="page-header ">
		<h4>Register</h4>
	</div>
	<?php echo validation_errors() ?>
	<?php echo form_open_multipart('login/register'); ?>
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>Username</th>
			<td><input type="text" name="username" class="form-control"></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input type="password" name="password" class="form-control"></td>
		</tr>
		<tr>
			<th>Email</th>
			<td><input type="text" name="email" class="form-control"></td>
		</tr>
		<tr>
			<th></th>
			<td>
				<input type="submit" value="Register" class="btn btn-sm btn-success">
			</td>
		</tr>
	</table>
	<?php echo form_close(); ?>
</div>