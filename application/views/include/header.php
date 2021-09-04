<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <?php $setting = setting_all();?>
  
	<link rel="icon" href="<?php echo base_url((setting_all('favicon'))?'assets/images/'.setting_all('favicon'):'assets/images/favicon.ico');?>">
	<title><?php echo (setting_all('website'))?setting_all('website'):'Dasboard';?></title>

  <!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/ionicons.min.css'); ?>">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/dataTables.bootstrap.css');?>">
		<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/AdminLTE.min.css');?>">
		<!-- AdminLTE Skins. Choose a skin from the css/skins
		folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/skins/skin-black-light.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/skins/skin-black-light.css');?>">
		<!--  <link rel="stylesheet" href="<?php echo base_url('assets/css/blue.css');?>">-->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/buttons.dataTables.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/daterangepicker.css'); ?>" />

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/phil_styles.css'); ?>" /><link rel="stylesheet" href="<?=base_url()?>assets/css/mobiscroll.javascript.min.css">
	<script src="<?=base_url()?>assets/js/mobiscroll.javascript.min.js"></script>
	<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/jquery-ui.min.js'); ?>"></script>


  </head>
    <body class="hold-transition skin-black-light sidebar-mini" data-base-url="<?php echo base_url(); ?>">
        <div class="wrapper">

          <header class="main-header">
            <a href="<?php echo base_url(); ?>" class="logo">
             <?php $logo =  (setting_all('logo'))?setting_all('logo'):'logo.png'; ?>
              <!-- mini logo for sidebar mini 50x50 pixels -->
              <span class="logo-mini"><img src="<?php echo base_url().'assets/images/'.$logo; ?>" id="logo"></span>
              <!-- logo for regular state and mobile devices -->
              <span class="logo-lg"><img src="<?php echo base_url().'assets/images/'.$logo; ?>" id="logo"></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <?php $profile_pic =  'user.png';?>
                              <img src="<?php echo base_url().'assets/images/'.$profile_pic;?>"  class="user-image" alt="User Image">
                            <span class="hidden-xs"><?php echo $this->session->name?></span>
                          </a>
                          <ul class="dropdown-menu" role="menu" style="width: 164px;">
                              <li><a href="<?php echo base_url('user/profile');?>"><i class="fa fa-user mr10"></i>My Account</a></li>
                              <li class="divider"></li>
                              <li><a href="<?php echo base_url('user/logout');?>"><i class="fa fa-power-off mr10"></i> Sign Out</a></li>
                          </ul>
                        </li>
                    </ul>
                </div>
            </nav>
          </header>
          <!-- Left side column. contains the logo and sidebar -->
          <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
              
              <ul class="sidebar-menu">
                <li class="header"><!-- MAIN NAVIGATION --></li>
                <li class="<?=($this->router->method==="profile")?"active":"not-active"?>"> 
                <a href="<?php echo base_url('user/profile');?>"> <i class="fa fa-user"></i> <span>My Account</span></a>
                </li>       
				<?php if($this->session->type_user == 1):?>      
               
					

					<li class="fa-ul">
						<a href=""><i class="fa fa-list-ul"></i> <span>Events</span></a>
						<ul class="treeview-menu">
							<li class="active">
								<a href="<?= base_url('Facilitators')?>"><i class="fa fa-users"></i>Facilitators</a>
							</li>
							<li>
								<a href="<?= base_url('Events')?>"><i class="fa fa-list-ul"></i>Event details</a>
							</li>
						</ul>
					</li>

					
					<li class="">
						<a href="<?= base_url('Books')?>"><i class="fa fa-book fa-fw"></i> <span>Librairies</span></a>
					</li>
				
					<li>
						<a href="#">
							<i class="fa fa-desktop"></i> <span>Advocacy Members</span>
						</a>
						<ul class="treeview-menu">
							<li class="active">
								<a href="<?php echo site_url('user/add');?>"><i class="fa fa-plus"></i> Add</a>
							</li>
							<li>
								<a href="<?php echo site_url('user/index');?>"><i class="fa fa-list-ul"></i> Listing by categories</a>
							</li>

							<li>
								<a href="<?php echo site_url('Goupe/advocacyListbyGroup')?>" class="about"><i class="fa fa-list-ul"></i>Listing by groupe</a>
							</li>
							<li>
								<a href="<?php echo site_url('Goupe/listGroupByOrganisation')?>" class="about"><i class="fa fa-list-ul"></i>Listing organisations</a>
							</li>
						</ul>
					</li>

					<li>
						<a href="#"><i class="fa fa-desktop"></i> <span>Blog</span></a>
						<ul class="treeview-menu">
							<li class="active"><a href="<?php echo site_url('item_blog/add');?>"><i class="fa fa-plus"></i> Add</a>
							</li>
							<li>
								<a href="<?php echo site_url('item_blog/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
							</li>
							<li class="active">
								<a href="<?php echo site_url('category_blog/add');?>"><i class="fa fa-plus"></i> Add category</a>
							</li>

							<li>
								<a href="<?php echo site_url('category_blog/index');?>"><i class="fa fa-list-ul"></i> Listing category</a>
							</li>
						</ul>
					</li>
					

							<li>
								<a href="#">
									<i class="fa fa-desktop"></i> <span>Impacts</span>
								</a>
								<ul class="treeview-menu">
									<li class="active">
										<a href="<?php echo site_url('impact/add');?>"><i class="fa fa-plus"></i> Add</a>
									</li>
									<li>
										<a href="<?php echo site_url('impact/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
									</li>
								</ul>
							</li>

							<li>
								<a href="#">
									<i class="fa fa-desktop"></i> <span>Podcasts</span>
								</a>
								<ul class="treeview-menu">
									<li class="active">
										<a href="<?php echo site_url('podcast/add')?>"><i class="fa fa-plus"></i> Add</a>
									</li>
									<li>
										<a href="<?php echo site_url('storie/index');?>"><i class="fa fa-list-ul"></i> Listing podcast</a>
									</li>
									<li>
										<a href="<?php echo site_url('Category_podcast/add')?>"><i class="fa fa-plus"></i> add category</a>
									</li>
									<li>
										<a href="<?php site_url('Category_podcast/index')?>"><i class="fa fa-list-ul"></i>Listing caregory</a>
									</li>
								</ul>
							</li>

							

							<li>
								<a href="#">
									<i class="fa fa-desktop"></i> <span>Stories</span>
								</a>
								<ul class="treeview-menu">
									<li class="active">
										<a href="<?php echo site_url('storie/add');?>"><i class="fa fa-plus"></i> Add</a>
									</li>
									<li>
										
										<a href="<?php echo site_url('storie/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="<?= site_url('issues');?>">
									<i class="fa fa-desktop"></i> <span>Issues</span>
								</a>
							</li>
							
							<li>
								<a href="#">
									<i class="fa fa-desktop"></i> <span>Ressources</span>
								</a>
								<ul class="treeview-menu">
									<li class="active">
										<a href="<?= base_url('ressource/add') ?>"><i class="fa fa-plus"></i> <span>Add</span></a>
									</li>
									<li>
										<a href="<?= base_url('ressource/index') ?>"><i class="fa fa-list-ul"></i> <span>listing</span></a>
									</li>
								</ul>
							</li>
					<li class="<?=($this->router->class==="about")?"active":"not-active"?>">
							<a href="<?php echo base_url("about"); ?>"><i class="fa fa-info-circle"></i> <span>About Us</span></a>
					</li>

					

					<?php elseif($this->session->type_user == 2):?>

						<li class="about"><a href="<?php echo site_url('Organisation/add_organisation')?>" class="about">Create organisation</a></li>
						<li class="about"><a href="<?php echo site_url('Goupe/add')?>" class="about">Create groupe</a></li>
						<li class="about"><a href="<?php echo site_url('Groupe_user/add')?>" class="about">Member of groupe</a></li>
						<li class="about"><a href="<?php echo site_url('Goupe/index')?>" class="about">Liste groupe</a></li>
					<?php else:?>

					<?php endif ?>
				
              </ul>
            </section>
            <!-- /.sidebar -->
          </aside>          
<style>
.progress-main-div1 {
    padding-top: 10px;
    background-color: rgb(232, 82, 15);
    position: fixed;
    bottom: 21px;
    z-index: 50;
    width: 50%;
    padding-bottom: 10px;
    color: white;
    text-align: center;
    margin-left: 34%;
    margin-bottom: 19px;
}
.progress-main-div1 a{
    color:#04046e;;
}

body {
	margin: 0;
	padding: 0;
}

body,
html {
	height: 100%;
}
button {
	display: inline-block;
	outline: 0;
	border: 0;
	cursor: pointer;
	background: #5185a8;
	color: #fff;
	text-decoration: none;
	font-family: arial, verdana, sans-serif;
	font-size: 14px;
}
.external-container button.external-button {
	font-weight: 400;
	padding: 10px;
	margin: 6px 0 12px 16px;
}
</style>
