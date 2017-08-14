<?php

/*
  Widget Name: YouTube Video Showcase
  Description: Displays an YouTube video with controls for play pause mute. The video is not auto-played by default and waits for the user input via the play button.
  Author: LiveMesh
  Author URI: http://portfoliotheme.org
 */

class MO_YTP_Video_Showcase_Widget extends SiteOrigin_Widget {

    function __construct() {
        parent::__construct(
            "mo-ytp-video-showcase", __("YouTube Video Showcase", "mo_theme"), array(
            "description" => __("Displays an YouTube video with controls for play/pause/mute. The video is not auto-played by default and waits for the user input via the play button.", "mo_theme"),
            "panels_icon" => "dashicons dashicons-minus",
        ), array(), array(
                "id" => array(
                    "type" => "text",
                    "description" => __("The id of the DIV element created to wrap the YouTube video", "mo_theme"),
                    "label" => __("Id", "mo_theme"),
                    "default" => __("video-intro", "mo_theme"),
                ),
                "class" => array(
                    "type" => "text",
                    "description" => __("The CSS class of the DIV element created to wrap the YouTube video", "mo_theme"),
                    "label" => __("Class", "mo_theme"),
                    "default" => "",
                ),
                'video_url' => array(
                    'type' => 'text',
                    'description' => __("The YouTube URL of the video.", "mo_theme"),
                    'label' => __("Video url", "mo_theme"),
                    "default" => "http://www.youtube.com/watch?v=PzjwAAskt4o",
                ),
                "placeholder_url" => array(
                    'type' => 'media',
                    'library' => 'image',
                    'fallback' => true,
                    "description" => __("The placeholder image to be displayed instead of YouTube video in mobile devices.", "mo_theme"),
                    "label" => __("Placeholder Image", "mo_theme"),
                ),
                "title" => array(
                    "type" => "text",
                    "description" => __("The title text displayed on top of the video when the video is not playing.", "mo_theme"),
                    "label" => __("Title.", "mo_theme"),
                    "default" => "",
                ),
                "subtitle" => array(
                    "type" => "text",
                    "label" => __("Video Subtitle", "mo_theme"),
                    "description" => __("The subtitle displayed on top of the video when the video is not playing.", "mo_theme"),
                    "default" => "",
                ),


                'overlay_settings' => array(
                    'type' => 'section',
                    'label' => __('Overlay Settings', 'livemesh-so-widgets'),
                    'fields' => array(
                        "overlay_color" => array(
                            "type" => "color",
                            "description" => __("The color of the overlay to be applied on the video.", "mo_theme"),
                            "label" => __("Overlay color", "mo_theme"),
                        ),
                        "overlay_opacity" => array(
                            "type" => "slider",
                            "description" => __("The opacity of the overlay color applied on the video.", "mo_theme"),
                            "label" => __("Overlay opacity", "mo_theme"),
                            'min' => 0,
                            'max' => 100,
                            'integer' => true,
                            'default' => 40
                        ),
                        "overlay_pattern" => array(
                            "type" => "media",
                            "library" => "image",
                            'fallback' => true,
                            "description" => __("The image which can act as a pattern displayed on top of the video.", "mo_theme"),
                            "label" => __("Overlay pattern", "mo_theme"),
                        ),
                    )
                ),

                'settings' => array(
                    'type' => 'section',
                    'label' => __('Settings', 'livemesh-so-widgets'),
                    'fields' => array(
                        "containment" => array(
                            "type" => "select",
                            "description" => __("The CSS selector of the DOM element where you want the video background; if not specified it takes the “body”; if set to “self” the player will be instanced on that element.", "mo_theme"),
                            "label" => __("Containment", "mo_theme"),
                            "default" => __("self", "mo_theme"),
                            "options" => array(
                                "self" => __("self", "mo_theme"),
                                "body" => __("body", "mo_theme"),
                            )
                        ),
                        "loop" => array(
                            "type" => "checkbox",
                            "description" => __("Specify if you need to loop the video", "mo_theme"),
                            "label" => __("Loop", "mo_theme"),
                            "default" => true,
                        ),
                        "mute" => array(
                            "type" => "checkbox",
                            "description" => __("A boolean value indicating if the video needs to be started muted. The user can unmute/mute during video play if required with the help of mute/unmute button", "mo_theme"),
                            "label" => __("Mute", "mo_theme"),
                            "default" => false,
                        ),
                        "quality" => array(
                            "type" => "select",
                            "label" => __("Video Quality.", "mo_theme"),
                            "options" => array(
                                "default" => __("Default", "mo_theme"),
                                "medium" => __("Medium", "mo_theme"),
                                "large" => __("Large", "mo_theme"),
                                "hd720" => __("hd720", "mo_theme"),
                                "hd1080" => __("hd1080", "mo_theme"),
                                "highres" => __("highres", "mo_theme"),
                            ),
                            "default" => "default"
                        ),
                        "opacity" => array(
                            "type" => "number",
                            "description" => __("Specify a value between 0 and 1. Example: 0.4", "mo_theme"),
                            "label" => __("Video opacity", "mo_theme"),
                            "default" => 1,
                        ),
                        "vol" => array(
                            'type' => 'slider',
                            "description" => __("Set the volume level of the video.", "mo_theme"),
                            "label" => __("Volume", "mo_theme"),
                            'min' => 1,
                            'max' => 100,
                            'integer' => true,
                            'default' => 50,
                        ),
                        "ratio" => array(
                            "type" => "select",
                            "label" => __("Aspect Ratio", "mo_theme"),
                            "default" => "16/9",
                            "options" => array(
                                "4/3" => __("4/3", "mo_theme"),
                                "16/9" => __("16/9", "mo_theme"),
                            )
                        ),
                        "autoplay" => array(
                            "type" => "checkbox",
                            "description" => __("Specify if the video should autoplay once the video once ready.", "mo_theme"),
                            "label" => __("Autoplay", "mo_theme"),
                            "default" => false,
                        ),
                        "optimize_display" => array(
                            "type" => "checkbox",
                            "description" => __("Will fit the video size into the window size optimizing the view.", "mo_theme"),
                            "label" => __("Optimize Display", "mo_theme"),
                            "default" => true,
                        ),
                        "start_at" => array(
                            "type" => "number",
                            "description" => __("Set the seconds the video should start at", "mo_theme"),
                            "label" => __("Start At ", "mo_theme"),
                            "default" => 0,
                        ),
                        "stop_at" => array(
                            "type" => "text",
                            "description" => __("Set the seconds the video should stop at. If 0, the value is ignored.", "mo_theme"),
                            "label" => __("Stop At", "mo_theme"),
                            "default" => 0,
                        ),
                        "show_controls" => array(
                            "type" => "checkbox",
                            "description" => __("Show or hide the controls bar at the bottom of the page.", "mo_theme"),
                            "label" => __("Show Controls", "mo_theme"),
                            "default" => false,
                        ),

                    )
                ),


            )
        );
    }

    function get_template_variables($instance, $args) {
        return array(
            "id" => $instance["id"],
            "class" => $instance["class"],
            "video_url" => $instance["video_url"],
            "placeholder_url" => $instance["placeholder_url"],
            "placeholder_url_fallback" => $instance["placeholder_url_fallback"],
            "title" => $instance["title"],
            "subtitle" => $instance["subtitle"],

            "overlay_color" => (isset($instance["overlay_settings"]["overlay_color"]) ? $instance["overlay_settings"]["overlay_color"] : ''),
            "overlay_opacity" => (isset($instance["overlay_settings"]["overlay_opacity"]) ? $instance["overlay_settings"]["overlay_opacity"] : 40),
            "overlay_pattern" => (isset($instance["overlay_settings"]["overlay_pattern"]) ? $instance["overlay_settings"]["overlay_pattern"] : ''),
            "overlay_pattern_fallback" => (isset($instance["overlay_settings"]["overlay_pattern_fallback"]) ? $instance["overlay_settings"]["overlay_pattern_fallback"] : ''),

            'settings' => $instance['settings']
        );
    }

}

siteorigin_widget_register("mo-ytp-video-showcase", __FILE__, "MO_YTP_Video_Showcase_Widget");