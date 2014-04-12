<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h3>Tambah Barang<span class="ico-setting"><i class="fa fa-shopping-cart"></i></span></h3>
		</div>
	</div><!-- /.row -->

	<div class="row">
		<div class="col-lg-9">
			<div class="text-left">
				<?php echo $this->session->flashdata('notifikasi');  ?>
			</div>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="glyphicon glyphicon-pencil"></i> &nbsp; Form Tambah Barang</h3>
				</div>
				<div class="panel-body">
					<?php form_open_multipart('barang/proses_upload') ?>
					<form method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
						 <!-- <?php echo $error; ?>  -->
						<div class="form-group">
							<label for="userfile" class="control-label col-lg-3">Pilih gambar Barang : </label>
							<div class="col-lg-3">
								<input type="file" name="userfile" class="" />  
							</div>
						</div>
						<div class="form-group">
							<label for="kategori" class="control-label col-lg-3">Kategori :</label>
							<div class="col-lg-3">
								<select name="kategori" class="form-control">
									<option value="baju">Baju</option>
									<option value="celana_panjang">Celana Panjang</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-3" for="nama">Nama Barang :</label>
							<div class="col-lg-5">
								<input class="form-control" type="text" name="nama">
							</div>
						</div>
						<div class="form-group">
							<label for="harga" class="control-label col-lg-3">Harga Barang :</label>
							<div class="col-lg-3">
								<input class="form-control"type="text" name="harga">
							</div>
						</div>
						<div class="form-group">
							<label for="detail_barang" class="control-label col-lg-3">Keterangan Barang: </label>
							<div class="col-lg-5">
								<textarea type="text" name="detail_barang" class="form-control" id="text-barang"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="tag" class="control-label col-lg-3">Tags Barang :</label>
							<div class="col-lg-6">
								<input type="text" class="form-control input-sm" id="judul" name="tag" data-role="tagsinput" placeholder="tag">
							</div>
						</div>                                      
						<div class="form-group">
							<div class="col-lg-offset-3 col-lg-9">
								<input type="submit" value="Upload" name="upload" class="btn btn-primary" />
								<input type="submit" value="Preview Image" class="btn btn-danger">
							</div>
						</div>
						<?php echo form_close(); ?>

						<div>
							<!-- <?php echo $output; ?> -->
						</div>        

					</div>
				</div>

				<div>
					<div>