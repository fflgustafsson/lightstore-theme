<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title> 
		<?php wp_head(); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		
		<!-- Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Lato:300,400,500,600,700,900' rel='stylesheet' type='text/css'>

		<link href="<?php bloginfo('stylesheet_directory'); ?>/css/reset.css" rel="stylesheet" type="text/css"/>
		<link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css" rel="stylesheet"/>
		<link href="<?php bloginfo('stylesheet_directory'); ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
		<link href="<?php bloginfo('stylesheet_directory'); ?>/css/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
		<link href="<?php bloginfo('stylesheet_directory'); ?>/css/extra.css" rel="stylesheet" type="text/css"/>
		<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet"  type="text/css" title="no title" charset="utf-8"/>
		<link href="<?php bloginfo('stylesheet_directory'); ?>/css/slicknav.css" rel="stylesheet" />
		<link href="<?php bloginfo('stylesheet_directory'); ?>/css/flickerplate.css"  type="text/css" rel="stylesheet">
				
		<!--[if lt IE 9]>
		<script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->              		
		
		<!--[if IE]>
			<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.12.4.min.js" type="text/javascript"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/modernizr.js" type="text/javascript"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/modernizr-custom-v2.7.1.min.js" type="text/javascript"></script>
		
		<?php $shortname = "sell_theme"; ?>
		
		<style type="text/css">
			body {
			<?php if(get_option($shortname.'_background_image_url','') != "") { ?>
				background: url('<?php echo get_option($shortname.'_background_image_url',''); ?>') no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;
			<?php } ?>		
			<?php if(get_option($shortname.'_custom_background_color','') != "") { ?>
				background-color: <?php echo get_option($shortname.'_custom_background_color',''); ?>;
			<?php } ?>	
			}
		</style>		
	</head>
	<body <?php body_class($class); ?>>

		<!-- start preloader -->
	    <div id="preloader">
	      <div id="status">
	        <div class="parent">
	          <div class="child">
	            <p>Laddas...</p>
	          </div>
	        </div>
	      </div>
	    </div>
    	<!-- end preloader --> 

    	<nav id="main-nav" class="nav__mobile">
    		<?php wp_nav_menu('theme_location=header-menu&container=false&menu_id=header_menu_id'); ?>

			<?php wp_nav_menu(array('menu' => 'shop-menu')); ?>

			<ul class="social-list clearfix">
				<li>
					<a href="https://www.facebook.com/lars.qvist" target="_blank" title="facebook">
						<i class="fa fa-facebook"></i>
					</a>
				</li>
			</ul>
		</nav>
    
		<div class="wrap">
			<header>
				
				<div class="header__logo">

					<a href="<?php bloginfo('url'); ?>">
						<h1 class="logo">
							<img src="<?php bloginfo('template_directory'); ?>/images/lightstore-logo.png" alt="Lighstore.">
						</h1>
					</a>	
				</div><!--//logo_cont-->

				<div class="header__menu">

					<?php wp_nav_menu('theme_location=header-menu&container=false&menu_id=header_menu_id'); ?>

					<?php wp_nav_menu(array('menu' => 'shop-menu')); ?>

					<ul class="social-list clearfix">
						<li>
							<a href="https://www.facebook.com/lars.qvist" target="_blank">
								<i class="fa fa-facebook"></i>
							</a>
						</li>
					</ul>

					<div class="toggle__mobile">
						<div id="menu-button">
							<div class="centralizer">
								<div class="cursor">
									<div id="nav-button">
										<span class="nav-bar"></span>
										<span class="nav-bar"></span>
										<span class="nav-bar"></span>
									</div>
									</div>
								</div>
							</div>
					</div>	

		      </div>
			</header>