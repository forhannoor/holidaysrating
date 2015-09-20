<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="External Links"/>
<meta name="keywords" content="External links, Links"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta content="<?php echo base_url() ?>assets/images/thumbs/links.jpg" property="og:image" />

<title>External Links | Holidaysrating</title>
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
<div class="extlinks">

<h3>Africa</h3>
<p><a href="http://www.africaguide.com/travel/aff/show_page.php?aid=671&grp=1&id=12" target="_blank"><strong>Africaguide.com</strong></a><br />
Where africa comes to you...</p>

<h3>Asia</h3>
<p><a href="http://www.lombok-wayout.com/Packages/packages.htm" target="_blank"><strong>Mount Rinjani trekking Lombok Indonesia, ASIA</strong></a><br />
Trekking package to mount Rinjani Lombok, Indonesia ASIA.<br />

<a href="http://www.shareasale.com/r.cfm?b=176101&u=778403&m=22113&urllink=&afftrack=" target="_blank"><strong>Exotissimo.com</strong></a><br />
Tailor Made Travel In Southeast Asia since 1993.<br /></p>

<h3>Caribbean</h3>

<h3>Central America</h3>

<h3>Europe</h3>
<p><a href="http://www.istriasun.com" target="_blank"><strong>Istriasun.com</strong></a><br />
"Travel and accommodation in Istria. First minute offers, last minute offers and special offers for holidays and vacation in Istria.<br /></p>

<h3>North America</h3>

<h3>Oceania</h3>

<h3>South America</h3>

<h3>Other Travel Links</h3>
<p><a href="http://www.shareasale.com/r.cfm?b=44&u=778403&m=47&urllink=&afftrack=" target="_blank"><strong>Shareasale.com</strong></a><br />
Join Share A Sale and earn cash!</p>
<p>Holidaysrating | The social travel community is recommended by <a href="http://www.voyagelinks.com" target="_blank"><strong>http://www.voyagelinks.com</strong></a></p>

</div>
</div>


<div class="right-side">
<div class="top"></div>
<div class="middle">
<p><span>You are here&gt;<?php echo anchor('home/index', 'Home') ?>&gt; External Links</span></p>
<h2>Link to us...</h2>
<p>Do you like our website, why not link to it from your website? It's easy.</p>

<div class="buttonlink"><center><?php echo anchor('help/link_to_us', img('assets/assets/link.PNG')); ?></center></div>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" style="margin-top:12px" />

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

<div class="clear"></div>

</div>
<div class="bottom"></div>
</div>
<div class="clear"></div>
<div id="footer">

<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Help Bottom -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="2369939146"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
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
