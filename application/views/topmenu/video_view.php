<script type="text/javascript">
$(document).ready(function() {
    projekktor(
        '#player_a',
        {
            autoplay: true,
            width: '50%'
        },
        function(player) { // "onready" callback
            //$('#projekktorver').html( player.getPlayerVer() );
        }
    );
});
</script>

<?php if($this->ion_auth->is_admin()): ?>
    <?php $this->session->set_userdata('referral_page', 'topmenu') ?>
    <p><?php echo anchor('admin/video_delete/' . $video->id, img(array('src' => 'assets/assets/trash.png', 'title' => 'delete video')), array('onclick' => "return confirm('You are about to delete this video. This cannot be undone. Do you want to proceed?')")) ?></p>
    <br>
<?php endif ?>

<p>Times viewed: <?php echo $video->viewed ?></p>
<br />
<h2>Comments</h2>
<?php foreach ($comments as $comment): ?>
    <?php $commentator = $this->User_model->get_profile_information($comment->cid) ?>
    
    <?php if (isset($commentator->avatar)): ?>
        <p class="avatar"><?php echo img('./uploads/' . $commentator->avatar) ?></p>
    <?php else: ?>
        <p class="avatar"><?php echo img('assets/assets/avatar.jpg') ?></p>
    <?php endif ?>
    
    <p class="comment"><?php echo $comment->description ?></p>
    
    <?php if (isset($commentator->display_name)): ?>
        <p><?php echo $commentator->display_name ?></p>
    <?php endif ?>
    
    <p><?php echo $comment->time ?></p>
    
    <?php if ($comment->cid != $this->session->userdata('user_id')): ?>
        <p><?php echo anchor('user/send_message/' . urlsafe_b64encode($comment->cid), img('assets/images/pm-icon.gif')) ?></p>
    <?php endif ?>
    <br />
<?php endforeach ?>

<div class = "link-without-orientation">
<?php echo img('assets/images/comments.png') ?>
<?php echo anchor('user/make_comment/' . $video->name, 'Leave a Comment') ?>
<br />
<?php echo img('assets/assets/from-region.png') ?>
<?php echo anchor('topmenu/videodump/' . $video->region, 'Videos from ' . strtoupper($video->region)) ?>
<br />
<?php echo img('assets/assets/browse.png') ?>
<?php echo anchor('topmenu/videodump', 'Browse Videos by Region') ?>
</div>