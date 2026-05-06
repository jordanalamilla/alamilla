<?php
/**
 * Enqueue
 *
 * Enqueuing styles and scripts for the Alamilla theme.
 *
 * @package Alamilla
 */

/**
 * Alamilla Enqueue
 *
 * Enqueuing styles and scripts.
 *
 * @return void
 */
function alamilla_enqueue() {

	// Styles.
	wp_enqueue_style(
		'alamilla-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);

	// Scripts.
	wp_enqueue_script(
		'alamilla-scripts',
		get_template_directory_uri() . '/assets/js/scripts.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		array(
			'type' => 'module',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'alamilla_enqueue' );
