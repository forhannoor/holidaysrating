<div class="profile_view">
<p class="avatar">
<?php if(isset($profile_info) && strlen($profile_info->avatar) > 0): ?>
<?php echo img('./uploads/' . $profile_info->avatar) ?>
<br />
<?php echo $profile_info->display_name ?>
<?php else: ?>
<?php echo img('assets/assets/avatar.jpg') ?>
<?php endif ?>
</p>
<br />
<?php $user_information = $this->Ion_auth_model->get_user_information($this->uri->segment(3)) ?>

<?php foreach($user_information->result() as $info): ?>
<p class="profile-paragraph">First Name: <?php echo $info->first_name ?></p>
<p class="profile-paragraph">Last Name: <?php echo $info->last_name ?></p>
<p class="profile-paragraph">Email: <?php echo mailto($this->ion_auth->user()->row()->email, $info->email) ?></p>
<?php endforeach ?>

<?php if(isset($profile_info)): ?>
<p style="margin-top:10px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size: 18px;text-align: center;font-weight: bold;color:#918175"><?php echo $profile_info->travel_motto ?></p>
<br/>
<div style="border-radius: 10px; border: 2px solid #CCCCCC; padding: 10px">    
	<p>Name: <?php echo $profile_info->name ?></p>
    <p>Gender: <?php echo ($profile_info->gender) ? 'Female' : 'Male' ?></p>
    <p>Date of Birth: <?php echo $profile_info->date_of_birth ?></p>
    <p>Location: <?php echo $profile_info->location ?></p>
</div>
<br />
<div style="border-radius: 10px; border: 2px solid #CCCCCC; padding: 10px">    
    <p>About Me:<br />
    <?php echo $profile_info->about ?></p>
</div>
<br >
<div style="border-radius: 10px; border: 2px solid #CCCCCC; padding: 10px">    
    <p>Countries would like to visit:<br />
    <?php  echo $profile_info->countries_to_visit ?></p>
    <p>Favorite Destination:<br />
    <?php echo $profile_info->favorite_destination ?></p>
</div>
<?php endif ?>
<?php echo anchor('user/addtravelbuddy/' . urlsafe_b64encode($this->uri->segment(3)), 'Become Travelbuddies') ?>

<br/>
<div class="gap"></div>

<?php echo img('assets/images/user/pics.jpg') ?>
<h1>Uploaded Pictures</h1>
<div class="middle">
    <?php foreach($pictures as $picture): ?>
    <?php $img_properties=array('src' => './uploads/media/'.$picture->name) ?>
    <?php echo anchor('user/show_picture/'.$picture->name , img($img_properties)) ?>
    <?php endforeach ?>
</div>
<br/>
<p id="middle_link">
<?php if(count($pictures) != 0): ?>
<?php echo anchor('user/browse_picture/' . $this->uri->segment(3), 'Show All') ?>
<?php else: ?>
Empty
<?php endif ?>
</p>
<br/>
<div class="gap"></div>

<?php echo img('assets/images/user/videos.jpg') ?>
<div class="middle">
    <?php foreach($videos as $video): ?>
    <?php $thumbnail = array('src' => 'assets/images/thumbnail.jpg', 'title' => $video->title) ?>
    <?php echo anchor('topmenu/video/'.$video->name, img($thumbnail)) ?>
    <?php endforeach ?>
</div>
<br/>
<p id="middle_link">
<?php if(count($videos) != 0): ?>
<?php echo anchor('topmenu/videodump', 'Show All') ?>
<?php else: ?>
Empty
<?php endif ?>
</p>
</div>