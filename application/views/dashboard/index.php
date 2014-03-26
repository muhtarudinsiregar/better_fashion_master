<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1>Dashboard <small>Statistics Overview</small></h1>
			<!-- <ol class="breadcrumb">
				<li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
			</ol> -->
			<div class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				Halaman Admin <a class="alert-link" href="http://startbootstrap.com">Start Bootstrap</a>! Feel free to use this template for your admin needs! We are using a few different plugins to handle the dynamic tables and charts, so make sure you check out the necessary documentation links provided.
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
	</div><!-- /.row -->
	<div class="row">
			<div class="col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-money"></i> Daftar Artikel</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-bordered table-hover table-striped tablesorter">
							<thead>
								<tr>
									<th> Nomer <i class="fa fa-sort"></i></th>
									<th> Judul Artikel <i class="fa fa-sort"></i></th>
									<th> Tanggal Posting <i class="fa fa-sort"></i></th>
									<!-- <th>Amount (USD) <i class="fa fa-sort"></i></th> -->
									<th id="aksi">
										Aksi<i class="fa fa-sort"></i>
									</th>
								</tr>
							</thead>
							<tbody>
								
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