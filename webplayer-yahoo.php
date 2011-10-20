<?php

/*
Plugin Name: WebPlayer Yahoo!
Plugin URI: http://www.pivari.com/
Description: A simple Plugin to add WebPlayer Yahoo! code on your pages.
Version: 0.6.0
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
}

function deactive_webplayer() {
  delete_option('theme');
  delete_option('termDetection');
}

function admin_init_webplayer() {
  register_setting('webplayer', 'theme');
  register_setting('webplayer', 'termDetection');
}

function admin_menu_webplayer() {
  add_options_page('WebPlayer Yahoo!', 'WebPlayer Yahoo!', 8, 'webplayer', 'options_page_webplayer');
}

function options_page_webplayer() {
  include(WP_PLUGIN_DIR.'/webplayer-yahoo/options.php');  
}

function webplayer() {
  $options='<script type="text/javascript"> var YWPParams = { ';
  $theme = get_option('theme');
  $options = $options . 'theme: "' . $theme . '",';
  $termDetection = get_option('termDetection');
  $options = $options . 'termDetection: "' . $termDetection. '"';
  $options = $options . '}; </script>';
  echo $options;
  echo '<script type="text/javascript" src="http://webplayer.yahooapis.com/player-beta.js"></script>';

}

register_activation_hook(__FILE__, 'activate_webplayer');
register_deactivation_hook(__FILE__, 'deactive_webplayer');
add_action('admin_init', 'admin_init_webplayer');
add_action('admin_menu', 'admin_menu_webplayer');
add_action('wp_footer', 'webplayer');

?>
