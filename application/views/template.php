<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="en-us" />
<meta name="keywords" content="Holidays rating, Holiday ratings, Holidaysrating, Holiday, Holidayrating, Travelguide, Local Food, Social Travel, Touring, Travel planner, Destinations" />
<meta name="description" content="Make new travel buddies, find information about destinations and it's local food, rate your favorite, upload your movies for everyone to watch or share your favorite travel story... You are our travelguide!" />
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta name="msvalidate.01" content="57D79CCC62433A150A844B2643EEDA50" />
<meta name="p:domain_verify" content="c44cdfaf68409bf31f1eb315512cb084"/>
<meta name="alexaVerifyID" content="f5RvCQMxbBexwzgBhMFCNHolKkI"/>  
<meta name="language" content="English" />
<meta content="Holidaysrating | The Social Travel Community" property="og:title" />
<meta content="http://www.holidaysrating.com" property="og:url" />
<meta content="website" property="og:type" />
<meta content="<?php echo base_url('assets/images/logo/mediumtrans.png') ?>" property="og:image" />

<title>Holidaysrating | The Social Travel Community</title>
<link rel="alternate" type="application/rss+xml" title="Holidaysrating" href="http/:www.holidaysrating.com" />
<?php echo js('assets/js/jquery-2.1.1.min.js') ?>
</head>

<body>
<script type="text/javascript">
var base_url = "<?php echo base_url() ?>";
</script>
<div id="top-head">
<div class="main">
<div class="logo"><?php echo anchor('home/index', img('assets/images/logo/holidaysrating.png')); ?></div>
<div class="homepage-links">
<a href="<?php echo site_url('topmenu/helpcenter') ?>" style="float:right;margin-left:10px;padding-top:11px"><img style="width: 30px; height: 30px;" src="<?php echo base_url('assets/images/helpcenter.png') ?>"/></a>
<a href="<?php echo site_url('auth/register') ?>" rel="nofollow" style="float:right;padding-top:10px"><img src="<?php echo base_url('assets/assets/register.png') ?>" alt="register"/></a> 
</div>
</div>
</div>

<div class="homepage">
<center>
<ul class="line">
<li class="text1"><?php echo anchor('topmenu/worldmap', 'Explore the world') ?></li>
</ul>
<br /><br /><br />
<ul>
<li class="text2">
    <?php if($this->ion_auth->logged_in()): ?>
        <?php echo anchor('user', $this->session->userdata('username')) ?>
    <?php else: ?>
        <?php echo anchor('home/login', 'Login') ?>
    <?php endif ?>
</li>
<li class="text3"><?php echo anchor('topmenu/videodump', 'Videos') ?></li>
</ul>
<br /><br /><br />
<ul>
<li class="text4"><?php echo anchor('topmenu/favorites', 'Favorites') ?></li>
<li class="text5"><?php echo anchor('news/news_index', 'Travelnews') ?></li>
</ul>
<br /><br /><br />
<ul>
<li class="text6"><?php echo anchor('topmenu/latest_stories', 'Stories') ?></li>
<li class="text7"><?php echo anchor('topmenu/social_media', 'Social Media') ?></li>
</ul>
</center>
</div>


<div id="last-line">
<p><?php echo anchor('privacy/privacy_policy', 'Privacy Policy', 'rel = "nofollow"') ?> | <?php echo anchor('privacy/terms_of_use', 'Terms of Use', 'rel = "nofollow"') ?> | <?php echo anchor('home/contact_us', 'Contact Us', 'rel = "nofollow"') ?> | &copy; Copyright <?php echo date('Y') ?> Holidaysrating All Rights Reserved</p>
</div>
<?php echo css('assets/css/holiday.css') ?>
</body>

</html>