<?php
/**
 * Plugin Name: Import Dummy Data
 * Plugin URI: #
 * Description: Import dummy data for post type
 * Version: 1.0
 * Author: Su Yatanar
 * Author URI: #
 */

require_once(ABSPATH . 'wp-config.php'); 
require_once(ABSPATH . 'wp-includes/wp-db.php'); 
require_once(ABSPATH . 'wp-admin/includes/taxonomy.php'); 
include 'inc/setting.php';

function import_data_register_settings() {
	add_option( 'import_data_option_name', 'This is my option value.');
	register_setting( 'myplugin_options_group', 'import_data_option_name', 'myplugin_callback' );
}
add_action( 'admin_init', 'import_data_register_settings' );
function import_data_register_options_page() {
	add_options_page('Page Title', 'Import Dummy', 'manage_options', 'import_data', 'import_data_options_page');
}
add_action('admin_menu', 'import_data_register_options_page');
?>

<!-- Import Dummy Data -->
<?php
function import_dummy_data(){

}