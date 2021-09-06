<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta name="description" content="description"/>
	<meta name="keywords" content="keywords"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
	<link rel="shortcut icon" href="<?=base_url()?>vectors/img/favicon.ico"/>
	<title>Womengreatness</title>
	<!-- styles-->
	<link rel="stylesheet" href="<?=base_url()?>vectors/css/styles.min.css"/>
	<!-- web-font loader-->
	<script>
		WebFontConfig = {
			google: {
				families: ['Quicksand:300,400,500,700', 'Permanent+Marker:400'],
			}
		}
		function font() {
			let wf = document.createElement('script')

			wf.src = ('https:' === document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js'
			wf.type = 'text/javascript'
			wf.async = 'true'

			let s = document.getElementsByTagName('script')[0]
			s.parentNode.insertBefore(wf, s)
		}
		font()
	</script>
</head>

<body>
		<div class="page-wrapper">
			<!-- aside dropdown start-->
			<div class="aside-dropdown">
				<div class="aside-dropdown__inner"><span class="aside-dropdown__close">
					<svg class="icon">
						<use xlink:href="#close"></use>
					</svg></span>
				<div class="aside-dropdown__item d-lg-none d-block">
					

					<ul class="aside-menu">
						<li class="main-menu__item main-menu__item--active"><a style="color:black"  class="main-menu__link" href="<?=base_url()?>">Home</a>
						</li>
						<li class="main-menu__item"><a class="main-menu__link" style="color:black" href="<?= base_url('About/open')?>"><span>About</span></a>
						<!--li class="main-menu__item"><a class="main-menu__link" style="color:black" href="<?php echo site_url('Stories/open')?>"><span>Issues</span></a-->
						<li class="main-menu__item"><a class="main-menu__link" style="color:black" href="<?php echo site_url('issue')?>"><span>Issues</span></a>
						<li class="main-menu__item"><a class="main-menu__link" style="color:black" href="<?php echo site_url('user/registration')?>"><span>Advocacy</span></a></li>
						<li class="main-menu__item"><a class="main-menu__link" style="color:black" href="<?= base_url('Events/ourevents')?>"><span>Events</span></a>
										<!-- sub menu start-->
										<!-- sub menu end-->
						<li class="main-menu__item"><a class="main-menu__link" style="color:black" href="<?=base_url('Book')?>"><span>Librairy</span></a>
										<!-- sub menu end-->
						</li>
									
						<li class="main-menu__item main-menu__item--has-child"><a style="color:black" class="main-menu__link" href="javascript:void(0);"><span>Media</span></a>
										<!-- sub menu start-->
						<ul class="main-menu__sub-list">
							<li><a href="<?php echo site_url('ressource/ressource')?>"><span>Ressources</span></a></li>
							<li><a href="<?php echo site_url('storie/get_stories')?>"><span>Stories</span></a></li>
							<li><a href="<?php echo site_url('podcast/poadcast')?>"><span>Podcasts</span></a></li>
						</ul>
										<!-- sub menu end-->
						</li>
										<!-- sub menu end-->
						<li class="main-menu__item "><a class="main-menu__link" style="color:black" href="<?php echo site_url('impact/get_impacts')?>"><span>Impacts</span></a>
						<li class="main-menu__item "><a class="main-menu__link" style="color:black" href="<?php echo site_url('blog_item')?>"><span>Blog</span></a>
						</li>
						<li class="main-menu__item "><a class="main-menu__link" style="color:black" href="<?=base_url()?>login"><span>Login</span></a></li>
					</ul>
				</div>
				<div class="aside-dropdown__item">
				
					<div class="aside-inner"><span class="aside-inner__title">Email</span><a class="aside-inner__link" href="mailto:support@helpo.org">support@helpo.org</a></div>
					<div class="aside-inner"><span class="aside-inner__title">Phone numbers</span><a class="aside-inner__link" href="tel:+180012345678">+ 1800 - 123 456 78</a><a class="aside-inner__link" href="tel:+18009756511">+ 1800 - 975 65 11</a></div>
					<ul class="aside-socials">
						<li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="aside-socials__item"><a class="aside-socials__link aside-socials__link--active" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="aside-dropdown__item"><a class="button button--squared" href="#"><span>Donate</span></a></div>
				</div>
			</div>
			<!-- aside dropdown end-->
			<!-- header start-->
			<header class="header header--inner">
				<div class="container-fluid">
					<div class="row no-gutters justify-content-between">
						<div class="col-auto d-flex align-items-center">
							<div class="dropdown-trigger dropdown-trigger--inner d-none d-sm-block">
								<div class="dropdown-trigger__item"></div>
							</div>
							<div class="header-logo"><a class="header-logo__link" href="index.html"><img class="header-logo__img" src="<?php echo base_url('vectors/img/logo_dark.png')?>" alt="logo"/></a></div>
						</div>
						<div class="col-auto">
							<!-- main menu start-->
							<nav>
								<ul class="main-menu">
									<li class="main-menu__item main-menu__item--active"><a style="color:black"  class="main-menu__link" href="<?=base_url()?>">Home</a>
										<!-- sub menu start-->
										<!-- sub menu end-->
									</li>
									<li class="main-menu__item"><a class="main-menu__link" style="color:black" href="<?php echo site_url('About/open')?>"><span>About</span></a>
									</li>
									<!--li class="main-menu__item"><a class="main-menu__link" style="color:black" href="<?php echo site_url('Stories/open')?>"><span>Issues</span></a>
									</li-->
									<li class="main-menu__item"><a class="main-menu__link" style="color:black" href="<?php echo site_url('issue')?>"><span>Issues</span></a>
									</li>
									<li class="main-menu__item"><a class="main-menu__link" style="color:black" href="<?php echo site_url('user/registration')?>"><span>Advocacy</span></a></li>
									<li class="main-menu__item"><a class="main-menu__link" style="color:black" href="<?= base_url('Events/ourevents')?>"><span>Events</span></a>
										<!-- sub menu start-->
										<!-- sub menu end-->
									<li class="main-menu__item"><a class="main-menu__link" style="color:black" href="<?=base_url('Book')?>"><span>Librairy</span></a>
										<!-- sub menu end-->
									</li>
									
									<li class="main-menu__item main-menu__item--has-child"><a style="color:black" class="main-menu__link" href="javascript:void(0);"><span>Media</span></a>
										<!-- sub menu start-->
										<ul class="main-menu__sub-list">
											<li><a href="<?php echo site_url('ressource/ressource')?>"><span>Ressources</span></a></li>
											<li><a href="<?php echo site_url('storie/get_stories')?>"><span>Stories</span></a></li>
											<li><a href="<?php echo site_url('podcast/poadcast')?>"><span>Podcasts</span></a></li>
										</ul>
										<!-- sub menu end-->
									</li>
										<!-- sub menu end-->
									<li class="main-menu__item "><a class="main-menu__link" style="color:black" href="<?php echo site_url('impact/get_impacts')?>"><span>Impacts</span></a>
									<li class="main-menu__item "><a class="main-menu__link" style="color:black" href="<?php echo site_url('blog_item')?>"><span>Blog</span></a>
									</li>
									<li class="main-menu__item "><a class="main-menu__link" style="color:black" href="<?=base_url()?>login"><span>Login</span></a></li>
								</ul>
							</nav>
							<!-- main menu end-->
						</div>
						<div class="col-auto d-flex align-items-center">
							<div class="dropdown-trigger dropdown-trigger--inner d-block d-sm-none">
								<div class="dropdown-trigger__item"></div>
							</div>
						</div>
					</div>
				</div>
			</header>
