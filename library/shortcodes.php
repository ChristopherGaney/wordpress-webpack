<?php

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

// Shortcode Demo with Nested Capability
function html5_shortcode_demo($atts, $content = null) {
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}
// Shortcode Demo with simple <h2> tag
 // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
function html5_shortcode_demo_2($atts, $content = null) {
    return '<h2>' . $content . '</h2>';
}
add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.
?>