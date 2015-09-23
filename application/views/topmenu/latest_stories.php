<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="en-us" />
<meta name="keywords" content="Holidays rating, Holidaysrating, Under Construction" />
<meta name="description" content="Make new travel buddies, find information about destinations and it's local food, rate your favorite, upload your movies for everyone to watch or share your favorite travel story... You are our travelguide!" />
<meta name="author" content="Holidaysrating.com"/>
<meta name="robots" content="nofollow"/>
<meta name="revisit-after" content="1 days"/>
<meta content="<?php echo base_url('assets/images/logo/mediumtrans.png') ?>" property="og:image" />

<title>Costruction | The Social Travel Community</title>
<?php echo js('assets/js/jquery-2.1.1.min.js') ?>
</head>

<body>
<div id="top-head">
<div class="main">
<div class="logo"><?php echo anchor('home/index', img('assets/images/logo/holidaysrating.png')); ?></div>
<div class="menu">
<ul>
<li><?php echo anchor('topmenu/worldmap', 'WORLDMAP') ?></li>
<li><?php echo anchor('topmenu/videodump', 'VIDEOS') ?></li>
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

<div id="slider" style="padding-top:40px">
<div id="topmenu-block">
<p>Welcome to our social travel community. We are still under construction. Our team is working hard to write text and upgrade our functions and profile system. Stay in touch and follow our upgrades. Contct us for ideas, comments or complaints.</p>
</div>
</div>


<div id="last-line">
<p><?php echo anchor('privacy/privacy_policy', 'Privacy Policy', 'rel = "nofollow"') ?> | <?php echo anchor('privacy/terms_of_use', 'Terms of Use', 'rel = "nofollow"') ?> | <?php echo anchor('home/contact_us', 'Contact Us', 'rel = "nofollow"') ?> | &copy; Copyright <?php echo date('Y') ?> Holidaysrating All Rights Reserved</p>
</div>
<?php echo css('assets/css/holiday.css') ?>
</body>

</html>
