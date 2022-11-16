<?php
/**
 * Plugin Name: DarkBuddy | Dark Mode for BuddyBoss Theme
 * Description: Turn your BuddyBoss powered website into a beautiful eye-pleasing dark mode with a click. Simply activate this plugin, and your website will have it's beautiful Dark Mode ready.
 * Author: Rajin Sharwar
 * Author URI: https://linkedin.com/in/raiinsharwar
 * Version: 1.0.0
 */

// function darkbuddy_enqueue_js() {
//     $file_url = plugins_url('/js/main.js', __FILE__);
//     wp_enqueue_style( 'darkbuddy_js', $file_url);
// }

// add_action('wp_enqueue_scripts', 'darkbuddy_enqueue_js' );


// function darkbuddy_enqueue_css() {
//     $file_url = plugins_url('/css/main.css', __FILE__);
//     wp_enqueue_style( 'darkbuddy_css', $file_url);
// }

// add_action('wp_enqueue_scripts', 'darkbuddy_enqueue_css' );

add_action( 'wp_enqueue_scripts', 'darkbuddy_assets' );

function darkbuddy_assets() {
    wp_enqueue_style( 'darkbuddy-style', plugins_url( '/css/main.css' , __FILE__ ) );
    wp_enqueue_script( 'darkbuddy-style', plugins_url( '/main.js' , __FILE__ ), array( 'jquery' ), '1.0', true );
}


