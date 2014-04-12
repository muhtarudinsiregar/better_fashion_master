<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
		<legend>
			<h3>Dashboard Admin<span class="ico-setting"><i class="fa fa-home"></i></span></h3>
		</legend>
			<!-- <ol class="breadcrumb">
				<li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
			</ol> -->
			<div class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				Selamat Datang di Halaman Admin 
			</div>
		</div>
	</div><!-- /.row -->
	<div class="row">
		<div class="col-lg-3">
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
						<a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>