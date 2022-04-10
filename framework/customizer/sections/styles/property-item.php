<?php
/**
 * Section:	`Property Card`
 * Panel: 	`Styles`
 *
 * @package realhomes/customizer
 * @since 3.0.0
 */

if ( ! function_exists( 'inspiry_styles_property_item_customizer' ) ) :
	/**
	 * inspiry_styles_property_item_customizer.
	 *
	 * @param  WP_Customize_Manager $wp_customize - Instance of WP_Customize_Manager.
	 * @since  3.0.0
	 */
	function inspiry_styles_property_item_customizer( WP_Customize_Manager $wp_customize ) {

		// Property Card Section
		$wp_customize->add_section( 'inspiry_property_item_styles', array(
			'title' => esc_html__( 'Property Card', 'framework' ),
			'panel' => 'inspiry_styles_panel',
		) );

		$wp_customize->add_setting( 'theme_property_item_bg_color', array(
			'type' => 'option',
			'default' => '#ffffff',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'theme_property_item_bg_color',
				array(
					'label' => esc_html__( 'Background', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			)
		);

		if ( 'classic' === INSPIRY_DESIGN_VARIATION ) {
			$wp_customize->add_setting( 'theme_property_item_border_color', array(
				'type' => 'option',
				'default' => '#dedede',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'theme_property_item_border_color',
					array(
						'label' => esc_html__( 'Border Color', 'framework' ),
						'section' => 'inspiry_property_item_styles',
					)
				)
			);
		}

		if ( 'modern' === INSPIRY_DESIGN_VARIATION ) {
			$wp_customize->add_setting( 'inspiry_property_image_overlay', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'inspiry_property_image_overlay',
					array(
						'label' => esc_html__( 'Image Overlay', 'framework' ),
						'section' => 'inspiry_property_item_styles',
					)
				)
			);

			$wp_customize->add_setting( 'inspiry_property_featured_label_bg', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'inspiry_property_featured_label_bg',
					array(
						'label' => esc_html__( 'Featured Tag Background', 'framework' ),
						'section' => 'inspiry_property_item_styles',
					)
				)
			);

			$wp_customize->add_setting( 'inspiry_property_featured_label_color', array(
				'type'              => 'option',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inspiry_property_featured_label_color',
				array(
					'label'   => esc_html__( 'Featured Tag Color', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			) );

			$wp_customize->add_setting( 'inspiry_property_favorite_icon_color', array(
				'type'              => 'option',
				'default'           => '#ffffff',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inspiry_property_favorite_icon_color',
				array(
					'label'   => esc_html__( 'Favorite Icon Color', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			) );

			$wp_customize->add_setting( 'inspiry_property_favorite_icon_hover_color', array(
				'type'              => 'option',
				'default'           => '#ea3d3d',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inspiry_property_favorite_icon_hover_color',
				array(
					'label'   => esc_html__( 'Favorite Icon Hover Color', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			) );

			$wp_customize->add_setting( 'inspiry_property_compare_icon_color', array(
				'type'              => 'option',
				'default'           => '#ffffff',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inspiry_property_compare_icon_color',
				array(
					'label'   => esc_html__( 'Compare Icon Color', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			) );

			$wp_customize->add_setting( 'inspiry_property_compare_icon_hover_color', array(
				'type'              => 'option',
				'default'           => '#ea723d',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inspiry_property_compare_icon_hover_color',
				array(
					'label'   => esc_html__( 'Compare Icon Hover Color', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			) );

			$wp_customize->add_setting( 'inspiry_property_tooltip_bgcolor', array(
				'type'              => 'option',
				'default'           => '#ea723d',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inspiry_property_tooltip_bgcolor',
				array(
					'label'   => esc_html__( 'Tooltip Background', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			) );

			$wp_customize->add_setting( 'inspiry_property_tooltip_color', array(
				'type'              => 'option',
				'default'           => '#ffffff',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inspiry_property_tooltip_color',
				array(
					'label'   => esc_html__( 'Tooltip Color', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			) );

		}

		if ( 'classic' === INSPIRY_DESIGN_VARIATION ) {
			$default_title_color = '#394041';
		} elseif ( 'modern' === INSPIRY_DESIGN_VARIATION ) {
			$default_title_color = '#1a1a1a';
		}
		$wp_customize->add_setting( 'theme_property_title_color', array(
			'type' => 'option',
			'default' => $default_title_color,
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'theme_property_title_color',
				array(
					'label' => esc_html__( 'Title Color', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			)
		);

		if ( 'classic' === INSPIRY_DESIGN_VARIATION ) {
			$default_title_hover = '#df5400';
		} elseif ( 'modern' === INSPIRY_DESIGN_VARIATION ) {
			$default_title_hover = '#1ea69a';
		}
		$wp_customize->add_setting( 'theme_property_title_hover_color', array(
			'type' => 'option',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'theme_property_title_hover_color',
				array(
					'label' => esc_html__( 'Title Hover Color', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			)
		);

		if ( 'classic' === INSPIRY_DESIGN_VARIATION ) {
			$default_price_color = '#ffffff';
		} elseif ( 'modern' === INSPIRY_DESIGN_VARIATION ) {
			$default_price_color = '#1ea69a';
		}
		$wp_customize->add_setting( 'theme_property_price_text_color', array(
			'type' => 'option',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'theme_property_price_text_color',
				array(
					'label' => esc_html__( 'Price Color', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			)
		);

		if ( 'classic' === INSPIRY_DESIGN_VARIATION ) {
			$wp_customize->add_setting( 'theme_property_price_bg_color', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'theme_property_price_bg_color',
					array(
						'label' => esc_html__( 'Price Background', 'framework' ),
						'section' => 'inspiry_property_item_styles',
					)
				)
			);

			$wp_customize->add_setting( 'theme_property_status_text_color', array(
				'type' => 'option',
				'default' => '#ffffff',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'theme_property_status_text_color',
					array(
						'label' => esc_html__( 'Status Text Color', 'framework' ),
						'section' => 'inspiry_property_item_styles',
					)
				)
			);

			$wp_customize->add_setting( 'theme_property_status_bg_color', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'theme_property_status_bg_color',
					array(
						'label' => esc_html__( 'Status Background Color', 'framework' ),
						'section' => 'inspiry_property_item_styles',
					)
				)
			);
		}

		if ( 'classic' === INSPIRY_DESIGN_VARIATION ) {
			$default_desc_color = '#666666';
		} elseif ( 'modern' === INSPIRY_DESIGN_VARIATION ) {
			$default_desc_color = '#808080';
		}
		$wp_customize->add_setting( 'theme_property_desc_text_color', array(
			'type' => 'option',
			'default' => $default_desc_color,
			'sanitize_callback' => 'sanitize_hex_color',

		) );
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'theme_property_desc_text_color',
				array(
					'label' => esc_html__( 'Description Text Color', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			)
		);

		if ( 'classic' === INSPIRY_DESIGN_VARIATION ) {
			$wp_customize->add_setting( 'theme_more_details_text_color', array(
				'type' => 'option',
				'default' => '#394041',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'theme_more_details_text_color',
					array(
						'label' => esc_html__( 'More Details Text Color', 'framework' ),
						'section' => 'inspiry_property_item_styles',
					)
				)
			);

			$wp_customize->add_setting( 'theme_more_details_text_hover_color', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'theme_more_details_text_hover_color',
					array(
						'label' => esc_html__( 'More Details Text Hover Color', 'framework' ),
						'section' => 'inspiry_property_item_styles',
					)
				)
			);
		}

		if ( 'modern' === INSPIRY_DESIGN_VARIATION ) {
			$wp_customize->add_setting( 'inspiry_property_meta_heading_color', array(
				'type' => 'option',
				'default' => '#1a1a1a',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'inspiry_property_meta_heading_color',
					array(
						'label' => esc_html__( 'Meta Heading Color', 'framework' ),
						'section' => 'inspiry_property_item_styles',
					)
				)
			);
		}

		if ( 'classic' === INSPIRY_DESIGN_VARIATION ) {
			$default_meta_color = '#394041';
		} elseif ( 'modern' === INSPIRY_DESIGN_VARIATION ) {
			$default_meta_color = '#444';
		}
		$wp_customize->add_setting( 'theme_property_meta_text_color', array(
			'type' => 'option',
			'default' => $default_meta_color,
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'theme_property_meta_text_color',
				array(
					'label' => esc_html__( 'Meta Text Color', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			)
		);

		if ( 'classic' === INSPIRY_DESIGN_VARIATION ) {
			$wp_customize->add_setting( 'theme_property_meta_bg_color', array(
				'type' => 'option',
				'default' => '#f5f5f5',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'theme_property_meta_bg_color',
					array(
						'label' => esc_html__( 'Meta Background Color', 'framework' ),
						'section' => 'inspiry_property_item_styles',
					)
				)
			);
		}

		if ( 'modern' === INSPIRY_DESIGN_VARIATION ) {

			$wp_customize->add_setting( 'inspiry_property_meta_icon_color', array(
				'type' => 'option',
				'default' => '#b3b3b3',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'inspiry_property_meta_icon_color',
					array(
						'label' => esc_html__( 'Meta Icon Color', 'framework' ),
						'section' => 'inspiry_property_item_styles',
					)
				)
			);

			$wp_customize->add_setting( 'inspiry_grid_card_common_heading', array( 'sanitize_callback' => 'sanitize_text_field', ) );
			$wp_customize->add_control( new Inspiry_Heading_Customize_Control( $wp_customize, 'inspiry_grid_card_common_heading',
				array(
					'label'   => esc_html__( 'Grid Cards Common', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			) );

			$wp_customize->add_setting( 'inspiry_grid_card_featured_tag_bg_color', array(
				'type'              => 'option',
				'default'           => '#1ea69a',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inspiry_grid_card_featured_tag_bg_color',
				array(
					'label'   => esc_html__( 'Featured Tag Background Color', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			) );

			$wp_customize->add_setting( 'inspiry_grid_card_featured_tag_color', array(
				'type'              => 'option',
				'default'           => '#fff',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inspiry_grid_card_featured_tag_color',
				array(
					'label'   => esc_html__( 'Featured Tag Icon Color', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			) );

			$wp_customize->add_setting( 'inspiry_grid_card_trend_tag_bg_color', array(
				'type'              => 'option',
				'default'           => '#d22d3e',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inspiry_grid_card_trend_tag_bg_color',
				array(
					'label'   => esc_html__( 'Trend Tag Background Color', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			) );

			$wp_customize->add_setting( 'inspiry_grid_card_trend_tag_color', array(
				'type'              => 'option',
				'default'           => '#fff',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inspiry_grid_card_trend_tag_color',
				array(
					'label'   => esc_html__( 'Trend Tag Icon Color', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			) );

			$wp_customize->add_setting( 'inspiry_grid_card_status_tag_bg_color', array(
				'type'              => 'option',
				'default'           => '#000',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inspiry_grid_card_status_tag_bg_color',
				array(
					'label'   => esc_html__( 'Status Tag Background Color', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			) );

			$wp_customize->add_setting( 'inspiry_grid_card_status_tag_color', array(
				'type'              => 'option',
				'default'           => '#fff',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inspiry_grid_card_status_tag_color',
				array(
					'label'   => esc_html__( 'Status Tag Color', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			) );

			$wp_customize->add_setting( 'inspiry_property_grid_card_address_color', array(
				'type'              => 'option',
				'default'           => '#1f79b8',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inspiry_property_grid_card_address_color',
				array(
					'label'   => esc_html__( 'Address Color', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			) );

			$wp_customize->add_setting( 'inspiry_property_grid_card_address_hover_color', array(
				'type'              => 'option',
				'default'           => '#ea723d',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inspiry_property_grid_card_address_hover_color',
				array(
					'label'   => esc_html__( 'Address Hover Color', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			) );

			$wp_customize->add_setting( 'inspiry_property_grid_card_address_hover_color', array(
				'type'              => 'option',
				'default'           => '#ea723d',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inspiry_property_grid_card_address_hover_color',
				array(
					'label'   => esc_html__( 'Address Hover Color', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			) );

			$wp_customize->add_setting( 'inspiry_grid_card_2_heading', array( 'sanitize_callback' => 'sanitize_text_field', ) );
			$wp_customize->add_control( new Inspiry_Heading_Customize_Control( $wp_customize, 'inspiry_grid_card_2_heading',
				array(
					'label'   => esc_html__( 'Grid Card Two', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			) );

			$wp_customize->add_setting( 'inspiry_grid_card_2_bottom_agent_title', array(
				'type'              => 'option',
				'default'           => '#ffffff',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inspiry_grid_card_2_bottom_agent_title',
				array(
					'label'   => esc_html__( 'Agent Title Color', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			) );

			$wp_customize->add_setting( 'inspiry_grid_card_2_bottom_agent_hover_title', array(
				'type'              => 'option',
				'default'           => '#f7f7f7',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inspiry_grid_card_2_bottom_agent_hover_title',
				array(
					'label'   => esc_html__( 'Agent Title Hover Color', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			) );

			$wp_customize->add_setting( 'inspiry_grid_card_2_bottom_agency_title', array(
				'type'              => 'option',
				'default'           => '#ffffff',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inspiry_grid_card_2_bottom_agency_title',
				array(
					'label'   => esc_html__( 'Agency Title Color', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			) );

			$wp_customize->add_setting( 'inspiry_grid_card_2_bottom_agency_hover_title', array(
				'type'              => 'option',
				'default'           => '#f7f7f7',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inspiry_grid_card_2_bottom_agency_hover_title',
				array(
					'label'   => esc_html__( 'Agency Title Hover Color', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			) );

			$wp_customize->add_setting( 'inspiry_grid_card_3_heading', array( 'sanitize_callback' => 'sanitize_text_field', ) );
			$wp_customize->add_control( new Inspiry_Heading_Customize_Control( $wp_customize, 'inspiry_grid_card_3_heading',
				array(
					'label'   => esc_html__( 'Grid Card Three', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			) );

			$wp_customize->add_setting( 'inspiry_grid_card_3_bottom_agent_bg', array(
				'type'              => 'option',
				'default'           => '#f7f7f7',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inspiry_grid_card_3_bottom_agent_bg',
				array(
					'label'   => esc_html__( 'Agent Container Background', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			) );

			$wp_customize->add_setting( 'inspiry_grid_card_3_bottom_agent_title', array(
				'type'              => 'option',
				'default'           => '#1a1a1a',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inspiry_grid_card_3_bottom_agent_title',
				array(
					'label'   => esc_html__( 'Agent Title Color', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			) );

			$wp_customize->add_setting( 'inspiry_grid_card_3_bottom_agent_hover_title', array(
				'type'              => 'option',
				'default'           => '#1a1a1a',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inspiry_grid_card_3_bottom_agent_hover_title',
				array(
					'label'   => esc_html__( 'Agent Title Hover Color', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			) );

			$wp_customize->add_setting( 'inspiry_grid_card_3_bottom_agency_title', array(
				'type'              => 'option',
				'default'           => '#808080',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inspiry_grid_card_3_bottom_agency_title',
				array(
					'label'   => esc_html__( 'Agency Title Color', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			) );

			$wp_customize->add_setting( 'inspiry_grid_card_3_bottom_agency_hover_title', array(
				'type'              => 'option',
				'default'           => '#1a1a1a',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inspiry_grid_card_3_bottom_agency_hover_title',
				array(
					'label'   => esc_html__( 'Agency Title Hover Color', 'framework' ),
					'section' => 'inspiry_property_item_styles',
				)
			) );

		}

	}

	add_action( 'customize_register', 'inspiry_styles_property_item_customizer' );
endif;

if ( ! function_exists( 'inspiry_styles_property_item_defaults' ) ) :
	/**
	 * inspiry_styles_property_item_defaults.
	 *
	 * @param  WP_Customize_Manager $wp_customize - Instance of WP_Customize_Manager.
	 * @since  3.0.0
	 */
	function inspiry_styles_property_item_defaults( WP_Customize_Manager $wp_customize ) {
		$styles_property_item_settings_ids = array(
			'theme_property_item_bg_color',
			'theme_property_item_border_color',
			'inspiry_property_image_overlay',
			'inspiry_property_featured_label_bg',
			'theme_property_title_color',
			'theme_property_title_hover_color',
			'theme_property_price_text_color',
			'theme_property_price_bg_color',
			'theme_property_status_text_color',
			'theme_property_status_bg_color',
			'theme_property_desc_text_color',
			'theme_more_details_text_color',
			'theme_more_details_text_hover_color',
			'theme_property_meta_text_color',
			'theme_property_meta_bg_color',
			'inspiry_property_meta_heading_color',
			'inspiry_property_meta_icon_color',
		);
		inspiry_initialize_defaults( $wp_customize, $styles_property_item_settings_ids );
	}
	add_action( 'customize_save_after', 'inspiry_styles_property_item_defaults' );
endif;
