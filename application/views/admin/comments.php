<h3>Comments</h3>
<?php foreach($comments as $comment): ?>
<?php echo parse_smileys($comment->description, base_url('assets/smileys/')) ?>
<br />
<?php $username = $this->User_model->get_username($comment->cid) ?>
<?php echo $username[0]->username ?>
<br />

<?php if(strlen($comment->url) > 0): ?>
<a target="_blank" href="<?php echo $comment->url ?>">Go to content page</a>
<br />
<?php endif ?>

<?php echo $comment->time ?>
<br />
<a href="<?php echo site_url('admin/comment_delete/' . $comment->id) ?>" onclick="return confirm('You are about to delete a record. This cannot be undone. Are you sure?')"><i class="icon-remove"></i>Delete</a>
<br />
<br />
<?php endforeach ?>
<?php echo anchor('admin/index', 'Back') ?>

<style type="text/css">
.content{
    font-size: 12px;
}
</style>