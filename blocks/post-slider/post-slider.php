<?php
/**
 * Post Slider Block Template
 *
 * Displays a slider of images and videos using the Splide JS library.
 *
 * @package Alamilla
 */

$block_id = 'post-slider-' . $block['id'];
?>

<div id="<?php echo esc_attr( $block_id ); ?>"
	class="acf-block acf-block--post-slider"
	data-preview="<?php echo $is_preview ? 'true' : 'false'; ?>">

	<?php
	/**
	 * Preview block.
	 *
	 * Display a static preview of the first slide only in the back end.
	 */
	if ( $is_preview ) {
		echo '<h3>Post Slider Block Preview</h3>';

	} elseif ( have_rows( 'ps_posts' ) ) {
		$ps_posts = get_field( 'ps_posts' );
		?>

		<!-- Slider -->
		<div class="splide ps-splide" aria-label="Post slider.">
			<div class="splide__track">
				<ul class="splide__list">

					<?php
					// Individual slides.
					foreach ( $ps_posts as $id ) {
						$ps_post = get_post( $id );
						// pp( $ps_post );
						?>

						<li class="splide__slide">
							<?php echo get_the_post_thumbnail( $ps_post->ID, 'large' ); ?>
							<h4><?php echo esc_html( $ps_post->post_title ); ?></h4>
							<h6><?php echo esc_html( $ps_post->post_excerpt ); ?></h6>
						</li>

					<?php } ?>

				</ul>
			</div>
		</div>

		<?php
	} else {
		// No block content message.
		echo '<h3>Post Slider Block</h3>';
	}
	?>

</div>