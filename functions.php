<?php

function my_init() {
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js', false, '2.0.3');
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'my_init');

add_theme_support('post-thumbnails');

function register_my_menu(){
  register_nav_menu('top-menu', ('menu superior'));
}
add_action('init', 'register_my_menu');
?>
