<?php

/*
Plugin Name: WebPlayer Yahoo!
Plugin URI: http://www.pivari.com/wordpress-plugins/webplayer-yahoo-wp-plugin/
Description: A simple Plugin to add WebPlayer Yahoo! code on your pages.
Version: 1.3.0
Author: Fabrizio Pivari
Author URI: http://www.pivari.com
 */
/*  Copyright 2011 Fabrizio Pivari  (email : fabrizio@pivari.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

$version="1.3.0";

if (!defined('WP_CONTENT_URL'))
      define('WP_CONTENT_URL', get_option('siteurl').'/wp-content');
if (!defined('WP_CONTENT_DIR'))
      define('WP_CONTENT_DIR', ABSPATH.'wp-content');
if (!defined('WP_PLUGIN_URL'))
      define('WP_PLUGIN_URL', WP_CONTENT_URL.'/plugins');
if (!defined('WP_PLUGIN_DIR'))
      define('WP_PLUGIN_DIR', WP_CONTENT_DIR.'/plugins');

function activate_webplayer() {
	add_option('theme', 'black');
	add_option('termDetection', 'off');
	add_option('autoplay', 'false');
	add_option('autoadvance', 'true');
	add_option('defaultalbumart', 'http://www.pivari.com/fabrizio-pivari-205x205.jpg');
}

function deactive_webplayer() {
  delete_option('theme');
  delete_option('termDetection');
  delete_option('autoplay');
  delete_option('autoadvance');
  delete_option('defaultalbumart');
}

function admin_init_webplayer() {
  register_setting('webplayer', 'theme');
  register_setting('webplayer', 'termDetection');
  register_setting('webplayer', 'autoplay');
  register_setting('webplayer', 'autoadvance');
  register_setting('webplayer', 'defaultalbumart');
}

function admin_menu_webplayer() {
  add_options_page('WebPlayer Yahoo!', 'WebPlayer Yahoo!', 8, 'webplayer', 'options_page_webplayer');
}

function options_page_webplayer() {
  include(WP_PLUGIN_DIR.'/webplayer-yahoo/options.php');  
}

function webplayer() {
  global $version;
  $theme = get_option('theme');
  $termDetection = get_option('termDetection');
  $autoplay = get_option('autoplay');
  $autoadvance = get_option('autoadvance');
  $defaultalbumart = get_option('defaultalbumart');
  if ( $defaultalbumart == '' )
      $defaultalbumart = 'http://www.pivari.com/fabrizio-pivari-205x205.jpg';
  echo "\n".'<!-- WebPlayer Yahoo! plugin v. '.$version.' (Begin) -->'."\n" ;
  $options='<script type="text/javascript"> var YWPParams = { theme: "' . $theme . '", termDetection: "' . $termDetection. '", autoplay:' . $autoplay . ', autoadvance:' . $autoadvance . ', defaultalbumart:"' . $defaultalbumart . '" }; </script>'."\n";
  echo $options;
  echo '<script type="text/javascript" src="http://webplayer.yahooapis.com/player-beta.js"></script>'."\n" ;
  echo '<!-- WebPlayer Yahoo! plugin v. '.$version.' (End) -->'."\n" ;

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
