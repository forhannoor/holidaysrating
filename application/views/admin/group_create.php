<h3>New Group</h3>
<?php echo validation_errors() ?>
<?php echo form_open('admin/group_create') ?>
<p>Name</p>
<?php echo form_input('name') ?>
<p>Description</p>
<?php echo form_input('description') ?>
<p><?php echo form_submit(array('class' => 'btn btn-primary'), 'Save') ?></p>
<?php echo form_close() ?>
<?php echo anchor('admin/group', 'Back') ?>