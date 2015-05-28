<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Watch travel videos on Holidaysrating...!"/>
<meta name="keywords" content="Video dump, video, videodump, vacation, party movie, travelvideo, travelmovie, holiday, travel, holidaystube, holidaysplayer"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta content="<?php echo base_url() ?>assets/images/thumbs/videodump.jpg" property="og:image" />

<title>Videodump | Holidaysrating</title>
<?php echo js('assets/js/jquery-2.1.1.min.js') ?>
<?php echo js('assets/js/jquery.jeditable.min.js') ?>
</head>

<body>
<div id="top-head">
<div class="main">
<div class="logo"><img src="<?php echo base_url('assets/images/logo/holidaysrating.png') ?>" alt="Holidaysrating" title="Holidaysrating" /></div>
<div class="menu">
<ul>
<li><?php echo anchor('home/index', 'HOME') ?></li>
<li><?php echo anchor('user/index', 'MY PROFILE') ?></li>
<li><?php echo anchor('topmenu/worldmap', 'WORLDMAP') ?></li>
<li class="active"><?php echo anchor('topmenu/videodump', 'VIDEODUMP') ?></li>
<li><?php echo anchor('topmenu/favorites', 'FAVORITES') ?></li>
<li><?php echo anchor('news/news_index', 'TRAVELNEWS') ?></li>
<li><?php echo anchor('topmenu/helpcenter', 'HELP') ?></li>
</ul>
</div>
</div>
</div>

<div id="banner">
<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- VideoTop -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="7824813946"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

</div>

<div id="content">
<h1><?php echo $heading ?></h1>
<div class="clear"></div>
<div class="left-side">
<div class="top"></div>
<div class="middle">
<div class="my_login">
<?php $this->load->view($sidebar) ?>
</div>
</div>
<div class="bottom"></div>
</div>

<div class="center">
<div class="selectVideo">

<?php echo $this->session->flashdata('msg') ?>

<h1>latest videos</h1>
<div class="top"></div>
<div class="middleVideo">
    <?php foreach($videos as $video): ?>
    <?php if(strlen($video->thumbnail) > 0): ?>
    <?php $thumbnail = array('src' => 'uploads/media/videos/' . $video->thumbnail, 'title' => $video->title) ?>
    <?php else: ?>
    <?php $thumbnail = array('src' => 'assets/images/thumbnail.jpg', 'title' => $video->title) ?>
    <?php endif ?>
    <?php echo anchor('topmenu/video/' . $video->name, img($thumbnail)) ?>
    <?php endforeach ?>
</div>
<div class="bottom"></div>
<br/>
<h1>Choose a region</h1>
<ul>
<li><?php echo anchor('topmenu/videodump/africa', img('assets/images/flags/africa.jpg')); ?></li>
<li><?php echo anchor('topmenu/videodump/antarctica', img('assets/images/flags/antarctica.jpg')); ?></li>
<li><?php echo anchor('topmenu/videodump/asia', img('assets/images/flags/asia.jpg')); ?></li>
</ul>
<ul>
<li><?php echo anchor('topmenu/videodump/caribbean', img('assets/images/flags/caribbean.jpg')); ?></li>
<li><?php echo anchor('topmenu/videodump/central_america', img('assets/images/flags/central-america.jpg')); ?></li>
<li><?php echo anchor('topmenu/videodump/europe', img('assets/images/flags/europe.jpg')); ?></li>
</ul>
<ul>
<li><?php echo anchor('topmenu/videodump/north_america', img('assets/images/flags/north-america.jpg')); ?></li>
<li><?php echo anchor('topmenu/videodump/oceania', img('assets/images/flags/oceania.jpg')); ?></li>
<li><?php echo anchor('topmenu/videodump/south_america', img('assets/images/flags/south-america.jpg')); ?></li>
</ul>


</div>
<div class="clear"></div>
<div class="latest-news">
</div>

</div>


<div class="right-side">
<div class="top"></div>
<div class="middle">
<p><span>You are here&gt;<?php echo anchor('home/index', 'Home') ?>&gt;Videodump</span></p>
<h2 style="margin:-7px 0 7px 0">Videos</h2>
<p>Select a region and watch the movies... You can also share your own holiday experience! Upload your video and become our travel guide..</p>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="videodump" />
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
<img src="<?php echo base_url() ?>assets/images/border.png" alt="videodump" style="margin-top:12px"/>

<h2 style="margin-bottom:5px">Travel News</h2>
<p>Make sure you are up-to-date, read the latest <?php echo anchor('news/main_news', 'News') ?> on Holidaysrating!.</p>

<div class="clear"></div>

<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" style="margin-top:8px"/>

<div class="google-right">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- VideodumpRight -->
<ins class="adsbygoogle"
     style="display:inline-block;width:180px;height:150px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="2276703946"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>


</div>
<div class="bottom"></div>
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

<div class="first-column">
<ul>
<li><?php echo anchor('home/index', 'HOME') ?></li>
<li><?php echo anchor('user/index', 'MY PROFILE') ?></li>
<li class="active"><?php echo anchor('topmenu/videodump', 'VIDEODUMP') ?></li>
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
<li><?php echo anchor('news/news_index', 'TRAVEL NEWS') ?></li>
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