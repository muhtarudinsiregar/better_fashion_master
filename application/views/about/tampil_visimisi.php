<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<legend>
				<h3>Visi Misi  <span class="ico-setting"><i class="glyphicon glyphicon-road"></i></span></h3>
			</legend>
		</div>
	</div><!-- /.row -->

	<div class="row">
		<div class="col-lg-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-money"></i> Visi </h3>
				</div>
				<div class="panel-body">
					<?php echo form_open('about/update_visi/'.$tampil->id, 'role="form",class="form-horizontal",id="myform"'); ?>
					<div class="form-group">
						<label for="">Visi</label>
						<textarea name="visi"class="textarea form-control" placeholder="Enter text ..." style="width: 500px; height: 200px"><?php echo $tampil->visi ?></textarea>
						<!-- <textarea class="form-control" rows="3"  name="visi"><?php echo $tampil->visi; ?></textarea> -->
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
					<?php echo form_close(); ?> 
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-money"></i> Misi</h3>
				</div>
				<div class="panel-body">
					<?php echo form_open('about/update_misi/'.$tampil->id, 'role="form",class="form-horizontal",id="myform"'); ?>
					<div class="form-group">
						<label for="" class="control-label">Misi</label>
						<textarea name="misi"class="textarea form-control" placeholder="Enter text ..." style="width: 500px; height: 200px"><?php echo $tampil->misi; ?></textarea>
					</div>
					


					<button type="submit" class="btn btn-primary">Submit</button>
					<?php echo form_close(); ?> 
				</div>
			</div>
		</div>