<?php

/*
Plugin Name: WebPlayer Yahoo!
Plugin URI: http://www.pivari.com/wordpress-plugins/webplayer-yahoo-wp-plugin/
Description: A simple Plugin to add WebPlayer Yahoo! code on your pages.
Version: 2.1.0
Author: Fabrizio Pivari
Author URI: http://www.pivari.com
 */
/*  Copyright 2011-2012 Fabrizio Pivari  (email : fabrizio@pivari.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/

$webplayerversion="2.1.0";

if (!defined('WP_CONTENT_URL'))
      define('WP_CONTENT_URL', get_option('siteurl').'/wp-content');
if (!defined('WP_CONTENT_DIR'))
      define('WP_CONTENT_DIR', ABSPATH.'wp-content');
if (!defined('WP_PLUGIN_URL'))
      define('WP_PLUGIN_URL', WP_CONTENT_URL.'/plugins');
if (!defined('WP_PLUGIN_DIR'))
      define('WP_PLUGIN_DIR', WP_CONTENT_DIR.'/plugins');

	// Start tradution
	add_action('init', 'webplayer_i18n') ;

	// Function of tradution
	function webplayer_i18n() {
	  load_plugin_textdomain('webplayer', false, basename( dirname( __FILE__ ) ) . '/languages' );
	}

function activate_webplayer() {
	add_option('theme', 'black');
	add_option('termDetection', 'off');
	add_option('autoplay', 'false');
	add_option('autoadvance', 'true');
	add_option('defaultalbumart', 'http://www.pivari.com/fabrizio-pivari-205x205.jpg');
	add_option('linkConfig', 'off');
	add_option('volume', '5');
	add_option('playlink', 'media-only');
	add_option('displaystate', '0');
	add_option('wmodeoverride', 'true');
}

function deactive_webplayer() {
  delete_option('theme');
  delete_option('termDetection');
  delete_option('autoplay');
  delete_option('autoadvance');
  delete_option('defaultalbumart');
  delete_option('linkConfig');
  delete_option('volume');
  delete_option('playlink');
  delete_option('displaystate');
  delete_option('wmodeoverride');
}

function admin_init_webplayer() {
  register_setting('webplayer', 'theme');
  register_setting('webplayer', 'termDetection');
  register_setting('webplayer', 'autoplay');
  register_setting('webplayer', 'autoadvance');
  register_setting('webplayer', 'defaultalbumart');
  register_setting('webplayer', 'linkConfig');
  register_setting('webplayer', 'volume');
  register_setting('webplayer', 'playlink');
  register_setting('webplayer', 'displaystate');
  register_setting('webplayer', 'wmodeoverride');
}

function admin_menu_webplayer() {
  add_options_page('WebPlayer Yahoo!', 'WebPlayer Yahoo!', 8, 'webplayer', 'options_page_webplayer');
}

function options_page_webplayer() {
  include(WP_PLUGIN_DIR.'/webplayer-yahoo/options.php');  
}

function webplayer() {
  global $webplayerversion;
  $theme = get_option('theme');
  $termDetection = get_option('termDetection');
  $autoplay = get_option('autoplay');
  $autoadvance = get_option('autoadvance');
  $defaultalbumart = get_option('defaultalbumart');
  $linkConfig = get_option('linkConfig');
  $volume = get_option('volume');
//  if ( $volume == '10' ) $volume='1.00';
  if ( $volume == '10' ) $volume='1.0';
//  else $volume = '0.'.$volume.'0';
  else $volume = '0.'.$volume;
  $playlink = get_option('playlink');
  $displaystate = get_option('displaystate');
  $wmodeoverride = get_option('wmodeoverride');
  if ( $defaultalbumart == '' )
	  $defaultalbumart = 'http://www.pivari.com/fabrizio-pivari-205x205.jpg';
  if ( $linkConfig == 'youtube' )
      $linkConfig = ', linkConfig:{youtube: \'ignore\'}';
  else $linkConfig = '';
  echo "\n".'<!-- WebPlayer Yahoo! plugin v. '.$webplayerversion.' (Begin) -->'."\n" ;
  $options='<script type="text/javascript"> var YWPParams = { theme: "' . $theme . '", termDetection: "' . $termDetection . '", autoplay: ' . $autoplay . ', autoadvance: ' . $autoadvance . ', volume: ' . $volume . ', playlink: ' . $playlink . ', displaystate: ' . $displaystate . $linkConfig . ', defaultalbumart: "' . $defaultalbumart . '", wmodeoverride: ' . $wmodeoverride . ' }; </script>'."\n";
  echo $options;
  echo '<script type="text/javascript" src="http://webplayer.yahooapis.com/player.js"></script>'."\n" ;
  echo '<!-- WebPlayer Yahoo! plugin v. '.$webplayerversion.' (End) -->'."\n" ;

}

function webplayer_settings( $links ) {
	$settings_link = '<a href="options-general.php?page=webplayer">'.__('Settings').'</a>';
	array_unshift( $links, $settings_link );
	return $links;
}

function webplayer_plugin_settings($links, $file) {
	if ( $file == basename( dirname( __FILE__ ) ).'/'.basename( __FILE__ ) ) {
		$links[] = '<a href="options-general.php?page=webplayer">' . __('Settings') . '</a>';
		$links[] = '<a href="http://www.pivari.com/contatta-pivari/">' . __('Support') . '</a>';
	}
	return $links;
}

register_activation_hook(__FILE__, 'activate_webplayer');
register_deactivation_hook(__FILE__, 'deactive_webplayer');
add_action('admin_init', 'admin_init_webplayer');
add_action('admin_menu', 'admin_menu_webplayer');
add_action( 'plugin_action_links_'.basename( dirname( __FILE__ ) ).'/'.basename( __FILE__ ), 'webplayer_settings', 10, 4 );
add_filter( 'plugin_row_meta', 'webplayer_plugin_settings', 10, 2 );
add_action('wp_footer', 'webplayer');

?>
