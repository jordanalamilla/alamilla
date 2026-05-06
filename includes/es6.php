<?php
/**
 * ES6
 *
 * Enabling ES6 module support for the custom JavaScript in the Alamilla theme.
 *
 * @package Alamilla
 */

/**
 * Enable ES6 module support for the custom JavaScript.
 *
 * @param string $tag The script tag to be printed in the HTML.
 * @param string $handle The script's registered handle.
 * @param string $src The script's source URL.
 * @return string The modified script tag with type="module" for the specified handle.
 */
function add_module_type( $tag, $handle, $src ) {
	if ( 'alamilla-scripts' === $handle ) {
		return '<script type="module" src="' . esc_url( $src ) . '"></script>'; // phpcs:ignore
	}
	return $tag;
}
add_filter( 'script_loader_tag', 'add_module_type', 10, 3 );
