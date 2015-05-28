<?php foreach ($stories as $story): ?>
<h4><?php echo anchor('story/read?id=' . $story->id . '&title=' . urlsafe_b64encode($story->title), $story->title) ?></h4>
<?php endforeach ?>