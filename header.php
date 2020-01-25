<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo("name"); wp_title(); ?></title>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/tooltip.css">
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
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
	<div class="container-fluid" style="background-color: #e3f2fd;">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="<?php echo home_url(); ?>">Home</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse "  id="navbarSupportedContent">
				<?php /* Primary navigation */
				wp_nav_menu( array(
					'menu' => 'primary',
					'depth' => 2,
					'container' => div,
					'container_class' => 'navbar-collapse navbar-ex1-collapse',
					'menu_class' => 'navbar-nav',
					  //Process nav menu using our custom nav walker
					'walker' => new wp_bootstrap_navwalker())
			);
			?>
		</div>
		<form class="form-inline my-2 my-lg-0" method="get" action="<?php bloginfo("home"); ?>/" >
			<input class="form-control mr-sm-2" name="s" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
	</nav>
</div>
<div class="container-fluid " style="margin-bottom: 150px;"  role="main">
	<header>
		<nav id="header-nav" role="navigation">

			<ul>
				<li style="background: #2c3e50"><a href="<?php echo home_url() ?>"><div class="fa fa-home fa-3x"></div><div class="nav-txt"> صفحه اصلی </div></a></li>
				<li style="background: #27ae60"><a href="<?php echo home_url() ?>/category/software"><div class="fa fa-gears fa-3x"></div><div class="nav-txt">نرم افزار</div></a></li>
				<li style="background: #f1c40f"><a href="<?php echo home_url() ?>/category/game"><div class="fa fa-gamepad fa-3x"></div><div class="nav-txt">بازی</div></a></li>
				<li style="background: #3498db"><a href=""><div class="fa fa-pencil fa-3x"></div><div class="nav-txt">آموزش</div></a></li>
				<li style="background: #95a5a6"><a href="#"><div class="fa fa-android fa-3x"></div><div class="nav-txt">اندروید</div></a></li>
				<li style="background: #d35400"><a href="#"><div class="fa fa-code fa-3x"></div><div class="nav-txt">توسعه وب</div></a></li>
				<li style="background: #8e44ad"><a href="#"><div class="fa fa-code-fork fa-3x"></div><div class="nav-txt">شبکه</div></a></li>
			</ul>
		</nav>
		<!-- <div class="logo"><a href="<?php bloginfo("url"); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" title=""></a></div>	 -->		
	</header>	
</div>