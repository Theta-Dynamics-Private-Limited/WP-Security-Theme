<?php
function security_theme_remove_wp_version() {
    return '';
}
add_filter( 'the_generator', 'security_theme_remove_wp_version' );

function security_theme_disable_xmlrpc() {
    add_filter( 'xmlrpc_enabled', '__return_false' );
}
add_action( 'init', 'security_theme_disable_xmlrpc' );

