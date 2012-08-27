<?php
/** _full_width.php
 *
 * Template Name: Full Width
 *
 * @author		Long Duong
 * @package 	WPBootstrap
 * @since 		0.1 - 07.15.2012
 */
get_header(); ?>

        <div class="space container">
		<?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( '/loop/content', 'page' ); ?>
        <?php endwhile; // end of the loop. ?>
        </div><!-- .container -->

<?php get_footer();?>