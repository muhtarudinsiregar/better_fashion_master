 <body>
  <div id="wrapper">

    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Better Admin Panel</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
          <li>
            <div class="form-group">
              <?php echo form_open('url', ''); ?>
              <div class="input-group" id="grup-cari">
                <div class="input-group-btn">
                  <button type="submit" class="btn btn-success" id="tes"><span class="glyphicon glyphicon-search"></span></button>
                </div>
                <input type="text" class="form-control" placeholder="Pencarian" id="query" name="query" id="tes2">

              </div>
              <?php echo form_close(); ?>
            </div>
          </li>
          <li><a href="<?php echo site_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-table"></i> Post <b class="caret"></b></a>
            <ul class="dropdown-menu" id="postingan">
              <li><a href="<?php echo site_url('artikel/tambah_artikel'); ?>">Tulis Baru</a></li>
              <li><a href="<?php echo site_url('artikel'); ?>">Semua Post</a></li>
              <li><a href="#">Draft</a></li>
            </ul>
          </li>
          <li><a href="<?php echo site_url('barang'); ?>"><i class="glyphicon glyphicon-shopping-cart"></i> Tambah Barang</a></li>
          <!-- <li><a href="<?php echo site_url('artikel'); ?>"><i class="fa fa-table"></i> Tambah Artikel</a></li> -->
          <li><a href="<?php echo site_url('kategori'); ?>"><i class="glyphicon glyphicon-list-alt"></i> Tambah Kategori</a></li>
          <li><a href="<?php echo site_url('about/edit'); ?>"><i class="fa fa-font"></i> Visi dan Misi</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench "></i> Setting <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo site_url('dashboard/setting_blog'); ?>">Setting Blog</a></li>
              <li><a href="<?php echo site_url('#'); ?>">Setting Profil</a></li>
            </ul>
          </li>

        </ul>

        <ul class="nav navbar-nav navbar-right navbar-user">
          
          <li class="dropdown user-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" id="userlogin"></i> John Smith <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
              <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
              <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
              <li class="divider"></li>
              <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>