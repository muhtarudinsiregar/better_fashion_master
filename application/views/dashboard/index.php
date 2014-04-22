<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
		<legend>
			<h3>Dashboard Admin<span class="ico-setting"><i class="fa fa-home"></i></span></h3>
		</legend>
			<!-- <ol class="breadcrumb">
				<li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
			</ol> -->
			<!--  -->
			<?php echo $this->session->flashdata('message'); ?>
		</div>
	</div><!-- /.row -->
	<div class="row">
		<div class="col-lg-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-6">
							<i class="fa fa-tasks fa-5x"></i>
						</div>
						<div class="col-xs-6 text-right">
							<p class="announcement-heading"><?php echo $jumlah_post; ?></p>
							<p class="announcement-text">Total Post</p>
						</div>
					</div>
				</div>
				<a href="<?php echo site_url('artikel'); ?>">
					<div class="panel-footer announcement-bottom">
						<div class="row">
							<div class="col-xs-6">
								Tampilkan Semua Post
							</div>
							<div class="col-xs-6 text-right">
								<i class="fa fa-arrow-circle-right"></i>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="panel panel-warning">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-6">
							<i class="fa fa-envelope fa-5x"></i>
						</div>
						<div class="col-xs-6 text-right">
							<p class="announcement-heading"><?php echo $pesan_unread; ?></p>
							<p class="announcement-text"> Pesan Baru</p>
						</div>
					</div>
				</div>
				<a href="#">
					<div class="panel-footer announcement-bottom">
						<div class="row">
							<div class="col-xs-6">
								Tampilkan Semua Pesan
							</div>
							<div class="col-xs-6 text-right">
								<i class="fa fa-arrow-circle-right"></i>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div><!-- /.row -->
	<div class="row">
		<div class="col-lg-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-folder"></i> Daftar Artikel Terbaru</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-bordered table-hover table-striped tablesorter">
							<thead>
								<tr>
									<th> Nomer <i class="fa fa-sort"></i></th>
									<th> Judul Artikel <i class="fa fa-sort"></i></th>
									<th> Tanggal Posting <i class="fa fa-sort"></i></th>
								</tr>
							</thead>
							<tbody>
							<?php 
								$no = 1;
								foreach ($artikel_terbaru as $value) {
							 ?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo $value->judul; ?></td>
									<td><?php echo $value->tanggal; ?></td>
								</tr>
							<?php 
								$no++;
								}; 
							?>
							</tbody>
						</table>
					</div>
					<div class="text-right">
						<?php echo anchor('artikel/tambah_artikel', 'Tambah Artikel'); ?>
						<!-- <a href="#">Lihat Semua Pos <i class="fa fa-arrow-circle-right"></i></a> -->
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-5">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-folder"></i> Pesan Contact Terbaru</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-bordered table-hover table-striped tablesorter">
							<thead>
								<tr>
									<th> Nomer <i class="fa fa-sort"></i></th>
									<th> Email Pengirim <i class="fa fa-sort"></i></th>
									<th> Tanggal Posting <i class="fa fa-sort"></i></th>
								</tr>
							</thead>
							<tbody>
							<?php 
								$no = 1;
								foreach ($pesan_terbaru as $value) {
							 ?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo anchor('contact/detail/'.$value->id.'',"$value->email"); ?></td>
									<td><?php echo $value->tanggal; ?></td>
								</tr>
							<?php 
								$no++;
								}; 
							?>
							</tbody>
						</table>
					</div>
					<div class="text-right">
						<!-- <?php echo anchor('artikel/tambah_artikel', 'Tambah Artikel'); ?> -->
						<!-- <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-envelope"></i> Quick Email</h3>
				</div>
				<div class="panel-body">
					<?php echo form_open('kategori/proses_kategori', 'role="form",class="form-horizontal"'); ?>
					<div class="form-group">
						<div class="form-group">
							<!-- <label for="">Subject</label> -->
							<input name="kategori" type="text" class="form-control" id="" placeholder="Email To : ">
							<?php echo form_error('kategori'); ?>
						</div>
					</div>
					<div class="form-group">
						<div class="form-group">
							<!-- <label for="">Subject</label> -->
							<input name="kategori" type="text" class="form-control" id="" placeholder="Subject">
							<?php echo form_error('kategori'); ?>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="control-label">Misi</label>
						<textarea name="misi"class="textarea form-control" placeholder="Message" style="width: 500px; height: 200px"></textarea>
					</div>
					<div class="text-left">
						<?php echo $this->session->flashdata('hasil');  ?>
					</div>
					<button type="submit" class="btn btn-primary text-right">Send <span><i class="fa fa-arrow-circle-right"></i></span></button>
					<!-- <button type="reset" class="btn btn-default">Reset</button> -->
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>