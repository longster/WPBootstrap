<?php
/**
 * The Template for displaying all pages.
 *
 * @author		Long Duong
 * @package 	WPBootstrap
 * @since 		0.1 - 07.15.2012
 */
get_header(); ?>

        <div class="space container">
            <div class="row">
                <div class="span8">
				<?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( '/loop/content', 'page' ); ?>
                <?php endwhile; // end of the loop. ?>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div><!-- .container -->

<?php get_footer();?>