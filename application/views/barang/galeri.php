<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1px black">
		<thead>
			<td>No</td>
			<!-- <td>Nama</td> -->
			<td>Kategori</td>
			<td>Gambar</td>
			<td>Aksi</td>
		</thead>
		<tbody>
		<?php
			$no=1; 
			foreach ($galeri->result() as $value) {
				# code...
			
		 ?>
			<tr>
				<td><?php echo $no; ?></td>
				<!-- <td><?php echo $value->nama; ?></td> -->
				<td><?php echo $value->kategori; ?></td>
				<td><?php echo img('./img/'.$value->foto); ?></td>
				<td>delete|edit</td>
			</tr>
		<?php 
			$no++;
			} 
		?>
		</tbody>
	</table>
</body>
</html>