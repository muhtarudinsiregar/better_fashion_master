<div class="col-md-10 col-xs-10 col-sm-9 col-lg-10">
	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Tanggal Lahir</th>
					<th>Username</th>
					<th>Akses</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$no=1;
				foreach ($get->result() as  $value) {
					?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $value->nama; ?></td>
						<td><?php echo $value->tanggal_lahir; ?></td>
						<td><?php echo $value->username; ?></td>
						<td><?php echo $value->akses; ?></td>
						<td><?php echo anchor('user/edit_admin/'.$value->id.'', 'Edit', 'class="btn btn-info"').'&nbsp&nbsp&nbsp'.anchor('user/hapus_admin/'.$value->id.'', 'Hapus', array('onClick'=>"return confirm('Anda Yakin Ingin Menghapus ".$value->username."?')",'class'=>"btn btn-danger")); ?></td>
					</tr>
					<?php $no++;
				} ?>
			</tbody>
		</table>
	</div>
</div>