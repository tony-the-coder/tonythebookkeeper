<?php
/**
 * Keep this file as is. 
 * You can optionally add array() values to allow to customize theme design
 * See themes/customize.php as reference
 */

return array(
    array(
        'label' => esc_html__('Arrows', 'ml-slider'),
        'name' => 'arrows',
        'type' => 'section',
        'default' => 'on',
        'settings' => array(
            array(
                'label' => esc_html__('Icon Colors', 'ml-slider'),
                'type' => 'fields',
                'fields' => array(
                    array(
                        'label' => esc_html__('Default', 'ml-slider'),
                        'name' => 'arrows_icon',
                        'type' => 'color',
                        'default' => '#ffffff',
                        'css' => '[ms_id] .flexslider .flex-direction-nav li a:before { background-color: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Hover', 'ml-slider'),
                        'name' => 'arrows_icon_hover',
                        'type' => 'color',
                        'default' => '#ffffff',
                        'css' => '[ms_id] .flexslider .flex-direction-nav li a:hover:before { background-color: [ms_value] }'
                    )
                )
            ),
            /*array(
                'label' => esc_html__('Position', 'ml-slider'),
                'name' => 'arrows_position',
                'type' => 'select',
                'default' => 'bottom-right',
                'options' => array(
                    array(
                        'label' => esc_html__('Top Left', 'ml-slider'),
                        'value' => 'top-left'
                    ),
                    array(
                        'label' => esc_html__('Bottom Left', 'ml-slider'),
                        'value' => 'bottom-left'
                    ),
                    array(
                        'label' => esc_html__('Top Right', 'ml-slider'),
                        'value' => 'top-right'
                    ),
                    array(
                        'label' => esc_html__('Bottom Right', 'ml-slider'),
                        'value' => 'bottom-right'
                    ),
                ),
                'css' => 'css_rules',
                'css_rules' => array(
                    'bottom-left' => '[ms_id] .flexslider:not(.filmstrip) ul.flex-direction-nav { left: 0; bottom: 60px }',
                    'top-left' => '[ms_id] .flexslider:not(.filmstrip) ul.flex-direction-nav { left: 0; top: 28px; bottom: unset }',
                    'bottom-right' => '[ms_id] .flexslider:not(.filmstrip) ul.flex-direction-nav { right: 20px; top: unset; bottom: 60px; left: unset }',
                    'top-right' => '[ms_id] .flexslider:not(.filmstrip) ul.flex-direction-nav { right: 20px; top: 28px; bottom: unset; left: unset }',
                )
            ),*/
            array(
                'label' => esc_html__('Icon Size', 'ml-slider'),
                'name' => 'arrows_icon_size',
                'type' => 'range',
                'default' => 28,
                'metric' => 'px',
                'min' => 10,
                'max' => 30,
                'css' => '[ms_id] .flexslider .flex-direction-nav li a:before { mask-size: [ms_value]px auto }'
            ),
            array(
                'label' => esc_html__('Opacity (default)', 'ml-slider'),
                'name' => 'arrows_opacity',
                'type' => 'range',
                'default' => 1,
                'min' => 0.1,
                'max' => 1,
                'step' => 0.1,
                'css' => '[ms_id] .flexslider .flex-direction-nav li a:not(:hover) { opacity: [ms_value] }'
            ),
            array(
                'label' => esc_html__('Opacity (hover)', 'ml-slider'),
                'name' => 'arrows_opacity_hover',
                'type' => 'range',
                'default' => 1,
                'min' => 0.1,
                'max' => 1,
                'step' => 0.1,
                'css' => '[ms_id] .flexslider .flex-direction-nav li a:hover { opacity: [ms_value] }'
            ),
        )
    ),
    array(
        'label' => esc_html__('Navigation', 'ml-slider'),
        'name' => 'navigation',
        'type' => 'section',
        'default' => 'on',
        'settings' => array(
            array(
                'label' => esc_html__('Numbers Underline', 'ml-slider'),
                'type' => 'fields',
                'fields' => array(
                    array(
                        'label' => esc_html__('Default', 'ml-slider'),
                        'name' => 'navigation_color',
                        'type' => 'color',
                        'default' => 'rgba(255,255,255,0)',
                        'css' => '[ms_id] .flexslider ol.flex-control-nav:not(.flex-control-thumbs) li a:not(.flex-active) { border-color: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Hover', 'ml-slider'),
                        'name' => 'navigation_color_hover',
                        'type' => 'color',
                        'default' => '#ffffff',
                        'css' =>  '[ms_id] .flexslider ol.flex-control-nav:not(.flex-control-thumbs) li a:hover { border-color: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Active', 'ml-slider'),
                        'name' => 'navigation_color_active',
                        'type' => 'color',
                        'default' => '#ffffff',
                        'css' => '[ms_id] .flexslider .flex-control-nav li a.flex-active { border-color: [ms_value] }'
                    )
                )
            ),
            array(
                'label' => esc_html__('Numbers', 'ml-slider'),
                'type' => 'fields',
                'fields' => array(
                    array(
                        'label' => esc_html__('Default', 'ml-slider'),
                        'name' => 'navigation_number_color',
                        'type' => 'color',
                        'default' => '#ffffff',
                        'css' => '[ms_id] .flexslider ol.flex-control-nav:not(.flex-control-thumbs) li a:not(.flex-active) { color: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Hover', 'ml-slider'),
                        'name' => 'navigation_number_color_hover',
                        'type' => 'color',
                        'default' => '#ffffff',
                        'css' =>  '[ms_id] .flexslider ol.flex-control-nav:not(.flex-control-thumbs) li a:hover { color: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Active', 'ml-slider'),
                        'name' => 'navigation_number_color_active',
                        'type' => 'color',
                        'default' => '#ffffff',
                        'css' => '[ms_id] .flexslider .flex-control-nav li a.flex-active { color: [ms_value] }'
                    )
                )
            ),
            array(
                'label' => esc_html__('Number Size', 'ml-slider'),
                'name' => 'navigation_number_size',
                'type' => 'range',
                'default' => 14,
                'metric' => 'px',
                'min' => 5,
                'max' => 30,
                'css' => '[ms_id] .flexslider .flex-control-nav li a { font-size: [ms_value]px }'
            ),
            array(
                'label' => esc_html__('Number Line Height', 'ml-slider'),
                'name' => 'navigation_line_height',
                'type' => 'range',
                'default' => 1.2,
                'metric' => '',
                'min' => 0.5,
                'max' => 5,
                'step' => 0.1,
                'css' => '[ms_id] .flexslider .flex-control-nav li a { line-height: [ms_value] }'
            ),
            array(
                'label' => esc_html__('Number Underline Width', 'ml-slider'),
                'name' => 'navigation_underline_width',
                'type' => 'range',
                'default' => 2,
                'metric' => 'px',
                'min' => 1,
                'max' => 10,
                'css' => '[ms_id] .flexslider ol.flex-control-nav li a.flex-active, [ms_id] .flexslider ol.flex-control-nav:not(.flex-control-thumbs) li a:hover { border-width: [ms_value]px }'
            ),
            /*array(
                'label' => esc_html__('Position', 'ml-slider'),
                'name' => 'navigation_position',
                'type' => 'select',
                'default' => 'bottom-left',
                'options' => array(
                    array(
                        'label' => esc_html__('Top Left', 'ml-slider'),
                        'value' => 'top-left'
                    ),
                    array(
                        'label' => esc_html__('Bottom Left', 'ml-slider'),
                        'value' => 'bottom-left'
                    ),
                    array(
                        'label' => esc_html__('Top Right', 'ml-slider'),
                        'value' => 'top-right'
                    ),
                    array(
                        'label' => esc_html__('Bottom Right', 'ml-slider'),
                        'value' => 'bottom-right'
                    ),
                ),
                'css' => 'css_rules',
                'css_rules' => array(
                    'bottom-left' => '[ms_id] .flexslider ol.flex-control-nav:not(.flex-control-thumbs) { left: 30px; bottom: 30px }',
                    'top-left' => '[ms_id] .flexslider ol.flex-control-nav:not(.flex-control-thumbs) { left: 30px; top: 30px; bottom: unset }',
                    'bottom-right' => '[ms_id] .flexslider ol.flex-control-nav:not(.flex-control-thumbs) { right: 30px; top: unset; bottom: 30px; left: unset }',
                    'top-right' => '[ms_id] .flexslider ol.flex-control-nav:not(.flex-control-thumbs) { right: 30px; top: 30px; bottom: unset; left: unset }',
                )
            )*/
        )
    ),
    array(
        'label' => esc_html__('Caption', 'ml-slider'),
        'name' => 'caption',
        'type' => 'section',
        'default' => 'on',
        'settings' => array(
            array(
                'label' => esc_html__('Colors', 'ml-slider'),
                'type' => 'fields',
                'fields' => array(
                    array(
                        'label' => esc_html__('Background', 'ml-slider'),
                        'name' => 'caption_background',
                        'type' => 'color',
                        'default' => 'rgba(0,0,0,0.8)',
                        'css' =>  '[ms_id] .flexslider .caption-wrap { background: linear-gradient(rgba(0,0,0,0),[ms_value]) }'
                    ),
                    array(
                        'label' => esc_html__('Text', 'ml-slider' ),
                        'name' => 'caption_text_color',
                        'type' => 'color',
                        'default' => '#ffffff',
                        'css' => '[ms_id] .flexslider .caption-wrap .caption { color: [ms_value] }'
                    )
                )
            ),
            array(
                'label' => esc_html__('Font Size', 'ml-slider'),
                'name' => 'caption_font_size',
                'type' => 'range',
                'default' => 0.9,
                'metric' => 'rem',
                'min' => 0.5,
                'max' => 3,
                'step' => 0.1,
                'css' => '[ms_id] .flexslider .caption-wrap .caption { font-size: [ms_value]rem }'
            ),
            array(
                'label' => esc_html__('Line Height', 'ml-slider'),
                'name' => 'caption_line_height',
                'type' => 'range',
                'default' => 1.2,
                'metric' => 'rem',
                'min' => 0.5,
                'max' => 3,
                'step' => 0.1,
                'css' => '[ms_id] .flexslider .caption-wrap .caption { line-height: [ms_value]rem }'
            ),
            array(
                'label' => esc_html__('Text Align', 'ml-slider'),
                'name' => 'caption_text_align',
                'type' => 'select',
                'default' => 'center',
                'options' => array(
                    array(
                        'label' => esc_html__('Left', 'ml-slider'),
                        'value' => 'left'
                    ),
                    array(
                        'label' => esc_html__('Right', 'ml-slider'),
                        'value' => 'right'
                    ),
                    array(
                        'label' => esc_html__('Center', 'ml-slider'),
                        'value' => 'center'
                    )
                ),
                'css' => '[ms_id] .flexslider .caption-wrap .caption { text-align: [ms_value] }'
            ),
        )
    )
);