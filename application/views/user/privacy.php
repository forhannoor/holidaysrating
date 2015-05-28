<?php echo form_open('user/change_privacy') ?>
<p>Profile Privacy</p>
<p><?php echo form_dropdown('privacy', array(0 => 'Public', 1 => 'Private', 2 => 'Friends Only'), $privacy) ?></p>
<p><?php echo form_submit('', 'Save') ?></p>
<?php echo form_close() ?>