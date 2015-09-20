<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="description" content="Welcome to our new website..."/>
<meta name="keywords" content="new website, holidaysrating.com"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta content="<?php echo base_url() ?>assets/images/blacklogo-big.JPG" property="og:image" />

<title>New website | Travel News Holidaysrating</title>
<?php echo js('assets/js/jquery-2.1.1.min.js') ?>
</head>

<body>
<div id="top-head-news">
<?php $this->load->view($header) ?>
</div>

<div id="banner-news">
<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- NewsTop -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="9224371548"></ins>
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


<div class="center">
<div class="hot" style="border:thin gray solid;background-color:#EBEBEB;padding:7px">
<img src="<?php echo base_url() ?>assets/images/sand.jpg"/>
<p style="text-align:center"><strong>New Website</strong></p>
<p>Holidaysrating is a new, fun and social website where you can search for information, vote for your favorite destination or share your holiday experience!< br />
This website is still under construction, our team is trying their best to insert all the information. Please be patient and for any questions do not hesitate to contact us!</p>
<p><a href="#" onClick="history.go(-1)">Previous Page</a></p>

</div>
<div class="clear"></div>
<div class="comment">
<img src="<?php echo base_url() ?>assets/images/comments.png" alt="comment" style="margin-left:300px" /><?php echo anchor('user/make_comment/new_website', 'Leave a comment') ?>
</div>
</div>


<div class="right-side">
<div class="top-news"></div>
<div class="middle-news">
<p><span>You are here&gt;<?php echo anchor('home/index', 'Home') ?>&gt;<?php echo anchor('news/news_index', ' Travel News') ?>&gt;New Website</span></p>

<?php $this->load->view($right_bar_news) ?>

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
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" style="margin-top:8px"/>

<div class="google-right">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- NewsRight -->
<ins class="adsbygoogle"
     style="display:inline-block;width:180px;height:150px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="5546397940"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

<h2 style="margin-top:5px">Follow us</h2>
<p>Subscribe to our <?php echo anchor('http://www.holidaysrating.com/rss.xml', 'RSS') ?> Feed!</p>
</div>
<div class="bottom-news"></div>
</div>
<div class="clear"></div>
<div id="footer">

<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- NewsBottom -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="1701104741"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<div class="clear"></div>
<?php $this->load->view($footer) ?>
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
