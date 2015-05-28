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
<meta content="<?php echo base_url('assets/images/schelpen.jpg') ?>" property="og:image" />

<?php if(isset($video)): ?>
    <title><?php echo $video->title ?></title>
<?php endif ?>

<?php echo js('assets/js/jquery-2.1.1.min.js') ?>
<?php echo js('assets/js/projekktor-1.3.09.min.js') ?>
<?php echo js('assets/js/jquery.jeditable.min.js') ?>
</head>

<style type="text/css">
.thumbnails img{width: 70px;height: auto;}
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
<video class="projekktor" poster="media/intro.png" width="auto" height="385" controls id="player_a">
    <source src="<?php echo base_url('uploads/media/videos/' . $video->name) ?>" type="video/<?php echo $extension ?>" />
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
<?php $this->load->view($sidebar) ?>
</div>
</div>
<div class="bottom-player"></div>
</div>

<div class="center"><?php $this->load->view($main) ?></div>
<div class="right-side">
<div class="top-player"></div>
<div class="middle-player">

<h2>Related Videos</h2>
<table class="thumbnails">
<?php foreach($related_videos as $r): ?>
<?php $thumbnail = array('src' => strlen($r->thumbnail) > 0 ? 'uploads/media/videos/' . $r->thumbnail : 'assets/images/thumbnail.jpg', 'title' => $r['title']) ?>
<tr>
    <td><p><?php echo anchor('topmenu/video/'.$r['name'], img($thumbnail), array('target' => '_blank')) ?></p></td>
    <td><p><?php echo $r['title'] ?></p></td>
</tr>
<?php endforeach ?>
</table>

<h2 style="margin-bottom:6px">Travel with us...</h2>
<p>Make new travel buddies, find information about destinations and vote for your favorite, upload your movies for everyone to watch or share your favorite travel story... <br /><br />
Join <?php echo anchor('home/index', 'Holidaysrating') ?> now and become a <strong>FREE</strong> member... <strong>No creditcard or payments needed!</strong></p>
<img src="<?php echo base_url('assets/images/border.png') ?>" alt="border" />
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

