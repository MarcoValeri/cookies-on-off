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
function cookie_banner() {
    echo 'This is the cookie banner';
}
add_action('wp_footer', 'cookie_banner');
