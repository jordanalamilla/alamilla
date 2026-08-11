<?php
/**
 * Register ACF Blocks
 *
 * Registering ACF blocks for the Alamilla theme.
 *
 * @package Alamilla
 */

/**
 * Alamilla Register ACF Blocks
 *
 * The block to register.
 *
 * @return void
 */
function alamilla_register_acf_blocks() {

	// Media slider.
	register_block_type( get_template_directory() . '/blocks/media-slider' );
	register_block_type( get_template_directory() . '/blocks/post-slider' );
	register_block_type( get_template_directory() . '/blocks/business-card' );
}

add_action( 'acf/init', 'alamilla_register_acf_blocks' );
