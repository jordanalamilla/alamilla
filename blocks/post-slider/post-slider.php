<?php
/**
 * Media Slider Block Template
 *
 * Displays a slider of images and videos using the Splide JS library.
 *
 * @package Alamilla
 */

$block_id = 'media-slider-' . $block['id'];
?>

<div id="<?php echo esc_attr( $block_id ); ?>"
	class="acf-block acf-block--media-slider"
	data-preview="<?php echo $is_preview ? 'true' : 'false'; ?>">

	<?php
	/**
	 * Preview block.
	 *
	 * Display a static preview of the first slide only in the back end.
	 */
	if ( $is_preview ) {
		echo '<h3>Media Slider Block Preview</h3>';

	} elseif ( have_rows( 'ms_slides' ) ) {
		echo '<h3>Media Slider Block</h3>';

	} else {
		// No block content message.
		echo '<h3>Media Slider Block</h3>';
	}
	?>

</div>