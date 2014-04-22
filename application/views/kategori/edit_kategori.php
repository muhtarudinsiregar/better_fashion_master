<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<legend><h1>Edit <small>Kategori</small></h1></legend>
		</div>
	</div><!-- /.row -->

	<div class="row">
		<div class="col-lg-12">
			<div class="col-lg-9">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title"><i class="fa fa-money"></i> Edit Kategori</h3>
					</div>
					<div class="panel-body">
						<?php echo form_open('kategori/update_kategori/'.$data_edit->id, 'role="form",class="form-horizontal"'); ?>

						<div class="form-group">
							<label for="">Isi Postingan</label>
							<input name="kategori" type="text" class="form-control" id="" placeholder="Tambah Kategori" value="<?php echo $data_edit->nama; ?>">
						</div>


						<button type="submit" class="btn btn-primary">Submit</button>
						<button type="reset" class="btn btn-default">Reset</button>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>