<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>Delphic | Creative Portfolio Template</title>
  <link href="<?php echo base_url('assets/template/style.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/template/style/type/folks.css') ?>" rel="stylesheet">

  <script src="<?php echo base_url('assets/template/style/js/style/js/jquery-1.5.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/template/style/js/style/js/ddsmoothmenu.js') ?>"></script>
  <script src="<?php echo base_url('assets/template/style/js/style/js/script.js') ?>"></script>
  <script src="<?php echo base_url('assets/template/style/js/style/js/jquery.infieldlabel.min.js') ?>"></script>
<script type="text/javascript">
	$(function(){ $("label").inFieldLabels(); });
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
 
  <!-- Begin Wrapper -->
  <div id="wrapper">
    <div id="post-wrapper">
      <div class="post">
        <h2 class="title"><?php echo $detail_artikel->judul; ?></h2>
        <div class="meta">
          <div class="top-border"></div>
          Posted on
          <div class="date"><?php echo $detail_artikel->tanggal; ?></div>
          by <a href="#" title="">admin</a></div>
<!--         <img src="style/images/art/blog4.jpg" alt="" /> -->
        <p><?php echo $detail_artikel->isi; ?></p>
        <div class="top-border"></div>
	        <div class="tags"> Tags: 
            Tags: 
            <?php 
              $tag = $detail_artikel->tag;
              $arr = explode(",", $tag);
              
              for ($i=0; $i <sizeof($arr) ; $i++) { ?>
                
                <a href="#" title=""><?php echo $arr[$i]; ?>,  </a> 
          <?php } ?>
			</div>
	    </div>
    </div>
    <div id="sidebar">
      <div class="sidebox">
        <h3>New Posts</h3>
        <ul class="post-list">
    			<?php foreach ($artikel as $value) {?>
    				<li> 				
    					<h4><?php echo anchor('home/detail_artikel/'.$value->id.'',"$value->judul;"); ?></h4>
    					<span class="info"><?php echo $value->tanggal; ?>| by <a href="#" title="">Admin</a></span>
    				</li>					
    			<?php } ?>
        </ul>
      </div>
      <div class="sidebox">
        <h3>Archive</h3>
        <ul class="post-list archive">
          <?php foreach ($tampil_kategori as $value) {
            ?>
            <li><?php echo anchor('home/kategori/'.$value->id.'',"$value->nama"); ?></li>
          <?php } ?>
        </ul>
      </div>
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
</body>
</html>