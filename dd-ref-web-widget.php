<?php
/**
 * Plugin Name: Default Digital Referenz Website Widget
 * Description: Widget zum nachbauen der Referenzseite mit React
 * Version: 1.0.0
 * Author: Friedrich Lukas
 * Text Domain: dd-ref-web-widget
 * 
 * Requires Plugins: elementor
 * Elementor testetd up tp: 3.21.0
 * Elementor Pro testetd up tp: 3.21.0
 */

 if (!defined('ABSPATH')) {
  exit;
 }

 function register_dd_ref_web_widget($widgets_manager) {
  require_once(__DIR__ . '/widgets/ref-web-widget.php');
  $widgets_manager -> register(new \DD_Ref_Web_Widget());
 }
 add_action( 'elementor/widgets/register', 'register_dd_ref_web_widget');