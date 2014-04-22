<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">

<<<<<<< HEAD
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
=======
	<!-- Loading Bootstrap -->
	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap-responsive.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/themes/css/bootstrappage.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/themes/css/flexslider.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/themes/css/main.css') ?>" rel="stylesheet">

	<script src="<?php echo base_url('assets/themes/js/jquery-1.7.2.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/themes/js/jquery.scrolltotop.js') ?>"></script>
	<script src="<?php echo base_url('assets/themes/js/superfish.js') ?>"></script>
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
			<![endif]-->		
		</head>
		<body>
			<!-- start of navbar -->
			<div id="top-bar" class="container">
				<div class="row">
					<div class="span4">
						<form method="POST" class="search_form">
							<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
						</form>
					</div>
				</div>
			</div>
			<div id="wrapper" class="container">
				<section class="navbar main-menu">
					<div class="navbar-inner main-menu">				
						<a href="index.html" class="logo pull-left"><img src="<?php echo base_url('assets/themes/images/log.png') ?>" class="site_logo" alt=""></a>
						<nav id="menu" class="pull-right">
							<ul>
								<li><a href="<?php echo site_url('home') ?>">Home</a></li>															
								<li><a href="<?php echo site_url('artikel/blog'); ?>">Blog</a></li>			
								<li><a href="<?php echo site_url('about') ?>">About Us</a></li>			
								<li><a href="<?php echo site_url('about') ?>">Category</a>
									<ul>									
										<?php 
										foreach ($data_kategori->result() as  $value) {
											
											?>
											<li>
												<?php 
												echo anchor('home/kategori/'.$value->id.'', $value->nama, 'attributs');
												?>
												<!-- <a href="<?php echo site_url('kategori'); ?>"><?php echo $value->nama; ?></a> -->
											</li>
											<?php } ?>	

										</ul>
									</li>							
									<li><a href="./products.html">Contact</a></li>
								</ul>
							</nav>
						</div>
					</section>
					<section class="header_text sub">
						<img class="pageBanner" src="<?php echo base_url('assets/themes/images/pageBanner.png') ?>" alt="New products" >
					</section>

<!-- 				<section  class="homepage-slider" id="home-slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<img src="<?php echo base_url('assets/themes/images/carousel/banner-1.jpg') ?>" alt="" />
							</li>
							<li>
								<img src="<?php echo base_url('assets/themes/images/carousel/banner-2.jpg') ?>" alt="" />
								<div class="intro">
									<h1>Mid season sale</h1>
									<p><span>Up to 50% Off</span></p>
									<p><span>On selected items online and in stores</span></p>
								</div>
							</li>
						</ul>
					</div>			
				</section> -->
				<section class="header_text">
					We stand for top quality templates. Our genuine developers always optimized bootstrap commercial templates. 
					<br/>Don't miss to use our cheap abd best bootstrap templates.
				</section>
				<section class="main-content">
					<div class="row">
						<div class="span12">													
							<div class="row">
								<div class="span12">
									<h4 class="title">
										<span class="pull-left"><span class="text"><span class="line">Feature <strong>Products</strong></span></span></span>
										<span class="pull-right">
											<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
										</span>
									</h4>
									<div id="myCarousel" class="myCarousel carousel slide">
										<div class="carousel-inner">
											<div class="active item">
												<ul class="thumbnails">												
													<?php foreach ($data_gambar->result() as $value) {
														?>
														<li class="span3">												  		
															<div class="product-box">
																<span class="sale_tag"></span>
																<img src="img/<?php echo $value->foto; ?>" data-src="img/download.png" alt="...">
																
																<a class="title"><h4><?php echo $value->nama; ?></h4></a><br/>
																<p class="price">Rp <?php echo $value->harga; ?></p>
																<?php echo anchor('barang/detail_barang/'.$value->id.'', '<h4>Lihat Detail</h4>'); ?>
															</div>
														</li>
														<?php } ?>
													</ul>
												</div>
											</div>							
										</div>
									</div>						
								</div>
								<br/>
								<div class="row">
									<div class="span12">
										<h4 class="title">
											<span class="pull-left"><span class="text"><span class="line">Latest <strong>Products</strong></span></span></span>
											<span class="pull-right">
												<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
											</span>
										</h4>
										<div id="myCarousel-2" class="myCarousel carousel slide">
											<div class="carousel-inner">
												<div class="active item">
													<ul class="thumbnails">												
														<?php foreach ($data_gambar->result() as $value) {
															?>
															<li class="span3">												  		
																<div class="product-box">
																	<span class="sale_tag"></span>
																	<img src="img/<?php echo $value->foto; ?>" data-src="img/download.png" alt="...">
																	
																	<a class="title"><h4><?php echo $value->nama; ?></h4></a><br/>
																	<p class="price">Rp <?php echo $value->harga; ?></p>
																	<?php echo anchor('barang/detail_barang/'.$value->id.'', '<h4>Lihat Detail</h4>'); ?>
																</div>
															</li>
															<?php } ?>
														</ul>
													</div>
												</div>							
											</div>
										</div>						
									</div>
									<div class="row feature_box">						
										<div class="span4">
											<div class="service">
												<div class="responsive">	
													<img src="<?php echo base_url('assets/themes/images/feature_img_2.png') ?>" alt="" />
													<h4>MODERN <strong>DESIGN</strong></h4>
													<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>									
												</div>
											</div>
										</div>
										<div class="span4">	
											<div class="service">
												<div class="customize">			
													<img src="<?php echo base_url('assets/themes/images/feature_img_1.png') ?>" alt="" />
													<h4>FREE <strong>SHIPPING</strong></h4>
													<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
												</div>
											</div>
										</div>
										<div class="span4">
											<div class="service">
												<div class="support">	
													<img src="<?php echo base_url('assets/themes/images/feature_img_3.png') ?>" alt="" />
													<h4>24/7 LIVE <strong>SUPPORT</strong></h4>
													<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
												</div>
											</div>
										</div>	
									</div>		
								</div>				
							</div>
						</section>
						<section class="our_client">
							<h4 class="title"><span class="text">Manufactures</span></h4>
							<div class="row">					
								<div class="span2">
									<a href="#"><img alt="" src="<?php echo base_url('assets/themes/images/clients/14.png') ?>"></a>
								</div>
								<div class="span2">
									<a href="#"><img alt="" src="<?php echo base_url('assets/themes/images/clients/35.png') ?>"></a>
								</div>
								<div class="span2">
									<a href="#"><img alt="" src="<?php echo base_url('assets/themes/images/clients/1.png') ?>"></a>
								</div>
								<div class="span2">
									<a href="#"><img alt="" src="<?php echo base_url('assets/themes/images/clients/2.png') ?>"></a>
								</div>
								<div class="span2">
									<a href="#"><img alt="" src="<?php echo base_url('assets/themes/images/clients/3.png') ?>"></a>
								</div>
								<div class="span2">
									<a href="#"><img alt="" src="<?php echo base_url('assets/themes/images/clients/4.png') ?>"></a>
								</div>
							</div>
						</section>
						<section id="footer-bar">
							<div class="row">
								<div class="span3">
									<h4>Navigation</h4>
									<ul class="nav">
										<li><a href="./index.html">Homepage</a></li>  
										<li><a href="./about.html">About Us</a></li>
										<li><a href="./contact.html">Contac Us</a></li>
										<li><a href="./cart.html">Your Cart</a></li>
										<li><a href="./register.html">Login</a></li>							
									</ul>					
								</div>
								<div class="span4">
									<h4>My Account</h4>
									<ul class="nav">
										<li><a href="#">My Account</a></li>
										<li><a href="#">Order History</a></li>
										<li><a href="#">Wish List</a></li>
										<li><a href="#">Newsletter</a></li>
									</ul>
								</div>
								<div class="span5">
									<p class="logo"><img src="<?php echo base_url('assets/themes/images/log.png') ?>" class="site_logo" alt=""></p>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
									<br/>
									<span class="social_icons">
										<a class="facebook" href="#">Facebook</a>
										<a class="twitter" href="#">Twitter</a>
										<a class="skype" href="#">Skype</a>
										<a class="vimeo" href="#">Vimeo</a>
									</span>
								</div>					
							</div>	
						</section>
						<section id="copyright">
							<span>Copyright 2013 bootstrappage template  All right reserved.</span>
						</section>
					</div>
					<script src="<?php echo base_url('assets/themes/js/common.js'); ?>"></script>
					<script src="<?php echo base_url('assets/themes/js/jquery.flexslider-min.js'); ?>"></script>

					<script type="text/javascript">
						$(function() {
							$(document).ready(function() {
								$('.flexslider').flexslider({
									animation: "fade",
									slideshowSpeed: 4000,
									animationSpeed: 600,
									controlNav: false,
									directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
							});
						});
					</script>
				</body>
				</html>
>>>>>>> 8b5b107712a4d44b224f16215874faa20ddd7c46
