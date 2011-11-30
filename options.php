<div class="wrap">
<h2>WebPlayer Yahoo! v. <?php global $version; echo $version; ?></h2>
<form method="post" action="options.php">
<div id="poststuff">
<div id="post-body">
<div class="postbox"> 
<h3 class='hndle'><span>WebPlayer Yahoo! settings</span></h3>
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
<th scope="row"><b>defaultalbumart:</b></th>
<td><input type="text" name="defaultalbumart" size="50" value="<?php echo get_option('defaultalbumart'); ?>" /><br>
If you prefer to use your face <a href="http://www.pivari.com/wordpress-plugins/webplayer-yahoo-wp-plugin/">a donation</a> is a good idea.</td>
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
