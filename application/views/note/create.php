<h3>New Note</h3>
<?php echo validation_errors() ?>
<?php echo form_open('note/create') ?>
<p>Title</p>
<?php echo form_input('title', '', 'required') ?>
<p>Description</p>
<?php echo form_textarea('description', '', 'required') ?>
<?php if($this->ion_auth->is_admin()): ?>
<p>Share with Editor</p>
<?php echo form_dropdown('editor_access', array(0 => 'No', 1 => 'Yes')) ?>
<?php else: ?>
<?php echo form_hidden('editor_access', 1) ?>
<?php endif ?>
<p><?php echo form_submit(array('class' => 'btn btn-primary'), 'Save') ?></p>
<?php echo form_close() ?>
<br />
<?php echo anchor('note', 'Back') ?>