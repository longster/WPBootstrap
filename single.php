<?php
/**
 * The Template for displaying all single posts.
 *
 * @author		Long Duong
 * @package 	WPBootstrap
 * @since 		0.1 - 07.15.2012
 */
get_header(); ?>

  		<div class="space container">
            <div class="row">
                <div class="span12">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( '/loop/content', 'single' ); ?>
                <?php endwhile; // end of the loop. ?>
                </div><!-- .span12 -->
                <?php /*?><?php get_sidebar(); ?><?php */?>
            </div><!-- .row -->
            <nav id="nav-single" class="pager">
                <div class="container">
                    <h3 class="assistive-text ir"><?php _e( 'Post navigation', 'wpbootstrap' ); ?></h3>
                    <span class="next"><?php next_post_link( '%link', sprintf( '%1$s <span class="meta-nav">&rarr;</span>', __( 'Next Post', 'wpbootstrap' ) ) ); ?></span>
                    <span class="previous"><?php previous_post_link( '%link', sprintf( '<span class="meta-nav">&larr;</span> %1$s', __( 'Previous Post', 'wpbootstrap' ) ) ); ?></span>
                </div>
            </nav><!-- #nav-single -->
            <?php comments_template( '', true ); ?>
        </div><!-- .container -->
        
<?php get_footer();?>