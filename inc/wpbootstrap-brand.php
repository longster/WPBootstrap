<?php
/**
 * The Branding Template
 *
 * @author		Long Duong
 * @package 	WPBootstrap
 * @since 		0.1 - 07.15.2012
 */
?>
	   <!-- This piece of code has been moved to header.php file - Novebmer 21 --> 
    	<header id="identity" class="brand-bar">
            <div class="container">
            	<a class="brand logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                    <h1><?php bloginfo( 'name' ); ?> </h1>
                    <h3><?php bloginfo( 'description' ); ?></h3>
                </a>
            </div>
        </header><!-- .brand-bar -->