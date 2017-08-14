<?php
/**
 * @var $title
 * @var $stats_bars
 */

$shortcode = '[stats]';

foreach ($stats_bars as $stats_bar):

    $shortcode .= '[stats_bar title="' . $stats_bar['title'] . '" value="' . $stats_bar['value'] . '" ]';

endforeach;

$shortcode .= '[/stats]';

echo do_shortcode($shortcode);