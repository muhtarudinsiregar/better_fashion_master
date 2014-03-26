<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<legend><h1>Tambah <small>Artikel</small></h1></legend>
		</div>
	</div><!-- /.row -->

	<div class="row">
		<div class="col-lg-12">
			<div class="col-lg-9">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title"><i class="fa fa-money"></i> Daftar Artikel</h3>
					</div>
					<div class="panel-body">
						<?php echo form_open('artikel/tambah_artikel','role="form"'); ?>
						
						<div class="form-group">
							<label for="" class="control-label">Judul</label>
							<input type="text" class="form-control" id="judul" placeholder="Judul?" name="judul">
						</div>

						<div class="form-group">
							<label for="">Isi Postingan</label>
							<textarea name="isi_artikel" class="form-control" id="isi_artikel"></textarea>
						</div>
						<div class="form-group">
							<label for="" class="control-label">Tags</label><br>
							<input type="text" class="form-control input-sm" id="judul" name="tag" data-role="tagsinput" placeholder="tag">
						</div>


						<button type="submit" class="btn btn-primary">Publish Artikel</button>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
		<!-- /.row -->
