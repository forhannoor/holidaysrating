<?php echo js('assets/js/tinymce/tinymce.min.js') ?>
<script>
tinymce.init({selector:'textarea'});
</script>
<h3>Edit Story</h3>
<?php echo validation_errors() ?>
<?php echo form_open('admin/story_edit/' . $story->id) ?>
<p>Title</p>
<?php echo form_input('title', $story->title) ?>
<?php echo vspace(2) ?>
<p>Body</p>
<?php echo form_textarea('body', $story->body) ?>
<br />
<?php echo btn_submit('Save') ?>
<?php echo form_close() ?>
<?php echo anchor('admin/stories', 'Back') ?>