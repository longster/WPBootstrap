<?php
/**
 * The template for displaying page content in the showcase.php page template
 *
 * @author		Long Duong
 * @package 	WPBootstrap
 * @since 		0.1 - 07.15.2012
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'intro space container' ); ?>>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'wpbootstrap' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> .<?php post_class('intro'); ?> -->
