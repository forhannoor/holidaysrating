<?php echo js('assets/js/jscolor/jscolor.js') ?>
<?php echo form_open('user/color') ?>
<p>Left bar:</p>
<p><?php echo form_input('left', $user_meta['left'], 'class = color') ?></p>
<p>Right bar:</p>
<p><?php echo form_input('right', $user_meta['right'], 'class = color') ?></p>
<p>Top bar:</p>
<p><?php echo form_input('top', $user_meta['top'], 'class = color') ?></p>
<?php echo form_submit('', 'Save') ?>
<?php echo form_close() ?>