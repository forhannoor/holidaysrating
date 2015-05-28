<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="description" content="Holidaysrating Travel News"/>
<meta name="keywords" content="News, Travel News, Holidaysrating News"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta content="<?php echo base_url() ?>assets/images/blacklogo-big.JPG" property="og:image" />

<title>Travel News | Holidaysrating</title>
<link rel="alternate" type="application/rss+xml" title="Holidaysrating" href="http/:www.holidaysrating.com" />
<?php echo js('assets/js/jquery-2.1.1.min.js') ?>
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

<div id="top-head-news">
<div class="main">
<div class="logo"><img src="<?php echo base_url('assets/images/logo/holidaysrating.png') ?>" alt="Holidaysrating" title="Holidaysrating" /></div>
<div class="menu">
<ul>
<li><?php echo anchor('home/index', 'HOME') ?></li>
<li><?php echo anchor('user/index', 'MY PROFILE') ?></li>
<li><?php echo anchor('topmenu/worldmap', 'WORLDMAP') ?></li>
<li><?php echo anchor('topmenu/videodump', 'VIDEODUMP') ?></li>
<li><?php echo anchor('blog/blog_index', 'BLOG') ?></li>
<li class="active"><?php echo anchor('news/news_index', 'TRAVELNEWS') ?></li>
<li><?php echo anchor('topmenu/helpcenter', 'HELPCENTER') ?></li>
</ul>
</div>
</div>
</div>
<div id="banner-news">
<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- MainNews Top -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="7747638341"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

</div>


<div id="content">
<center><img src="<?php echo base_url() ?>assets/images/news/travel-news.png" alt="Travel News" /></center>
<div class="clear"></div>
<div class="left-side">
<div class="top-news"></div>
<div class="middle-news">
<div class="my_login">
<?php $this->load->view($sidebar) ?>
</div>
</div>
<div class="bottom-news"></div>
</div>


<div class="center" style="background-color:#EBEBEB">
<div class="travel-news" style="height:100%">
<ul class="news-blocks" style="list-style:none">
<li>
<h3 style="border-top:none">Updated: 14 December 2013</h3>
<p><img src="<?php echo base_url() ?>assets/images/travel-alert.jpg" alt="travel-alert" />
Travel alerts, make sure you know everything about your trip. Is it safe to go?  <br />
<?php echo anchor('news/travel_alerts', 'Read more') ?></p>
</li>
<li>
<h3>14 December 2013</h3>
<p><img src="<?php echo base_url() ?>assets/images/news/news-pics/cairo-snow.jpg" alt="Snow in Cairo" />
Snow in Cairo for the first time in 112 years! When you think of Cairo, you definetly don't think on snow and freezing cold... <br />
<?php echo anchor('news/snow_in_cairo', 'Read more') ?></p>
</li>
<li>
<h3>20 Januari 2013</h3>
<p><img src="<?php echo base_url() ?>assets/images/sand.jpg" alt="holidaysrating" />
Holidaysrating is a new, fun and social website where you can search for information, vote for your favorite destination or share your holiday experience! <br />
<?php echo anchor('news/travel_alerts', 'Read more') ?></p>
</li>
</ul>

</div>
<div class="clear"></div>
<div class="fb-follow" style="margin:30px 0 5px 34px" data-href="https://www.facebook.com/Holidaysrating" data-width="400" data-height="20" data-colorscheme="light" data-layout="standard" data-show-faces="false"></div>

</div>


<div class="right-side">
<div class="top-news"></div>
<div class="middle-news">
<p><span>You are here&gt;<?php echo anchor('home/index', 'Home') ?>&gt;Travel News</span></p>

<div style="float:left"><?php echo anchor('http://www.holidaysrating.com/rss.xml', img('assets/images/news/rss.png')); ?></div>
<p style="font-size:10px;margin-left:4px">Subscribe to our <?php echo anchor('http://www.holidaysrating.com/rss.xml', 'RSS') ?> Feed!</p>

<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" style="margin-top:8px"/>
<h2 style="margin-bottom:6px">Holidaysrating</h2>
<iframe width="192" height="120" style="margin-bottom:7px" src="http://www.youtube-nocookie.com/embed/nihFnlZKiGY" frameborder="0" allowfullscreen></iframe>
<h2 style="margin-bottom:6px">Read also...</h2>
<p>Visit our <?php echo anchor('blog/blog_index', 'blog') ?> and read the travel stories of other members and/ or guest writers!</p>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" />
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

<div class="clear"></div>

</div>
<div class="bottom-news"></div>
</div>
<div class="clear"></div>
<div id="footer">

<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- MainNews Bottom -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="1917881143"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<div class="clear"></div>
<div class="first-column">
<ul>
<li><?php echo anchor('home/index', 'HOME') ?></li>
<li><?php echo anchor('user/index', 'MY PROFILE') ?></li>
<li><?php echo anchor('topmenu/videodump', 'VIDEODUMP') ?></li>
<li><?php echo anchor('topmenu/worldmap', 'WORLDMAP') ?></li>
</ul>
</div>
<div class="first-column">
<ul>
<li><?php echo anchor('regions/africa', 'AFRICA') ?></li>
<li><?php echo anchor('regions/asia', 'ASIA') ?></li>
<li><?php echo anchor('regions/caribbean', 'CARIBBEAN') ?></li>
<li><?php echo anchor('regions/central_america', 'CENTRAL AMERICA') ?></li>
</ul>
</div>
<div class="first-column">
<ul>
<li><?php echo anchor('regions/europe', 'EUROPE') ?></li>
<li><?php echo anchor('regions/north_america', 'NORTH AMERICA') ?></li>
<li><?php echo anchor('regions/oceania', 'OCEANIA') ?></li>
<li><?php echo anchor('regions/south_america', 'SOUTH AMERICA') ?></li>
</ul>
</div>
<div class="first-column">
<ul>
<li><?php echo anchor('topmenu/favorites', 'FAVORITES') ?></li>
<li class="active"><?php echo anchor('news/news_index', 'TRAVEL NEWS') ?></li>
<li><?php echo anchor('blog/blog_index', 'BLOG') ?></li>
<li><?php echo anchor('topmenu/helpcenter', 'HELPCENTER') ?></li>
</ul>
</div>
<div class="logo"><center><img src="<?php echo base_url() ?>assets/images/photos.jpg" alt="logo" /></center>
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
