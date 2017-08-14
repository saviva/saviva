<?php

/*
Widget Name: Tab Slider
Description: Create a smooth tab slider out of any HTML content.
Author: LiveMesh
Author URI: http://portfoliotheme.org
*/


class MO_Tab_Slider_Widget extends SiteOrigin_Widget {
    function __construct() {
        parent::__construct(
            "mo-tab-slider",
            __("Tab Slider", "mo_theme"),
            array(
                "description" => __("Create a smooth tab slider out of any HTML content", "mo_theme"),
                "panels_icon" => "dashicons dashicons-minus",
            ),
            array(),
            array(
                "widget_title" => array(
                    "type" => "text",
                    "label" => __("Title", "mo_theme"),
                ),
                "style" => array(
                    "type" => "text",
                    "description" => __(" The inline CSS applied to the slider container DIV element.(optional)", "mo_theme"),
                    "label" => __("Style", "mo_theme"),
                    "default" => "",
                ),
                "type" => array(
                    "type" => "text",
                    "description" => __("Constructs and sets a unique CSS class for the slider. (optional).", "mo_theme"),
                    "label" => __("Type", "mo_theme"),
                    "default" => "tab",
                ),

                'elements' => array(
                    'type' => 'repeater',
                    'label' => __('HTML Elements', 'mo_theme'),
                    'item_name' => __('HTML Element', 'mo_theme'),
                    'item_label' => array(
                        'selector' => "[id*='elements-name']",
                        'update_event' => 'change',
                        'value_method' => 'val'
                    ),
                    'fields' => array(
                        'id' => array(
                            'type' => 'text',
                            'label' => __('ID', 'mo_theme'),
                            'description' => __('The ID for the Tab (required)', 'mo_theme'),
                        ),
                        'name' => array(
                            'type' => 'text',
                            'label' => __('Title', 'mo_theme'),
                            'description' => __('The title for the Tab (required)', 'mo_theme'),
                        ),

                        'text' => array(
                            'type' => 'tinymce',
                            'label' => __('HTML element', 'mo_theme'),
                            'description' => __('The HTML content for the slider item.', 'mo_theme'),
                        ),
                    )
                ),


                'settings' => array(
                    'type' => 'section',
                    'label' => __('Slider Settings', 'livemesh-so-widgets'),
                    'fields' => array(

                        "animation" => array(
                            "type" => "select",
                            "description" => __("Select your animation type.", "mo_theme"),
                            "label" => __("Animation", "mo_theme"),
                            "options" => array(
                                "slide" => __("Slide", "mo_theme"),
                                "fade" => __("Fade", "mo_theme"),
                            ),
                            "default" => "slide",
                        ),
                        "animation_speed" => array(
                            "type" => "number",
                            "description" => __("Set the speed of animations, in milliseconds.", "mo_theme"),
                            "label" => __("Animation speed", "mo_theme"),
                            "default" => 600,
                        ),
                    )
                )
            )
        );
    }

    function get_template_variables($instance, $args) {
        return array(
            "style" => $instance["style"],
            "type" => $instance["type"],

            "animation" => $instance["settings"]["animation"],
            "animation_speed" => $instance["settings"]["animation_speed"],


            'elements' => !empty($instance['elements']) ? $instance['elements'] : array(),
        );
    }

}

siteorigin_widget_register("mo-tab-slider", __FILE__, "MO_Tab_Slider_Widget");



