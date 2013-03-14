<?php
/** 
 * The template for displaying a 'Nothing found' message.
 *
 * @author		Long Duong
 * @package 	WPBootstrap
 * @since 		0.1 - 07.15.2012
 */
?>
<article id="post-0" class="post no-results not-found">
	<header class="page-header">
		<h1 class="entry-title"><?php _e( 'Nothing Found', 'the-bootstrap' ); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if ( is_search() ): ?>
		<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'wpbootstrap' ); ?></p>
		<?php else: ?>
		<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'wpbootstrap' ); ?></p>
		<?php get_search_form();
		endif;?>
	</div><!-- .entry-content -->
</article><!-- #post-0 -->