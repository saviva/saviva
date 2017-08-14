<?php
/**
 * @var $style
 * @var $type
 * @var $easing
 * @var $direction_nav
 * @var $slideshow_speed
 * @var $animation_speed
 * @var $slides
 * @var $pointer_down_url
 */

$messages = '';

$ticker_slides .= '<ul>';

foreach ($slides as $slide):

    if (!empty($slide['image'])) {

        $ticker_slides .= '<li>';

        $ticker_slides .= siteorigin_widgets_get_attachment_image( $slide['image'], 'full');;

        $ticker_slides .= '</li>';

        $messages .= $slide['title'] . ',';
    }

endforeach;

$ticker_slides .= '</ul>';

$shortcode = '[ticker_slider style="' . $style . '" type="' . ($type ? $type : 'flex') . '" messages="' . $messages . '" animation="fade" easing="' . $easing . '" direction_nav="' . ($direction_nav ? 'true' : 'false') . '" slideshow_speed="' . $slideshow_speed . '" animation_speed="' . $animation_speed . '" pointer_down_url="' . $pointer_down_url . '"]';

$shortcode .= $ticker_slides;

$shortcode .= '[/ticker_slider]';

echo do_shortcode($shortcode);
