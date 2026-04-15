<?php
/**
 * Functions for the Alamilla theme.
 *
 * @package Alamilla
 */

/**
 * Alamilla child theme functions and definitions
 */
function alamilla_child_enqueue_styles() {
	wp_enqueue_style(
		'twentytwentyfive-style',
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme( get_template() )->get( 'Version' )
	);

	wp_enqueue_style(
		'alamilla-style',
		get_stylesheet_uri(),
		array( 'twentytwentyfive-style' ),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'alamilla_child_enqueue_styles' );
