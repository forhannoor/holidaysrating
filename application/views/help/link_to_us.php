<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Link to us"/>
<meta name="keywords" content="Link to us, Reciprocal link"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta content="<?php echo base_url() ?>assets/images/thumbs/links.jpg" property="og:image" />

<title>Link to us | Holidaysrating</title>
<?php echo js('assets/js/jquery-2.1.1.min.js') ?>
</head>

<body>
<div id="top-head">
<?php $this->load->view($header) ?>
</div>

<div id="banner">
<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Help Top -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="8416472740"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>

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
<p>Do you like our website, why not link to it from your website? It's easy. You can choose between the following methods:</p>

<center><h3 style="margin:15px 0px 5px 0px"><strong>- Textual Link -</strong></h3></center>
<p><a href="http://www.holidaysrating.com"><strong>Holidaysrating | The Social Travel Community</strong></a><br />
If you are looking for travel information, want to share your holiday experience or find the best destinations.. Be our travelguide!</p>

<form style="margin-top:25px">
<p><textarea rows="5" name="TextLink" style="width:95%;margin-left:7px;border:thin black solid;padding:4px">&lt;p&gt;&lt;a href=&quot;http://www.holidaysrating.com&quot;&gt; &lt;strong&gt;Holidaysrating | The Social Travel Community&lt;/strong&gt; &lt;/a&gt;&lt;br&gt;
If you are looking for travel information, want to share your holiday experience or find the best destinations.. Be our travelguide!&lt;/p&gt;
</textarea></p>
</form>
<h4 style="font-style:italic;margin-top:7px">Copy and paste this code into your website.</h4> 

<center><h3 style="margin-top:25px"><strong>- Banners -</strong></h3></center>
<h4 style="font-style:italic;margin-top:5px"><span style="color:red">Important:</span> Please download these images first (by right clicking and selecting "Save Picture as"), and uploading to your server.</h4> 
<p style="text-align:center;margin-top:7px">468x60px</p>
<img src="<?php echo base_url() ?>assets/img/medium_blue.png" alt="Holidaysrating" />
<br /><br />
<img src="<?php echo base_url() ?>assets/img/medium_purple.png" alt="Holidaysrating" />
<br /><br />
<img src="<?php echo base_url() ?>assets/img/medium_yellow.png" alt="Holidaysrating" />

</div>


<div class="right-side">
<div class="top"></div>
<div class="middle">
<p><span>You are here&gt;<?php echo anchor('home/index', 'Home') ?>&gt; <?php echo anchor('help/external_links', 'External Links') ?>&gt; Link to us</span></p>
<h2>Reciprocal Link</h2>
<p>If you like our website and want to have your own link on our website? Send us a message with all the details and we will add you. Just make sure you add a reciprocal link into yours.</p>

<div class="buttonlink"><center><?php echo anchor('home/contact_us', img('assets/assets/contact.png')); ?></center></div>
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

<div class="google-right">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- HelpcenterRight -->
<ins class="adsbygoogle"
     style="display:inline-block;width:180px;height:150px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="7441933540"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

</div>
<div class="bottom"></div>
</div>
<div class="clear"></div>

<div id="footer" style="background:none">
<div class="google" style="height:340px">
<p>728x90px</p>
<img src="<?php echo base_url() ?>assets/img/large_blue.png" alt="Holidaysrating" />
<br /><br />
<img src="<?php echo base_url() ?>assets/img/large_purple.png" alt="Holidaysrating" />
<br /><br />
<img src="<?php echo base_url() ?>assets/img/large_white.png" alt="Holidaysrating" />
</div>

<div class="clear"></div>
<?php $this->load->view($footer) ?>
<div class="logo"><center><img src="<?php echo base_url() ?>assets/images/logo/xsmall.png" alt="logo" /></center>
<div class="slogin">Holidays<span>rating</span>
</div>
</div>
<div class="clear"></div>
<?php $this->load->view($last_line) ?>
</div>
</div>
<?php echo css('assets/css/holiday.css') ?>
</body>
</html>
