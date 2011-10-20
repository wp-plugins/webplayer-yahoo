<div class="wrap">
<h2>WebPlayer Yahoo!</h2>

<form method="post" action="options.php">
<?php wp_nonce_field('update-options'); ?>
<?php settings_fields('webplayer'); ?>

<table class="form-table">

<tr valign="top">
<th scape="row"><b>Theme:</b></th>
<td>
  <select name="theme">
    <option value="black"  <?php if (get_option('theme') == 'black') echo "selected=selected" ?>>black</option>
    <option value="silver" <?php if (get_option('theme') == 'silver') echo "selected=selected" ?>>silver</option>
  </select>
</td>
</tr><tr valign="top">
<th scape="row"><b>termDetection:</b></th>
<td>
  <select name="termDetection">
    <option value="off" <?php if (get_option('termDetection') == 'off') echo "selected=selected" ?>>off</option>
    <option value="on"  <?php if (get_option('termDetection') == 'on') echo "selected=selected" ?>>on</option>
  </select>
</td>
</tr>

</table>

<input type="hidden" name="action" value="update" />

<p class="submit">
<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
</p>

</form>
</div>
