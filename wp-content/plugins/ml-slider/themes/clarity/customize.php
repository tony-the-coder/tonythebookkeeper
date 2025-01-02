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
                'label' => esc_html__('Background', 'ml-slider'),
                'type' => 'fields',
                'fields' => array(
                    array(
                        'label' => esc_html__('Default', 'ml-slider'),
                        'name' => 'arrows_color',
                        'type' => 'color',
                        'default' => '#fff',
                        'css' => '[ms_id] .flexslider .flex-direction-nav li { background-color: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Hover', 'ml-slider'),
                        'name' => 'arrows_color_hover',
                        'type' => 'color',
                        'default' => '#07383C',
                        'css' => '[ms_id] .flexslider .flex-direction-nav li:hover { background-color: [ms_value] }'
                    )
                )
            ),
            array(
                'label' => esc_html__('Icon Colors', 'ml-slider'),
                'type' => 'fields',
                'fields' => array(
                    array(
                        'label' => esc_html__('Default', 'ml-slider'),
                        'name' => 'arrows_icon',
                        'type' => 'color',
                        'default' => '#50585C',
                        'css' => '[ms_id] .flexslider .flex-direction-nav li a.flex-prev, [ms_id] .flexslider .flex-direction-nav li a.flex-next { background-color: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Hover', 'ml-slider'),
                        'name' => 'arrows_icon_hover',
                        'type' => 'color',
                        'default' => '#fff',
                        'css' => '[ms_id] .flexslider .flex-direction-nav li a.flex-prev:hover, [ms_id] .flexslider .flex-direction-nav li a.flex-next:hover { background-color: [ms_value] }'
                    )
                )
            ),
            array(
                'label' => esc_html__('Border Color', 'ml-slider'),
                'type' => 'fields',
                'fields' => array(
                    array(
                        'label' => esc_html__('Default', 'ml-slider'),
                        'name' => 'arrows_border',
                        'type' => 'color',
                        'default' => '#888888',
                        'css' => '[ms_id] .flexslider .flex-direction-nav li { border-color: [ms_value] }'
                    )
                )
            ),
            array(
                'label' => esc_html__('Distance from Edge', 'ml-slider'),
                'name' => 'arrows_distance_edge',
                'type' => 'range',
                'default' => -60,
                'metric' => 'px',
                'min' => -100,
                'max' => 50,
                'css' => array(
                    '[ms_id] .flexslider .flex-direction-nav li.flex-nav-prev { left: [ms_value]px }',
                    '[ms_id] .flexslider .flex-direction-nav li.flex-nav-next { right: [ms_value]px }'
                )
            ),
            /*array(
                'label' => esc_html__('Vertical Position', 'ml-slider'),
                'info' => esc_html__('Taking top as reference point. Set 50 to center.', 'ml-slider'),
                'name' => 'arrows_vertical_position',
                'type' => 'range',
                'default' => 50,
                'metric' => '%',
                'min' => 0,
                'max' => 100,
                'css' => '[ms_id] .flexslider .flex-direction-nav li { top: [ms_value]% }'
            ),
            array(
                'label' => esc_html__('Width', 'ml-slider'),
                'name' => 'arrows_width',
                'type' => 'range',
                'default' => 50,
                'metric' => 'px',
                'min' => 20,
                'max' => 60,
                'css' => '[ms_id] .flexslider .flex-direction-nav li, [ms_id] .flexslider .flex-direction-nav li a { width: [ms_value]px }'
            ),
            array(
                'label' => esc_html__('Height', 'ml-slider'),
                'name' => 'arrows_height',
                'type' => 'range',
                'default' => 50,
                'metric' => 'px',
                'min' => 20,
                'max' => 60,
                'css' => '[ms_id] .flexslider .flex-direction-nav li, [ms_id] .flexslider .flex-direction-nav li a { height: [ms_value]px }'
            ),
            array(
                'label' => esc_html__('Icon Size', 'ml-slider'),
                'name' => 'arrows_icon_size',
                'type' => 'range',
                'default' => 24,
                'metric' => 'px',
                'min' => 10,
                'max' => 40,
                'css' => '[ms_id] .flexslider .flex-direction-nav li a.flex-prev, [ms_id] .flexslider .flex-direction-nav li a.flex-next { mask-size: [ms_value]px auto }'
            ),*/
            array(
                'label' => esc_html__('Border Radius', 'ml-slider'),
                'name' => 'arrows_border_radius',
                'type' => 'range',
                'default' => 50,
                'metric' => '%',
                'min' => 0,
                'max' => 50,
                'css' => '[ms_id] .flexslider .flex-direction-nav li { border-radius: [ms_value]% }'
            ),
            array(
                'label' => esc_html__('Border Width', 'ml-slider'),
                'name' => 'arrows_border_width',
                'type' => 'range',
                'default' => 1,
                'metric' => 'px',
                'min' => 1,
                'max' => 6,
                'css' => '[ms_id] .flexslider .flex-direction-nav li { border-width: [ms_value]px }'
            ),
            array(
                'label' => esc_html__('Opacity (default)', 'ml-slider'),
                'name' => 'arrows_opacity',
                'type' => 'range',
                'default' => 1,
                'min' => 0.1,
                'max' => 1,
                'step' => 0.1,
                'css' => '[ms_id] .flexslider .flex-direction-nav li:not(:hover) { opacity: [ms_value] }'
            ),
            array(
                'label' => esc_html__('Opacity (hover)', 'ml-slider'),
                'name' => 'arrows_opacity_hover',
                'type' => 'range',
                'default' => 1,
                'min' => 0.1,
                'max' => 1,
                'step' => 0.1,
                'css' => '[ms_id] .flexslider .flex-direction-nav li:hover { opacity: [ms_value] }'
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
                'label' => esc_html__('Colors', 'ml-slider'),
                'type' => 'fields',
                'fields' => array(
                    array(
                        'label' => esc_html__('Default', 'ml-slider'),
                        'name' => 'navigation_color',
                        'type' => 'color',
                        'default' => '#07383C',
                        'css' => '[ms_id] .flexslider .flex-control-nav li a:not(.flex-active) { background: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Hover', 'ml-slider'),
                        'name' => 'navigation_color_hover',
                        'type' => 'color',
                        'default' => '#07383C',
                        'css' => '[ms_id] .flexslider .flex-control-nav li a:hover { background: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Active', 'ml-slider'),
                        'name' => 'navigation_color_active',
                        'type' => 'color',
                        'default' => '#07383C',
                        'css' => '[ms_id] .flexslider .flex-control-nav li a.flex-active { background: [ms_value] }'
                    )
                )
            ),
            /*array(
                'label' => esc_html__('Vertical Position', 'ml-slider'),
                'info' => esc_html__('Taking bottom as reference point.', 'ml-slider'),
                'name' => 'navigation_vertical_position',
                'type' => 'range',
                'default' => -35,
                'metric' => 'px',
                'min' => -100,
                'max' => 300,
                'css' => '[ms_id] .flexslider .flex-control-nav { bottom: [ms_value]px }'
            ),
            array(
                'label' => esc_html__('Alignment', 'ml-slider'),
                'name' => 'navigation_align',
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
                'css' => '[ms_id] .flexslider .flex-control-nav { text-align: [ms_value] }'
            ),*/
            array(
                'label' => esc_html__('Dots Border Radius', 'ml-slider'),
                'name' => 'navigation_border_radius',
                'type' => 'range',
                'default' => 50,
                'metric' => '%',
                'min' => 0,
                'max' => 50,
                'css' => '[ms_id] .flexslider .flex-control-nav li a { border-radius: [ms_value]% }'
            ),
            array(
                'label' => esc_html__('Dots Width', 'ml-slider'),
                'name' => 'navigation_width',
                'type' => 'range',
                'default' => 20,
                'metric' => 'px',
                'min' => 5,
                'max' => 30,
                'css' => '[ms_id] .flexslider .flex-control-paging li a { width: [ms_value]px }'
            ),
            array(
                'label' => esc_html__('Dots Height', 'ml-slider'),
                'name' => 'navigation_height',
                'type' => 'range',
                'default' => 20,
                'metric' => 'px',
                'min' => 5,
                'max' => 30,
                'css' => '[ms_id] .flexslider .flex-control-paging li a { height: [ms_value]px }'
            ),
            array(
                'label' => esc_html__('Distance Between Dots', 'ml-slider'),
                'name' => 'navigation_between',
                'type' => 'range',
                'default' => 5,
                'metric' => 'px',
                'min' => 0,
                'max' => 20,
                'css' => '[ms_id] .flexslider .flex-control-nav li a { margin: 0 [ms_value]px }'
            ),
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
                        'default' => '#fff',
                        'css' => '[ms_id] .flexslider .caption-wrap { background: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Text', 'ml-slider'),
                        'name' => 'caption_text_color',
                        'type' => 'color',
                        'default' => '#000',
                        'css' => '[ms_id] .flexslider .caption-wrap { color: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Links', 'ml-slider'),
                        'name' => 'caption_links_color',
                        'type' => 'color',
                        'default' => '#F9F9F9',
                        'css' => '[ms_id] .flexslider .caption-wrap a { color: [ms_value] }'
                    )
                )
            ),
            /*array(
                'label' => esc_html__('Caption Order', 'ml-slider'),
                'info' => esc_html__('Only apply to image slides', 'ml-slider'),
                'name' => 'caption_order',
                'type' => 'select',
                'default' => 'caption-bottom',
                'options' => array(
                    array(
                        'label' => esc_html__('Caption Below Image', 'ml-slider'),
                        'value' => 'caption-bottom'
                    ),
                    array(
                        'label' => esc_html__('Caption Above Image', 'ml-slider'),
                        'value' => 'caption-top'
                    ),
                ),
                'css' => 'css_rules',
                'css_rules' => array(
                    'caption-bottom' => '[ms_id] .ms-image > .metaslider_image_link, [ms_id] .ms-image > img { order: 0 }',
                    'caption-top' => '[ms_id] .ms-image > .metaslider_image_link, [ms_id] .ms-image > img { order: 1 }'
                )
            ),*/
            array(
                'label' => esc_html__('Font Size', 'ml-slider'),
                'name' => 'caption_font_size',
                'type' => 'range',
                'default' => 1,
                'metric' => 'em',
                'min' => 0.5,
                'max' => 3,
                'step' => 0.1,
                'css' => '[ms_id] .flexslider .caption-wrap .caption { font-size: [ms_value]em }'
            ),
            array(
                'label' => esc_html__('Line Height', 'ml-slider'),
                'name' => 'caption_line_height',
                'type' => 'range',
                'default' => 1.4,
                'metric' => 'em',
                'min' => 0.5,
                'max' => 3,
                'step' => 0.1,
                'css' => '[ms_id] .flexslider .caption-wrap .caption { line-height: [ms_value]em }'
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
