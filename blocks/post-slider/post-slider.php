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

		<?php if ( $ps_intro_content ) { ?>
			<!-- Intro content -->
			<div class="ps-intro-content">
				<?php echo wp_kses_post( $ps_intro_content ); ?>
			</div>
		<?php } ?>

		<!-- Slider -->
		<div class="splide ps-splide" aria-label="Post slider.">
			<div class="splide__track">
				<ul class="splide__list">

					<?php
					// Individual slides.
					foreach ( $ps_posts as $ps_id ) {
						$ps_post          = get_post( $ps_id );
						$terms            = get_the_terms( $ps_post->ID, 'project-category' );
						$project_category = 'Uncategorized';

						if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
							$project_category = $terms[0]->name;
						}
						?>

						<li class="splide__slide">
							<a href="<?php echo esc_html( get_permalink( $ps_post->ID ) ); ?>" class="splide__link">
								<span class="splide__wrapper" style="background-image: url('<?php echo esc_attr( get_the_post_thumbnail_url( $ps_post->ID, 'large' ) ); ?>');">
								
									<!-- Category -->
									<span class="splide__title-section">
										<h5 class="splide__category cat-<?php echo esc_attr( strtolower( $project_category ) ); ?>">
											<?php echo esc_html( $project_category ); ?>
										</h5>
									</span>

									<!-- View button -->
									<h6 class="splide__button">View Project</h6>

									<!-- Title & excerpt -->
									<span class="splide__content-section">
										<h3 class="splide__title"><?php echo esc_html( $ps_post->post_title ); ?></h3>
										<h6 class="splide__excerpt"><?php echo esc_html( $ps_post->post_excerpt ); ?></h6>
									</span>
								</span>
							</a>
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