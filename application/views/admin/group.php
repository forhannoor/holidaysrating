<h3>Groups</h3>
<a href="<?php echo site_url('admin/group_create') ?>"><i class="icon-plus"></i>New</a>
<table class="table table-narrow table-condensed table-bordered table-hover">
    <th>Name</th>
    <th>Description</th>
    <th>Actions</th>
    
    <?php foreach($groups as $group): ?>
    <tr>
        <td><?php echo $group->name ?></td>
        <td><?php echo $group->description ?></td>
        <?php if($group->id != 1): ?><!-- regular user, not admin -->
        <td>
            <?php echo anchor('admin/group_edit/' . $group->id, '<i class = "icon-edit"></i>') ?>
            <?php echo hspace(2) ?>
            <?php echo btn_delete('admin/group_delete/' . $group->id) ?>
        </td>
        <?php endif ?>
    </tr>
    <?php endforeach ?>
</table>
<?php echo anchor('admin', 'Back') ?>