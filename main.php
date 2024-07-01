<?php
/*
    Template Name: Main

*/

get_header();
the_post();
$mainFieldsArr = get_fields();

require_once( __DIR__ . '/inc/main_about.php');
    
require_once( __DIR__ . '/inc/main_features.php');

require_once( __DIR__ . '/inc/main_suitable.php');

require_once( __DIR__ . '/inc/main_pricing.php');

require_once( __DIR__ . '/inc/main_price_includes.php');
        
require_once( __DIR__ . '/inc/main_cta.php');

require_once( __DIR__ . '/inc/main_services.php');

require_once( __DIR__ . '/inc/common_contacts.php');
        
    
get_footer();

?>