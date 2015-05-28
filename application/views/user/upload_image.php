<div class="profile_info_form">
<?php echo form_open_multipart('user/upload_image') ?>
<?php if(isset($allowed_types)): ?>
<p>Allowed formats: <?php print_r($allowed_types) ?></p>
<?php endif ?>
<?php echo form_upload('userfile') ?>
<br />    
<?php echo form_submit('', 'Submit') ?>
<?php echo form_close() ?>
<?php echo anchor('topmenu/dump_video', img('assets/assets/upload_video.png')) ?>
<br /><br />
<?php echo anchor('user/index', img('assets/assets/back.png')) ?>
</div>