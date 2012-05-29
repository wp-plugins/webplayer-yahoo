<div class="wrap">
<h2>WebPlayer Yahoo! v. <?php global $webplayerversion; echo $webplayerversion; ?></h2>
<form method="post" action="options.php">
<div id="poststuff">
<div id="post-body">
<div class="postbox" id="1"> 
<h3 class='hndle'><span><?php _e('WebPlayer Yahoo! settings','webplayer'); ?></span></h3>
<div class="inside"> 

<?php wp_nonce_field('update-options'); ?>
<?php settings_fields('webplayer'); ?>

<table class="form-table" style="margin-top: 0; clear:none;">
<tr valign="top">
<th scope="row"><b>Theme:</b></th>
<td>
  <select name="theme">
    <option value="black"  <?php if (get_option('theme') == 'black') echo "selected=selected" ?>>black</option>
    <option value="silver" <?php if (get_option('theme') == 'silver') echo "selected=selected" ?>>silver</option>
  </select>
</td>
</tr><tr valign="top">
<th scope="row"><b>termDetection:</b></th>
<td>
  <select name="termDetection">
    <option value="off" <?php if (get_option('termDetection') == 'off') echo "selected=selected" ?>>off</option>
    <option value="on"  <?php if (get_option('termDetection') == 'on') echo "selected=selected" ?>>on</option>
  </select>
</td>
</tr><tr valign="top">
<th scope="row"><b>autoplay:</b></th>
<td>
  <select name="autoplay">
    <option value="false" <?php if (get_option('autoplay') == 'false') echo "selected=selected" ?>>false</option>
    <option value="true"  <?php if (get_option('autoplay') == 'true') echo "selected=selected" ?>>true</option>
  </select>
</td>
</tr><tr valign="top">
<th scope="row"><b>wmodeoverride:</b></th>
<td>
  <select name="wmodeoverride">
    <option value="true" <?php if (get_option('wmodeoverride') == 'true') echo "selected=selected" ?>>true</option>
    <option value="false"  <?php if (get_option('wmodeoverride') == 'false') echo "selected=selected" ?>>false</option>
  </select>
</td>
</tr><tr valign="top">
<th scope="row"><b>autoadvance:</b></th>
<td>
  <select name="autoadvance">
    <option value="true" <?php if (get_option('autoadvance') == 'true') echo "selected=selected" ?>>true</option>
    <option value="false"  <?php if (get_option('autoadvance') == 'false') echo "selected=selected" ?>>false</option>
  </select>
</td>
</tr><tr valign="top">
<th scope="row"><b>linkConfig:</b></th>
<td>
  <select name="linkConfig">
    <option value="off" <?php if (get_option('linkConfig') == 'off') echo "selected=selected" ?>>off</option>
    <option value="youtube"  <?php if (get_option('linkConfig') == 'youtube') echo "selected=selected" ?>>youtube</option>
  </select>
</td>
</tr>

<tr valign="top">
<th scope="row"><b>volume:</b></th>
<td>
  <select name="volume">
    <option value="5" <?php if (get_option('volume') == '5') echo "selected=selected" ?>>0.5</option>
    <option value="0" <?php if (get_option('volume') == '0') echo "selected=selected" ?>>0.0</option>
    <option value="1" <?php if (get_option('volume') == '1') echo "selected=selected" ?>>0.1</option>
    <option value="2" <?php if (get_option('volume') == '2') echo "selected=selected" ?>>0.2</option>
    <option value="3" <?php if (get_option('volume') == '3') echo "selected=selected" ?>>0.3</option>
    <option value="4" <?php if (get_option('volume') == '4') echo "selected=selected" ?>>0.4</option>
    <option value="6" <?php if (get_option('volume') == '6') echo "selected=selected" ?>>0.6</option>
    <option value="7" <?php if (get_option('volume') == '7') echo "selected=selected" ?>>0.7</option>
    <option value="8" <?php if (get_option('volume') == '8') echo "selected=selected" ?>>0.8</option>
    <option value="9" <?php if (get_option('volume') == '9') echo "selected=selected" ?>>0.9</option>
    <option value="10" <?php if (get_option('volume') == '10') echo "selected=selected" ?>>1.0</option>
</select>
</td>
</tr>

<tr valign="top">
<th scope="row"><b>defaultalbumart:</b></th>
<td><input type="text" name="defaultalbumart" size="50" value="<?php echo get_option('defaultalbumart'); ?>" /><br>
<?php _e('If you prefer to use your face <a href="http://www.pivari.com/wordpress-plugins/webplayer-yahoo-wp-plugin/">a donation</a> is a good idea.','webplayer'); ?>
</td>
</tr>

</table>
</div>
</div>

<div class="postbox" id="2"> 
<h3 class='hndle'><span><?php _e("WebPlayer Yahoo! settings that don't seem to work",'webplayer'); ?></span></h3>
<div class="inside">
<table class="form-table" style="margin-top: 0; clear:none;">

<tr valign="top">
<th scope="row"><b>playlink:</b></th>
<td>
  <select name="playlink">
    <option value="media-only" <?php if (get_option('playlink') == 'media-only') echo "selected=selected" ?>>media-only</option>
    <option value="true" <?php if (get_option('playlink') == 'true') echo "selected=selected" ?>>true</option>
    <option value="false" <?php if (get_option('playlink') == 'false') echo "selected=selected" ?>>false</option>
</select>
</td>
</tr>
<tr valign="top">
<th scope="row"><b>displaystate:</b></th>
<td>
  <select name="displaystate">
    <option value="0" <?php if (get_option('displaystate') == '0') echo "selected=selected" ?>>0</option>
    <option value="1" <?php if (get_option('displaystate') == '1') echo "selected=selected" ?>>1</option>
</select>
</td>
</tr>
</table>

</div>
</div>

<input type="hidden" name="action" value="update" />

<p class="submit">
<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
</p>

</div>
</div>
</form>
</div>
