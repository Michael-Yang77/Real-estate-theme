<?php

if ( ! function_exists( 'rh_header_meta_boxes' ) ) {

		/**
		 * Contains Header's meta box declaration
		 *
		 * @param $meta_boxes
		 *
		 * @return array
		 */
	function rh_header_meta_boxes( $meta_boxes ) {
		$meta_boxes[] = array(
			'id'         => 'rh-header-meta-box',
			'title'      => esc_html__( 'Custom Header', 'framework' ),
			'post_types' => array( 'page','post', 'agent', 'agency','property' ),
			'context'    => 'normal',
			'priority'   => 'low',
			'fields'     => array(
				array(
					'name'    => esc_html__( 'Select Template For Header', 'framework' ),
					'id'      => "REAL_HOMES_custom_header_display",
					'type'    => 'select',
					'std'     => 'default',
					'options' => realhomes_get_elementor_library(),
				),

			)

		);
		// Apply a filter before returning meta boxes.
		$meta_boxes = apply_filters( 'framework_theme_meta', $meta_boxes );

		return $meta_boxes;


	}

	add_filter( 'rwmb_meta_boxes', 'rh_header_meta_boxes' );

}

