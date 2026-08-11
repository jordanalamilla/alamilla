<?php
/**
 * Business Card Block Template
 *
 * Display a logo, contact and other info about your organization.
 *
 * @package Alamilla
 */

$block_id = 'business-card-' . $block['id'];
?>

<div id="<?php echo esc_attr( $block_id ); ?>"
	class="acf-block acf-block--business-card"
	data-preview="<?php echo $is_preview ? 'true' : 'false'; ?>">

	<?php
	if ( $is_preview ) {
		/**
		 * Preview block.
		 */
		?>

		<!-- Content -->
		<div class="bc-content-wrapper">
			business card block
		</div>

		
		<?php
	} elseif ( have_rows( 'bc_row' ) ) {

		/**
		 * Front end block.
		 */

		// Rows.
		while ( have_rows( 'bc_row' ) ) {
			the_row();
			?>

			<div class="bc-row">

				<?php
				// Columns.
				if ( have_rows( 'bc_column' ) ) {
					while ( have_rows( 'bc_column' ) ) {
						the_row();
						$bc_content = get_sub_field( 'bc_content' );
						?>

						<div class="bc-column">
							<div class="bc-content-wrapper">
								<?php echo wp_kses_post( $bc_content ); ?>
							</div>
						</div>

						<?php
					}
				}
				?>
			</div>
		
			<?php
		}
	} else {
		/**
		 * Default block.
		 */
		echo '<h3>Business Card Block</h3>';
	}
	?>

</div>