<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="en-us" />
<meta name="keywords" content="Holidays rating, Holidaysrating, Login, Log in" />
<meta name="description" content="Make new travel buddies, find information about destinations and it's local food, rate your favorite, upload your movies for everyone to watch or share your favorite travel story... You are our travelguide!" />
<meta name="author" content="Raymond"/>
<meta name="robots" content="nofollow"/>
<meta name="revisit-after" content="1 days"/>
<meta content="<?php echo base_url('assets/images/logo/mediumtrans.png') ?>" property="og:image" />
<meta name="viewport" content="maximum-scale=1"/>

<title>Holidaysrating | The Social Travel Community</title>
<?php echo js('assets/js/jquery-2.1.1.min.js') ?>
</head>

<body>
<div id="top-head">
<div class="main">
<div class="logo"><?php echo anchor('home/index', img('assets/images/logo/holidaysrating.png')); ?></div>
</div>
</div>

<div id="login-page">
<?php $this->load->view('auth/my_login') ?>
<br />
<?php echo anchor('auth/forgot_password', 'Forgot Password', 'rel = "nofollow"') ?>
&nbsp;&nbsp;&nbsp;
<?php echo anchor('auth/register', 'Register', 'rel = "nofollow"') ?>
</div>




<p><?php echo anchor('privacy/privacy_policy', 'Privacy Policy', 'rel = "nofollow"') ?> | <?php echo anchor('privacy/terms_of_use', 'Terms of Use', 'rel = "nofollow"') ?> | <?php echo anchor('home/contact_us', 'Contact Us', 'rel = "nofollow"') ?> | &copy; Copyright <?php echo date('Y') ?> Holidaysrating All Rights Reserved</p>
</body>

</html>
