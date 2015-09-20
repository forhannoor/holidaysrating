<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Travel Alerts, Alert, Travel Warning, Be aware, Danger" />
<meta name="description" content="Travel Alerts" />
<meta name="author" content="Raymond"/>
<meta name="robots" content="follow"/>
<meta name="revisit-after" content="1 days"/>
<meta name="language" content="English" />
<meta content="<?php echo base_url('assets/images/schelpen.jpg') ?>" property="og:image" />
<meta name="viewport" content="maximum-scale=1"/>

<title><?php echo $heading ?> | Holidaysrating</title>
<?php echo js('assets/js/jquery-2.1.1.min.js') ?>
<?php echo js('assets/js/jquery.jeditable.min.js') ?>
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=187439388064490";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="top-head-view">
<?php $this->load->view($header) ?>
</div>

<div id="banner-view">
<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- ViewTop -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="4609041948"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
</div>
<div id="content">
<h1><?php echo $heading ?></h1>
<div class="clear"></div>
<div class="left-side">
<div class="top-view"></div>
<div class="middle-view">
<div class="my_login">
<?php if($this->ion_auth->logged_in()): ?>
<h2>Welcome</h2>
<?php if(isset($profile_info) && strlen($profile_info->avatar) > 0): ?>
<p class="avatar"><?php echo anchor('user/index', img('./uploads/'.$profile_info->avatar)) ?></p>
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
<center>
<?php echo anchor('auth/register', 'Sign Up!', 'rel = "nofollow"') ?>
&nbsp;&nbsp;&nbsp;
<?php echo anchor('auth/forgot_password', 'Forgot Password?', 'rel = "nofollow"') ?>
</center>
<?php endif ?>
</div>
<img src="<?php echo base_url('assets/images/border.png') ?>" alt="Holiday" style="margin-top:12px" />
<h2>Travel Warning</h2>
<p>Holidaysrating recommend that travellers avoid or consider the risk of travel!<br><br>
If you do decide to go, be aware at all times!</p>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="Holiday" style="margin-top:12px" />
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
<div class="bottom-view"></div>
</div>

<div class="center"><?php include $main ?></div>

<div class="right-side">
<div class="top-view"></div>
<div class="middle-view">
<h2 style="margin-bottom:4px">Are you not a free member yet?</h2>
<p>With a Holidaysrating account you can easily:</p>
<div class="register-list">
<ul>
<li><img src="<?php echo base_url('assets/img/v.png') ?>" alt="v" />Search for information about many destinations over the world</li>
<li><img src="<?php echo base_url('assets/img/v.png') ?>" alt="v" />Create your own cookbook with local recipes</li>
<li><img src="<?php echo base_url('assets/img/v.png') ?>" alt="v" />Find new travelbuddies</li>
<li><img src="<?php echo base_url('assets/img/v.png') ?>" alt="v" />Write your own travel story</li>
<li><img src="<?php echo base_url('assets/img/v.png') ?>" alt="v" />Upload and or watch travel video's</li>
<li><img src="<?php echo base_url('assets/img/v.png') ?>" alt="v" />Many more...</li>
</ul>
</div>
<img src="<?php echo base_url('assets/images/border.png') ?>" alt="border" style="margin-top:8px" />
<h2 style="margin-bottom:10px">Find Us...</h2>
<p>You can also find us on:</p>
<ul>
<li class="buttonlink" style="display:inline;margin-left:9px"><a href="http://www.facebook.com/Holidaysrating" target="_blank"><img src="<?php echo base_url('assets/assets/fb.png') ?>" /></a></li>
<li class="buttonlink" style="display:inline;margin-left:5px"><a href="http://www.twitter.com/holidaysrating" target="_blank"><img src="<?php echo base_url('assets/assets/twitter.png') ?>" /></a></li>
<li class="buttonlink" style="display:inline;margin-left:5px"><a href="https://plus.google.com/u/0/b/102164971831855775546/102164971831855775546/" target="_blank"><img src="<?php echo base_url('assets/assets/google+.png') ?>" /></a></li>
<li class="buttonlink" style="display:inline;margin-left:5px"><a href="http://www.instagram.com/holidaysrating" target="_blank"><img src="<?php echo base_url('assets/assets/instagram.png') ?>" /></a></li>
</ul>
<div class="clear"></div>
<div class="google-right">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!--HomeRight -->
<ins class="adsbygoogle"
     style="display:inline-block;width:180px;height:150px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="7441933540"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
</div>
<div class="bottom-view"></div>
</div>
<div class="clear"></div>
<div id="footer">
<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- ViewBottom -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="3132308742"></ins>
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