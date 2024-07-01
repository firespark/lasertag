<?php
function custom_styles_js_files(){
		wp_enqueue_style('aos_css', get_template_directory_uri().'/assets/vendor/aos/aos.css');
        wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css');
        wp_enqueue_style('bootstrap_icons_css', get_template_directory_uri().'/assets/vendor/bootstrap-icons/bootstrap-icons.css');
        wp_enqueue_style('boxicons_css', get_template_directory_uri().'/assets/vendor/boxicons/css/boxicons.min.css');
        wp_enqueue_style('glightbox_css', get_template_directory_uri().'/assets/vendor/glightbox/css/glightbox.min.css');
        wp_enqueue_style('swiper_bundle_css', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.css');
        wp_enqueue_style('style_css', get_template_directory_uri().'/assets/css/style.css', [], '10');

        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.7.0.min.js', [], 1, true);
        wp_enqueue_script( 'jquery' );

        wp_enqueue_script('aos_js', get_template_directory_uri().'/assets/vendor/aos/aos.js', [], 1, true);
        wp_enqueue_script('bootstrap_bundle_min_js', get_template_directory_uri().'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"', [], 1, true);
        wp_enqueue_script('glightbox_min_js', get_template_directory_uri().'/assets/vendor/glightbox/js/glightbox.min.js', [], 1, true);
        wp_enqueue_script('isotope_js', get_template_directory_uri().'/assets/vendor/isotope-layout/isotope.pkgd.min.js', [], 1, true);
        wp_enqueue_script('swiper_bundle_min_js', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.js', [], 1, true);
        wp_enqueue_script('main_js', get_template_directory_uri().'/assets/js/main.js', [], 1, true);
        wp_enqueue_script('custom_js', get_template_directory_uri().'/assets/js/custom.js', [], 1, true);
        wp_localize_script('custom_js', 'adminAjaxObj', [
            'ajaxUrl' => admin_url( 'admin-ajax.php' ),
        ]);
}