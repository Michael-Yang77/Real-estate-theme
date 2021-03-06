<?php
/**
 * Gallery 3 Columns Template
 *
 * Page template for 3 columns gallery template.
 *
 * @since 	3.0.0
 * @package realhomes/modern
 */

global $gallery_name;
$gallery_name = 'rh_gallery--3-columns';

global $gallery_image_size;
$gallery_image_size = 'modern-property-child-slider';

get_header();

$header_variation = get_option( 'inspiry_gallery_header_variation' );

if ( empty( $header_variation ) || ( 'none' === $header_variation ) ) {
	get_template_part( 'assets/modern/partials/banner/header' );
} elseif ( ! empty( $header_variation ) && ( 'banner' === $header_variation ) ) {
	get_template_part( 'assets/modern/partials/banner/gallery' );
}

if ( inspiry_show_header_search_form() ) {
	get_template_part( 'assets/modern/partials/properties/search/advance' );
}

get_template_part( 'assets/modern/partials/properties/gallery' );

get_footer();
