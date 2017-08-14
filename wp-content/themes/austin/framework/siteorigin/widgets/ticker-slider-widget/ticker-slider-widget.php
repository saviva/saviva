<?php

/*
Widget Name: Ticker Slider
Description: Create ticker with a slider running in the background.
Author: LiveMesh
Author URI: http://portfoliotheme.org
*/


class MO_Ticker_Slider_Widget extends SiteOrigin_Widget {
    function __construct() {
        parent::__construct(
            "mo-ticker-slider",
            __("Ticker Slider", "mo_theme"),
            array(
                "description" => __("Create a ticker slider out of any HTML content", "mo_theme"),
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
                    "default" => "flex",
                ),

                "pointer_down_url" => array(
                    "type" => "text",
                    "description" => __("The internal link for the section to user navigates to when the bottom pointer is clicked.", "mo_theme"),
                    "label" => __("Pointer down URL", "mo_theme"),
                ),

                'slides' => array(
                    'type' => 'repeater',
                    'label' => __('Ticker Slides', 'mo_theme'),
                    'item_name' => __('Ticker Slide', 'mo_theme'),
                    'item_label' => array(
                        'selector' => "[id*='slides-name']",
                        'update_event' => 'change',
                        'value_method' => 'val'
                    ),
                    'fields' => array(
                        'title' => array(
                            'type' => 'text',
                            'label' => __('Ticker Title', 'mo_theme'),
                            'description' => __('The message to be displayed as part of the ticker. The span element can be utilized to highlight certain parts of the message.', 'mo_theme'),
                        ),
                        
                        "image" => array(
                            'type' => 'media',
                            'library' => 'image',
                            "description" => __("The image to be displayed as the background for the ticker slide.", "mo_theme"),
                            "label" => __("Slide Image", "mo_theme"),
                        ),
                    )
                ),


                'settings' => array(
                    'type' => 'section',
                    'label' => __('Slider Settings', 'livemesh-so-widgets'),
                    'fields' => array(
                        "easing" => array(
                            "type" => "text",
                            "description" => __("Determines the easing method used in jQuery transitions.", "mo_theme"),
                            "label" => __("Easing", "mo_theme"),
                            "default" => "swing",
                        ),
                        "slideshow_speed" => array(
                            "type" => "number",
                            "description" => __("Set the speed of the slideshow cycling, in milliseconds", "mo_theme"),
                            "label" => __("Slideshow speed", "mo_theme"),
                            "default" => 5000,
                        ),
                        "animation_speed" => array(
                            "type" => "number",
                            "description" => __("Set the speed of animations, in milliseconds.", "mo_theme"),
                            "label" => __("Animation speed", "mo_theme"),
                            "default" => 600,
                        ),
                        "direction_nav" => array(
                            "type" => "checkbox",
                            "description" => __("Create navigation for previous/next navigation?", "mo_theme"),
                            "label" => __("Direction navigation?", "mo_theme"),
                            "default" => false,
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
            "pointer_down_url" => $instance["pointer_down_url"],
            
            "easing" => $instance["settings"]["easing"],
            "slideshow_speed" => $instance["settings"]["slideshow_speed"],
            "animation_speed" => $instance["settings"]["animation_speed"],
            "direction_nav" => $instance["settings"]["direction_nav"],

            'slides' => !empty($instance['slides']) ? $instance['slides'] : array(),
        );
    }

}

siteorigin_widget_register("mo-ticker-slider", __FILE__, "MO_Ticker_Slider_Widget");



