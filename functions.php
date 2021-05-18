<?php
if ( ! function_exists( 'st2_setup' ) ) :

function st2_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'bff_asian', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'st2' ),
        'social'  => __( 'Social Links Menu', 'st2' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
}
endif; // st2_setup

add_action( 'after_setup_theme', 'st2_setup' );


if ( ! function_exists( 'st2_init' ) ) :

function st2_init() {


    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */

    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // st2_setup

add_action( 'init', 'st2_init' );


if ( ! function_exists( 'st2_widgets_init' ) ) :

function st2_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'st2_widgets_init' );
endif;// st2_widgets_init



if ( ! function_exists( 'st2_customize_register' ) ) :

function st2_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'theme_settings', array(
        'title' => __( 'ST2 Theme Settings', 'bff_asian' ),
        'description' => __( 'Theme Settings > CAUTION: Work in Progress', 'bff_asian' ),
        'priority' => '0'
    ));

    $wp_customize->add_section( 'header_settings', array(
        'title' => __( 'ST2 Header Settings', 'bff_asian' ),
        'description' => __( 'Header Settings', 'bff_asian' ),
        'priority' => '1'
    ));

    $wp_customize->add_section( 'footer_settings', array(
        'title' => __( 'ST2 Footer Settings', 'bff_asian' ),
        'description' => __( 'Footer Settings', 'bff_asian' ),
        'priority' => '2'
    ));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_setting( 'jumbotron_heading_color', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'jumbotron_heading_color', array(
        'label' => __( 'Jumbotron Heading Color', 'bff_asian' ),
        'type' => 'color',
        'section' => 'header_settings'
    ) ) );

    $wp_customize->add_setting( 'jumbotron_text_color', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'jumbotron_text_color', array(
        'label' => __( 'Jumbotron Paragraph Color', 'bff_asian' ),
        'type' => 'color',
        'section' => 'header_settings'
    ) ) );

    $wp_customize->add_setting( 'footer_text', array(
        'type' => 'theme_mod',
        'default' => 'Proudly powered by WordPress | Theme: Starter Theme 2 by Pinegrow 2018. (Version: 0.0.0)',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_text', array(
        'label' => __( 'Footer Content', 'bff_asian' ),
        'type' => 'textarea',
        'section' => 'footer_settings'
    ));

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'st2_customize_register' );
endif;// st2_customize_register


if ( ! function_exists( 'st2_enqueue_scripts' ) ) :
    function st2_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_enqueue_script( 'jquery' );
    wp_deregister_script( 'bff_asian-popper' );
    wp_enqueue_script( 'bff_asian-popper', get_template_directory_uri() . '/assets/js/popper.js', false, null, true);

    wp_deregister_script( 'bff_asian-bootstrap' );
    wp_enqueue_script( 'bff_asian-bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', false, null, true);

    wp_enqueue_script( 'jquery', null, null, null, true );

    wp_enqueue_script( 'bff_asian-carousel_init', get_template_directory_uri() . '/assets/js/carousel_init.js', null, null, true );

    wp_enqueue_script( 'bff_asian-popper', get_template_directory_uri() . '/assets/js/popper.js', null, null, true );

    wp_enqueue_script( 'bff_asian-bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', null, null, true );

    wp_enqueue_script( 'bff_asian-outline', get_template_directory_uri() . '/assets/js/outline.js', null, null, true );

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'bff_asian-bootstrap' );
    wp_enqueue_style( 'bff_asian-bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css', false, null, 'all');

    wp_deregister_style( 'bff_asian-style' );
    wp_enqueue_style( 'bff_asian-style', get_bloginfo('stylesheet_url'), false, null, 'all');

    wp_deregister_style( 'bff_asian-theme' );
    wp_enqueue_style( 'bff_asian-theme', get_template_directory_uri() . '/css/theme.css', false, null, 'all');

    wp_deregister_style( 'bff_asian-woocommerce' );
    wp_enqueue_style( 'bff_asian-woocommerce', get_template_directory_uri() . '/css/woocommerce.css', false, null, 'all');

    wp_deregister_style( 'bff_asian-style-1' );
    wp_enqueue_style( 'bff_asian-style-1', 'https://fonts.googleapis.com/css?family=Open+Sans&display=swap', false, null, 'all');

    wp_deregister_style( 'bff_asian-style-2' );
    wp_enqueue_style( 'bff_asian-style-2', 'https://fonts.googleapis.com/css?family=Alex+Brush&display=swap', false, null, 'all');

    wp_deregister_style( 'bff_asian-style-3' );
    wp_enqueue_style( 'bff_asian-style-3', 'https://fonts.googleapis.com/css?family=Maven+Pro&display=swap', false, null, 'all');

    wp_deregister_style( 'bff_asian-style-4' );
    wp_enqueue_style( 'bff_asian-style-4', 'https://fonts.googleapis.com/css?family=Mitr&display=swap', false, null, 'all');

    wp_deregister_style( 'bff_asian-style-5' );
    wp_enqueue_style( 'bff_asian-style-5', 'https://fonts.googleapis.com/css?family=Palanquin+Dark&display=swap', false, null, 'all');

    wp_deregister_style( 'bff_asian-style-6' );
    wp_enqueue_style( 'bff_asian-style-6', 'https://fonts.googleapis.com/css?family=Passion+One&display=swap', false, null, 'all');

    wp_deregister_style( 'bff_asian-style-7' );
    wp_enqueue_style( 'bff_asian-style-7', 'https://fonts.googleapis.com/css?family=Raleway&display=swap', false, null, 'all');

    wp_deregister_style( 'bff_asian-style-8' );
    wp_enqueue_style( 'bff_asian-style-8', 'https://fonts.googleapis.com/css?family=Angkor&display=swap', false, null, 'all');

    wp_deregister_style( 'bff_asian-style-9' );
    wp_enqueue_style( 'bff_asian-style-9', 'https://fonts.googleapis.com/css?family=Content&display=swap', false, null, 'all');

    wp_deregister_style( 'bff_asian-style-10' );
    wp_enqueue_style( 'bff_asian-style-10', 'https://fonts.googleapis.com/css?family=Abhaya+Libre&display=swap', false, null, 'all');

    wp_deregister_style( 'bff_asian-style-11' );
    wp_enqueue_style( 'bff_asian-style-11', 'https://fonts.googleapis.com/css?family=Antic&display=swap', false, null, 'all');

    wp_deregister_style( 'bff_asian-style-12' );
    wp_enqueue_style( 'bff_asian-style-12', 'https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap', false, null, 'all');

    wp_deregister_style( 'bff_asian-blocks' );
    wp_enqueue_style( 'bff_asian-blocks', get_template_directory_uri() . '/blocks.css', false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'st2_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
require_once "inc/wp_pg_helpers.php";
require_once "inc/bootstrap/wp_bootstrap4_navwalker.php";

    /* Pinegrow generated Include Resources End */

/* Don't add custom your custom snippets here, but use inc/custom.php */
/* ST2 Include Resources Begin */
require_once "inc/custom.php";

?>
