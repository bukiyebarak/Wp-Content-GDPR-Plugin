<?php

function tst_backend_css(){
	echo '<style>';
	include (plugin_dir_path(__DIR__).'/html/css/backend.css');
	echo '</style>';
}
add_action('admin_head','tst_backend_css');
function tst_frontend_css(){
	#tst-frontend-gdpr of ID number
	wp_enqueue_style('tst-frontend-gdpr', plugin_dir_url(__DIR__).'html/css/gdpr-style.css');
}
add_action('wp_head','tst_frontend_css');

?>