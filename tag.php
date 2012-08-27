<?php
/**
 * The template for displaying Tag Archive pages.
 *
 * @author		Long Duong
 * @package 	WPBootstrap
 * @since 		0.1 - 07.15.2012
 */
get_header(); ?>
		
        <div class="space container">
            <div class="row">
                <div class="span8">
                	<?php if ( have_posts() ) : ?>
                    <header class="page-header">
                        <h1 class="page-title"><?php
							printf( __( 'Tag Archives: %s', 'twentyeleven' ), '<span>' . single_tag_title( '', false ) . '</span>' );
						?></h1>
            
                        <?php $tag_description = tag_description();
							if ( ! empty( $tag_description ) )
								echo apply_filters( 'tag_archive_meta', '<div class="tag-archive-meta">' . $tag_description . '</div>' );
						?>
                    </header><!-- .page-header -->
                    
                    <?php wpbootstrap_content_nav( 'nav-above' ); ?>

                    <?php while ( have_posts() ) : the_post(); ?>
                    
    					<?php get_template_part( '/loop/content', get_post_format() ); ?>
    
                    <?php endwhile; ?>
    
                    <?php wpbootstrap_content_nav( 'nav-below' ); ?>
    
                <?php else : ?>
    
                    <article id="post-0" class="post no-results not-found">
                        <header class="entry-header">
                            <h1 class="entry-title"><?php _e( 'Nothing Found', 'wpbootstrap' ); ?></h1>
                        </header><!-- .entry-header -->
    
                        <div class="entry-content">
                            <p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'wpbootstrap' ); ?></p>
                            <?php get_search_form(); ?>
                        </div><!-- .entry-content -->
                    </article><!-- #post-0 -->
    
                <?php endif; ?>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div><!-- .container -->

<?php get_footer();?>