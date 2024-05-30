<?php
function security_theme_enqueue_scripts() {
    wp_enqueue_style( 'security-theme-style', get_stylesheet_uri() );
    wp_enqueue_script( 'security-theme-custom', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'security_theme_enqueue_scripts' );

