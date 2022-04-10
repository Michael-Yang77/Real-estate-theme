<?php
/**
 * Header File
 *
 * @package realhomes
 * @subpackage classic
 */
if ( 'true' === get_option( 'theme_sticky_header', 'false' ) ) {
	?>
    <div class="rh_classic_sticky_header">
		<?php get_template_part( 'assets/classic/partials/header/sticky-header' ); ?>
    </div>
	<?php
}
?>

<?php
$realhomes_custom_header = get_option( 'realhomes_custom_header', 'default' );
if ( class_exists('RHEA_Elementor_Header_Footer') && $realhomes_custom_header && 'default' !== $realhomes_custom_header ) {
	do_action( 'realhomes_elementor_header_content' );
}else{
?>
<!-- Start Header -->
<div class="header-wrapper">

	<div class="container"><!-- Start Header Container -->

		<?php
		/**
		 * Header Variation
		 */
		$inspiry_header_variation = apply_filters( 'inspiry_header_variation', get_option( 'inspiry_header_variation' ) );

		// For demo purpose only.
		if ( isset( $_GET['header-variation'] ) ) {
			$inspiry_header_variation = $_GET['header-variation'];
		}

		if ( 'center' == $inspiry_header_variation ) {
			get_template_part( 'assets/classic/partials/header/variation-center' );
		} else {
			get_template_part( 'assets/classic/partials/header/variation-simple' );
		}
		?>

	</div> <!-- End Header Container -->

</div><!-- End Header -->

	<?php
}
    ?>