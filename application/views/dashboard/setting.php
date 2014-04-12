<div id="page-wrapper">
	<div class="row">
	<div class="col-lg-12">
		<legend>
			<h3>Setting Blog <span class="ico-setting"><i class="glyphicon glyphicon-cog"></i></span></h3>
		</legend>
	</div>
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
							<input name="facebook" type="url" class="form-control" value="<?php echo $tampil->facebook; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-lg-4 control-label">Twitter (URL)</label>
						<div class="col-lg-8">
							<input name="twitter" type="url" class="form-control" value="<?php echo $tampil->twitter; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-lg-4 control-label">Google + (URL)</label>
						<div class="col-lg-8">
							<input name="google_plus" type="url" class="form-control" value="<?php echo $tampil->g_plus; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-lg-4 control-label">Email</label>
						<div class="col-lg-8">
							<input name="email" type="email" class="form-control" value="<?php echo $tampil->email; ?>">
						</div>
					</div>

					<div class="form-group">
						<label for="" class="col-lg-4 control-label">No Telpon</label>
						<div class="col-lg-8">
							<input name="no_telpon" type="text" class="form-control" value="<?php echo $tampil->no_telpon; ?>">
						</div>
					</div>

					<div class="form-group">
						<label for="" class="col-lg-4 control-label">Keterangan Tambahan</label>
						<div class="col-lg-8">
							<textarea class="form-control " id="keterangan" name="informasi"><?php echo $tampil->informasi; ?></textarea>
						</div>
					</div>


					<div class="form-group">
						<div class="col-lg-offset-4 col-lg-8">
							<button type="submit" class="btn btn-primary">Update</button>
							
						</div>
					</div>
					<div class="text-left">
						<?php echo $this->session->flashdata('notifikasi');  ?>
					</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>	