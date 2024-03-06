<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package block-theme-costom
 * @since 1.0.0
 */

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function block_theme_costom_styles() {
	wp_enqueue_style(
		 'block-theme-costom-style',
		 get_stylesheet_directory_uri() . '/block-theme-costom-style.css',
		 [],
		 wp_get_theme()->get('Version')
	);
	wp_enqueue_style(
		 'woocommerce',
		 get_stylesheet_directory_uri() . '/assets/css/woocommerce.css',
		 [],
		 wp_get_theme()->get('Version')
	);
}
add_action('wp_enqueue_scripts', 'block_theme_costom_styles');

function block_theme_costom_scripts() {
	wp_enqueue_script(
		 'costomscripts',
		 get_template_directory_uri() . '/assets/js/costomscript.js',
		 array('jquery'), // Include jQuery if needed
		 wp_get_theme()->get('Version'),
		 true // Load the script in the footer
	);
}
add_action('wp_enqueue_scripts', 'block_theme_costom_scripts');
