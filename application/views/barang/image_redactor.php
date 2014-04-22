<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="container">
		<h1>Redactor + Image Manager<span style="float:right">Dida Nurwanda</span></h1>

		<div id="body">
			<textarea id="redactor_content" name="content">
			</textarea> 
		</div>

		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
	</div>

	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.7.min.js'); ?>"></script>
	<link rel="stylesheet" href="<?php echo base_url('assets/js/redactor.css'); ?>" />
	<script src="<?php echo base_url('assets/js/redactor.min.js'); ?>"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#redactor_content').redactor({
				imageUpload: '<?php echo site_url('image_redactor/upload'); ?>',
				imageGetJson: '<?php echo site_url('image_redactor/galeri'); ?>',
			});
		});
	</script>
</body>
</html>