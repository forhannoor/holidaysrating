<h3>Videos</h3>
<ul class="thumbnails">
<?php foreach($videos as $video): ?>
    <li>
        <?php echo anchor('admin/video/' . $video->id, img(array('src' => 'uploads/media/videos/' . $video->thumbnail, 'title' => $video->title))) ?>
        <br />
        <p class="control">
        <?php echo anchor('topmenu/video/' . urlsafe_b64encode($video->name), '<i class = \'icon-play\'></i>', array('target' => '_blank', 'title' => 'Play')) ?>
        &nbsp;&nbsp;
        <?php echo anchor('admin/video_delete/' . $video->id, '<i class = \'icon-remove\'></i>', array('title' => 'Delete', 'onclick' => "return confirm('You are about to delete a record. This cannot be undone. Are you sure?')")) ?>
        </p>
        
    </li>
<?php endforeach ?>
</ul>
<?php echo anchor('admin/index', 'Back') ?>

<style type="text/css">
.thumbnails li{width: 156px;}
.thumbnails li img{width: 156px; height: 120px;}
.control{text-align: center;}
</style>