<?php

/*
 * Plugin Name: What weekday is today?
 * Description: Gibt mit Hilfe von Shortcodes den aktuellen oder den morgigen, übermorgigen etc. Wochentag aus.
 * Version: 1.0.0
 * Author: Peter R. Stuhlmann
 * Author URI: https://peter-stuhlmann-webentwicklung.de
 */


// Integrate javascript file

function weekday_enqueue_scripts() {
 	wp_enqueue_script( 'weekday-plugin-script', plugin_dir_url( __FILE__ ) . 'weekday-plugin-script.js', '20181224' );
}
add_action( 'wp_enqueue_scripts', 'weekday_enqueue_scripts' );


// Dieser Filter erlaubt das Einbinden der nachfolgenden Shortcodes im Widget-Bereich (Sidebars)

add_filter( 'widget_text', 'do_shortcode' );


// Gibt den aktuellen Wochentag aus

function weekday_today() {
	$a = shortcode_atts( array (
        'prst' => '<script>document.write(dayZero)</script>',
    ), $atts );
    return  $a['prst'] ;
} 
add_shortcode('today', 'weekday_today');


// Gibt den morgigen Wochentag aus

function weekday_tomorrow() {
	$a = shortcode_atts( array (
        'prst' => '<script>document.write(dayOne)</script>',
    ), $atts );
    return  $a['prst'] ;
} 
add_shortcode('tomorrow', 'weekday_tomorrow');


// Gibt den übermorgigen Wochentag aus

function weekday_in_two_days() {
	$a = shortcode_atts( array (
        'prst' => '<script>document.write(dayTwo)</script>',
    ), $atts );
    return  $a['prst'] ;
} 
add_shortcode('in-2-days', 'weekday_in_two_days');


// Gibt aus, welcher Wochentag in drei Tagen sein wird

function weekday_in_three_days() {
	$a = shortcode_atts( array (
        'prst' => '<script>document.write(dayThree)</script>',
    ), $atts );
    return  $a['prst'] ;
} 
add_shortcode('in-3-days', 'weekday_in_three_days');


// Gibt aus, welcher Wochentag in vier Tagen sein wird

function weekday_in_four_days() {
	$a = shortcode_atts( array (
        'prst' => '<script>document.write(dayFour)</script>',
    ), $atts );
    return  $a['prst'] ;
} 
add_shortcode('in-4-days', 'weekday_in_four_days');


// Gibt aus, welcher Wochentag in fünf Tagen sein wird

function weekday_in_five_days() {
	$a = shortcode_atts( array (
        'prst' => '<script>document.write(dayFive)</script>',
    ), $atts );
    return  $a['prst'] ;
} 
add_shortcode('in-5-days', 'weekday_in_five_days');


// Gibt aus, welcher Wochentag in sechs Tagen sein wird

function weekday_in_six_days() {
	$a = shortcode_atts( array (
        'prst' => '<script>document.write(daySix)</script>',
    ), $atts );
    return  $a['prst'] ;
} 
add_shortcode('in-6-days', 'weekday_in_six_days');


// Action Links

function weekday_action_links( $links ) {
    $links[] = '<a href="https://www.paypal.me/prstuhlmann/2" target="_blank">Donate</a>';
    return $links;
}
add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'weekday_action_links' );