<?php
/**
 * Functions for the Alamilla theme.
 *
 * @package Alamilla
 */

/**
 * Pre-Print
 *
 * Print a data structure in a readable format for debugging purposes.
 *
 * @param mixed $data The data to be printed.
 * @return void
 */
function pp( $data ) {
	echo '<pre>';
	print_r( $data ); //phpcs:ignore
	echo '</pre>';
}

/**
 * Require the enqueue file to load styles and scripts.
 */
require get_template_directory() . '/includes/enqueue.php';

/**
 * Require the ES6 file to enable ES6 module support for the custom JavaScript.
 */
require get_template_directory() . '/includes/es6.php';

/**
 * Require the register ACF blocks file to register custom ACF blocks.
 */
require get_template_directory() . '/includes/register-acf-blocks.php';
