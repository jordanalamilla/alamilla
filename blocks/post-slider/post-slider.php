<?php
/**
 * Post Slider Block Template
 *
 * Displays a slider of images and videos using the Splide JS library.
 *
 * @package Alamilla
 */

$block_id    = 'post-slider-' . $block['id'];
$block_align = 'align' . $block['align'];

// pp( $block );
?>

<div id="<?php echo esc_attr( $block_id ); ?>"
	class="<?php echo esc_attr( $block_align ); ?> acf-block acf-block--post-slider"
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
		$ps_intro_content = get_field( 'ps_intro_content' );
		$ps_posts         = get_field( 'ps_posts' );
		?>

		<!-- Slider -->
		<div class="splide ps-splide" aria-label="Post slider.">

			<!-- Intro content -->
			<div class="ps-intro-content">
				<?php echo wp_kses_post( $ps_intro_content ); ?>
			</div>

			<div class="splide__track">
				<ul class="splide__list">

					<?php
					// Individual slides.
					foreach ( $ps_posts as $id ) {
						$ps_post = get_post( $id );
						// pp( $ps_post );
						?>

						<li class="splide__slide">
							<!-- Image -->
							<div class="splide__image" style="background-image: url('<?php echo esc_attr( get_the_post_thumbnail_url( $ps_post->ID, 'large' ) ); ?>');"></div>
							
							<div class="splide__title-section">

								<!-- Title -->
								<h4 class="splide__title"><?php echo esc_html( $ps_post->post_title ); ?></h4>
								
								<!-- Tags -->
								<div class="splide__tags">
									<?php
									$ps_tags = get_the_tags( $id );

									if ( $ps_tags ) {
										$ps_tags = array_slice( $ps_tags, 0, 3 );

										foreach ( $ps_tags as $ps_tag ) {
											?>
											<a href="<?php echo esc_url( get_tag_link( $ps_tag->term_id ) ); ?>" class="splide__tag badge">
												<?php echo esc_html( $ps_tag->name ); ?>
											</a>
											<?php
										}
									}
									?>
								</div>
							</div>

							<!-- Excerpt -->
							<h6 class="splide__excerpt"><?php echo esc_html( $ps_post->post_excerpt ); ?></h6>

							<!-- Link -->
							<h6>
								<a href="<?php echo esc_html( get_permalink( $ps_post->ID ) ); ?>" class="splide__link">
									View Post
								</a>
							</h6>
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