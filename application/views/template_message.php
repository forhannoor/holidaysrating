<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Edit your profile, send messages and upload travel media."/>
<meta name="keywords" content="My Profile, Profile"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta name="viewport" content="maximum-scale=1"/>

<title><?php echo $heading ?> | Holidaysrating</title>
<?php echo js('assets/js/jquery-2.1.1.min.js') ?>
</head>
<body>
<?php if(! isset($user_meta)): ?>
<?php $user_meta = array('left' => '', 'right' => '', 'top' => '') ?>
<?php endif ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=187439388064490";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="top-head" style="background: #<?php echo $user_meta['top'] ?>;">
<div class="main">
<div class="logo"><?php echo anchor('home/index', img('assets/images/logo/holidaysrating.png')); ?></div>
<div class="menu">
<ul>
<li><?php echo anchor('topmenu/worldmap', 'WORLDMAP') ?></li>
<li><?php echo anchor('topmenu/videodump', 'VIDEODUMP') ?></li>
<li><?php echo anchor('topmenu/favorites', 'FAVORITES') ?></li>
<li><?php echo anchor('news/news_index', 'TRAVELNEWS') ?></li>
<li><?php echo anchor('topmenu/helpcenter', 'HELP') ?></li>
</ul>

<div class="user-submenu">
<?php if(! $this->ion_auth->logged_in()): ?>
<a href="<?php echo site_url('home/login') ?>" rel="nofollow">LOGIN</a>
<?php else: ?>
<strong><a href="<?php echo site_url('user/index') ?>" rel="nofollow"><?php echo $this->session->userdata('username') ?></a></strong>&nbsp;&nbsp;<a id="q999" style="cursor: pointer">&#9660;</a>

<div id="a999">
<table style="border:collapse;border-top:1px solid #A1B8BE;margin-top:2px">
<tr>
<td style="padding:0 3px"><?php echo anchor('user/index', 'MY PROFILE') ?></td>
</tr>
<tr>
<td style="padding:0 3px"><?php echo anchor('user/inbox', 'INBOX') ?></td>
</tr>
<tr>
<td style="padding:0 3px"><?php echo anchor('user/bucket', 'BUCKETLIST') ?></td>
</tr>
<tr>
<td style="padding:0 3px"><?php echo anchor('user/settings', 'SETTINGS') ?></td>
</tr>
<tr>
<td style="padding:0 3px"><?php echo anchor('auth/logout', 'LOG OUT') ?></td>
</tr>
</table>
</div>
<?php endif ?>
<script type="text/javascript">
    $(document).ready(function()
    {
        $("#a999").hide();
        
        $("#q999").click(function()
        {
            $("#a999").toggle("medium");
        }
        );
    }
    );
</script>
</div>

</div>
</div>
</div>
<div id="banner">
<?php if(isset($banner)): ?>
<?php echo img('./uploads/banners/'.$banner->name) ?>
<?php endif ?>
</div>
<div id="content"><br />
<div class="clear"></div>
<div class="left-side">
<div class="top" style="background: #<?php echo $user_meta['left'] ?>;"></div>
<div class="middle" style="background: #<?php echo $user_meta['left'] ?>;">
<br />
<?php $new_message_counter = $this->User_model->count_new($this->session->userdata('user_id')) ?>
<p class="sidebar-item"><?php echo img('assets/assets/mail-inbox.png') ?> <?php echo anchor('user/inbox', 'Inbox') ?> </p>
<p class="sidebar-item"><?php echo img('assets/assets/mail-sent.png') ?> <?php echo anchor('user/sent', 'Sent Message') ?></p>
<br />
<img src="<?php echo base_url('assets/images/border.png') ?>" alt="border" style="margin-bottom:7px"/>

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
<div class="bottom" style="background: #<?php echo $user_meta['left'] ?>;"></div>
</div>
<div class="center"><?php include $main ?></div>
<div class="right-side">
<div class="top" style="background: #<?php echo $user_meta['right'] ?>;"></div>
<div class="middle" style="background: #<?php echo $user_meta['right'] ?>;">
<br/>
<p class="sidebar-item"><?php echo img('assets/assets/face.png') ?> <?php echo anchor('user/index', 'My Profile') ?></p>
<p class="sidebar-item"><?php echo img('assets/assets/book.png') ?> <?php echo anchor('user/cookbook', 'My Cookbook') ?></p>
<p class="sidebar-item"><?php echo img('assets/assets/list.png') ?> <?php echo anchor('user/bucket', 'My Bucketlist') ?></p>
<p class="sidebar-item"><?php echo img('assets/assets/explore.png') ?> <?php echo anchor('topmenu/worldmap', 'Explore The World') ?></p>
<br />
<img src="<?php echo base_url('assets/images/border.png') ?>" alt="border" style="margin-bottom:7px"/>

<h2>Send in your favorite picture</h2>
<p>Do you like to see your favorite picture on this website? We will post your favorite destination picture as our location banner! You are our travelguide...</p>
<div class="clear"></div>
</div>
<div class="bottom" style="background: #<?php echo $user_meta['right'] ?>;"></div>
</div>
<div class="clear"></div>
<div id="footer">
<div class="google">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-0797455318364345";
/* Bottom Ad */
google_ad_slot = "5117183149";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
<div class="clear"></div>
<div class="first-column">
<ul>
<li><?php echo anchor('topmenu/worldmap', 'WORLDMAP') ?></li>
<li><?php echo anchor('topmenu/videodump', 'VIDEODUMP') ?></li>
<li><?php echo anchor('topmenu/favorites', 'FAVORITES') ?></li>
<li><?php echo anchor('news/news_index', 'TRAVEL NEWS') ?></li>
</ul>
</div>
<div class="first-column">
<ul>
<li><?php echo anchor('regions/africa', 'AFRICA') ?></li>
<li><?php echo anchor('regions/antartica', 'ANTARCTICA') ?></li>
<li><?php echo anchor('regions/asia', 'ASIA') ?></li>
<li><?php echo anchor('regions/caribbean', 'CARIBBEAN') ?></li>
</ul>
</div>
<div class="first-column">
<ul>
<li><?php echo anchor('regions/central_america', 'CENTRAL AMERICA') ?></li>
<li><?php echo anchor('regions/europe', 'EUROPE') ?></li>
<li><?php echo anchor('regions/indonesia', 'INDONESIA') ?></li>
<li><?php echo anchor('regions/middle_east', 'MIDDLE EAST') ?></li>
</ul>
</div>
<div class="first-column">
<ul>
<li><?php echo anchor('regions/north_america', 'NORTH AMERICA') ?></li>
<li><?php echo anchor('regions/oceania', 'OCEANIA') ?></li>
<li><?php echo anchor('regions/south_america', 'SOUTH AMERICA') ?></li>
<li><?php echo anchor('topmenu/helpcenter', 'HELPCENTER') ?></li>
</ul>
</div>
<div class="logo"><center><img src="<?php echo base_url('assets/images/photos.jpg') ?>" alt="logo" /></center>
<div class="slogin">You are our <span>travelguide!</span>
</div>
</div>
<div class="clear"></div>
<p><?php echo anchor('privacy/privacy_policy', 'Privacy Policy', 'rel = "nofollow"') ?> | <?php echo anchor('privacy/terms_of_use', 'Terms of Use', 'rel = "nofollow"') ?> | <?php echo anchor('home/contact_us', 'Contact Us', 'rel = "nofollow"') ?> | &copy; Copyright <?php echo date('Y') ?> Holidaysrating All Rights Reserved</p>
</div>
</div>
<?php echo css('assets/css/user.css') ?>
</body>

<style>
.sidebar-item a{text-decoration: none;}
.sidebar-item img{vertical-align: middle;}
</style>
</html>