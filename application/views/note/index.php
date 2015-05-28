<h3>Notes</h3>
<a href="<?php echo site_url('note/create') ?>"><i class="icon-plus"></i> New</a>
<table class="users_table">
    <thead>
        <th>Title</th>
        <th>Author</th>
        <th>Created At</th>
        <th>Action</th>
    </thead>
    
    <tbody>
    <?php if(! is_null($notes)): ?>
        <?php foreach($notes as $note): ?>
            <tr>
                <td><?php echo anchor('note?id=' . $note->id, $note->title) ?></td>
                <td><?php echo $this->Ion_auth_model->get_username($note->author) ?></td>
                <td><?php echo $note->created_at ?></td>
                <td>
                    <?php echo btn_edit('note/edit?id=' . $note->id) ?>
                    &nbsp;
                    <?php echo btn_delete('note/delete?id=' . $note->id) ?>
                </td>
            </tr>
        <?php endforeach ?>
    <?php endif ?>
    </tbody>
</table>