<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<legend><h1>Edit <small>Artikel</small></h1></legend>
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
					<?php  form_hidden('id', '$edit->id'); ?>
						<?php echo form_open('artikel/update_artikel/'.$edit->id,'role="form"'); ?>
						<div class="form-group">
							<label for="">Judul</label>
							<input type="text" class="form-control" id="" placeholder="Input field" name="judul" value="<?php echo $edit->judul; ?>">
						</div>

						<div class="form-group">
							<label for="">Isi Postingan</label>
							<textarea name="isi_artikel" class="form-control" id="isi_artikel"><?php echo $edit->isi; ?></textarea>
						</div>


						<button type="submit" class="btn btn-primary">Submit</button>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
		<!-- /.row -->







// <?php echo form_open('artikel/update_artikel'); ?>
// 	<label for="judul">Judul</label>
// 	<input type="text" name="judul" value="<?php echo $edit->judul; ?>">
// 	 <?php echo form_error('judul'); ?>
// 	<br>
// 	<label for="isi_artikel">Isi Artikel</label>
//     <textarea name="isi_artikel"><?php echo $edit->isi; ?></textarea>
//      <?php echo form_error('isi_artikel'); ?>
//     <input type="submit" value="Submit">
// <?php echo form_close(); ?>
// <!-- Place inside the <head> of your HTML -->
// <script type="text/javascript" src="<?php echo site_url('asset/js/tinymce/js/tinymce/tinymce.min.js') ?>"></script>
// <script type="text/javascript">
// tinymce.init({
//     selector: "textarea"
//  });
// </script>
