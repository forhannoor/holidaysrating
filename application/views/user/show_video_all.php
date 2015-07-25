<?php foreach($videos as $video): ?>
<?php echo anchor('topmenu/video/' . urlsafe_b64encode($video->name), img(array('src' => 'uploads/media/videos/' . $video->thumbnail, 'title' => $video->title, 'width' => '104', 'height' => '80'))) ?>
<?php echo hspace(2) ?>
<?php endforeach ?>
<br />
<?php echo anchor('user', 'Back') ?>