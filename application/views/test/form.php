<?php echo form_open_multipart('test/process', array('id' => 'dump_video_form')) ?>
<p>Video: (Allowed format - mp4)</p>
<?php echo form_upload('files[]') ?>
<br /><br />
<p>Thumbnail: (Allowed formats - jpg|png|gif|bmp)</p>
<?php echo form_upload('files[]') ?>
<br /><br />
<?php $regions = array('asia' => 'Asia', 'africa' => 'Africa', 'antarctica' => 'Antarctica', 'caribbean' => 'Caribbean', 'central_america' => 'Central America', 'europe' => 'Europe', 'north_america' => 'North America', 'oceania' => 'Oceania', 'south_america' => 'South America') ?>
<?php echo form_label('Select Region', 'region') ?>
<br />
<?php echo form_dropdown('region', $regions) ?>
<br />
<br />
<?php echo form_label('Title', 'title') ?>
<br />
<?php echo form_input('title') ?>
<br />
<?php echo form_hidden('uploader', $this->session->userdata('user_id')) ?>
<br />
<?php echo form_label('Description', 'description') ?>
<br />
<?php echo form_textarea('description') ?>
<br /><br />
<?php echo form_submit(array('value' => 'Upload', 'class' => 'btn-submit-green')) ?>
<?php echo form_close() ?>

<?php echo js('assets/js/jquery.form.js') ?>
<?php echo js('assets/js/script.js') ?>