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

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="<?php echo base_url('assets/js/jquery-ui.min.js'); ?>"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

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
							<?php
							$profile_pic =  'user.png';
							if(isset($this->session->userdata('user_details')[0]->profile_pic) && file_exists('assets/images/'.$this->session->userdata('user_details')[0]->profile_pic))
							{
								$profile_pic = $this->session->userdata('user_details')[0]->profile_pic;
							}?>
							<img src="<?php echo base_url().'assets/images/'.$profile_pic;?>"  class="user-image" alt="User Image">
							<span class="hidden-xs"><?php echo isset($this->session->userdata('user_details')[0]->name)?$this->session->userdata('user_details')[0]->name:'';?></span>
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
				<?php  ?>
				<li class="<?=($this->router->method==="profile")?"active":"not-active"?>">
					<a href="<?php echo base_url('user/profile');?>"> <i class="fa fa-user"></i> <span>My Account</span></a>
				</li>
				<?php $this->load->view("include/menu");?>


				<?php if(CheckPermission("users", "own_read")){ ?>
					<li class="<?=($this->router->method==="userTable")?"active":"not-active"?>">
						<a href="<?php echo base_url();?>user/userTable"> <i class="fa fa-users"></i> <span>Users</span></a>
					</li>
				<?php }  if(isset($this->session->userdata('user_details')[0]->user_type) && $this->session->userdata('user_details')[0]->user_type == 'admin'){ ?>
					<li class="<?=($this->router->class==="setting")?"active":"not-active"?>">
						<a href="<?php echo base_url("setting"); ?>"><i class="fa fa-cogs"></i> <span>Settings</span></a>
					</li>


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

					<li class="fa-ul">
						<a href=""><i class="fa fa-video-camera"></i> <span>Podcast</span></a>
						<ul class="treeview-menu">
							<li class="active">
								<a href="<?= base_url('Admin') ?>"><i class="fa fa-dashboard"></i> <span>List Podcast</span>
							</li>
							<li>
								<a href="<?= base_url('admin/pageUpload') ?>"><i class="fa fa-upload"></i><span>Upload Podcast</span>
							</li>
							<li>
								<a href="<?= base_url("admin/pageAlbum")?>"><i class="fa fa-music"></i><span>Album</span>
								</a>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="<?= base_url('Books')?>"><i class="fa fa-book fa-fw"></i> <span>Librairies</span></a>
					</li>

					<li>
						<a href="#">
							<i class="fa fa-desktop"></i> <span>Categorie User</span>
						</a>
						<ul class="treeview-menu">
							<li class="active">
								<a href="<?php echo base_url('categorie_user/add');?>"><i class="fa fa-plus"></i> Add</a>
							</li>
							<li>
								<a href="<?php echo base_url('categorie_user/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-desktop"></i> <span>Commission Groupe</span>
						</a>
						<ul class="treeview-menu">
							<li class="active">
								<a href="<?php echo site_url('commission_groupe/add');?>"><i class="fa fa-plus"></i> Add</a>
							</li>
							<li>
								<a href="<?php echo site_url('commission_groupe/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-desktop"></i> <span>Commission Tech</span>
						</a>
						<ul class="treeview-menu">
							<li class="active">
								<a href="<?php echo site_url('commission_tech/add');?>"><i class="fa fa-plus"></i>Add</a>
							</li>
							<li>
								<a href="<?php echo site_url('commission_tech/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-desktop"></i> <span>Goupe</span>
						</a>
						<ul class="treeview-menu">
							<li class="active">
								<a href="<?php echo site_url('goupe/add');?>"><i class="fa fa-plus"></i> Add</a>
							</li>
							<li>
								<a href="<?php echo site_url('goupe/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-desktop"></i> <span>Groupe User</span>
						</a>
						<ul class="treeview-menu">
							<li class="active">
								<a href="<?php echo site_url('groupe_user/add');?>"><i class="fa fa-plus"></i> Add</a>
							</li>
							<li>
								<a href="<?php echo site_url('groupe_user/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-desktop"></i> <span>Organisation</span>
						</a>
						<ul class="treeview-menu">
							<li class="active">
								<a href="<?php echo site_url('organisation/add');?>"><i class="fa fa-plus"></i> Add</a>
							</li>
							<li>
								<a href="<?php echo site_url('organisation/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-desktop"></i> <span>Secteur</span>
						</a>
						<ul class="treeview-menu">
							<li class="active">
								<a href="<?php echo site_url('secteur/add');?>"><i class="fa fa-plus"></i> Add</a>
							</li>
							<li>
								<a href="<?php echo site_url('secteur/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-desktop"></i> <span>User</span>
						</a>
						<ul class="treeview-menu">
							<li class="active">
								<a href="<?php echo site_url('user/add');?>"><i class="fa fa-plus"></i> Add</a>
							</li>
							<li>
								<a href="<?php echo site_url('user/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
							</li>
						</ul>
					</li>

					<li>
						<a href="#"><i class="fa fa-desktop"></i> <span>Actuality</span></a>
						<ul class="treeview-menu">
							<li class="active">
								<a href="<?php echo site_url('actuality_admin/add');?>"><i class="fa fa-plus"></i> Add</a>
							</li>
							<li>
								<a href="<?php echo site_url('actuality_admin/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-desktop"></i> <span>Category Actuality</span></a>
						<ul class="treeview-menu">
							<li class="active">
								<a href="<?php echo site_url('category_actuality/add');?>"><i class="fa fa-plus"></i> Add</a>
							</li>
							<li>
								<a href="<?php echo site_url('category_actuality/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-desktop"></i> <span>Category Blog</span></a>
						<ul class="treeview-menu">
							<li class="active">
								<a href="<?php echo site_url('category_blog/add');?>"><i class="fa fa-plus"></i> Add</a>
							</li>

							<li>
								<a href="<?php echo site_url('category_blog/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-desktop"></i> <span>Comment</span></a>
						<ul class="treeview-menu">
							<li class="active">
								<a href="<?php echo site_url('comment_admin/add');?>"><i class="fa fa-plus"></i> Add</a>
							</li>
							<li>
								<a href="<?php echo site_url('comment_admin/index');?>"><i class="fa fa-list-ul"></i> Listing</a></li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-desktop"></i> <span>Item Blog</span></a><ul class="treeview-menu">
							<li class="active"><a href="<?php echo site_url('item_blog/add');?>"><i class="fa fa-plus"></i> Add</a>
							</li>
							<li>
								<a href="<?php echo site_url('item_blog/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-desktop"></i> <span>View Blog</span></a>
						<ul class="treeview-menu">
							<li class="active">
								<a href="<?php echo site_url('view_blog/add');?>"><i class="fa fa-plus"></i> Add</a>
							</li>
							<li>
								<a href="<?php echo site_url('view_blog/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
							</li>
						</ul>
					</li>

				<?php }

				?>
				<li class="<?=($this->router->class==="about")?"active":"not-active"?>">
					<a href="<?php echo base_url("about"); ?>"><i class="fa fa-info-circle"></i> <span>About Us</span></a>
				</li>
			</ul>
		</section>
		<!-- /.sidebar -->
	</aside>


	<div class="box-body">
		<div class=" table-responsive">
			<table class="table table-striped table-hover">
				<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">Judul Podcast</th>
					<th scope="col">Podcast Info</th>
					<th scope="col">Album</th>
					<th scope="col">Audio Podcast</th>
					<th scope="col">Penyiar</th>
					<th scope="col">Aksi</th>
				</tr>
				</thead>
				<tbody>
				<?php $i = 1; foreach($podcasts as $podcast): ?>
					<tr>
						<th scope="row"><?=$i++?></th>
						<td><?=$podcast->podcast_title?></td>
						<td style="width:150px;">
							<?=$podcast->podcast_info?>...
						</td>
						<td><?=$podcast->album_title?></td>
						<td>
							<audio controls>
								<source src="<?=base_url()?>upload/<?=$podcast->file?>" type="audio/ogg">
								<source src="<?=base_url()?>upload/<?=$podcast->file?>" type="audio/mpeg">
								<source src="<?=base_url()?>upload/<?=$podcast->file?>" type="audio/mp3">
								<source src="<?=base_url()?>upload/<?=$podcast->file?>" type="audio/mp4">
								Your browser does not support the audio element.
							</audio>
						</td>
						<td><?=$podcast->podcast_announcer?></td>
						<td>
							<a onclick="return confirm('Hapus Podcast <?=$podcast->podcast_title?>')" class="btn btn-danger btn-sm" href="<?=base_url()?>admin/deletePodcast?id=<?=$podcast->podcast_id?>&file=<?=$podcast->file?>" style="color:white;">HAPUS</a>
							<a class="btn btn-primary btn-sm" href="" style="color:white;">DETAIL</a>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>

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



	<footer class="main-footer">copyright at 2021 <a href="">Womengreatness</a>. An online.</footer>
	<!-- /.control-sidebar -->
	<!-- Add the sidebar's background. This div must be placed
		 immediately after the control sidebar -->
	<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<script>
	$.widget.bridge('uibutton', $.ui.button);
</script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/dataTables.bootstrap.min.js');?>"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>


<script type="text/javascript" src="<?php echo base_url('assets/js/moment.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/daterangepicker.js'); ?>"></script>

<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery.form-validator.min.js');?>"></script>

<!-- SlimScroll -->
<script src="<?php echo base_url('assets/js/jquery.slimscroll.min.js');?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/js/fastclick.js');?>"></script>

<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/js/app.min.js');?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/js/icheck.min.js');?>"></script>
<script src="<?php echo base_url('assets/ckeditor/ckeditor.js');?>"></script>
<script src="<?php echo base_url('assets/ckeditor/adapters/jquery.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/js/demo.js');?>"></script>
<script src="<?php echo base_url('assets/js/custom.js');?>"></script>
<script>
	function validate_fileType(fileName,Nameid,arrayValu)
	{
		let string = arrayValu;
		var tempArray = new Array();
		var tempArray = string.split(',');
		var allowed_extensions =tempArray;
		var file_extension = fileName.split(".").pop();
		for(var i = 0; i <= allowed_extensions.length; i++)
		{
			if(allowed_extensions[i]===file_extension)
			{
				$("#error_"+Nameid).html("");
				return true; // valid file extension
			}
		}
		$("#"+Nameid).val("");
		$("#error_"+Nameid).css("color","red").html("File formate not suport To uploade");
		return false;
	}
</script>
</body>


</html>
<!-- modal -->
<div id="cnfrm_delete" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content col-md-6">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Confirmation</h4>
			</div>
			<div class="modal-body">
				<p>Do you really want to delete </p>
			</div>
			<div class="modal-footer">
				<a class="btn btn-small  yes-btn btn-danger" href="">yes</a>
				<button type="button" class="btn btn-default" data-dismiss="modal">no</button>
			</div>
		</div>
	</div>
</div>

<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/AdminLTE.min.css');?>">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
		 folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/skins/_all-skins.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/blue.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css');?>">

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
	<script>window.jQuery || document.write('<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"><\/script>')</script>
	<script src="<?php echo base_url('assets/js/jquery-ui.min.js');?>"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script src="<?php echo base_url('assets/js/jquery.form-validator.min.js');?>"></script>
	<script>
		$.widget.bridge('uibutton', $.ui.button);

	</script>
	<!-- Bootstrap 3.3.6 -->
	<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url('assets/js/app.min.js');?>"></script>
	<!-- iCheck -->
	<script src="<?php echo base_url('assets/js/icheck.min.js');?>"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?php echo base_url('assets/js/demo.js');?>"></script>
	<script src="<?php echo base_url('assets/js/custom.js');?>"></script>
	<script>
		$(function () {
			$('input').iCheck({
				checkboxClass: 'icheckbox_square-blue',
				radioClass: 'iradio_square-blue',
				increaseArea: '20%' // optional
			});
		});
	</script>
