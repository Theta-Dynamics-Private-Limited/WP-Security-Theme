<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'security-theme' ); ?></span>
        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'security-theme' ); ?>" value="<?php echo get_search_query(); ?>" name="s">
    </label>
    <button type="submit" class="search-submit"><?php echo esc_attr_x( 'Search', 'submit button', 'security-theme' ); ?></button>
</form>

