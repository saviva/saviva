<?php


/* Stats Shortcode -

Wraps an animated percentage stats list.

Usage:

[stats]

[stats_bar title="Web Design 87%" value="87"]

[stats_bar title="Logo Design 60%" value="60"]

[stats_bar title="Brand Marketing 70%" value="70"]

[/stats_bar][stats_bar title="SEO Services 67%" value="67"]

[stats_bar title="Print Collateral 40%" value="40"]

[/stats]


Parameters -

None


*/



function mo_stats($atts, $content) {
    extract(shortcode_atts(array(),
        $atts));
    return '<div class="stats-bars">' . do_shortcode($content) . '</div>';
}

add_shortcode('stats', 'mo_stats');

/* Stats Bar Shortcode -

Displays an animated percentage stats bar. The bar animates to indicate the percentage.

Usage:

[stats]

[stats_bar title="Web Design 87%" value="87"]

[stats_bar title="Logo Design 60%" value="60"]

[stats_bar title="Brand Marketing 70%" value="70"]

[/stats_bar][stats_bar title="SEO Services 67%" value="67"]

[stats_bar title="Print Collateral 40%" value="40"]

[/stats]


Parameters -

title - The title indicating the stats title.
value - The percentage value for the percentage stats to be displayed.

*/
function mo_stats_bar($atts, $content) {
    extract(shortcode_atts(array(
        'title' => 'Web Development 85%',
        'value' => '83'
    ), $atts));
    return '<div class="stats-bar"><div class="stats-title">' . $title . '</div><div class="stats-bar-content" data-perc="' . $value . '"></div></div>';
}

add_shortcode('stats_bar', 'mo_stats_bar');

/* Animating numbers shortcode -

A wrapper element for the list of numbers, each of which indicate a statistic. The element animates from a start value to display the end number when the user scrolls to the stats section.

Usage:

[animate-numbers]

[animate-number icon="icon-lab4" title="Pixels Pushed" start_value="87"]26492[/animate-number]

[animate-number icon="icon-java" title="Coffees Consumed" start_value="60"]613[/animate-number]

[animate-number icon="icon-heart11" title="Wide-Grip Pushups" start_value="70"]1277[/animate-number]

[animate-number icon="icon-clock10" title="Hours Worked" start_value="67"]458[/animate-number]

[/animate-numbers]


Parameters -

None

*/

function mo_animate_numbers($atts, $content) {
    extract(shortcode_atts(array(),
        $atts));
    return '<div class="animate-numbers">' . do_shortcode($content) . '</div>';
}

add_shortcode('animate-numbers', 'mo_animate_numbers');

/* Animating numbers shortcode -

Displays a number to indicate a statistic. The element animates from a start value to display the end number when the user scrolls to the stats section.

Usage:

[animate-numbers]

[animate-number icon="icon-lab4" title="Pixels Pushed" start_value="87"]26492[/animate-number]

[animate-number icon="icon-java" title="Coffees Consumed" start_value="60"]613[/animate-number]

[animate-number icon="icon-heart11" title="Wide-Grip Pushups" start_value="70"]1277[/animate-number]

[animate-number icon="icon-clock10" title="Hours Worked" start_value="67"]458[/animate-number]

[/animate-numbers]


Parameters -

title - The title indicating the stats title.
start_value - The starting value for the animation which displays a counter that animates to the end value specified as the content of the [animate-number] shortcode.
icon - The font icon to be displayed for the statistic being displayed, chosen from the list of icons listed at http://portfoliotheme.org/support/faqs/how-to-use-1500-icons-bundled-with-the-agile-theme/

*/

function mo_animate_number($atts, $content) {
    extract(shortcode_atts(array(
        'title' => 'Hours Burnt',
        'start_value' => '0',
        'icon' => false
    ), $atts));

    $icon_font = (!empty ($icon)) ? '<i class="' . $icon . '"></i>' : '';
    return '<div class="stats"><div class="number" data-stop="' . $content . '">' . $start_value . '</div><div class="stats-title">' . $icon_font . $title . '</div></div>';
}

add_shortcode('animate-number', 'mo_animate_number');

/* Piechart Shortcode -

Displays a piechart for a percentage statistic with a title in the middle of the piechart displayed.
While the piechart animates to indicate the percentage specified, a textual representation of the statistic is also displayed in the center of the piechart.

Usage:

[piechart percent=70 title="Repeat Customers"]

[piechart percent=92 title="Referral Work"]

Parameters -

title - The title indicating the stats title.
value - The percentage value for the percentage stats.


*/


function mo_piechart($atts, $content) {
    extract(shortcode_atts(array(
        'percent' => 85,
        'title' => ''
    ), $atts));

    $output = '<div class="piechart">';
    $output .= '<div class="percentage" data-percent="' . $percent . '"><span>' . $percent . '<sup>%</sup></span></div>';
    $output .= '<div class="label">' . $title . '</div>';
    $output .= '</div>';

    return $output;
}

add_shortcode('piechart', 'mo_piechart');

