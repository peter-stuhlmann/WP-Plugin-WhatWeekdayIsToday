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
add_shortcode('in-1-day', 'weekday_tomorrow');



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


// Admin Menu

function weekday_admin_menu() {
    $page_title = 'What weekday is today?';
    $menu_title = 'What weekday is today?';
    $capability = 'manage_options';
    $menu_slug = 'weekday-settings';
    $function = 'weekday_settings';
    add_options_page($page_title, $menu_title, $capability, $menu_slug, $function);
}
add_action('admin_menu', 'weekday_admin_menu');


// Plugin Infopage

function weekday_settings() {
    if (!current_user_can('manage_options')) {
        wp_die('Deine Benutzereinstellungen erlauben Dir keinen Zugriff auf diese Seite.');
    } echo '
    <main>
        <h1>What day is today?</h1>
        <hr>
        <div class="responsive-table">
            <table>
                <tbody>
                    <tr>
                        <th>Shortcode</th>
                        <th>Weekday</th>
                    </tr>
                    <tr>
                        <td>[today]</td>
                        <td>n</td>
                    </tr>
                    <tr>
                        <td>[todayOne]</td>
                        <td>n + 1</td>
                    </tr>
                    <tr>
                        <td>[todayTwo]</td>
                        <td>n + 2</td>
                    </tr>
                    <tr>
                        <td>[todayThree]</td>
                        <td>n + 3</td>
                    </tr>
                    <tr>
                        <td>[todayFour]</td>
                        <td>n + 4</td>
                    </tr>
                    <tr>
                        <td>[todayFive]</td>
                        <td>n + 5</td>
                    </tr>
                    <tr>
                        <td>[todaySix]</td>
                        <td>n + 6</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h2>Example</h2>

        <div class="responsive-table">
            <table>
                <tbody>
                    <tr>
                        <th>Type in ...</th>
                        <th>The result will be ...</th>
                    </tr>
                    <tr>
                        <td>Today is [today].</td>
                        <td>Today is Saturday.</td>
                    </tr>
                    <tr>
                        <td>Tomorrow is [todayOne].</td>
                        <td>Tomorrow is Sunday.</td>
                    </tr>
                    <tr>
                        <td>In 4 days is [todayFour].</td>
                        <td>In 4 days is Wednesday.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <footer class="donate-box">
        <hr>
        <a href="https://www.paypal.me/prstuhlmann/2" data-link="https://www.paypal.me/prstuhlmann/2" target="_blank">Buy me a coke!</a>
        <h3>Buy me a coke !</h3>
        <p>Thank you for using Weekday Output. If you found the plugin useful buy me a coke! Your donation will motivate and make me happy for all the efforts. You can donate via PayPal.</p>
    </footer>
    ';
}