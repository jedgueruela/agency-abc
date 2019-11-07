<?php

/**
 * Add post thumbnails support.
 */
add_theme_support( 'post-thumbnails' );

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
    wp_enqueue_style( 'vendor', get_template_directory_uri() . '/css/vendor.min.css', false, '1.0', 'all' );

    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'load_styles' );

/**
 * Enqueue and load scripts.
 */
function load_scripts() {
    if ( $GLOBALS['pagenow'] != 'wp-login.php' && !is_admin() ) {
        wp_enqueue_script( 'vendor', get_template_directory_uri() . '/js/vendor.min.js', false, 1.0, true );

        wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', 'vendor', 1.0, true );
    }
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

/**
 * Register a custom post type for services.
 */
function services_post_type() {
    $labels = array(
        'name'               => _x( 'Services', 'post type general name'),
        'singular_name'      => _x( 'Service', 'post type singular name'),
        'menu_name'          => _x( 'Services', 'admin menu'),
        'name_admin_bar'     => _x( 'Services', 'add new on admin bar'),
        'add_new'            => _x( 'Add New', 'Service'),
        'add_new_item'       => __( 'Add Service'),
        'new_item'           => __( 'New Service'),
        'edit_item'          => __( 'Edit Service'),
        'view_item'          => __( 'View Service'),
        'all_items'          => __( 'All Services'),
        'featured_image'     => __( 'Featured Image', 'text_domain' ),
        'search_items'       => __( 'Search Services'),
        'parent_item_colon'  => __( 'Parent Service:'),
        'not_found'          => __( 'No services found.'),
        'not_found_in_trash' => __( 'No services found in trash.'),
    );

    $args = array(
        'labels'             => $labels,
        'menu_icon'          => 'dashicons-star-half',
        'description'        => __( 'Description.'),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor' )
    );

    register_post_type( 'services', $args );
}
add_action( 'init', 'services_post_type' );

/**
 * Register a custom post type for portfolio.
 */
function projects_post_type() {
    $labels = array(
        'name'               => _x( 'Projects', 'post type general name'),
        'singular_name'      => _x( 'Project', 'post type singular name'),
        'menu_name'          => _x( 'Projects', 'admin menu'),
        'name_admin_bar'     => _x( 'Projects', 'add new on admin bar'),
        'add_new'            => _x( 'Add New', 'Project'),
        'add_new_item'       => __( 'Add Project'),
        'new_item'           => __( 'New Project'),
        'edit_item'          => __( 'Edit Project'),
        'view_item'          => __( 'View Project'),
        'all_items'          => __( 'All Projects'),
        'featured_image'     => __( 'Featured Image', 'text_domain' ),
        'search_items'       => __( 'Search Projects'),
        'parent_item_colon'  => __( 'Parent Project:'),
        'not_found'          => __( 'No project found.'),
        'not_found_in_trash' => __( 'No project found in trash.'),
    );

    $args = array(
        'labels'             => $labels,
        'menu_icon'          => 'dashicons-star-half',
        'description'        => __( 'Description.'),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' )
    );

    register_post_type( 'projects', $args );
}
add_action( 'init', 'projects_post_type' );
