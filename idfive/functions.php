<?php
function idfive_load_styles() {
	wp_register_style('main_style',get_stylesheet_uri(),'','1.1','all');
	wp_enqueue_style('main_style');
}
add_action('wp_enqueue_scripts','idfive_load_styles');
wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', '', 1.1, true);
wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/build/main.js', array ( 'jquery' ), 1.1, true);
wp_enqueue_script( 'site', get_template_directory_uri() . '/assets/js/build/site.js', array ( 'jquery' ), 1.1, true);

?> 