<form class="navbar-search pull-right" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label for="s" class="assistive-text hidden"><?php _e( 'Search', 'wpbootstrap' ); ?></label>
    <input type="search" class="search-query span2" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'wpbootstrap' ); ?>" />
    <button type="submit" class="hidden" name="submit" id="searchsubmit"><?php _e( 'Go', 'wpbootstrap' ); ?></button>
</form>

