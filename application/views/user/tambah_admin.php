<!DOCTYPE html>
<html>
<head>
	<title>Tambah Admin</title>
</head>
<body>
	<?php 
		echo form_open('user/add_view'); 
		echo $message;
	?>
		<label for="nama">Nama</label>
		<input type="text" name="nama">
		<label for="tanggal_lahir">Tanggal Lahir</label>
		<input type="date" name="tanggal_lahir">
		<label for="username">Username</label>
		<input type="text" name="username">
		<label for="password">Password</label>
		<input type="password" name="password">
		<label for="akses">Akses</label>
		<select name="akses" id="">
			<option value="admin">admin</option>
		</select>
		<input type="submit" value="Tambahkan">
	<?php echo form_close(); ?>


</body>
</html>