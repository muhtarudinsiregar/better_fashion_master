<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo $judul ?></title>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css');?>" rel="stylesheet">

	<!-- Add custom CSS here -->
	<link href="<?php echo base_url('assets/bootstrap/css/sb-admin.css'); ?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/font-awesome/css/font-awesome.min.css'); ?>">
	<!-- Page Specific CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap-tagsinput.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap-wysihtml5.css'); ?>">
<<<<<<< HEAD

=======
	<!-- <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css"> -->
>>>>>>> 8b5b107712a4d44b224f16215874faa20ddd7c46
</head>
<body class="body-login">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-lg-offset-4">
				<div class="panel panel-default login-panel">
					<div class="panel-heading login-heading">
<<<<<<< HEAD
						<h3 class="panel-title">Please Sign In</h3>
=======
					<h3 class="panel-title">Please Sign In</h3>
>>>>>>> 8b5b107712a4d44b224f16215874faa20ddd7c46
					</div>
					<div class="panel-body">
						<?php echo form_open('login', 'role="form"'); ?>
						<div class="form-group">
							<div class="form-group">
<<<<<<< HEAD
								<?php echo $this->session->flashdata('message');  ?>
=======
								
>>>>>>> 8b5b107712a4d44b224f16215874faa20ddd7c46
								<input name="username" type="text" class="form-control" id="" placeholder="Username">
								<?php echo form_error('username'); ?>
							</div>
						</div>
						<div class="form-group">
							<div class="form-group">
								
								<input name="password" type="password" class="form-control" id="" placeholder="Password">
								<?php echo form_error('password'); ?>
							</div>
						</div>
<<<<<<< HEAD
						<div class="checkbox">
							<label>
							<input type="checkbox" name="remember"> Remember Me
							</label>
						</div>
=======
>>>>>>> 8b5b107712a4d44b224f16215874faa20ddd7c46
						<div class="text-left">
							<?php echo $this->session->flashdata('hasil');  ?>
						</div>
						<button type="submit" class="btn btn-lg btn-block btn-success">Login</button>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>


</body>
</html>