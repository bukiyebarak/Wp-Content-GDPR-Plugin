<div class="wrap tst_gdpr">
    <h2>GDPR Settings</h2>
	<?php
	// kaydetme işlemleri
	if ( isset( $_POST['save_gdpr_settings'] ) ) {
		update_option( 'tst_gdpr_text', $_POST['gdpr_text'] );
		update_option( 'tst_gdpr_button_text', $_POST['gdpr_button_text'] );
		?>
        <div id="setting-error-settings_updated" class="notice notice-success settings-error is-dismissible">
            <p><strong>GDPR Ayarları kaydedildi.</strong></p>
            <button type="button" class="notice-dismiss"><span class="screen-reader-text">Bu mesajı gizle.</span>
            </button>
        </div>
		<?php
	}
	$gdpr_text        = get_option( 'tst_gdpr_text', '' );
	$gdpr_button_text = get_option( 'tst_gdpr_button_text', '' );
	?>
    <form action="" method="post">
        <label for="gdpr_text">GDPR TEXT</label>
        <textarea name="gdpr_text" id="gdpr_text" cols="30" rows="10"
                  placeholder="GDPR Frontend Text "> <?php echo $gdpr_text ?></textarea>
        <label for="gdpr_button_text"> BUTTON TEXT</label>
        <input type="text" name="gdpr_button_text" value="<?php echo $gdpr_button_text ?>"
               placeholder="GDPR Button Text" class="widefat">
        <div class="button_container">
            <input type="submit" name="save_gdpr_settings" class="button button-primary" value="SAVE GDPR SETTINGS">
        </div>
    </form>

	<?php
	global $wpdb;
	#name of the table
	$table = $wpdb->prefix . 'gdpr';
	#check for table in the data
	$get = $wpdb->get_results( " SELECT * FROM " . $table . " ORDER BY ID ASC " );
	// echo '<pre> Preformetted:'; print_r($get);echo'</pre>';
	?>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>IP ADDRESS</th>
            <th>USERID</th>
            <th>DATE</th>
        </tr>
        </thead>
        <tbody>
		<?php
		foreach ( $get as $key => $value ) {
			?>
            <tr>
                <td><?php echo $value->ID ?></td>
                <td><?php echo $value->ip_address ?></td>
                <td><?php echo $value->userID ?></td>
                <td><?php echo $value->date ?></td>

            </tr>

			<?php
		}
		?>
        </tbody>
    </table>

</div>