<h3>Edit Group</h3>
<?php echo validation_errors() ?>
<?php echo form_open('admin/group_edit/' . $group->id) ?>
<p>Name</p>
<?php echo form_input('name', $group->name) ?>
<p>Description</p>
<?php echo form_input('description', $group->description) ?>
<p><?php echo form_submit(array('class' => 'btn btn-primary'), 'Save') ?></p>
<?php echo form_close() ?>
<?php echo anchor('admin/group', 'Back') ?>