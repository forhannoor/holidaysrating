<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="en-us" />
<meta name="keywords" content="Rating, Vacation, Destination, Travel, Holidaysrating, Holiday, Traveling, Review, Tour, Movies, Video, Holidaysplayer, Player, Holidaystube"/>
<meta name="description" content="Upload and watch the best travel video's on Holidaysrating..."/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta name="language" content="English" />
<meta property="og:title" content="<?php echo $video->title ?>" />
<meta property="og:type" content="video" />

<?php if(isset($video)): ?>
    <title><?php echo $video->title ?></title>
<?php endif ?>

<?php echo js('assets/js/jquery-2.1.1.min.js') ?>
<?php echo js('assets/js/jquery.jeditable.min.js') ?>
</head>

<style type="text/css">
.thumbnails img {
width: 70px;
height: auto;
}
</style>

<body>
<div id="top-head-player">
<?php $this->load->view($header) ?>
</div>

<div id="player">
<?php $temp = explode('.', $video->name) ?>
<?php $extension = $temp[count($temp) - 1] ?>
<?php $region = $video->region ?>
<center>
<video id="player_a" class="projekktor" poster="media/intro.png" width="auto" height="385" controls>
    <source src="../../../uploads/media/videos/<?php echo $video->name ?>" type="video/<?php echo $extension ?>" />
</video>
</center>
</div>
<br />
<div id="content">
<div class="clear"></div>
<div class="left-side">
<div class="top-player"></div>
<div class="middle-player">
<div class="my_login">
<?php if($this->ion_auth->logged_in()): ?>
<h2>Welcome</h2>
<?php if(isset($profile_info) && strlen($profile_info->avatar) > 0): ?>
<p class="avatar"><?php echo anchor('user/index', img('./uploads/' . $profile_info->avatar)) ?></p>
<?php else: ?>
<p class="avatar"><?php echo anchor('user/index', img('assets/assets/avatar.jpg')) ?></p>
<?php endif ?>
<br />
<?php echo $this->session->userdata('username') ?>
<br />
<?php echo 'Member since: ' . date("d-m-Y" , $this->session->userdata('created_on')) ?>
<br />
<?php echo 'Last logged in: ' . date("d-m-Y" , $this->session->userdata('old_last_login')) ?>
<?php $CI = & get_instance() ?>
<?php $CI->load->model('Message_model') ?>
<?php $new_message_counter = $CI->Message_model->count_new($this->session->userdata('user_id')) ?>
<br/>
<br/>
<?php echo anchor('user/inbox', "Inbox ($new_message_counter new)") ?>
<br/>
<br/>
<?php echo anchor('auth/logout', 'Logout') ?>
<?php else: ?>
<h2>Member Login</h2>
<?php $this->load->view('auth/my_login') ?>
<br />
<?php echo anchor('auth/forgot_password', 'Forgot Password') ?>
&nbsp;&nbsp;&nbsp;
<?php echo anchor('auth/register', 'Register') ?>
<?php endif ?>
</div>
<img src="<?php echo base_url('assets/images/border.png') ?>" alt="border" style="margin-top:10px" />
<div class="google-left">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- PlayerLeft -->
<ins class="adsbygoogle"
     style="display:inline-block;width:180px;height:150px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="6010130744"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<img src="<?php echo base_url('assets/images/border.png') ?>" alt="border" style="margin-top:10px;margin-bottom:5px" />
<?php $CI = &get_instance() ?>
<?php $CI->load->model('Session_model') ?>
<h2>Members online</h2>
<p style="font-size:10px">Total: <?php echo $CI->Session_model->member_online() ?></p>
<br/>
<ul class="profile-items">
<?php $members_online = $CI->Session_model->member_online_list() ?>
<?php foreach($members_online as $key => $value): ?>
<li><?php echo anchor('user/browse/' . $key, $value) ?></li>
<?php endforeach ?>
</ul>
<br />
<h2>Guests online</h2>
<p style="font-size:10px">Total:<?php echo $CI->Session_model->guest_online() ?></p>
</div>
<div class="bottom-player"></div>
</div>

<div class="center"><?php $this->load->view($main) ?></div>
<div class="right-side">
<div class="top-player"></div>
<div class="middle-player">
<h2 style="margin-bottom:7px">Travel with us...</h2>
<p>Join <?php echo anchor('home/index', 'Holidaysrating') ?> now and become a <strong>FREE</strong> member... <strong>No creditcard or payments needed!</strong></p>
<img src="<?php echo base_url('assets/images/border.png') ?>" alt="border" style="margin-top:8px" />
<h2>Like it..</h2>
<div class="social">
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style">
<table style="margin-top:8px;">
<tr>
<td><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a></td>
<td><a class="addthis_button_tweet"></a></td>
</tr>
<tr>
<td><a class="addthis_button_google_plusone" g:plusone:size="medium"></a></td>
<td><a class="addthis_counter addthis_pill_style"></a></td>
</tr>
</table>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-512f1c611545a1da"></script>
<!-- AddThis Button END -->
</div>
<img src="<?php echo base_url('assets/images/border.png') ?>" alt="border" style="margin-top:12px" />
<h2 style="margin-bottom:8px">Related Videos</h2>
<table class="thumbnails" style="border: thin gray solid; padding:4px; width:180px; border-radius:2px;">

<?php foreach($related_videos as $r): ?>
<?php $thumbnail = array('src' => strlen($r->thumbnail) > 0 ? 'uploads/media/videos/' . $r->thumbnail : 'assets/images/thumbnail.jpg', 'title' => $r->title) ?>
<tr>
    <td>
        <p><?php echo anchor('topmenu/video/' . urlsafe_b64encode($r->name), img($thumbnail), array('target' => '_blank')) ?></p>
        <p style="margin-top: -10px;"><?php echo $r->viewed ?> views</p>
    </td>
    <td>
        <?php if(strlen($r->title) > 20): ?>
            <p><?php echo substr($r->title, 0, 20) ?>...</p>
        <?php else: ?>
            <p><?php echo $r->title ?></p>
        <?php endif ?>    
    </td>
</tr>
<?php endforeach ?>

</table>

</div>

<div class="bottom-player"></div>
</div>
<div class="clear"></div>
<div id="footer">
<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- VideoBottom -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="9301547147"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<div class="clear"></div>
<?php $this->load->view($footer) ?>
<div class="logo"><center><img src="<?php echo base_url('assets/images/photos.jpg') ?>" alt="logo" /></center>
<div class="slogin">You are our <span>travelguide!</span>
</div>
</div>
<div class="clear"></div>
<?php $this->load->view($last_line) ?>
</div>
</div>
<?php echo css('assets/css/holiday.css') ?>
</body>
</html>