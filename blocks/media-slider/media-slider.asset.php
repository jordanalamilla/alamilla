<?php // phpcs:ignore
/**
 * Media Slider Block Asset
 *
 * Defines the JavaScript asset for the Media Slider block,
 * which depends on the Splide JS library in includes/enqueue.php.
 *
 * @package Alamilla
 */

return array(
	'handle'       => 'media-slider-script',
	'dependencies' => array( 'splide-js' ),
	'version'      => '4.1.4',
);
