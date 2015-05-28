<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Favorites.. Ancient wonders"/>
<meta name="keywords" content="wonders, ancient wonders, favorites, favoriteslist, top 10 wonders around the world"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta content="<?php echo base_url() ?>assets/images/thumbs/fav4.jpg" property="og:image" />

<title>Ancient wonders | Holidaysrating</title>
<?php echo js('assets/js/jquery-2.1.1.min.js') ?>
<?php echo js('assets/js/jquery.jeditable.min.js') ?>
</head>

<body>
<div id="top-head-favorites">
<?php $this->load->view($header) ?>
</div>

<div id="slider-favorites">
<?php $this->load->view('bxslider') ?>
</div>

<div id="content">
<h1><?php echo $heading ?></h1>
<div class="clear"></div>
<div class="left-side">
<div class="top-favorites"></div>
<div class="middle-favorites">
<div class="my_login">
<?php $this->load->view($sidebar) ?>
</div>
</div>
<div class="bottom-favorites"></div>
</div>

<div class="center">
<div class="hot">
<div class="edit1">
<h1>Introduction</h1>
<p>The 7 wonders from the ancient world. On this original list, the only one still in existence is the Great pyramid of Giza:</p>
<ul>
<li>Great pyramid of Giza, <a href="http://www.holidaysrating.com/index.php/africa_countries/egypt">Egypt</a></li>
<li>Hanging Gardens of Babylon, <a href="http://www.holidaysrating.com/index.php/asia_countries/iraq">Iraq</a> - destroyed by earthquakes</li>
<li>Temple of Artemis, <a href="http://www.holidaysrating.com/index.php/asia_countries/turkey">Turkey</a> - destroyed by plundering</li>
<li>Statue of Zeus, <a href="http://www.holidaysrating.com/index.php/europe_countries/greece">Greece</a> - dissasembled and later destroyed by fire</li>
<li>Mausoleum at Halicarnassus, <a href="http://www.holidaysrating.com/index.php/asia_countries/turkey">Turkey</a> - destroyed by earthquakes</li>
<li>Collossus of Rhodes, <a href="http://www.holidaysrating.com/index.php/asia_countries/turkey">Turkey</a> - destroyed by earthquake</li>
<li>Lighthouse of Alexandria, <a href="http://www.holidaysrating.com/index.php/africa_countries/egypt">Egypt</a> - destroyed by earthquake</li>
</ul>
<p>The followig is a list of man made wonders:.</p>
<ul>
<li>Taj mahal, <a href="http://www.holidaysrating.com/index.php/asia_countries/india">India</a></li>
<li>Chichen Itza, <a href="http://www.holidaysrating.com/index.php/cantral_america_countries/mexico">Mexico</a></li>
<li>Christ the Redeemer, <a href="http://www.holidaysrating.com/index.php/south_america_countries/brazil">Brazil</a></li>
<li>Colosseum, <a href="http://www.holidaysrating.com/index.php/europe_countries/italy">Italy</a></li>
<li>Great wall of China, <a href="http://www.holidaysrating.com/index.php/asia_countries/china">China</a></li>
<li>Machu Picchu, <a href="http://www.holidaysrating.com/index.php/south_america_countries/peru">Peru</a></li>
<li>Petra, <a href="http://www.holidaysrating.com/index.php/asia_countries/jordan">Jordan</a></li>
</ul>
<p>Below is the list of 7 natural wonders:</p>
<ul>
<li>Grand canyon, <a href="http://www.holidaysrating.com/index.php/regions/usa">Turkey</a></li>
<li>Great Barrier Reef, <a href="http://www.holidaysrating.com/index.php/regions/australia">Australia</a></li>
<li>Harbor of Rio de Janeiro, <a href="http://www.holidaysrating.com/index.php/south_america_countries/brazil">Brazil</a></li>
<li>Mount Everest, <a href="http://www.holidaysrating.com/index.php/asia_countries/nepal">Nepal</a> </li>
<li>Aurora, Artic and <a href="http://www.holidaysrating.com/index.php/regions/antarctica">Antarctica</a> </li>
<li>Paricutin, vulcano, <a href="http://www.holidaysrating.com/index.php/cantral_america_countries/mexico">Mexico</a></li>
<li>Victoria Falls, <a href="http://www.holidaysrating.com/index.php/africa_countries/zambia">Zambia</a> and <a href="http://www.holidaysrating.com/index.php/africa_countries/zimbabwe">Zimbabwe</a></li>
</ul>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed1') ?>
<?php endif ?>


</div>
</div>


<div class="right-side">
<div class="top-favorites"></div>
<div class="middle-favorites">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt; <?php echo anchor('topmenu/favorites', 'Favorites') ?>&gt;Ancient wonders</span></p>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" />

<?php $this->load->view($right_bar_fav) ?>

<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" />
<h2>Links</h2>

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
<div class="bottom-favorites"></div>
</div>
<div class="clear"></div>


</div>
<div id="footer">

<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Favorites -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="1313838340"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<div class="clear"></div>
<?php $this->load->view($footer) ?>
<div class="logo"><center><img src="<?php echo base_url() ?>assets/images/globe-slogin.jpg" alt="logo" /></center>
</div>
<div class="clear"></div>
<?php $this->load->view($last_line) ?>
</div>
<?php echo css('assets/css/holiday.css') ?>
</body>
<?php $path = __FILE__ ?>
<?php $this->session->set_userdata('path', $path) ?>

<?php if($this->ion_auth->is_editor()): ?>
<script type="text/javascript">
var siteUrl = "<?php echo site_url('editor/update') ?>";

$(document).ready(function() {
    
    $('.edit1').editable(siteUrl + '/1', {
        type      : 'textarea',
        cancel    : 'Cancel',
        submit    : 'OK',
        tooltip   : 'Click pencil to edit...',
        event     : 'edit'
    });
    
    $('#ed1').bind('click', function(){
        $('.edit1').trigger('edit');
        return false;
    });
    
});
</script>
<?php endif ?>
</html>