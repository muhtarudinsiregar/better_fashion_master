<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<legend><h1>Edit <small>Visi Misi</small></h1></legend>
		</div>
	</div><!-- /.row -->

	<div class="row">
		<div class="col-lg-12">
			<div class="col-lg-9">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title"><i class="fa fa-money"></i> Visi Misi</h3>
					</div>
					<div class="panel-body">
						<?php echo form_open('about/update_visi/'.$tampil->id, 'role="form",class="form-horizontal",id="myform"'); ?>
						<div class="form-group">
							<label for="">Visi</label>
							<textarea class="form-control" rows="3"  name="visi"><?php echo $tampil->visi; ?></textarea>
						</div>

						<div class="form-group">
							<label for="">Misi</label>
							<textarea class="form-control" rows="3"  name="misi"><?php echo $tampil->misi; ?></textarea>
						</div>


						<button type="submit" class="btn btn-primary">Submit</button>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>