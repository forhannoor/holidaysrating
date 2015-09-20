<?php if (isset($story) && $story->approved): ?>
    <div class="story">
    <h2><?php echo $story->title ?></h2>
    <?php echo $story->body ?>
    <br />
    <div class="score"><p><?php echo round($story->rating, 1) ?></p></div>
    <?php echo form_open('story/rate/' . $story->id) ?>
    <?php echo form_dropdown('rating', generateArray(1, 10)) ?>
    <?php echo form_submit('', 'Rate') ?>
    <?php echo form_close() ?>
    <br />
    <p>Viewed: <?php echo $story->num_views ?></p>
    <p><em><?php echo $story->created_at ?></em></p>
    
    <?php if(count($author)): ?>
        <?php if(strlen($author->avatar) > 0): ?>
            <p class="avatar"><?php echo img('./uploads/' . $author->avatar) ?></p>
        <?php else: ?>
            <p class="avatar"><?php echo img('assets/assets/avatar.jpg') ?></p>
        <?php endif ?>
        
        <br />
        
        <?php if(strlen($author->display_name) > 0): ?>
            <p><?php echo $author->display_name ?></p>
        <?php else: ?>
            <p><?php echo $author->name ?></p>
        <?php endif ?>        
    <?php endif ?>    
        
    </div>
    <?php elseif (isset($story) && ! $story->approved): ?>
    <h2 class="alert">The story you requested awaits approval</h2>
    <?php else: ?>
    <h2 class="alert">No such story</h2>
<?php endif ?>

<style>
.story{ float: left; clear: left; }
#content .center select{border: solid 1px #cccccc; height: 22px;}
</style>