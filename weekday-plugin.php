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