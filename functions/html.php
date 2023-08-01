<?php
function tst_display_gdpr(){

	if(!isset($_COOKIE['gdpr_accept'])){
		ob_start();
		include(plugin_dir_path(__DIR__).'html/gdpr-display.php');
		$contents=ob_get_contents();
		ob_end_clean();
		echo $contents;
	}

}
add_action('wp_footer','tst_display_gdpr');


?>