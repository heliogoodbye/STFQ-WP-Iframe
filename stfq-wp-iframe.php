<?php
/*
Plugin Name: STFQ WP Iframe
Description: A plugin to embed a customizable iframe via shortcode.
Version: 1.1
Author: Strangefrequency LLC
Author URI: https://strangefrequency.com/
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/

function stfq_display_iframe($atts) {
    // Define allowed domains
    //$allowed_domains = array('example.com', 'anotherdomain.com');

    // Extract attributes with default values
    $atts = shortcode_atts(
        array(
            'url' => '',
            'width' => '600',
            'height' => '400',
            'sandbox' => '',
            'fullwidth' => 'false',
        ),
        $atts,
        'custom_iframe'
    );

    // Check if the URL is provided
    if (empty($atts['url'])) {
        return '<div class="error-message">Please provide a valid URL.</div>';
    }

    // Parse the URL to check the domain
    //$parsed_url = parse_url($atts['url']);
    //if (!in_array($parsed_url['host'], $allowed_domains)) {
    //    return 'URL not allowed.';
    //}

    // Determine the iframe style based on the fullwidth attribute
    if ($atts['fullwidth'] === 'true') {
        $iframe_style = 'width:100%; height:100%; position:absolute; top:0; left:0; border:0;';
        $container_style = 'position:relative; width:100%; padding-bottom:56.25%;';
    } else {
        $iframe_style = 'width:' . esc_attr($atts['width']) . 'px; height:' . esc_attr($atts['height']) . 'px; border:0;';
        $container_style = 'width:' . esc_attr($atts['width']) . 'px; height:' . esc_attr($atts['height']) . 'px;';
    }

    // Return the responsive iframe
    return '<div style="' . esc_attr($container_style) . '">
                <iframe src="' . esc_url($atts['url']) . '" 
                        style="' . esc_attr($iframe_style) . '" 
                        loading="lazy" 
                        sandbox="' . esc_attr($atts['sandbox']) . '">
                </iframe>
            </div>';
}

add_shortcode('custom_iframe', 'stfq_display_iframe');
