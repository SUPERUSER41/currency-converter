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
    wp_enqueue_script('react', 'https://unpkg.com/react@16/umd/react.production.min.js', '', null, false);
    wp_enqueue_script('react-dom', 'https://unpkg.com/react-dom@16/umd/react-dom.production.min.js', '', null, false);
    wp_enqueue_script('babel', 'https://npmcdn.com/babel-core@5.8.38/browser.min.js', '', null, false);
    wp_enqueue_script('wp-currency-converter', plugin_dir_url(__FILE__) . 'build/static/js/main.1d65b171.chunk.js');
    // wp_enqueue_script('wp-currency-converter', plugin_dir_url(__FILE__) . 'build/static/js/2.3f85877c.chunk.js');
    // wp_enqueue_script('wp-currency-converter', plugin_dir_url(__FILE__) . 'build/static/js/runtime~main.a8a9905a.js');
    wp_enqueue_style('wp-currency-converter', plugin_dir_url(__FILE__) . 'build/static/css/main.607ac0f5.chunk.css');
}
// Add "babel" type to converter script
add_filter('script_loader_tag', 'wp_currency_converter_add_babel_type', 10, 3);
function wp_currency_converter_add_babel_type($tag, $handle, $src)
{
    if ($handle !== 'wp-currency-converter') {
        return $tag;
    }

    return '<script src="' . $src . '" type="text/babel"></script>' . "\n";
}
