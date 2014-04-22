<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">

	<link href="<?php echo base_url('assets/template/style.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/template/style/type/folks.css') ?>" rel="stylesheet">

	<script src="<?php echo base_url('assets/template/style/js/jquery.jcarousel.js') ?>"></script>
	<script src="<?php echo base_url('assets/template/style/js/newscarousel.js') ?>"></script>
	<script src="<?php echo base_url('assets/template/style/js/jquery-1.5.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/template/style/js/jquery.cycle.all.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/template/style/js/ddsmoothmenu.js') ?>"></script>
	<script src="<?php echo base_url('assets/template/style/js/script.js') ?>"></script>
	<script type="text/javascript">
		$(function() {
			if ($('#sliderholder-cycle').length) {
					// timeouts per slide (in seconds) 
					var timeouts = [150,390,25]; 
					function calculateTimeout(currElement, nextElement, opts, isForward) { 
						var index = opts.currSlide; 
						return timeouts[index] * 1000;
					}
					jQuery('#sliderholder-cycle').cycle({
						fx: 'fade',
						pager: '.slidernav',
						prev:    '.sliderprev',
						next:    '.slidernext',
						speed: 1000,
						timeoutFn: calculateTimeout,
						pagerEvent: 'click',
						pauseOnPagerHover: true,
						cleartype: 1
					});
					jQuery('#sliderholder-cycle').css("display", "block");
					jQuery('.slidernav').css("display", "block");
					
				}
			}); 
	</script>

</head>
<body>
	<div id="container"> 
		<!-- Begin Header Wrapper -->
		<div id="page-top">
			<div id="header-wrapper"> 
				<!-- Begin Header -->
				<div id="header">
					<div id="logo"><a href="index.html"><img src="<?php echo base_url('assets/bootstrap/log.png') ?>" alt="Delphic" /></a></div>
					<!-- Logo --> 
					<!-- Begin Menu -->
		              <div id="menu-wrapper">
		                <div id="smoothmenu1" class="ddsmoothmenu">
		                  <ul>
		                    <li><a href="<?php echo site_url('home') ?>">Home</a></li>                              
		                    <li><a href="<?php echo site_url('home/blog') ?>">blog</a></li>                              
		                    <li><a href="<?php echo site_url('home/foto') ?>">Portfolio</a></li>              
		                    <li><a href="<?php echo site_url('about');?>">Contact</a></li>
		                  </ul>
		                </div>
		              </div>
  					<!-- End Menu --> 
				</div>
				<!-- End Header --> 
			</div>
		</div>
		<!-- End Header Wrapper --> 

		<!-- Begin Slider -->
		<div id="cycle-wrapper">
			<div id="sliderholder-cycle"> 
				<img src="<?php echo base_url('assets/template/style/images/prettyPhoto/banner-1.jpg') ?>" width="960" height="380" />
			    <img src="<?php echo base_url('assets/template/style/images/art/slider-2.jpg') ?>" width="960" height="380" /> 
				<img src="<?php echo base_url('assets/template/style/images/prettyPhoto/banner-2.jpg') ?>" width="960" height="380" />
			    <img src="<?php echo base_url('assets/template/style/images/art/slider-1.jpg') ?>" width="960" height="380" /> 
		</div>
		<ul class="slidernav">
		</ul>
		<div class="sliderdir"> <a href="#"><span class="sliderprev">Prev</span></a> <a href="#"><span class="slidernext">Next</span></a> </div>
	</div>
	<!-- End Slider --> 

	<!-- Begin Wrapper -->
	<div id="wrapper"> 

		<!-- Begin Intro -->
		<!-- End Intro --> 

		<!-- Begin About -->
		<div id="about">
		<?php  foreach ($data_gambar as $value) {
			
		 ?>
			<div class="one-fourth" style="margin-bottom:5%;"> <a href="#"><img src="img/<?php echo $value->foto;?>" alt="" style="width: 100%;height: 220px"/></a>
				<h4 style="text-align:center;"><?php echo $value->nama; ?></h4>
			</div>
		<?php } ?>
		</div>
		<!-- End About --> 
	</div>  
	<!-- End Wrapper -->
	
	<div class="clearfix"></div>
	<div class="push"></div>
</div>

<!-- Begin Wrapper -->
<div id="wrapper">
	<div id="news"> 

		<!-- Begin News Navigation -->
		<div id="newslist">
			<ul>
				<!-- Begin Entry Heading 1 -->
				<?php foreach ($artikel as $value) {

					?>
					<li> 				
						<!-- <a href="blog-single.html"><img src="style/images/art/blog-th1.jpg" alt="" class="left" /></a> -->
						<h4 class="title"><?php echo anchor('home/detail_artikel/'.$value->id.'',"$value->judul"); ?><span>- <?php echo $value->tanggal; ?></span></h4>
						<p>
							<?php $isi=$value->isi; $isi=character_limiter($isi,250); ?>
							<?php echo $isi; ?>
							<?php echo anchor('home/detail_artikel/'.$value->id.''," Continue Reading &raquo;");?>
						</p>
					</li>					
					<?php } ?>

				</ul>
			</div>
		</div>
		<!-- End News Navigation --> 
		<div class="clearfix"></div>
	</div>
	

	<!-- Footer -->
	<div id="footer-wrapper">
		<div id="footer">
			<div id="footer-content"> 

				<!-- Begin Copyright -->
				<div id="copyright">
					<p>© Copyright 2011 Delphic | Creative Portfolio Template</p>
				</div>
				<!-- End Copyright --> 

				<!-- Begin Social Icons -->
				<div id="socials">
					<ul>
						<li><a href="#"><img src="<?php echo base_url('assets/template/style/images/icon-rss.png'); ?>" alt="" /></a></li>
						<li><a href="#"><img src="<?php echo base_url('assets/template/style/images/icon-twitter.png'); ?>" alt="" /></a></li>
						<li><a href="#"><img src="<?php echo base_url('assets/template/style/images/icon-dribble.png'); ?>" alt="" /></a></li>
						<li><a href="#"><img src="<?php echo base_url('assets/template/style/images/icon-tumblr.png'); ?>" alt="" /></a></li>
						<li><a href="#"><img src="<?php echo base_url('assets/template/style/images/icon-flickr.png'); ?>" alt="" /></a></li>
						<li><a href="#"><img src="<?php echo base_url('assets/template/style/images/icon-facebook.png'); ?>" alt="" /></a></li>
					</ul>
				</div>
				<!-- End Social Icons --> 

			</div>
		</div>
	</div>
	<!-- End Footer -->


</body>
</html>
