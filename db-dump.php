<?php
/**
* Plugin Name: DB Dump
* Description: Dumps the database variables
* Version: 1.0
* Author: Michael Codner
* Author URI: http://github.com/mhcodner
*/
?>
<?php
function db_Dump(){
  require_once $_SERVER['DOCUMENT_ROOT'].'/wp-load.php';
  global $wpdb;
  return var_dump($wpdb);
}
add_shortcode( 'dbDump', 'db_Dump' );
?>