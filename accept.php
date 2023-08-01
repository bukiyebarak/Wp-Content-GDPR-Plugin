<?php

require_once( explode( "wp-content", __FILE__ )[0] . "wp-load.php" );
$expire = 6 * 30 * 24 * 3600;
setcookie( "gdpr_accept", 'yes', time() + $expire, '/' ); /* expire in 6 months */

$ip_address = $_SERVER['REMOTE_ADDR'];
if ( isset( $current_user->ID ) ) {
	$userID = $current_user->ID;
} else {
	$userID = 0;
}
$date = date( "Y-m-d H:i:s" );
#insert the user information into the database
$insert = $wpdb->get_results( "
			INSERT INTO 
			" . $wpdb->prefix . "gdpr
			(ip_address,userID,date)
			VALUES
			('" . $ip_address . "','" . $userID . "','" . $date . "' )
" );

?>