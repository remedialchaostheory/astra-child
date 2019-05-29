<?php
/**
 * Astra Child Theme Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child Theme
 * @since 0.1
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_THEME_VERSION', '0.1' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_THEME_VERSION, 'all' );

}
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );
