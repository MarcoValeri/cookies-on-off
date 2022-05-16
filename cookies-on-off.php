<?php

/**
 * Plugin Name:     Cookie On Off
 * Description:     Switch on and off cookies following GDPR and other law rules
 * Version:         1.0.0
 * Require at leat  5.9
 * Require PHP:     8.0
 * Author:          Marco Valeri
 * Author URI       https://devmarco.com/
 * License:         GPL v2 or later
 * License URI:     https://www.gnu.org/licenses/gpl-2.0.html
 */

 // Add js file
function cookie_banner_js() {
    wp_enqueue_script('cookie_banner', plugins_url('js/cookie_banner.js', __FILE__));
}
add_action('wp_enqueue_scripts', 'cookie_banner_js');

// Add function that print out markup into the footer
function cookie_banner() {
    $banner = '<div>';
    $banner .= '<amp-script script="test">';
    $banner .= 'This is the cookie banner for deskotp and mobile</div>';
    $banner .= '</amp-script>';
    $banner .= '<script id="test" type="text/plain" target="amp-script">';
    $banner .= 'console.log(`Hello JS amp`);';
    $banner .= '</script>';
    echo $banner;
}
add_action('wp_footer', 'cookie_banner');
