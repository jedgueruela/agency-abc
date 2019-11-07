<?php

/**
 * Register custom navigation walker.
 */
function register_navwalker() {
    if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
        return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
    } else {
        require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    }
}
add_action( 'after_setup_theme', 'register_navwalker' );

/**
 * Enqueue and load styles.
 */
function load_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'load_styles' );

/**
 * Enqueue and load scripts.
 */
function load_scripts() {
    if ( $GLOBALS['pagenow'] != 'wp-login.php' && !is_admin() ) {
        wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.min.js', false, 1.0, true );
    }
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );