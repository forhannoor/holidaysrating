<?php echo js('assets/js/tinymce/tinymce.min.js') ?>

<script>
tinymce.init({selector:'textarea'});
</script>

<?php if(isset($title)): ?>
	<title><?php echo $title ?></title>
<?php endif ?>

<?php echo validation_errors() ?>
<?php echo form_open_multipart('story/create?country=' . $this->input->get('country')) ?>
<p>Title</p>
<p><?php echo form_input('title', $this->input->post('title')) ?></p>
<p>Select a picture (will be scaled to 300 X 150)</p>
<p><?php echo form_upload('images[]', '', 'class=\'large-thumbnail\' required') ?></p>
<br/>
<p>Your story</p>
<p><?php echo form_textarea('body', $this->input->post('body')) ?></p>
<br />
<?php echo form_hidden('country', $this->input->get('country')) ?>
<p>Select a picture (will be scaled to 200 X 100)</p>
<p><?php echo form_upload('images[]', '', 'class=\'small-thumbnail\' required') ?></p>
<br/>
<p>Select a picture (will be scaled to 200 X 100)</p>
<p><?php echo form_upload('images[]', '', 'class=\'small-thumbnail\' required') ?></p>
<br/><br/>
<?php echo form_submit('', '') ?>
<?php echo form_close() ?>

<style type="text/css">
#content .center input[type=text]{width: 470px;}
#content .center input[type=submit]{background: url('../../assets/assets/submit.png'); width: 123px; height: 32px; border: none;}
#content .center .large-thumbnail{width: 300px; height: 150px; background: url('../../assets/assets/plus-sign.ico') no-repeat; background-size: contain; background-position: center;}
#content .center .small-thumbnail{width: 200px; height: 100px; background: url('../../assets/assets/plus-sign.ico') no-repeat; background-size: contain; background-position: center;}
</style>