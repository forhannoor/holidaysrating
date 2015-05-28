<h3><?php echo $story->title ?></h3>
<p><?php echo $story->body ?></p>

<?php if(strlen($author->display_name) > 0): // display name is available ?>
<p>by <?php echo $author->display_name ?></p>
<?php else: ?>
<p>by <?php echo $author->name ?></p>
<?php endif ?>

<?php if(! $story->approved): ?>
<?php echo anchor('admin/story_approve/' . $story->id, '<i class = "icon-thumbs-up"></i>') ?>
<?php endif ?>
<?php echo hspace(3) ?>
<a href="<?php echo site_url('admin/story_edit/' . $story->id) ?>"><i class="icon-edit"></i></a>
<?php echo hspace(3) ?>
<a href="<?php echo site_url('admin/story_delete/' . $story->id) ?>" onclick="return confirm('You are about to delete a record. This cannot be undone. Are you sure?')"><i class="icon-trash"></i></a>
<br /><br />
<?php echo anchor('admin/stories', 'Back') ?>