<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<legend>
				<h3>Tambah Post Baru  <span class="ico-setting"><i class="glyphicon glyphicon-list-alt"></i></span></h3>
			</legend>
		</div>
	</div><!-- /.row -->

	<div class="row">
		<div class="col-lg-9">
			<div class="text-left">
				<?php echo $this->session->flashdata('notifikasi');  ?>
			</div>
			<div class="panel panel-primary">
				
				<div class="panel-heading">
					<h3 class="panel-title"><i class="glyphicon glyphicon-pencil"></i> Daftar Artikel </h3>
				</div>
				<div class="panel-body">
					<?php echo form_open('artikel/tambah_artikel','role="form"'); ?>
					
					<div class="form-group">
						<label for="" class="control-label">Judul</label>
						<input type="text" class="form-control" id="judul" placeholder="Judul?" name="judul">
						<?php echo form_error('judul'); ?>
					</div>

					<div class="form-group">
						<label for="">Isi Postingan</label>
						<textarea name="isi_artikel" class="form-control" id="isi_artikel"></textarea>
						<?php echo form_error('isi_artikel'); ?>
					</div>
					<div class="form-group">
						<label for="" class="control-label">Tags</label><br>
						<input type="text" class="form-control input-sm" id="judul" name="tag" data-role="tagsinput" placeholder="tag">
					</div>
					<div class="form-group">
						<label class="control-label ">Simpan Sebagai: </label>
						<select class="form-control" name="simpan_sebagai">
							<option value="Publish">Publish</option>
							<option value="Draft">Draft</option>
						</select>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">Submit Artikel</button>
					</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
		<!-- /.row -->
