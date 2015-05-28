<?php foreach($videos as $video): ?>
<?php $thumbnail = array('src' => 'assets/images/thumbnail.jpg', 'title' => $video->title, 'width' => '104', 'height' => '80') ?>
<?php echo anchor('topmenu/video/'.$video->name, img($thumbnail)) ?>
<?php echo hspace(2) ?>
<?php endforeach ?>
<br />
<?php echo anchor('user', 'Back') ?>