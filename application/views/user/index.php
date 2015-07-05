<p class="avatar">
    <?php if(isset($profile_info) && strlen($profile_info->avatar) > 0): ?>
        <?php echo img('./uploads/' . $profile_info->avatar) ?>
        <br />
        <strong><?php echo $profile_info->display_name ?></strong>
    <?php else: ?>
        <?php echo img('assets/assets/avatar.jpg') ?>
    <?php endif ?>
</p>
<br />

<?php if($this->ion_auth->is_admin()): ?>
    <?php echo anchor('admin/index', img('assets/assets/admin.png')); ?>
<?php endif ?>

<?php if(! $this->ion_auth->is_admin() && $this->ion_auth->is_editor()): ?>
    <?php echo anchor('note', 'Note') ?>
<?php endif ?>

<?php echo anchor('user/edit_profile', img('assets/assets/edit-profile.png')) ?>

<?php if(isset($profile_info)): ?>
    <p style="margin-top:10px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size: 18px;text-align: center;font-weight: bold;color:#918175"><?php echo $profile_info->travel_motto ?></p>
    <br/>
    
    <div class="highlight">
        <p>Name: <?php echo $name ?></p>
        <p>Gender: <?php echo ($profile_info->gender) ? 'Female' : 'Male' ?></p>
        <p>Date of Birth: <?php echo $profile_info->date_of_birth ?></p>
        <p>Location: <?php echo $profile_info->location ?></p>
    </div>
    
    <br />
    
    <div class="highlight">    
        <p>About Me:<br />
        <?php echo $profile_info->about ?></p>
    </div>
    
    <br />
    
    <div class="highlight">
        <?php $countries_to_visit = explode(',', $profile_info->countries_to_visit) ?>    
        <p>Countries would like to visit:<br />
        
        <?php foreach($countries_to_visit as $country): ?>
            <li><?php echo $country_list[$country] ?></li>
        <?php endforeach ?>
        
        </p>
        <br />
        <p>Favorite Destination:<br />
        <?php echo $profile_info->favorite_destination ?></p>
    </div>
<?php endif ?>

<br/>
<div class="gap"></div>

<?php echo img('assets/images/user/pics.jpg') ?>

<div class="thumbnails">
<?php if(count($pictures) > 0): ?>
    <?php foreach($pictures as $picture): ?>
    <?php $img_properties=array('src' => './uploads/media/' . $picture->name) ?>
    <?php echo anchor('user/show_picture/' . $picture->name , img($img_properties)) ?>
    <?php endforeach ?>
    <p><?php echo anchor('user/show_picture/all', 'Show All') ?></p>
<?php else: ?>
    <p class="text-center">You have not uploaded any picture yet</p>
<?php endif ?>
</div>

<div class="gap"></div>

<?php echo img('assets/images/user/videos.jpg') ?>

<div class="thumbnails">
<?php if(count($videos) > 0): ?>
    <?php foreach($videos as $video): ?>
        <?php $thumbnail = array('src' => 'assets/images/thumbnail.jpg', 'title' => $video->title) ?>
        <?php echo anchor('topmenu/video/'.$video->name, img($thumbnail)) ?>
    <?php endforeach ?>
    <p><?php echo anchor('user/show_video/all', 'Show All') ?></p>
<?php else: ?>
    <p class="text-center">You have not uploaded any video yet</p>
<?php endif ?>
</div>

<style type="text/css">
.highlight{border-radius: 10px; border: 2px solid #CCCCCC; padding: 10px}
.highlight li{color: #5F6A6F;}
</style>