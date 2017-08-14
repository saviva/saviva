<?php
/**
 * @var $style
 * @var $type
 * @var $animation
 * @var $animation_speed
 * @var $elements
 */


$shortcode = '[tab_slider style="' . $style . '" type="' . ($type ? $type : 'tab') . '" animation="' . $animation . '" animation_speed="' . $animation_speed . '" ]';

$shortcode .= '<ul>';

foreach ($elements as $element):

    $shortcode .= '<li id="' . $element['id'] . '" data-name="' . $element['name'] . '">';

    $shortcode .= $element['text'];

    $shortcode .= '</li>';

endforeach;

$shortcode .= '</ul>';

$shortcode .= '[/tab_slider]';

echo do_shortcode($shortcode);
