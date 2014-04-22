<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
<<<<<<< HEAD
			<h3>Edit Barang<span class="ico-setting"><i class="fa fa-shopping-cart"></i></span></h3>
=======
			<h3>Tambah Barang<span class="ico-setting"><i class="fa fa-shopping-cart"></i></span></h3>
>>>>>>> 8b5b107712a4d44b224f16215874faa20ddd7c46
		</div>
	</div><!-- /.row -->

	<div class="row">
		<div class="col-lg-9">
			<div class="text-left">
				<?php echo $this->session->flashdata('notifikasi');  ?>
			</div>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="glyphicon glyphicon-pencil"></i> &nbsp; Form Edit Barang</h3>
				</div>
				<div class="panel-body">
					<!-- <?php form_open_multipart('barang/update_barang/'.$data_edit->id); ?> -->
					<form method="post" enctype="multipart/form-data" class="form-horizontal" role="form" action="<?php echo site_url('barang/update_barang/'.$data_edit->id) ?>">
						 <!-- <?php echo $error; ?>  -->
						<div class="form-group">
							<label for="userfile" class="control-label col-lg-3">Pilih gambar Barang : </label>
							<div class="col-lg-3">
								<input type="file" name="userfile" class="">  
							</div>
						</div>
						<div class="form-group">
							<label for="kategori" class="control-label col-lg-3">Kategori :</label>
							<div class="col-lg-3">
								<select name="kategori" class="form-control">
<<<<<<< HEAD
									<?php 
										foreach ($kategori->result() as $value) {
											
									 ?>
									<option value="<?php echo $value->id ?>"><?php echo $value->nama; ?></option>
									<?php 
									} ?>
=======
									<option value="baju">Baju</option>
									<option value="celana_panjang">Celana Panjang</option>
>>>>>>> 8b5b107712a4d44b224f16215874faa20ddd7c46
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-3" for="nama">Nama Barang :</label>
							<div class="col-lg-5">
								<input class="form-control" type="text" name="nama" value="<?php echo $data_edit->nama; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="harga" class="control-label col-lg-3">Harga Barang :</label>
							<div class="col-lg-3">
								<input class="form-control"type="text" name="harga" value="<?php echo $data_edit->harga; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="detail_barang" class="control-label col-lg-3">Keterangan Barang: </label>
							<div class="col-lg-5">
								<textarea type="text" name="detail_barang" class="form-control" id="text-barang"><?php echo $data_edit->detail_barang; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="tag" class="control-label col-lg-3">Tags Barang :</label>
							<div class="col-lg-6">
								<input type="text" class="input-sm" id="judul" name="tag" data-role="tagsinput" placeholder="tag" value="">
							</div>
						</div>                                      
						<div class="form-group">
							<div class="col-lg-offset-3 col-lg-9">
								<input type="submit" value="Upload" name="upload" class="btn btn-primary" />
								<input type="reset" value="Preview Image" class="btn btn-danger">
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