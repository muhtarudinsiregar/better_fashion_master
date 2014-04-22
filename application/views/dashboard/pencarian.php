<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<legend>
				<h3>Halaman Pencarian <span class="ico-setting"><i class="glyphicon glyphicon-search"></i></span></h3>
			</legend>
		</div>
		<div class="col-lg-4 col-lg-offset-4" id="cari">
		<div class="text-left">
			<?php echo $notifikasi; ?>
		</div>
			<?php echo form_open('dashboard/pencarian', 'class="form-inline" id="form_pencarian"'); ?>
			<!-- <form action="dashboard/pencarian" method="POST" role="form" class="form-inline" > -->
				<div class="form-group">
					<!-- <label class="sr-only" for="exampleInputEmail2">Email address</label> -->
					<input type="text" class="form-control" id="exampleInputEmail2" placeholder="Pencarian" name="search">
				</div>
				<button type="submit" class="btn btn-primary" id="pencarian">Submit</button>
			</form>
		</div>

		<div class="col-lg-9 col-lg-offset-1" id="result">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-folder"></i> Hasil Pencarian</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<div id="loading" style="display:none;"><img src="<?php echo base_url('img/loading.gif') ?>" alt="loading..." /></div>
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
								if (isset($data_pencarian)) {
									
								
								$no = 1;
								foreach ($data_pencarian as $value) {
									?>
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $value->nama; ?></td>
										<!-- <td><?php echo $value->tanggal; ?></td> -->
									</tr>
									<?php 
									$no++;
								};
								 }
								
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