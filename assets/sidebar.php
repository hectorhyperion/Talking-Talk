  <!-- sidebar menu start -->
  <div class="sidebar-menu sticky-sidebar-menu">

    <!-- logo start -->
    <div class="logo">
      <h1><a href="dashboard">Dashboard</a></h1>
    </div>

  <!-- if logo is image enable this -->
    <!-- image logo --
    <div class="logo">
      <a href="index.html">
        <img src="image-path" alt="Your logo" title="Your logo" class="img-fluid" style="height:35px;" />
      </a>
    </div>
    <!-- //image logo -->

    <div class="logo-icon text-center">
      <a href="dashboard" title="logo">
        <img src="<?php echo base_url('assets/images/logo.png')?>" alt="logo-icon"> </a>
    </div>
    <!-- //logo end -->

    <div class="sidebar-menu-inner">

      <!-- sidebar nav start -->
      <ul class="nav nav-pills nav-stacked custom-nav">
        <li class="active"><a href="#"><i class="fa fa-tachometer"></i><span>Registerd users</span></a>
        </li>
        <li class="menu-list">
          <a href="#"><i class="fa fa-cogs"></i>
            <span>News post category <i class="lnr lnr-chevron-right"></i></span></a>
          <ul class="sub-menu-list">
            <li><a href="<?php echo site_url('admin/news')?>">News</a> </li>
            <li><a href="politics">Politics</a> </li>
            <li><a href="<?php echo site_url('admin/sport_news')?>">Sports</a></li>
          </ul>
        </li>
        <li><a href="pricing.html"><i class="fa fa-table"></i> <span>Pricing tables</span></a></li>
        <li><a href="blocks.html"><i class="fa fa-th"></i> <span>Content blocks</span></a></li>
        <li><a href="forms.html"><i class="fa fa-file-text"></i> <span>Forms</span></a></li>
      </ul>
      <!-- //sidebar nav end -->
      <!-- toggle button start -->
      <a class="toggle-btn">
        <i class="fa fa-angle-double-left menu-collapsed__left"><span>Collapse Sidebar</span></i>
        <i class="fa fa-angle-double-right menu-collapsed__right"></i>
      </a>
      <!-- //toggle button end -->
    </div>
  </div>
  <!-- //sidebar menu end -->