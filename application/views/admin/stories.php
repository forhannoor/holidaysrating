<h3>Stories</h3>
<table class="table table-narrow table-condensed table-bordered table-hover">
    <th>Title</th>
    <th>Author</th>
    <th>Country</th>
    <th>Created at</th>
    <th>Action</th>
    
    <?php foreach($stories as $story): ?>
    <tr>
        <td><?php echo anchor('admin/story_read/' . $story->id, $story->title) ?></td>
        <td><?php echo $story->username ?></td>
        <td><?php echo $story->country ?></td>
        <td><?php echo $story->created_at ?></td>
        <td>
            <?php if($story->approved): ?>
            <?php echo anchor('admin/story_disapprove/' . $story->id, '<i class = "icon-thumbs-down"></i>') ?>
            <?php else: ?>
            <?php echo anchor('admin/story_approve/' . $story->id, '<i class = "icon-thumbs-up"></i>') ?>
            <?php endif ?>
            &nbsp;&nbsp;
            <?php echo anchor('admin/story_delete/' . $story->id, '<i class = "icon-remove-sign"></i>', array('onclick' => "return confirm('You are about to delete this story. This cannot be undone. Are you sure?')")) ?>
        </td>
    </tr>
    <?php endforeach ?>
</table>

<?php if(strlen($this->uri->segment(3)) == 0): ?>
    <?php echo anchor('admin/stories/all', 'View all') ?>    
<?php endif ?>
<br />
<?php echo anchor('admin', 'Back') ?>