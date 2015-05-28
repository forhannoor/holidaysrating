<?php echo js('assets/js/tinymce/tinymce.min.js') ?>

<script>
    tinymce.init({selector:'textarea'});
</script>

<?php echo validation_errors() ?>

<?php if(isset($errors)): ?>
    <h3 class="alert"><?php echo $errors ?></h3>
<?php endif ?>

<?php echo form_open_multipart('recipe/create?country=' . $this->input->get('country')) ?>
<?php echo form_hidden('country', urlsafe_b64decode($this->input->get('country'))) ?>
<p>Title</p>
<p><?php echo form_input('title', $this->input->post('title'), 'placeholder=\'title for the recipe\' required = \'required\'') ?></p>
<br />
<p>Category</p>
<p><?php echo form_dropdown('category', array('Appetizer/Beverage' => 'Appetizer/Beverage', 'Bread/Roll' => 'Bread/Roll', 'Desert' => 'Desert', 'Main' => 'Main', 'Miscellaneous' => 'Miscellaneous', 'Soup/Salade' => 'Soup/Salade', 'Vegetable' => 'Vegetable'), 'Miscellaneous') ?></p>
<br />
<p>Ingredients</p>
<p><?php echo form_input('ingredients', $this->input->post('title'), 'placeholder=\'list the ingredients in here\' required = \'required\'') ?></p>
<br />
<p>Time</p>
<p><?php echo form_dropdown('time', array('0:15' => '0:15', '0:30' => '0:30', '1:00' => '1:00', '1:30' => '1:30', '2:00' => '2:00', '2+' => '2+'), $this->input->post('time')) ?></p>
<br />
<p>Recipe</p>
<p><?php echo form_textarea('recipe', $this->input->post('recipe')) ?></p>
<br />
<p>Image</p>
<p><?php echo form_upload('userfile') ?></p>
<br />
<p><?php echo form_submit('', 'Submit') ?></p>
<?php echo form_close() ?>

<style>
form input[type=text]{width: 450px;}
form select{border: solid 1px #cccccc; margin-top: 10px;}
</style>