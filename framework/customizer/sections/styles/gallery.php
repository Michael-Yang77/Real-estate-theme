<?php
/**
 * Section:    `Gallery`
 * Panel:    `Styles`
 *
 * @package realhomes/customizer
 * @since 3.0.0
 */

if (!function_exists('inspiry_styles_gallery_customizer')) :

    /**
     * inspiry_styles_gallery_customizer.
     *
     * @param WP_Customize_Manager $wp_customize - Instance of WP_Customize_Manager.
     * @since  3.0.0
     */
    function inspiry_styles_gallery_customizer(WP_Customize_Manager $wp_customize)
    {

        // Styles Gallery Section
        $wp_customize->add_section('inspiry_gallery_styles', array(
            'title' => esc_html__('Gallery', 'framework'),
            'panel' => 'inspiry_styles_panel',
        ));

        // Gallery Images Hover Color
        if ('classic' === INSPIRY_DESIGN_VARIATION) {
            $default_gallery_hover = '#4dc7ec';
        } elseif ('modern' === INSPIRY_DESIGN_VARIATION) {
            $default_gallery_hover = '#1EA69A';
        }
        $wp_customize->add_setting('inspiry_gallery_hover_color', array(
            'type' => 'option',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_hex_color',
        ));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'inspiry_gallery_hover_color', array(
                'label' => esc_html__('Images Overlay Color', 'framework'),
                'section' => 'inspiry_gallery_styles',
                'description' => sprintf(esc_html__('Default color is %s', 'framework'), $default_gallery_hover),
            )
        ));

        if ('modern' === INSPIRY_DESIGN_VARIATION) {
            $wp_customize->add_setting('inspiry_gallery_overlay_button_color_labels',
                array('sanitize_callback' => 'sanitize_text_field',)
            );
            $wp_customize->add_control(new Inspiry_Heading_Customize_Control($wp_customize, 'inspiry_gallery_overlay_button_color_labels',
                array(
                    'label' => esc_html__('Images Overlay Buttons', 'framework'),
                    'section' => 'inspiry_gallery_styles',
                )
            ));

            $wp_customize->add_setting('inspiry_gallery_button_color', array(
                'type' => 'option',
                'sanitize_callback' => 'sanitize_hex_color',
            ));
            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'inspiry_gallery_button_color', array(
                    'label' => esc_html__('Color', 'framework'),
                    'section' => 'inspiry_gallery_styles',
                )
            ));

            $wp_customize->add_setting('inspiry_gallery_button_hover_color', array(
                'type' => 'option',
                'sanitize_callback' => 'sanitize_hex_color',
            ));
            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'inspiry_gallery_button_hover_color', array(
                    'label' => esc_html__('Hover Color', 'framework'),
                    'section' => 'inspiry_gallery_styles',
                )
            ));

            $wp_customize->add_setting('inspiry_gallery_button_bg_color', array(
                'type' => 'option',
                'sanitize_callback' => 'sanitize_hex_color',
            ));
            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'inspiry_gallery_button_bg_color', array(
                    'label' => esc_html__('Background Color', 'framework'),
                    'section' => 'inspiry_gallery_styles',
                )
            ));

            $wp_customize->add_setting('inspiry_gallery_button_bg_hover_color', array(
                'type' => 'option',
                'sanitize_callback' => 'sanitize_hex_color',
            ));
            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'inspiry_gallery_button_bg_hover_color', array(
                    'label' => esc_html__('Background Hover Color', 'framework'),
                    'section' => 'inspiry_gallery_styles',
                )
            ));
        }
    }

    add_action('customize_register', 'inspiry_styles_gallery_customizer');
endif;


if (!function_exists('inspiry_styles_gallery_defaults')) :

    /**
     * inspiry_styles_gallery_defaults.
     *
     * @param WP_Customize_Manager $wp_customize - Instance of WP_Customize_Manager.
     * @since  3.0.0
     */
    function inspiry_styles_gallery_defaults(WP_Customize_Manager $wp_customize)
    {
        $styles_gallery_settings_ids = array(
            'inspiry_gallery_hover_color',
        );
        inspiry_initialize_defaults($wp_customize, $styles_gallery_settings_ids);
    }

    add_action('customize_save_after', 'inspiry_styles_gallery_defaults');
endif;
