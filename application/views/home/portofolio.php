<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>Delphic | Creative Portfolio Template</title>
  <link href="<?php echo base_url('assets/template/style.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/template/style/css/prettyPhoto.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/template/style/type/folks.css') ?>" rel="stylesheet">

  <script src="<?php echo base_url('assets/template/style/js/style/js/jquery-1.5.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/template/style/js/style/js/script.js') ?>"></script>
  <script src="<?php echo base_url('assets/template/style/js/style/js/jquery.prettyPhoto.js') ?>"></script>
  <script src="<?php echo base_url('assets/template/style/js/style/js/ddsmoothmenu.js') ?>"></script>
  <script src="<?php echo base_url('assets/template/style/js/style/js/quicksand.js') ?>"></script>
  <script src="<?php echo base_url('assets/template/style/js/style/js/portfolio.js') ?>"></script>
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
  
  <!-- Begin Wrapper -->
  <div id="wrapper">
    <div id="portfolio"> 
      <!-- Begin Portfolio Navigation -->
      <ul class="gallerynav">
        <li class="selected-1"><a href="#" data-value="all">All<span></span></a></li>
        	<?php foreach ($tampil_kategori as $value) {
        		?>
      	<li><a href="<?php echo site_url('home/kategori/'.$value->id); ?>" data-value="<?php echo $value->nama; ?>"><?php echo $value->nama; ?><span></span></a></li>
      	  <?php } ?>
      </ul>
              <ul id="gallery" class="grid">
        <?php	foreach ($tampil_barang as $value) {		
		 ?>
		 <li data-id="id-1" class="<?php echo $value->nama; ?>">
        <img src="<?php echo base_url('img/'.$value->foto)  ;?>" alt="" />
        <p style="text-align:center;"><?php echo anchor('home/detail_barang/'.$value->id.'',"$value->nama"); ?></p></li>
 	 <?php } ?>        
      </ul>
      <!-- End Portfolio Elements --> 
      
    </div>
  </div>
  
  <!-- End Wrapper -->
  <div class="clearfix"></div>
  <div class="push"></div>
</div>

<!-- Begin Footer -->
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
<script type="text/javascript">
		$(document).ready(function(){
			
			$("ul.grid img").hide()
			$("ul.grid img").each(function(i) {
			  $(this).delay(i * 200).fadeIn();
			});
			
		});
</script>
</body>
</html>

