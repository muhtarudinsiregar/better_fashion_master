<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<legend><h1>Tambah <small>Kategori</small></h1></legend>
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
						<?php echo form_open('kategori/proses_kategori', 'role="form",class="form-horizontal"'); ?>
						<div class="form-group">
							<div class="form-group">
								<label for="">Nama Kategori</label>
								<input name="kategori" type="text" class="form-control" id="" placeholder="Tambah Kategori">
							</div>
						</div>
						
						<button type="submit" class="btn btn-primary">Submit</button>
						<button type="reset" class="btn btn-default">Reset</button>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>



<!-- <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
	
	<!-- <form action="" method="POST" role="form" class="form-horizontal"> -->
	<legend>Tambah kategori</legend>

	<button type="submit" class="btn btn-primary">Submit</button>
	<button type="reset" class="btn btn-default">Reset</button>
	<?php  echo form_close();?>
</div> -->