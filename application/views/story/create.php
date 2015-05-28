<?php echo js('assets/js/tinymce/tinymce.min.js') ?>
<script>
tinymce.init({selector:'textarea'});
</script>
<?php if(isset($title)): ?>
<title><?php echo $title ?></title>
<?php endif ?>
<?php echo validation_errors() ?>
<?php echo form_open('story/create') ?>
<p>Title</p>
<p><?php echo form_input('title', $this->input->post('title')) ?></p>
<p>Body</p>
<p><?php echo form_textarea('body', $this->input->post('body')) ?></p>
<br />
<?php echo form_hidden('country', $this->input->get('country')) ?>
<?php echo form_submit('', '') ?>
<?php echo form_close() ?>

<style type="text/css">
form input[type=text]{width: 450px;}
#content .center input[type=submit]{background: url('../../assets/assets/submit.png'); width: 123px; height: 32px; border: none;}
</style>