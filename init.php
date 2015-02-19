<?php
/*
Plugin Name: The Tailor
Plugin URI: http://www.rohitpaniker.com/
Description: A WordPress WooCommerce plugin to take Custom Measurement(s).
Version: 1.0
Author: Rohit Paniker
Author URI: http://www.facebook.com/p0rnstarc0der
License: NONE
*/

require_once(plugin_dir_path( __FILE__ ).'Backend/thetailor_admin.php');
require_once(plugin_dir_path( __FILE__ ).'UI/thetailor_ui.php');

add_action( 'wp_enqueue_scripts', 'the_tailor_load_css_jquery' );
function the_tailor_load_css_jquery(){
  wp_enqueue_style( 'the_tailor_style', plugin_dir_url( __FILE__ ) . 'Assets/css/the_tailor_style.css' );
  wp_enqueue_script( 'the_tailor_jquery_js', plugin_dir_url( __FILE__ ) . 'Assets/js/the_tailor_jquery_js.js', array('jquery')  );
}
