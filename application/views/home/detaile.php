<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>Delphic | Creative Portfolio Template</title>
  <link href="<?php echo base_url('assets/template/style.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/template/style/css/prettyPhoto.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/template/style/type/folks.css') ?>" rel="stylesheet">

  <script src="<?php echo base_url('assets/template/style/js/style/js/jquery-1.5.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/template/style/js/style/js/ddsmoothmenu.js') ?>"></script>
  <script src="<?php echo base_url('assets/template/style/js/style/js/script.js') ?>"></script>
  <script src="<?php echo base_url('assets/template/style/js/style/js/jquery.prettyPhoto.js') ?>"></script>
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
    <div id="portfolio-single">
      <div class="image"> 
    		<img src="<?php echo site_url('img/'.$detail_barang->foto_asli) ?>" alt="" style="width: 660px;height: 450px"/> 
      </div>
      <div class="text">
  	        <h3><?php echo $detail_barang->nama; ?></h3>
        <ul>
            <li><p>Rp. <?php echo $detail_barang->harga; ?></p></li>
            <li><p><?php echo $detail_barang->detail_barang; ?></p></li>
        </ul>    
            <h3>Kategori</h3>
            <ul>
                <li><?php echo $detail_barang->kategori; ?></li>         
            </ul>
                    <div class="divider3"></div>

       		<h3>Tags <img src="<?php echo base_url('assets/template/style/images/check.png'); ?>" alt="" /><span></span></h3>
       		<ul class="tags">
           		<?php 
                $tag = $detail_barang->tags;
                $arr = explode(",", $tag);
              ?>
              <?php   for ($i=0; $i <sizeof($arr) ; $i++) {?>                
                <li><a href="#" title="">
                  <?php echo $arr[$i]."&nbsp;"; ?>
                  </a></li>
                <?php }?>
        	</ul>        
    </div>
  </div>
  <!-- End Wrapper -->
  <div class="clearfix"></div>
  <div class="push"></div>
</div>
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
</body>
</html>

