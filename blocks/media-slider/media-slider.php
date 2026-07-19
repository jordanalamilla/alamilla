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
		$content_left     = get_field( 'content_left' );
		$content_right    = get_field( 'content_right' );
		$first_slide      = get_field( 'ms_slides' )[0];
		$first_slide_type = $first_slide['ms_type'];
		?>

		<!-- Content -->
		<div class="ms-content-wrapper">
			<div class="ms-content-left">
				<?php the_field( 'content_left' ); ?>
			</div>
			<div class="ms-content-right">
				<?php the_field( 'content_right' ); ?>
			</div>
		</div>

		<?php
		if ( $first_slide_type ) {
			// Video preview.
			$video_slide = $first_slide['ms_video'];
			?>

			<video autoplay muted loop>
				<source src="<?php echo esc_url( $video_slide['url'] ); ?>"
					type="<?php echo esc_attr( $video_slide['mime_type'] ); ?>">
				Your browser does not support the video tag.
			</video>

			<?php
		} else {
			// Image preview.
			$image_slide = $first_slide['ms_image'];
			?>

			<img src="<?php echo esc_url( $image_slide['url'] ); ?>"
				alt="<?php echo esc_attr( $image_slide['alt'] ); ?>">

			<?php
		}
	} elseif ( have_rows( 'ms_slides' ) ) {
		/**
		 * Live block for the front end.
		 */
		$content_left  = get_field( 'content_left' );
		$content_right = get_field( 'content_right' );
		?>

		<!-- Content -->
		<div class="ms-content-wrapper">
			<div class="ms-content-left">
				<?php the_field( 'content_left' ); ?>
			</div>
			<div class="ms-content-right">
				<?php the_field( 'content_right' ); ?>
			</div>
		</div>

		<!-- Slider -->
		<div class="splide ms-splide" aria-label="Media slider.">
			<div class="splide__track">
				<ul class="splide__list">

					<?php
					// Individual slides.
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
		// No block content message.
		echo '<h3>Media Slider Block</h3>';
	}
	?>

</div>