<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Holiday rating, Destinations, Holidaysrating, Holiday review, Travelguide, Touring, Travel video's, Explore the world, Continents of the world, my next trip, traveltips, travelideas, holidaytips, holidayideas" />
<meta name="description" content="Make new travel buddies, find information about destinations and it's local food, vote for your favorite, upload your movies for everyone to watch or share your favorite travel story... Join holidaysrating, we want you to become our travelguide!" />
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
<?php $this->load->view($sidebar) ?>
</div>
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