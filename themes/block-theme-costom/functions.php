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
}
add_action('wp_enqueue_scripts', 'block_theme_costom_styles');
