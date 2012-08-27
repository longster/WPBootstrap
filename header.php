<?php
/**
 * header.php
 *
 * @author		Long Duong
 * @package 	WPBootstrap
 * @since 		0.1 - 07.15.2012
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>
		<?php wpbootstrap_dynamic_titles(); ?>
	</title>

  	<meta name="description" content="">
  	<meta name="viewport" content="width=device-width">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,700|Russo+One' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  	<link rel="stylesheet" href="<?php bloginfo( 'template_url' );?>/css/bootstrap.css">
  	<link rel="stylesheet" href="<?php bloginfo( 'template_url' );?>/css/bootstrap-responsive.css">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
  	<script src="<?php bloginfo( 'template_url' );?>/js/libs/modernizr-2.6.1.min.js"></script>
    <?php wp_head(); ?>
    
    <link rel="shortcut icon" href="<?php bloginfo( 'template_url' );?>/img/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo( 'template_url' );?>/img/ico/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo( 'template_url' );?>/img/ico/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php bloginfo( 'template_url' );?>/img/ico/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo( 'template_url' );?>/img/ico/apple-touch-icon-precomposed.png">
</head>

<body <?php body_class(); ?>>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

	<header id="identity" class="navbar navbar-fixed-top">
		<div class="navbar-inner">
        	<div class="container">
            	<a href="<?php echo home_url( '/' ); ?>" class="ir btn btn-navbar home-button" data-toggle=".nav-collapse">Home</a>
            	<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                	<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="nav-collapse">
                	<?php wp_nav_menu( array(
						'theme_location'	=>	'primary',
						'menu_class'		=>	'nav menu',
						'depth'				=>	2,
						'fallback_cb'		=>	'wpbootstrap_main_menu_fallback',
						'walker'			=>	new WPBootstrap_Nav_Walker,
					) );  ?>
                   <?php get_search_form(); ?>
              </div>
            </div><!-- .container -->
        </div><!-- .navbar-inner -->
 	</header><!-- .navbar navbar-fixed-top identity -->  
    
      	
  	<section id="content">
        <?php get_template_part( '/inc/wpbootstrap-brand', '' ); ?>