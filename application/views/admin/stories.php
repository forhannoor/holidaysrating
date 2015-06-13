<h3>Stories</h3>
<table class="table table-narrow table-condensed table-bordered table-hover">
    <th>Title</th>
    <th>Author</th>
    <th>Country</th>
    <th>Approve</th>
    <th>Delete</th>
    <th>Created at</th>
    
    <?php foreach($stories as $story): ?>
    <tr>
        <td><?php echo anchor('admin/story_read/' . $story->id, $story->title) ?></td>
        <td><?php echo $story->username ?></td>
        <td><?php echo $story->country ?></td>
        <td><?php echo anchor('admin/story_approve/' . $story->id, '<i class = "icon-thumbs-up"></i>') ?></td>
        <td><?php echo anchor('admin/story_delete/' . $story->id, '<i class = "icon-remove-sign"></i>', array('onclick' => "return confirm('You are about to delete this story. This cannot be undone. Are you sure?')")) ?></td>
        <td><?php echo $story->created_at ?></td>
    </tr>
    <?php endforeach ?>
</table>
<?php echo anchor('admin', 'Back') ?>