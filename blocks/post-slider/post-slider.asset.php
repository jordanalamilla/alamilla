<?php // phpcs:ignore
/**
 * Post Slider Block Asset
 *
 * Defines the JavaScript asset for the Post Slider block,
 * which depends on the Splide JS library in includes/enqueue.php.
 *
 * @package Alamilla
 */

return array(
	'handle'       => 'post-slider-script',
	'dependencies' => array( 'splide-js' ),
	'version'      => '4.1.4',
);
