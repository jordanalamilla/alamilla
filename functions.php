<?php
/**
 * Functions for the Alamilla theme.
 *
 * @package Alamilla
 */

/**
 * Alamilla child theme functions and definitions
 */
function alamilla_enqueue_styles() {
		wp_enqueue_style(
			'alamilla-style',
			get_stylesheet_uri(),
			array( 'twentytwentyfive-style' ),
			wp_get_theme()->get( 'Version' )
		);
}
add_action( 'wp_enqueue_scripts', 'alamilla_enqueue_styles' );
