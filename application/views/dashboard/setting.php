<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-6">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-money"></i> Tambah Kategori</h3>
				</div>
				<div class="panel-body">
					<?php echo form_open('dashboard/update_setting/'.$tampil->id_setting,'class="form-horizontal"','role="form"'); ?>
					<div class="form-group">
						<label for="" class="col-lg-4 control-label">Facebook (URL)</label>
						<div class="col-lg-8">
							<input name="facebook" type="text" class="form-control" id="" placeholder="Facebook" value="<?php echo $tampil->facebook; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-lg-4 control-label">Twitter (URL)</label>
						<div class="col-lg-8">
							<input name="twitter" type="text" class="form-control" id="" placeholder="Twitter" value="<?php echo $tampil->twitter; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-lg-4 control-label">Google + (URL)</label>
						<div class="col-lg-8">
							<input name="google_plus" type="text" class="form-control" id="" placeholder="Google +" value="<?php echo $tampil->g_plus; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-lg-4 control-label">Kategori</label>
						<div class="col-lg-8">
							<input name="email" type="email" class="form-control" id="" placeholder="Tambah Kategori" value="<?php echo $tampil->email; ?>">
						</div>
					</div>

					<div class="form-group">
						<div class="col-lg-offset-4 col-lg-8">
							<button type="submit" class="btn btn-primary">Update</button>
							
						</div>
					</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<textarea class="textarea form-control" placeholder="Enter text ..." style="width: 410px; height: 200px"><?php echo $tampil->informasi; ?></textarea>
		</div>

		