<div id="page-wrapper">
	<div class="row">
	<div class="col-lg-12">
		<legend>
			<h3>Barang <span class="ico-setting"><i class="glyphicon glyphicon-book"></i></span></h3>
		</legend>
	</div>
		<div class="col-lg-12">
			<div class="text-left">
				<?php echo $this->session->flashdata('notifikasi');  ?>
			</div>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-shopping-cart"></i> Daftar Barang</h3>
				</div>
				<div class="panel-body">

					<div class="table-responsive">
					<div class="text-left form-group">
<<<<<<< HEAD
						<?php echo anchor('barang/upload_barang', 'Tambah Barang','class="btn btn-info control-label"'); ?>
=======
						<?php echo anchor('barang/upload_barang', 'Tambah Barang','class="btn btn-primary control-label"'); ?>
>>>>>>> 8b5b107712a4d44b224f16215874faa20ddd7c46
					</div>
						<table class="table table-bordered table-hover table-striped tablesorter">
							<thead>
								<tr>
									<th> Nomer <i class="fa fa-sort"></i></th>
									<th> Nama Barang <i class="fa fa-sort"></i></th>
									<th> Gambar Barang <i class="fa fa-sort"></i></th>
									<th> Harga Barang <i class="fa fa-sort"></i></th>
									<!-- <th> Detail Barang <i class="fa fa-sort"></i></th> -->
									<th id="aksi">
										Aksi
									</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no=1; 
								foreach ($tampil->result() as $value) {				
									?>
									<tr>

										<td><?php echo $no; ?></td>
										<td><?php echo anchor('barang/detail_barang/'.$value->id.'',"$value->nama"); ?></td>
										<td><img src="<?php echo site_url("img/$value->foto") ?>"></td>
										<td><?php echo $value->harga; ?></td>
										<!-- <td><?php echo $value->detail_barang; ?></td> -->
										<td><?php echo anchor('barang/edit_barang/'.$value->id.'', '<button class="btn btn-info"><i class="fa fa-edit"></i> Edit</button>').'&nbsp&nbsp&nbsp'.anchor('barang/hapus_barang/'.$value->id.'', '<button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete </button>', array('onClick'=>"return confirm('Anda Yakin Ingin Menghapus ".$value->nama."?')")); ?></td>
									</tr>
									<?php 
									$no++;
								} ?>
							</tbody>
						</table>
					</div>
					
				</div>
			</div>
		</div>
	</div><!-- /.row -->