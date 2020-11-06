<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>The Talking-Talk Admin</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style-starter.css')?>">

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