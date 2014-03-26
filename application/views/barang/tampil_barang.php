<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-money"></i> Daftar Barang</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-bordered table-hover table-striped tablesorter">
							<thead>
								<tr>
									<th> Nomer <i class="fa fa-sort"></i></th>
									<th> Nama Barang <i class="fa fa-sort"></i></th>
									<th> Gambar Barang <i class="fa fa-sort"></i></th>
									<th> Harga Barang <i class="fa fa-sort"></i></th>
									<th> Detail Barang <i class="fa fa-sort"></i></th>
									<th id="aksi">
										Aksi<i class="fa fa-sort"></i>
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
										<td><?php echo $value->nama; ?></td>
										<td><?php echo $value->foto; ?></td>
										<td><?php echo $value->harga; ?></td>
										<td><?php echo $value->detail_barang; ?></td>
										<td><?php echo anchor('barang/edit_barang/'.$value->id.'', 'Edit', 'class="btn btn-info"').'&nbsp&nbsp&nbsp'.anchor('barang/hapus_barang/'.$value->id.'', 'Hapus', array('onClick'=>"return confirm('Anda Yakin Ingin Menghapus ".$value->nama."?')",'class'=>"btn btn-danger")); ?></td>
									</tr>
									<?php 
									$no++;
								} ?>
							</tbody>
						</table>
					</div>
					<div class="text-left">
						<?php echo anchor('barang/upload_barang', 'Tambah Artikel','class="btn btn-primary"'); ?>
						<a href="#" class="btn btn-">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /.row -->