<?php

if ( ! function_exists( 'rh_footer_meta_boxes' ) ) {

		/**
		 * Contains Footer's meta box declaration
		 *
		 * @param $meta_boxes
		 *
		 * @return array
		 */
	function rh_footer_meta_boxes( $meta_boxes ) {
		$meta_boxes[] = array(
			'id'         => 'rh-footer-meta-box',
			'title'      => esc_html__( 'Custom Footer', 'framework' ),
			'post_types' => array( 'page','post', 'agent', 'agency','property' ),
			'context'    => 'normal',
			'priority'   => 'low',
			'fields'     => array(
				array(
					'name'    => esc_html__( 'Select Template For Footer', 'framework' ),
					'id'      => "REAL_HOMES_custom_footer_display",
					'type'    => 'select',
					'std'     => 'default',
					'options' => realhomes_get_elementor_library(),
				),

			)

		);
		// Apply a filter before returning meta boxes.
		$meta_boxes = apply_filters( 'realhomes_custom_footer_display_meta', $meta_boxes );

		return $meta_boxes;


	}

	add_filter( 'rwmb_meta_boxes', 'rh_footer_meta_boxes' );

}

