<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<legend>
				
				<h3>Daftar List Artikel <span class="ico-setting"><i class="glyphicon glyphicon-list-alt"></i></span></h3>
			</legend>
		</div>
<<<<<<< HEAD
	</div>
=======
	</div><!-- /.row -->

	<!-- <div class="row">
		<div class="col-lg-3">
			<div class="panel panel-warning">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-6">
							<i class="fa fa-check fa-5x"></i>
						</div>
						<div class="col-xs-6 text-right">
							<p class="announcement-heading">12</p>
							<p class="announcement-text">To-Do Items</p>
						</div>
					</div>
				</div>
				<a href="#">
					<div class="panel-footer announcement-bottom">
						<div class="row">
							<div class="col-xs-6">
								Complete Tasks
							</div>
							<div class="col-xs-6 text-right">
								<i class="fa fa-arrow-circle-right"></i>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-6">
							<i class="fa fa-tasks fa-5x"></i>
						</div>
						<div class="col-xs-6 text-right">
							<p class="announcement-heading">18</p>
							<p class="announcement-text">Crawl Errors</p>
						</div>
					</div>
				</div>
				<a href="#">
					<div class="panel-footer announcement-bottom">
						<div class="row">
							<div class="col-xs-6">
								Fix Issues
							</div>
							<div class="col-xs-6 text-right">
								<i class="fa fa-arrow-circle-right"></i>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-6">
							<i class="fa fa-comments fa-5x"></i>
						</div>
						<div class="col-xs-6 text-right">
							<p class="announcement-heading">56</p>
							<p class="announcement-text">New Orders!</p>
						</div>
					</div>
				</div>
				<a href="#">
					<div class="panel-footer announcement-bottom">
						<div class="row">
							<div class="col-xs-6">
								Complete Orders
							</div>
							<div class="col-xs-6 text-right">
								<i class="fa fa-arrow-circle-right"></i>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div> -->
	<!-- /.row -->

>>>>>>> 8b5b107712a4d44b224f16215874faa20ddd7c46

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