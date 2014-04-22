<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title><?php echo $judul;?></title>
  <link href="<?php echo base_url('assets/template/contact/style.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/template/style.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/template/style/type/folks.css') ?>" rel="stylesheet">

  <script src="<?php echo base_url('assets/template/style/js/jquery.jcarousel.js') ?>"></script>
  <script src="<?php echo base_url('assets/template/style/js/newscarousel.js') ?>"></script>
  <script src="<?php echo base_url('assets/template/style/js/jquery-1.5.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/template/style/js/jquery.cycle.all.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/template/style/js/ddsmoothmenu.js') ?>"></script>
  <script src="<?php echo base_url('assets/template/style/js/script.js') ?>"></script>
  <script src="<?php echo base_url('assets/template/style/js/jquery.infieldlabel.min.js') ?>"></script>

<script type="text/javascript">
  $(function(){ $("label").inFieldLabels(); });
</script>
<script type="text/javascript">
getTwitters('twitter', {
        id: 'elemisdesign', 
        count: 1, 
        enableLinks: true, 
        ignoreReplies: false,
        template: '<span class="twitterPrefix"><span class="twitterStatus">%text%</span>',
        newwindow: true
});
</script>
<script type="text/javascript">  
        
$(document).ready(function() {
  
    $("#ajax-contact-form").submit(function() {
        $('#load').append('<center><img src="ajax-loader.gif" alt="Currently Loading" id="loading" /></center>');

        var fem = $(this).serialize(),
      note = $('#note');
  
        $.ajax({
            type: "POST",
            url: "contact/contact.php",
            data: fem,
            success: function(msg) {
        if ( note.height() ) {      
          note.slideUp(500, function() { $(this).hide(); });
        } 
        else note.hide();

        $('#loading').fadeOut(300, function() {
          $(this).remove();

          // Message Sent? Show the 'Thank You' message and hide the form
          result = (msg === 'OK') ? '<div class="success">Your message has been sent. Thank you!</div>' : msg;

          var i = setInterval(function() {
            if ( !note.is(':visible') ) {
              note.html(result).slideDown(500);
              clearInterval(i);
            }
          }, 40);    
        }); // end loading image fadeOut
            }
        });

        return false;
    });
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
  
  <!-- Begin Wrapper -->
  <div id="wrapper"> 
    
    <!-- Begin Content -->
    <div class="content">
      <h3>VISI</h3>
      <p><?php echo $tampil->visi; ?></p>
      <br/>
      <h3>MISI</h3>
      <p><?php echo $tampil->misi; ?></p>
      <br/>
      <!-- Begin Form -->
      
      <div class="contact-left">
        <div id="contact-form"> 
          
          <!--begin:notice message block-->
          <div id="note"></div>
          <!--begin:notice message block-->
          
          <form id="ajax-contact-form" method="post" action="javascript:alert('success!');">
            <div class="labels">
              <p>
                <label for="name">Name</label>
                <br />
                <input class="required inpt" type="text" name="name" id="name" value="" />
              </p>
              <p>
                <label for="email">E-Mail</label>
                <br />
                <input class="required inpt" type="text" name="email" id="email" value="" />
              </p>
            </div>
            <div class="comments">
              <p>
                <textarea class="textbox" name="message" rows="6" cols="30"></textarea>
              </p>
              <br />
              <p>
                <label for="answer">5+1=?</label>
                <br />
                <input class="required inpt" type="text" name="answer" id="answer" value="" />
              </p>
            </div>
            <label id="load" style="display:none"></label>
            <input id="submit-button" class="button gray stripe" type="submit" name="submit" value="Send Message" />
          </form>
        </div>
        <!-- End Form --> 
      </div>
      <div class="contact-right">
        <div class="one-half">
          <h4>Head Office</h4>
          <p>Moon Avenue No:11/21 <br />
            Planet City, Earth <br />
            <br />
            <span class="highlight3">Fax:</span> +555 797 534 01 <br />
            <span class="highlight3">Tel:</span> +555 636 646 62 </p>
        </div>
        <div class="one-half last">
          <h4>Brach Office</h4>
          <p>Moon Avenue No:11/21 <br />
            Planet City, Earth <br />
            <br />
            <span class="highlight3">Fax:</span> +555 797 534 01 <br />
            <span class="highlight3">Tel:</span> +555 636 646 62 </p>
        </div>
        <div class="clear"></div>
        <br />
        <iframe width="400" height="188" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps/ms?hl=en&amp;ie=UTF8&amp;msa=0&amp;msid=207283647702034942388.00049e0aeaa1c22ac0897&amp;ll=41.035082,29.001846&amp;spn=0.044025,0.143852&amp;z=12&amp;output=embed"></iframe>
      </div>
      <div class="clear"></div>
      <div class="divider"></div>
      <div id="twitter-wrapper">
        <div id="twitter"></div>
        <span class="username">Follow <a href="http://twitter.com/elemisdesign">elemisdesign</a></span> </div>
      <div class="clear"></div>
    </div>
    <!-- End Content --> 
    
  </div>
  <!-- End Wrapper -->
  
  <div class="clearfix"></div>
  <div class="push"></div>
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