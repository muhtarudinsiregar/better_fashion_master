<div id="page-wrapper">
	<div class="row">
	<div class="col-lg-12">
		<legend>
			<h3>Kategori <span class="ico-setting"><i class="fa fa-archive"></i></span></h3>
		</legend>
	</div>
		<div class="col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-money"></i> Tambah Kategori <?php echo validation_errors(); ?>  </h3>
				</div>
				<div class="panel-body">
					<?php echo form_open('kategori/proses_kategori', 'role="form",class="form-horizontal"'); ?>
					<div class="form-group">
						<div class="form-group">
							<label for="">Nama Kategori</label>
							<input name="kategori" type="text" class="form-control" id="" placeholder="Tambah Kategori">
							<?php echo form_error('kategori'); ?>
						</div>
					</div>
					<div class="text-left">
						<?php echo $this->session->flashdata('hasil');  ?>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
					<button type="reset" class="btn btn-default">Reset</button>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
		<div class="col-lg-8">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-money"></i> Daftar Kategori</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-bordered table-hover table-striped tablesorter">
							<thead>
								<tr>
									<th> Nomer <i class="fa fa-sort"></i></th>
									<th> Nama Kategori <i class="fa fa-sort"></i></th>
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
										<td><?php echo $value->nama; ?></td>
										
										<td align="center"><?php echo anchor('kategori/edit_kategori/'.$value->id.'', '<button class="btn btn-info"><i class="fa fa-edit"></i> Edit</button>').'&nbsp&nbsp&nbsp'.
										anchor('kategori/hapus_kategori/'.$value->id.'', '<button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Edit</button>', array('onClick'=>"return confirm('Anda Yakin Ingin Menghapus ".$value->nama."?')")); ?>								
										</td>
									</tr>
									<?php 
									$no++;
								} ?>
							</tbody>
						</table>
					</div>
					<div class="text-left">
					<?php echo $this->session->flashdata('result');  ?>
						<!-- <?php echo anchor('kategori/tambah_kategori', 'Tambah Kategori'); ?> -->
						<!-- <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		
	</div><!-- /.row -->







<!-- 	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$no = 1;
					foreach ($tampil->result() as $value) {
						?>
						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $value->nama; ?></td>
							<td align="center"><?php echo anchor('kategori/edit_kategori/'.$value->id.'', 'Edit', 'class="btn btn-info"').'&nbsp&nbsp&nbsp'.anchor('kategori/hapus_kategori/'.$value->id.'', 'Hapus', array('onClick'=>"return confirm('Anda Yakin Ingin Menghapus ".$value->nama."?')",'class'=>"btn btn-danger")); ?></td>
						</tr>
						<?php 
						$no++;
					}; 
					?>
				</tbody>
			</table>
		</div>
	</div> -->