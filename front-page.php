<?php
/**
 * Template Name: Front Page
 *
 * @author		Long Duong
 * @package 	WPBootstrap
 * @since 		0.1 - 07.15.2012
 */
get_header(); ?>

		<div class="hero-unit welcome">
        	<div class="container">
                <h1>WPBootstrap</h1>
            	<h3>A Free Responsive Wordpress Theme Framework Based on Bootstrap + HTML5BoilerPlate.</h3>
                <div class="row download-area">
                	<button class="btn btn-inverse btn-large span4" href="">Download Wordpress Bootstrap</button><button class="btn btn-inverse btn-large span4" href="">View Project on GitHub</button><button class="btn btn-inverse btn-large span4" href="">Fork Me!</button>
                </div>
            </div>
        </div>
        
        <div class="space container">
            <div class="row">
                <div class="span12">
				<?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( '/loop/content', 'intro' ); ?>
                <?php endwhile; // end of the loop. ?>
                </div>
            </div>
        </div><!-- .container -->

<?php get_footer();?>