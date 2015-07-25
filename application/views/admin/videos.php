<h3>Videos</h3>
<ul class="thumbnails">
<?php foreach($videos as $video): ?>
    <li>
        <?php echo anchor('topmenu/video/' . urlsafe_b64encode($video->name), img(array('src' => 'uploads/media/videos/' . $video->thumbnail, 'title' => $video->title)), array('target' => '_blank')) ?>
        <br />
        
        <span><?php echo $video->title ?></span>
        <br />
        <span><em><?php echo $video->display_name ?></em></span>
        <p>
        <?php echo anchor('topmenu/video/' . urlsafe_b64encode($video->name), '<i class = \'icon-play\'></i>Play', array('target' => '_blank')) ?>
        &nbsp;&nbsp;
        <?php echo anchor('admin/video_delete/' . $video->id, '<i class = \'icon-remove\'></i>Delete', array('onclick' => "return confirm('You are about to delete a record. This cannot be undone. Are you sure?')")) ?>
        </p>
        
    </li>
<?php endforeach ?>
</ul>
<?php echo anchor('admin/index', 'Back') ?>

<style type="text/css">
.thumbnails li{width: 156px;}
.thumbnails li img{width: 156px; height: 120px;}
</style>