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

<div id="<?php echo esc_attr( $block_id ); ?>" class="acf-block acf-block--media-slider">

	<?php if ( have_rows( 'ms_slides' ) ) { ?>

		<div class="splide" aria-label="Media slider.">
			<div class="splide__track">
				<ul class="splide__list">

					<?php
					while ( have_rows( 'ms_slides' ) ) {
						the_row();
						$ms_type  = get_sub_field( 'ms_type' );
						$ms_image = get_sub_field( 'ms_image' );
						$ms_video = get_sub_field( 'ms_video' );
						?>

						<li class="splide__slide">
							<div class="media-wrapper">

								<?php
								// Videos.
								if ( $ms_type ) {
									?>

									<video autoplay muted loop>
										<source src="<?php echo esc_url( $ms_video['url'] ); ?>"
											type="<?php echo esc_attr( $ms_video['mime_type'] ); ?>">
										Your browser does not support the video tag.
									</video>

									<?php
									// Images.
								} else {
									?>

									<img src="<?php echo esc_url( $ms_image['url'] ); ?>"
										alt="<?php echo esc_attr( $ms_image['alt'] ); ?>">

								<?php } ?>

							</div>
						</li>

					<?php } ?>

				</ul>
			</div>
		</div>

		<?php
	} else {
		echo '<h3>Media Slider Block</h3>';
	}
	?>

</div>