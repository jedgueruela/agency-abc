<?php

/**
 * Add post thumbnails support.
 */
add_theme_support( 'post-thumbnails' );

/**
 * Add custom logo support.
 */
add_theme_support('custom-logo');

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
 * Register nav menus
 */
function register_menus() {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu')
    ) );
}
add_action('init', 'register_menus');

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

/**
 * Register a custom post type for testimonials.
 */
function testimonials_post_type() {
    $labels = array(
        'name'               => _x( 'Testimonials', 'post type general name'),
        'singular_name'      => _x( 'Testimonial', 'post type singular name'),
        'menu_name'          => _x( 'Testimonials', 'admin menu'),
        'name_admin_bar'     => _x( 'Testimonials', 'add new on admin bar'),
        'add_new'            => _x( 'Add New', 'Testimonial'),
        'add_new_item'       => __( 'Add Testimonial'),
        'new_item'           => __( 'New Testimonial'),
        'edit_item'          => __( 'Edit Testimonial'),
        'view_item'          => __( 'View Testimonial'),
        'all_items'          => __( 'All Testimonials'),
        'featured_image'     => __( 'Featured Image', 'text_domain' ),
        'search_items'       => __( 'Search Testimonials'),
        'parent_item_colon'  => __( 'Parent Testimonial:'),
        'not_found'          => __( 'No testimonials found.'),
        'not_found_in_trash' => __( 'No testimonials found in trash.'),
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
        'supports'           => array( 'title' )
    );

    register_post_type( 'testimonials', $args );
}
add_action( 'init', 'testimonials_post_type' );

/**
 * Add configuration in customizer.
 */
function customizer_settings($wp_customize) {

    // Homepage layout customization API settings
    $wp_customize->add_section( 'homepage_layout', array(
        'title' => __( 'Homepage Layout' ),
        'description' => __( 'Add custom settings here' ),
        'priority' => 160,
        'capability' => 'edit_theme_options',
    ) );

    // Hero heading settings
    $wp_customize->add_setting( 'hero-heading', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );

    $wp_customize->add_control( 'hero-heading', array(
        'type' => 'textarea',
        'section' => 'homepage_layout',
        'label' => __( 'Hero Heading' ),
        'description' => __( 'Enter hero heading' ),
    ) );

    // Hero button 1 settings
    $wp_customize->add_setting( 'hero-button-1', array(
        'capability' => 'edit_theme_options'
    ) );

    $wp_customize->add_control( 'hero-button-1', array(
        'type' => 'text',
        'section' => 'homepage_layout',
        'label' => __( 'Button 1 Text' ),
    ) );

    $wp_customize->add_setting( 'hero-button-1-url', array(
        'capability' => 'edit_theme_options'
    ) );

    $wp_customize->add_control( 'hero-button-1-url', array(
        'type' => 'url',
        'section' => 'homepage_layout',
        'label' => __( 'Button 1 URL' ),
    ) );

    // Hero button 2 settings
    $wp_customize->add_setting( 'hero-button-2', array(
        'capability' => 'edit_theme_options'
    ) );

    $wp_customize->add_control( 'hero-button-2', array(
        'type' => 'text',
        'section' => 'homepage_layout',
        'label' => __( 'Button 2 Text' ),
    ) );

    $wp_customize->add_setting( 'hero-button-2-url', array(
        'capability' => 'edit_theme_options'
    ) );

    $wp_customize->add_control( 'hero-button-2-url', array(
        'type' => 'url',
        'section' => 'homepage_layout',
        'label' => __( 'Button 2 URL' ),
    ) );

    // About text settings
    $wp_customize->add_setting( 'about-text', array(
        'capability' => 'edit_theme_options',
        // 'sanitize_callback' => 'sanitize_textarea_field',
    ) );

    $wp_customize->add_control( 'about-text', array(
        'type' => 'textarea',
        'section' => 'homepage_layout',
        'label' => __( 'About Text' ),
        'description' => __( 'Enter about text' ),
    ) );

    $wp_customize->add_setting( 'about-image', array(
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'image_control', array(
            'label' => __( 'About Image' ),
            'section' => 'media',
            'mime_type' => 'image',
            'settings' => 'about-image',
            'section' => 'homepage_layout',
            'width' => 720
        ) )
    );

    // Additional site identity customization settings.
    $wp_customize->add_setting( 'facebook-url', array(
        'capability' => 'edit_theme_options'
    ) );

    $wp_customize->add_control( 'facebook-url', array(
        'type' => 'url',
        'section' => 'title_tagline',
        'label' => __( 'Facebook URL' ),
    ) );

    $wp_customize->add_setting( 'instagram-url', array(
        'capability' => 'edit_theme_options'
    ) );

    $wp_customize->add_control( 'instagram-url', array(
        'type' => 'url',
        'section' => 'title_tagline',
        'label' => __( 'Instagram URL' ),
    ) );

    $wp_customize->add_setting( 'twitter-url', array(
        'capability' => 'edit_theme_options'
    ) );

    $wp_customize->add_control( 'twitter-url', array(
        'type' => 'url',
        'section' => 'title_tagline',
        'label' => __( 'Twitter URL' ),
    ) );

    $wp_customize->add_setting( 'linkedin-url', array(
        'capability' => 'edit_theme_options'
    ) );

    $wp_customize->add_control( 'linkedin-url', array(
        'type' => 'url',
        'section' => 'title_tagline',
        'label' => __( 'Linkedin URL' ),
    ) );
}
add_action('customize_register', 'customizer_settings');

/**
 * Register widget areas
 */
function register_widget_areas() {

    register_sidebar( array(
        'name'          => 'Footer Column 1',
        'id'            => 'footer-column-1',
        'before_widget' => '<div class="footer-column-1">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
 
    register_sidebar( array(
        'name'          => 'Footer Column 2',
        'id'            => 'footer-column-2',
        'before_widget' => '<div class="footer-column-2">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
    ) );

    register_sidebar( array(
        'name'          => 'Footer Column 3',
        'id'            => 'footer-column-3',
        'before_widget' => '<div class="footer-column-3">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
    ) );

    register_sidebar( array(
        'name'          => 'Footer Column 4',
        'id'            => 'footer-column-4',
        'before_widget' => '<div class="footer-column-4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
    ) );
 
}
add_action( 'widgets_init', 'register_widget_areas' );