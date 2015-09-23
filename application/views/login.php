<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="en-us" />
<meta name="keywords" content="Holidays rating, Holidaysrating, Login, Log in" />
<meta name="description" content="Make new travel buddies, find information about destinations and it's local food, rate your favorite, upload your movies for everyone to watch or share your favorite travel story... You are our travelguide!" />
<meta name="author" content="Holidaysrating.com"/>
<meta name="robots" content="nofollow"/>
<meta name="revisit-after" content="1 days"/>
<meta content="<?php echo base_url('assets/images/logo/mediumtrans.png') ?>" property="og:image" />

<title>Holidaysrating | The Social Travel Community</title>
<?php echo js('assets/js/jquery-2.1.1.min.js') ?>
</head>

<body>
<div id="top-head">
<div class="main">
<div class="logo"><?php echo anchor('home/index', img('assets/images/logo/holidaysrating.png')); ?></div>
<div class="homepage-links">
<a href="http://www.holidaysrating.com/index.php/topmenu/helpcenter" style="float:right;margin-left:10px;padding-top:11px"><img src="<?php echo base_url('assets/images/help.png') ?>"/></a>
<a href="http://www.holidaysrating.com/index.php/auth/register" rel="nofollow" style="float:right;padding-top:10px"><img src="<?php echo base_url('assets/assets/register.png') ?>" alt="register"/></a> 
</div>
</div>
</div>

<div id="slider" style="padding-top:40px">
<div id="login-page">
<?php echo form_open('auth/login') ?>
<?php echo form_label('Email', 'identity') ?>
<?php echo form_input('identity', '', 'required') ?>
<br />
<?php echo form_label('Password', 'password') ?>
<?php echo form_password('password', '', 'required') ?>
<p style = "color: black; margin-top: 8px;">Remember Me
<?php echo form_checkbox('remember', '1', FALSE, 'id="remember"') ?>
</p>
<?php $error = $this->session->flashdata('error') ?>
<?php if(strlen($error) > 0): ?>
<p><?php echo $error ?></p>
<?php endif ?>        
<?php echo form_submit('', 'Login') ?> <a href="#" onClick="history.go(-1)">Cancel</a>
<?php echo form_close() ?>
<br />
<?php echo anchor('auth/forgot_password', 'Forgot Your Password?', 'rel = "nofollow"') ?>
</div>
</div>


<div id="last-line">
<p><?php echo anchor('privacy/privacy_policy', 'Privacy Policy', 'rel = "nofollow"') ?> | <?php echo anchor('privacy/terms_of_use', 'Terms of Use', 'rel = "nofollow"') ?> | <?php echo anchor('home/contact_us', 'Contact Us', 'rel = "nofollow"') ?> | &copy; Copyright <?php echo date('Y') ?> Holidaysrating All Rights Reserved</p>
</div>
<?php echo css('assets/css/holiday.css') ?>
</body>

</html>
