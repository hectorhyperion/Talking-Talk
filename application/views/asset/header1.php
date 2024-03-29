<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>The Talking-Talk Admin</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo site_url('assets/css/style.css')?>">
	<link rel="stylesheet" href="<?php echo site_url('set/css/style.css')?>">
  <link rel="stylesheet" href="<?php echo site_url('assets/css/style-starter.css')?>">
 <script src="https://cdn.ckeditor.com/4.15.1/standard-all/ckeditor.js"></script>
  

  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
</head>
 

<body class="sidebar-menu-collapsed">
  <div class="se-pre-con"></div>
  <!-- header-starts -->
  <div class="header sticky-header">


    <!-- notification menu start -->
    <div class="menu-right">
      <div class="navbar user-panel-top">
        <div class="search-box">
          <form action="<?php echo site_url('admin/news/index');?>" method="get">
            <input class="search-input" placeholder="Search Here" type="search" name="search" id="search" value="<?php //autoload search keyword on the search bar
            if($this->input->get('search')) echo $this->input->get('search'); ?> " >
            <button class="search-submit" value=""><span class="fa fa-search"></span></button>
          </form>
        </div>
        <div class="user-dropdown-details d-flex">
          <div class="profile_details_left">
            <ul class="nofitications-dropdown">
              <li class="dropdown">
                
                <ul class="dropdown-menu">
                  <li>
                    <div class="notification_header">
                     
                      </div>
                    </a></li>
                 
                    
                   
                    <div class="notification_bottom">
                     
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="profile_details">
            <ul>
              <li class="dropdown profile_details_drop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenu3" aria-haspopup="true"
                  aria-expanded="false">
                  <div class="profile_img">
                    <img src="<?php echo base_url('assets/images/help.jpg')?>" class="rounded-circle" alt="" />
                    <div class="user-active">
                      <span></span>
                    </div>
                  </div>
                </a>
                <ul class="dropdown-menu drp-mnu" aria-labelledby="dropdownMenu3">
                  <li class="user-info">
                    <h5 class="user-name">Admin</h5>
                    
                  </li>
                  <li> <a href="#"><i class="lnr lnr-cog"></i>Setting</a> </li>
                 
                  <li class="logout"> <a href="<?php echo site_url('admin/dashboard/logout')?>"><i class="fa fa-power-off"></i> Logout</a> </li>
									
                <!---  <li class="logout"> <a href="<?php //echo site_url('admin/dashboard/change_password')?>"><i class="fa fa-key"></i> Change_password</a> </li>-->
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--notification menu end -->
  </div>
  <!-- //header-ends -->
	  <!-- sidebar menu start -->
		
		<div class="sidebar-menu sticky-sidebar-menu">

<!-- logo start -->
<div class="logo">
	<h1><a href="<?php echo site_url('admin/dashboard')?>">Dashboard</a></h1>
</div>


<div class="logo-icon text-center">
	<a href="<?php echo site_url('admin/dashboard')?>" title="logo">
		<img src="<?php echo site_url('assets/images/logo.png')?>" alt="logo-icon"> </a>
</div>
<!-- //logo end -->

<div class="sidebar-menu-inner">

	<!-- sidebar nav start -->
	<ul class="nav nav-pills nav-stacked custom-nav">
		
		</li>
		<li class="menu-list">
			<a href="#"><i class="fa fa-cogs"></i>
				<span>News post category <i class="lnr lnr-chevron-right"></i></span></a>
			<ul class="sub-menu-list">
				<li><a href="<?php echo site_url()?>admin/news">News</a> </li>
				
			</ul>
		</li>
		<a class="toggle-btn">
        <i class="fa fa-angle-double-left menu-collapsed__left"><span>Collapse Sidebar</span></i>
        <i class="fa fa-angle-double-right menu-collapsed__right"></i>
      </a>
	
	<!-- //toggle button end -->
</div>
</div>
<!-- //sidebar menu end -->

   <!-- main content start -->
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo site_url('admin/dashboard')?>">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      </ol>
    </nav>
    <div class="welcome-msg pt-3 pb-4">
      <h1>Hi <span class="text-primary">Admin</span>, Welcome back to</h1>
      <p>The Talking-Talk Admin parnel</p>
     </div>
  
