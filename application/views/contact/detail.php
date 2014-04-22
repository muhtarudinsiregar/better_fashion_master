<div id="page-wrapper">
	<div class="row">
	<div class="col-lg-12">
		<legend>
			<h3>Kategori <span class="ico-setting"><i class="fa fa-archive"></i></span></h3>
		</legend>
	</div>
		<div class="col-lg-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-money"></i> Tambah Kategori</h3>
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
		
	</div>
	<div class="row">
		
	</div><!-- /.row -->