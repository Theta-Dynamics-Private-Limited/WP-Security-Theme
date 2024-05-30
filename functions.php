<?php
function security_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( array(
        'menu-1' => esc_html__( 'Primary', 'security-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'security_theme_setup' );

require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/security.php';
require get_template_directory() . '/inc/sanitize.php';
?>

