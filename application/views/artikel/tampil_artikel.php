<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<legend>
				
				<h3>Daftar List Artikel <span class="ico-setting"><i class="glyphicon glyphicon-list-alt"></i></span></h3>
			</legend>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
		<div class="text-left">
				<?php echo $this->session->flashdata('notifikasi');  ?>
			</div>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="glyphicon glyphicon-list"></i> Daftar Artikel</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-bordered table-hover table-striped tablesorter">
							<thead>
								<tr>
									<th> Nomer <i class="fa fa-sort"></i></th>
									<th> Judul Artikel <i class="fa fa-sort"></i></th>
									<th> Tanggal Posting <i class="fa fa-sort"></i></th>
									<th>Status</th>
									<th id="aksi">
										Aksi
									</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no=1; 
								foreach ($data_artikel as $value) {				
									?>
									<tr>

										<td><?php echo $no; ?></td>
										<td><?php echo $value->judul; ?></td>
										<td><?php echo $value->tanggal; ?></td>
										<td><?php echo $value->status; ?></td>
										<td align="center"><?php echo anchor('artikel/edit_artikel/'.$value->id.'', 'Edit', 'class="btn btn-info"').'&nbsp&nbsp&nbsp'.anchor('artikel/hapus_artikel/'.$value->id.'', 'Hapus', array('onClick'=>"return confirm('Anda Yakin Ingin Menghapus ".$value->judul."?')",'class'=>"btn btn-danger")); ?>								
										</td>
									</tr>
									<?php 
									$no++;
								} ?>
							</tbody>
						</table>
					</div>
					<div class="text-left">
						<?php echo anchor('artikel/tambah_artikel', 'Tambah Artikel <i class="fa fa-arrow-circle-right"></i>'); ?>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /.row -->