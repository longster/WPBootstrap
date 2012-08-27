<?php
/**
 * The template for displaying content in the single.php template
 *
 * @author		Long Duong
 * @package 	WPBootstrap
 * @since 		0.1 - 07.15.2012
 */
if ( ! function_exists( 'wpbootstrap_content_nav' ) ) :
/**
 * Display navigation to next/previous pages when applicable
 */
function wpbootstrap_content_nav() {
	global $wp_query, $wp_rewrite;

	$paged			=	( get_query_var( 'paged' ) ) ? intval( get_query_var( 'paged' ) ) : 1;

	$pagenum_link	=	get_pagenum_link();
	$query_args		=	array();
	$url_parts		=	parse_url( $pagenum_link );
	
	if ( isset( $url_parts['query'] ) ) {
		wp_parse_str( $url_parts['query'], $query_args );
	}
	$pagenum_link	=	remove_query_arg( array_keys( $query_args ), $pagenum_link );
	$pagenum_link	=	trailingslashit( $pagenum_link ) . '%_%';
	
	$format			=	( $wp_rewrite->using_index_permalinks() AND ! strpos( $pagenum_link, 'index.php' ) ) ? 'index.php/' : '';
	$format			.=	$wp_rewrite->using_permalinks() ? user_trailingslashit( 'page/%#%', 'paged' ) : '?paged=%#%';
	
	$links	=	paginate_links( array(
		'base'		=>	$pagenum_link,
		'format'	=>	$format,
		'total'		=>	$wp_query->max_num_pages,
		'current'	=>	$paged,
		'mid_size'	=>	3,
		'type'		=>	'list',
		'add_args'	=>	$query_args
	) );

	if ( $links ) {
		echo "<nav class=\"pagination pagination-centered clearfix\">{$links}</nav>";
	}
}
endif;


if ( ! function_exists( 'wpbootstrap_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 * Create your own wpbootstrap_posted_on to override in a child theme
 */
function wpbootstrap_posted_on() {
	printf( __( '<span class="sep">Posted on </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a><span class="by-author"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'wpbootstrap' ),
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'wpbootstrap' ), get_the_author() ) ),
		get_the_author()
	);
}
endif;


?>