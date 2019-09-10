<?php
/*
Plugin Name: Currency Converter
Description: A simple currency converter built for FXTrader.com
Author: Daneil Greaves
Author URI: https://github.com/SUPERUSER41
*/

// Shortcode to output needed markup
add_shortcode('wp_currency_converter', 'wp_currency_converter_show_converter');
function wp_currency_converter_show_converter()
{
    return '<div id="converter"></div>';
}

add_action('wp_enqueue_scripts', 'wp_currency_converter_enqueue_scripts');
function wp_currency_converter_enqueue_scripts()
{
    wp_enqueue_script('wp-currency-converter', plugin_dir_url(__FILE__) . 'build/static/js/main.1d65b171.chunk.js');
    wp_enqueue_style('wp-currency-converter', plugin_dir_url(__FILE__) . 'build/static/css/main.607ac0f5.chunk.css');
}
