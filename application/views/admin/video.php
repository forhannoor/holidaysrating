<div class="row-fluid">
    <div class="span8">
        <p><?php echo img('uploads/media/videos/' . $video->thumbnail) ?></p>
        <p><strong>Description: </strong><?php echo $video->description ?></p>
        
        <p><strong>Uploaded for: </strong><?php echo ucfirst($video->region) ?></p>
        <p><strong>Viewed for: </strong><?php echo $video->viewed ?> times</p>
        <p><em>Uploaded by <strong><?php echo $video->display_name ?></strong> at <?php echo $video->uploaded_at ?></em></p>
        <p>
            <?php echo anchor('topmenu/video/' . urlsafe_b64encode($video->name), '<i class = \'icon-play\'></i>', array('target' => '_blank', 'title' => 'Play')) ?>
            &nbsp;&nbsp;
            <?php echo anchor('admin/video_delete/' . $video->id, '<i class = \'icon-remove\'></i>', array('title' => 'Delete', 'onclick' => "return confirm('You are about to delete a record. This cannot be undone. Are you sure?')")) ?>
        </p>
    </div>
</div>
<?php echo anchor('admin/videos', 'Back') ?>
<style type="text/css">
.span8{text-align: justify;}
</style>