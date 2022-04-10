<?php
/**
 * Section:  `Basics`
 * Panel:    `Header`
 *
 * @since 3.15.2
 */

if ( ! function_exists( 'inspiry_header_basics_customizer' ) ) :
	/**
	 * Header Basics Customizer
	 *
	 * @param  WP_Customize_Manager $wp_customize
	 *
	 * @since  2.6.3
	 */
	function inspiry_header_basics_customizer( WP_Customize_Manager $wp_customize ) {


		// Header Basics
		$wp_customize->add_section( 'inspiry_header_basics', array(
			'title' => esc_html__( 'Basics', 'framework' ),
			'panel' => 'inspiry_header_panel',
		) );


		if ( class_exists( 'RHEA_Elementor_Header_Footer' ) ) {
			$wp_customize->add_setting( 'realhomes_custom_header', array(
				'sanitize_callback' => 'inspiry_sanitize_select',
				'type'              => 'option',
				'default'           => 'default',
			) );
			$wp_customize->add_control( 'realhomes_custom_header', array(
				'settings' => 'realhomes_custom_header',
				'label'    => esc_html__( 'Custom Header Template', 'framework' ),
				'type'     => 'select',
				'section'  => 'inspiry_header_basics',
				'choices'  => realhomes_get_elementor_library(),
			) );

			$wp_customize->add_setting( 'realhomes_custom_responsive_header', array(
				'sanitize_callback' => 'inspiry_sanitize_select',
				'type'              => 'option',
				'default'           => 'default',
			) );
			$wp_customize->add_control( 'realhomes_custom_responsive_header', array(
				'settings'        => 'realhomes_custom_responsive_header',
				'label'           => esc_html__( 'Custom Mobile Header Template', 'framework' ),
				'type'            => 'select',
				'section'         => 'inspiry_header_basics',
				'choices' => array(
					'default' => esc_html__( 'Default', 'framework' ),
					'custom'  => esc_html__( 'Custom Elementor', 'framework' ),
				),
				'active_callback' => 'realhomes_custom_header_not_default'
			) );

		}

		if ( 'modern' === INSPIRY_DESIGN_VARIATION ) {
			// Header Variation
			$wp_customize->add_setting(
				'inspiry_header_mod_variation_option', array(
				'type'              => 'option',
				'default'           => 'one',
				'sanitize_callback' => 'inspiry_sanitize_radio',
			) );
			$wp_customize->add_control( new Inspiry_Custom_Radio_Image_Control( $wp_customize, 'inspiry_header_mod_variation_option',
				array(
					'section'     => 'inspiry_header_basics',
					'label'       => esc_html__( 'Header Variations', 'framework' ),
					'description' => esc_html__( 'Choose your desired header style.', 'framework' ),
					'settings'    => 'inspiry_header_mod_variation_option',
					'choices'     => array(
						'one'   => get_template_directory_uri() . '/assets/modern/images/header-one.png',
						'two'   => get_template_directory_uri() . '/assets/modern/images/header-two.png',
						'three' => get_template_directory_uri() . '/assets/modern/images/header-three.png',
						'four'  => get_template_directory_uri() . '/assets/modern/images/header-four.jpg',
					),
					'active_callback' => 'realhomes_custom_header_is_default'
				)
			) );

			$wp_customize->add_setting( 'realhomes_header_layout', array(
				'type'              => 'option',
				'default'           => 'default',
				'sanitize_callback' => 'inspiry_sanitize_radio',
			) );
			$wp_customize->add_control( 'realhomes_header_layout', array(
				'label'   => esc_html__( 'Header Layout', 'framework' ),
				'type'    => 'radio',
				'section' => 'inspiry_header_basics',
				'choices' => array(
					'default'   => esc_html__( 'Default (Boxed)', 'framework' ),
					'fullwidth' => esc_html__( 'Full Width', 'framework' ),
				),
				'active_callback' => 'realhomes_custom_header_is_default'
			) );

			$wp_customize->add_setting(
				'inspiry_responsive_header_option', array(
					'type'              => 'option',
					'default'           => 'solid',
					'sanitize_callback' => 'inspiry_sanitize_radio',
				)
			);
			$wp_customize->add_control(
				'inspiry_responsive_header_option', array(
					'label'           => esc_html__( 'Header Display on Mobile Devices', 'framework' ),
					'type'            => 'radio',
					'section'         => 'inspiry_header_basics',
					'choices'         => array(
						'transparent' => esc_html__( 'Transparent', 'framework' ),
						'solid'       => esc_html__( 'Solid', 'framework' ),
					),
					'active_callback' => 'realhomes_custom_responsive_header_default'
				)
			);
		}

		if ( 'classic' === INSPIRY_DESIGN_VARIATION ) {
			$wp_customize->add_setting( 'inspiry_header_variation', array(
				'type'              => 'option',
				'default'           => 'default',
				'sanitize_callback' => 'inspiry_sanitize_radio',
			) );
			$wp_customize->add_control( 'inspiry_header_variation', array(
				'label'   => esc_html__( 'Choose Header Variation', 'framework' ),
				'type'    => 'radio',
				'section' => 'inspiry_header_basics',
				'choices' => array(
					'default' => esc_html__( 'Default', 'framework' ),
					'center'  => esc_html__( 'Center', 'framework' ),
				),
				'active_callback' => 'realhomes_custom_header_is_default'
			) );
		}

		// Sticky Header
		$wp_customize->add_setting( 'theme_sticky_header', array(
			'type'              => 'option',
			'default'           => 'false',
			'sanitize_callback' => 'inspiry_sanitize_radio',
		) );
		$wp_customize->add_control( 'theme_sticky_header', array(
			'label'   => esc_html__( 'Sticky Header', 'framework' ),
			'type'    => 'radio',
			'section' => 'inspiry_header_basics',
			'choices' => array(
				'true'  => 'Enable',
				'false' => 'Disable',
			),
		) );

		$wp_customize->add_setting( 'inspiry_update_sticky_header_nav_links', array(
			'type'              => 'option',
			'default'           => 'false',
			'sanitize_callback' => 'inspiry_sanitize_radio',
		) );
		$wp_customize->add_control( 'inspiry_update_sticky_header_nav_links', array(
			'label'           => esc_html__( 'Automatically Highlight Sticky Header Navigation links for related section.', 'framework' ),
			'description'     => esc_html__( 'Works only with hash navigation if the related section exists on the page.', 'framework' ),
			'type'            => 'radio',
			'section'         => 'inspiry_header_basics',
			'choices'         => array(
				'true'  => 'Enable',
				'false' => 'Disable',
			),
			'active_callback' => function () {
				return ( 'modern' === INSPIRY_DESIGN_VARIATION && 'true' === get_option( 'theme_sticky_header', 'false' ) );
			}
		) );

	}

	add_action( 'customize_register', 'inspiry_header_basics_customizer' );
endif;

if ( ! function_exists( 'inspiry_header_basics_defaults' ) ) :
	/**
	 * inspiry_header_basics_defaults.
	 *
	 * @since  2.6.3
	 */
	function inspiry_header_basics_defaults( WP_Customize_Manager $wp_customize ) {
		$header_basics_settings_ids = array(
			'theme_sticky_header',
			'inspiry_header_variation',
		);
		inspiry_initialize_defaults( $wp_customize, $header_basics_settings_ids );
	}

	add_action( 'customize_save_after', 'inspiry_header_basics_defaults' );
endif;

if ( ! function_exists( 'realhomes_custom_header_is_default' ) ) {
	/**
	 * Return True if Custom Header is set as Default
	 *
	 * @since RealHomes 3.18.0
	 *
	 * @return bool
	 */
	function realhomes_custom_header_is_default() {
		if ( class_exists( 'RHEA_Elementor_Header_Footer' ) ) {
			$realhomes_custom_header = get_option('realhomes_custom_header');
			if (   $realhomes_custom_header && 'default' !== $realhomes_custom_header ) {
				return false;
			}
		}

		return true;
	}
}
if ( ! function_exists( 'realhomes_custom_header_not_default' ) ) {
	/**
	 * Check if Custom Header is not set as Default
	 *
	 * @since RealHomes 3.18.0
	 *
	 * @return bool
	 */
	function realhomes_custom_header_not_default() {
		if ( class_exists( 'RHEA_Elementor_Header_Footer' ) ) {
			$realhomes_custom_header = get_option('realhomes_custom_header');
			if ( $realhomes_custom_header && 'default' !== $realhomes_custom_header ) {
				return true;
			}
		}

		return false;
	}
}
if ( ! function_exists( 'realhomes_custom_responsive_header_default' ) ) {
	/**
	 * Check if Custom Responsive Header is set as Default
	 *
	 * @since RealHomes 3.18.0
	 *
	 * @return bool
	 */
	function realhomes_custom_responsive_header_default() {

		if ( class_exists( 'RHEA_Elementor_Header_Footer' ) ) {
			$realhomes_custom_responsive_header = get_option('realhomes_custom_responsive_header');
			if (  $realhomes_custom_responsive_header && 'default' !== $realhomes_custom_responsive_header && true !== realhomes_custom_header_is_default() ) {
				return false;
			}
		}

		return true;
	}
}