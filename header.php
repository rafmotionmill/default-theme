<!DOCTYPE html>
<html <?php language_attributes() ?> class="no-js">
<head>
  <meta charset="<?php bloginfo('charset') ?>">
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- www.phpied.com/conditional-comments-block-downloads/ -->
<!--[if IE]><![endif]-->

<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
  Remove this if you use the .htaccess -->
<meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <title><?php wp_title(); ?></title>  
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />  
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
     <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() )?>/js/modernizr-1.5.min.js"> </script>
  
<?php wp_head() // For plugins ?>
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), esc_html( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), esc_html( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
</head>

<body class="<?php sandbox_body_class() ?>">
<span class="mobile-only"><a id="mobile-top"></a><a href="#mobile-top" id="pull">Menu</a></span>
	        	<div class="mobile-only"><?php wp_nav_menu( array('theme_location' => 'main_navigation', 'container_class' => 'mobile-menu-header mobile-only', 'container_id' => 'mobile-menu' )); ?></div>	

<div id="wrapper" class="hfeed">

	<header id="header">
		<section id="masthead">
				<h1 id="blog-title"><span><a href="<?php echo esc_url( home_url() ) ?>/" title="<?php bloginfo('name') ?>" rel="home"><?php bloginfo('name') ?></a></span></h1>
				<h2 id="blog-description"><?php bloginfo('description') ?></h2>

			<div id="access" role="navigation">
				<div class="skip-link"><a href="#content" title="<?php _e( 'Skip to content', 'sandbox' ) ?>"><?php _e( 'Skip to content', 'sandbox' ) ?></a></div>
				
	        	<nav>
				<?php wp_nav_menu( array('theme_location' => 'main_navigation', 'container_class' => 'menu-header', 'container_id' => 'menu' )); ?>
				</nav>
			</div><!-- #access -->
		</section>
	</header><!--  #header -->
