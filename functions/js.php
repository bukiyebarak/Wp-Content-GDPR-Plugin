<?php

function tst_frontend_js(){

	wp_enqueue_script('google-hosted-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js');
	wp_enqueue_script('tst-frontend-gdpr', plugin_dir_url(__DIR__).'html/js/gdpr.js');
}
add_action('wp_footer','tst_frontend_js');

?>