<?php
/**
 * Plugin Name: DarkBuddy | Dark Mode for BuddyBoss Theme
 * Description: Turn your BuddyBoss powered website into a beautiful eye-pleasing dark mode with a click. Simply activate this plugin, and your website will have it's beautiful Dark Mode ready.
 * Author: Rajin Sharwar
 * Author URI: https://linkedin.com/in/raiinsharwar
 * Version: 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


if ( 'buddyboss-theme' !== get_template() ) {
    function darkbuddy_admin_notice(){
    echo '<div class="error"><p>DarkBuddy plugin is activated, but will not function as BuddyBoss theme, or BuddyBoss Child theme is not activated.</p>
         </div>';
    }
    add_action('admin_notices', 'darkbuddy_admin_notice');
    return;
}


add_action( 'wp_enqueue_scripts', 'darkbuddy_assets' );

function darkbuddy_assets() {
    wp_enqueue_style( 'darkbuddy-style', plugins_url( '/css/main.css' , __FILE__ ) );
    wp_enqueue_script( 'darkbuddy-style', plugins_url( '/js/main.js' , __FILE__ ), '1.0', true );
}
