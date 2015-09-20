<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Follow Raymond in Dominica, Caribbean"/>
<meta name="keywords" content=" Raymond in Dominica, Dominica "/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta content="<?php echo base_url('assets/images/holidays-blog.JPG') ?>" property="og:image" />

<?php if(isset($title)): ?>
<title><?php echo $title ?></title>
<?php endif ?>
<?php echo js('assets/js/jquery-2.1.1.min.js') ?>
<?php echo js('assets/js/jquery.jeditable.min.js') ?>
</head>

<body>
<div id="top-head-blog">
<?php $this->load->view($header) ?>
</div>

<div id="banner-blog">
<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- BlogTop -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="8976705944"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
</div>
<div id="content">
<?php if(isset($heading)): ?>
<h1><?php echo $heading ?></h1>
<?php endif ?>
<div class="clear"></div>
<div class="left-side">
<div class="top-blog"></div>
<div class="middle-blog ">
<div class="my_login">
<?php $this->load->view($sidebar) ?>
</div>
</div>
<div class="bottom-blog"></div>
</div>
<div class="center">
<style>
.hot img{
    max-width: 100%;
    height: auto;
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.center input[type=text]{
    margin-bottom: 10px;
}
</style>

<script type="text/javascript">
$(document).ready(function(){
    $("div[class=hot] a img").click(function(){
        var imgSrc = $(this).attr('src'); 
        window.open(imgSrc, '_blank');
        return false;
    });
});
</script>
<?php $msg = $this->session->flashdata('msg') ?>
<?php if(strlen($msg) > 0): ?>
<h2 class="alert"><?php echo $msg ?></h2>
<?php  endif?>
<?php include $main ?>
</div>
<div class="right-side">
<div class="top-blog"></div>
<div class="middle-blog">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt;Blog</span></p>
<?php echo anchor('http://www.holidaysrating.com/blog_rss.xml', img('assets/images/news/rss.png')); ?><p style="font-size:9px;float:right;margin:8px 10px 0 0">Subscribe to our blog <?php echo anchor('http://www.holidaysrating.com/rss.xml', 'RSS') ?> Feed!</p>
<h2 style="margin-bottom:7px">Submit your story</h2>
<p>What is your favorite destination? Want to become our travelguide? Click on the button below to submit your story.</p>
<div class="buttonlink"><center><?php echo anchor('story/create', img('assets/assets/story.png')); ?></center></div>
<img src="<?php echo base_url('assets/images/border.png') ?>" alt="border"/>
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
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" style="margin-top:8px"/>

<div class="google-right">
<script async src="http:/pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- BlogRight -->
<ins class="adsbygoogle"
     style="display:inline-block;width:180px;height:150px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="5869298745"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

</div>
<div class="bottom-blog"></div>
</div>
<div class="clear"></div>
<div id="footer">
<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- BlogBottom -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="1453439146"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<div class="clear"></div>
<?php $this->load->view($footer) ?>
<div class="logo"><center><img src="<?php echo base_url('assets/images/sand.jpg') ?>" width="125px" height="80px" alt="logo" /></center>
</div>
<div class="clear"></div>
<?php $this->load->view($last_line) ?>
</div>
</div>
<?php echo css('assets/css/holiday.css') ?>
</body>
</html>