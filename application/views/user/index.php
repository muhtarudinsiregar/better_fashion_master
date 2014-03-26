<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		echo anchor('user/add_view', 'tambah admin', 'attributs');
		echo "<br>"; 
		echo anchor('user/tambah_artikel', 'tambah artikel', 'attributs');
		echo "<br>";
		echo  anchor('image', 'tambah galeri gambar', 'attributs');
		echo "<br>";
		echo  anchor('user/tampil_admin', 'manajemen user', 'attributs');
		echo "<br>";
		echo  anchor('image_redactor', 'Image + Redactor', 'attributs');
		echo "<br>";
		echo anchor('image/galeri', 'Galeri');

	?>

</body>
</html>