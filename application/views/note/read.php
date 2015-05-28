<div class="note">
<h3><?php echo $note->title ?></h3>
<i><p>by <?php echo $this->ion_auth_model->get_username($note->author) ?></p></i>
<p><?php echo $note->description ?></p>
<p>Status: <?php echo ($note->status == 0) ? 'Done' : 'Pending' ?></p>
<i><p><?php echo $note->created_at ?></p></i>
</div>
<br />
<?php echo btn_edit('note/edit?id=' . $note->id) ?>
&nbsp;&nbsp;
<?php echo btn_delete('note/delete?id=' . $note->id) ?>
<br />
<br />
<?php echo anchor('note', 'Back') ?>