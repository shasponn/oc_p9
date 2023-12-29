<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('child-style', get_stylesheet_directory_uri(). '/style.css');
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

// JAVASCRIPT //

function swiper_scripts() {
    wp_enqueue_script('swiper-element-bundle', get_stylesheet_directory_uri() . '/js/swiper-element-bundle.js', array(), '', true );
    wp_enqueue_script('swiper-bundle', get_stylesheet_directory_uri() . '/js/swiper-bundle.js', array(), '', true );
}
    add_action( 'wp_enqueue_scripts', 'swiper_scripts' );

function load_scripts() {
        wp_enqueue_script('script', get_stylesheet_directory_uri() . '/js/script.js', array(), '', true );
        }
        add_action( 'wp_enqueue_scripts', 'load_scripts' );
 
?>


