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
		get_stylesheet_uri(),
		[],
		wp_get_theme()->get( 'Version' )
	);
	wp_enqueue_style(
		'bootstrap',
		get_template_directory_uri() . '/assets/css/bootstrap.min.css',
		[],
		'5.3.2'
	);
}
add_action( 'wp_enqueue_scripts', 'block_theme_costom_styles' );
