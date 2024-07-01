<?php
require_once(__DIR__ . '/functions/common_functions.php');
require_once(__DIR__ . '/functions/styles_js_files.php');
require_once(__DIR__ . '/functions/ajax_functions.php');
require_once(__DIR__ . '/functions/tgm_plugin_functions.php');


add_action( 'after_setup_theme', 'custom_theme_setup');

// Main settings
$optionsArr = get_fields('options');


// Styles and js files
add_action('wp_enqueue_scripts','custom_styles_js_files');

// Ajax
// Public
add_action( 'wp_ajax_send_message', 'custom_send_message_ajax' );
add_action( 'wp_ajax_nopriv_send_message', 'custom_send_message_ajax' );

// Tgm Plugin (List of required plugins for this theme)
add_action( 'tgmpa_register', 'custom_register_required_plugins' );
