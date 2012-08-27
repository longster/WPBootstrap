<?php
/**
 * Functions and definitions
 *
 * @author		Long Duong
 * @package 	WPBootstrap
 * @since 		0.1 - 07.15.2012
 */

add_action( 'after_setup_theme', 'wpbootstrap_setup' );

if ( ! function_exists( 'wpbootstrap_setup' ) ):
function wpbootstrap_setup() {
	global $content_width;
	
	// Set the $content_width for things such as video embeds
	if ( !isset( $content_width ) ) {
  		$content_width = 770; /* pixels */
	}
	
	// Add theme-supported features
	add_theme_support( 'automatic-feed-links' );
	
	// Add theme support for post format
	add_theme_support( 'post-formats', array('featured','gallery', 'status', 'quote', 'image', 'video') );
	
	// Add theme support for post thumbnails (featured images)
	add_theme_support( 'post-thumbnails' );
		
	// Remove Wordpress Version
	remove_action( 'wp_head', 'wp_generator' );
	
	// Add theme support for custom backgrounds
	add_custom_background();
	
	// This theme allows users to set a custom background.
	//add_theme_support( 'custom-background', array(
		// Let WordPress know what our default background color is.
		//'default-color' => 'f1f1f1',
	//) );
	
	// Custom template tags for this theme.
	require_once( get_template_directory() . '/inc/template-tags.php' );
	
	// Custom Nav Menu handler for the Navbar.
	require_once( get_template_directory() . '/inc/nav-menu-walker.php' );
	
	// Add your nav menu function to the 'init' action hook
	add_action( 'init', 'wpbootstrap_register_menus' );
	
	// Add your sidebars function to the 'widgets-init' action hook.
	add_action( 'widgets_init', 'wpbootstrap_register_sidebars' );
	
	// Load Javascript files on the 'wp_enque_scripts' action hook
	add_action( 'wp_enqueue_scripts', 'wpbootstrap_load_scripts' );
	 
} 
endif;// wpbootstrap_setup


function wpbootstrap_register_menus() {
	// Register nav menus using register_nav_menu() or register_nav_menus() here
	register_nav_menus ( array (
		'primary'		=>	__( 'Main Navigation', 'wpbootstrap' ),
		'header-menu'  	=>	__( 'Header Menu', 'wpbootstrap' ),
		'footer-menu' 	=>	__( 'Footer Menu', 'wpbootstrap' )
  	));
}// wpbootstrap_register_menus


function wpbootstrap_register_sidebars() {
	// Register dynamic sidebars using register_sidebar() here
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'wpbootstrap' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}// wpbootstrap_register_sidebars


function wpbootstrap_load_scripts() {
	// Enqueue custom javascript here using wp_enqueue_script()
	
	// Load the comment reply javascript
	
}// wpbootstrap_load_scripts


// Dynamic Titles 
function wpbootstrap_dynamic_titles() {
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'model' ), max( $paged, $page ) );
}// wpbootstrap_dynamic_titles


// Post navigation
if ( ! function_exists( 'wpbootstrap_content_nav' ) ) :
function wpbootstrap_content_nav( $nav_id ) {
	global $wp_query;

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo $nav_id; ?>" class="pager">
			<h3 class="assistive-text ir"><?php _e( 'Post navigation', 'wpbootstrap' ); ?></h3>
			<span class="previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'wpbootstrap' ) ); ?></span>
			<span class="next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'wpbootstrap' ) ); ?></span>
		</nav><!-- #nav-above -->
	<?php endif;
}
endif; // wpbootstrap_content_nav


// Output credit information
if ( !function_exists( 'wpbootstrap_credits' ) ) :
function wpbootstrap_credits() {
	printf(
		__('Copyright &copy; %1$s <a href="%2$s">%3$s</a> - All Rights Reserved.', 'wpbootstrap'),
		date( 'Y' ),
		home_url( '/' ),
		get_bloginfo( 'name' )
	);
}
endif;// wpbootstrap_credits
?>