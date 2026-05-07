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

	/**
	 * Styles
	 */

	// Alamilla theme styles.
	wp_enqueue_style(
		'alamilla-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);

	// Splide JS slider CDN.
	wp_enqueue_style(
		'splide-css',
		'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css',
		array(),
		'4.1.4'
	);

	/**
	 * Scripts
	 */

	// Alamilla theme scripts.
	wp_enqueue_script(
		'alamilla-scripts',
		get_template_directory_uri() . '/assets/js/scripts.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		array(
			'type' => 'module',
		)
	);

	// Splide JS slider CDN.
	wp_enqueue_script(
		'splide-js',
		'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js',
		array(),
		'4.1.4',
		true
	);
}
add_action( 'wp_enqueue_scripts', 'alamilla_enqueue' );
