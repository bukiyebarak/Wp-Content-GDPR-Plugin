<?php
# GDPR Settings Option has been added to the settings in the admin menu.
function tst_gdpr_settings_register(){
	add_options_page('GDPR Settings','GDPR Settings','manage_options','tst-gdpr-settings','tst_gdpr_settings_page');
}
add_action('admin_menu','tst_gdpr_settings_register');
function tst_gdpr_settings_page(){
	include (plugin_dir_path(__DIR__).'html/settings-page.php');
}
?>