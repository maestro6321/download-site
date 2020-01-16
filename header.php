<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo("name"); wp_title(); ?></title>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style-menu-top.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/metro.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/tooltip.css">
	<!--[if IE]>
		<script type="text/javascript" src="js/html5shiv.js"></script>
	<![endif]-->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scrollbar.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.easy-ticker.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/tooltip.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($){
			$("#metro-box").mCustomScrollbar({
				horizontalScroll:true,
			})
		})
	</script>
	<script type="text/javascript">
		$(function(){
			$('.demo').easyTicker({
				direction: 'up',
			});
		});
	</script>
	<?php wp_head(); ?>
</head>
<body>
	<div class="masthead">
		<div class="main_masthead">
			<div class="search" role="search" align="left">
				<form action="<?php bloginfo("home"); ?>/" method="get">
					<input type="text" name="s" value="" placeholder="جستجوی کلمه مورد نظر" onclick="this.placeholder=''" onblur="this.placeholder='جستجوی کلمه مورد نظر'">						
				</form>
			</div>
			<header class="menu-top">
  <a href="" class="logo1">My site</a>
  <input class="menu-btn" type="checkbox" id="menu-btn" />
  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
  <!-- <ul class="menu"> -->
    <?php wp_nav_menu( array( 'theme_location' => 'top-menu',"container"=>"",'container_class' => 'menu' ) ); ?>
  <!-- </ul> -->
</header>
		 
			
		</div>
	</div>
	<div id="main" role="main">
		<header>
			<nav id="header-nav" role="navigation">
				<ul>

					<li style="background: #2c3e50"><a href="<?php echo home_url() ?>"><div class="fa fa-home fa-4x"></div><div class="nav-txt"> صفحه اصلی </div></a></li>
					<li style="background: #27ae60"><a href="<?php echo home_url() ?>/category/software"><div class="fa fa-gears fa-4x"></div><div class="nav-txt">نرم افزار</div></a></li>
					<li style="background: #f1c40f"><a href="<?php echo home_url() ?>/category/game"><div class="fa fa-gamepad fa-4x"></div><div class="nav-txt">بازی</div></a></li>
					<li style="background: #3498db"><a href=""><div class="fa fa-pencil fa-4x"></div><div class="nav-txt">آموزش</div></a></li>
					<li style="background: #95a5a6"><a href="#"><div class="fa fa-android fa-4x"></div><div class="nav-txt">اندروید</div></a></li>
					<li style="background: #d35400"><a href="#"><div class="fa fa-code fa-4x"></div><div class="nav-txt">توسعه وب</div></a></li>
					<li style="background: #8e44ad"><a href="#"><div class="fa fa-code-fork fa-4x"></div><div class="nav-txt">شبکه</div></a></li>
				</ul>
			</nav>
			<!-- <div class="logo"><a href="<?php bloginfo("url"); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" title=""></a></div>	 -->		
		</header>	