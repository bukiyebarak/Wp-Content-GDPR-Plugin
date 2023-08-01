 <?php
/**
 * Plugin Name: A TST GDPR Plugin
 * Description: Provide a GDPR function to our website
 * Version:1.0
 * Author: Admin
 * Author URI: https://www.example.com/
 * Licence: GNU
 */

require_once('functions/css.php');
require_once('functions/html.php');
require_once('functions/settings.php');
require_once('functions/js.php');

function tst_gdpr_activation_hook() {
	global $wpdb;
	#name of the table
	$table = $wpdb->prefix . 'gdpr';
	#check for table in the data
	$check_table = $wpdb->get_results( " SHOW TABLES LIKE '" . $table . "' " );
	# count the number of the table that are returned by check_table
	if (count($check_table)==0)
	{
		# date varchar(19) in number 19: yyyy-mm-dd hh:ii:ss
		$create_table=$wpdb->get_results("
			CREATE TABLE ".$table."(
			ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			ip_address VARCHAR(32) NULL,
			userID INT(11) DEFAULT 0,
			date VARCHAR(19) NULL,	 
			reg_date TIMESTAMP,
			INDEX(userID)
			)
		");
	} #end of check_table count
}

register_activation_hook( __FILE__, 'tst_gdpr_activation_hook' ); // tabloyu aktive etmeyi sağlıyor. Plugini etkinleştirdiğinde


?>