<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo $heading ?>"/>
<meta name="keywords" content="<?php echo $heading ?>"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta name="language" content="English" />
<meta content="<?php echo base_url() ?>assets/images/thumbs/caribbean.jpg" property="og:image" />
<meta name="viewport" content="maximum-scale=1"/>

<title><?php echo $heading ?> | Caribbean</title>
<?php echo js('assets/js/jquery-2.1.1.min.js') ?>
<?php echo js('assets/js/jquery.jeditable.min.js') ?>
</head>

<body>
<div id="top-head">
<?php $this->load->view($header) ?>
</div>

<div id="slider-caribbean" >
<center><img src="<?php echo base_url() ?>assets/images/regions/caribbean/leeward-antilles.png" alt="Leeward Antilles" title="Leeward Antilles"/></center>
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
<div class="hot">
<h1>INTRODUCTION</h1>
<div class="edit19">
<p><strong>The Leeward Antilles</strong> are a subgroup of tropical islands situated in the <a href="http://www.holidaysrating.com/index.php/regions/caribbean">Caribbean</a>. The most southwestern part of the <a href="http://www.holidaysrating.com/index.php/regions/lesser_antilles">Lesser Antilles</a>.</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed19') ?>
<?php endif ?>

<br /><br />
<p style="margin-bottom:20px;text-align:center">The following islands are part of the Leeward Antilles:</p>
	<table style="width: 100%">
		<tr>
			<td><?php echo anchor('caribbean_countries/aruba', 'Aruba') ?></td>
			<td><?php echo anchor('caribbean_countries/curacao', 'Curacao') ?></td>
		</tr>
		<tr>
			<td><?php echo anchor('caribbean_countries/bonaire', 'Bonaire') ?></td>
			<td><?php echo anchor('central_america_countries/venezuela', 'Other Venezuela islands') ?></td>
		</tr>
	</table>
</div>
<div class="clear"></div>

</div>

<div class="right-side">
<div class="top"></div>
<div class="middle">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt;<?php echo anchor('topmenu/worldmap', 'Worldmap') ?>&gt;<?php echo anchor('regions/central_america', 'Worldmap') ?>&gt; <?php echo anchor('regions/caribbean', 'Caribbean') ?>&gt; <?php echo $heading ?></span></p>
<iframe width="175" height="120" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d997899.2639378032!2d-68.70207106071056!3d12.312823868488498!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e849c8ff46a87e3%3A0xcfcbd36f2fd9ab56!2sLeeward+Islands%2C+Cura%C3%A7ao!5e0!3m2!1sen!2sau!4v1415179716161"></iframe>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" style="margin-top:8px"/>
<h2>Like it..</h2>
<div class="social">
<!-- AddThis Button BEGIN -->
<div>
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
<!-- CaribbeanCountriesRight -->
<ins class="adsbygoogle"
     style="display:inline-block;width:180px;height:150px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="8006331944"></ins>
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
<!-- Caribbean -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="9318443144"></ins>
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
<li><?php echo anchor('regions/antarctica', 'ANTARCTICA') ?></li>
<li><?php echo anchor('regions/asia', 'ASIA') ?></li>
<li class="active"><?php echo anchor('regions/caribbean', 'CARIBBEAN') ?></li>
</ul>
</div>
<div class="first-column">
<ul>
<li><?php echo anchor('regions/central_america', 'CENTRAL AMERICA') ?></li>
<li><?php echo anchor('regions/europe', 'EUROPE') ?></li>
<li><?php echo anchor('regions/middle_east', 'MIDDLE EAST') ?></li>
<li><?php echo anchor('regions/north_america', 'NORTH AMERICA') ?></li>
</ul>
</div>
<div class="first-column">
<ul>
<li><?php echo anchor('regions/oceania', 'OCEANIA') ?></li>
<li><?php echo anchor('regions/south_america', 'SOUTH AMERICA') ?></li>
<li><?php echo anchor('topmenu/favorites', 'FAVORITES') ?></li>
<li><?php echo anchor('news/news_index', 'TRAVEL NEWS') ?></li>
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
<?php echo css('assets/css/region.css') ?>
</body>
<?php $path = __FILE__ ?>
<?php $this->session->set_userdata('path', $path) ?>

<?php if($this->ion_auth->is_editor()): ?>
<script type="text/javascript">
var siteUrl = "<?php echo site_url('editor/update') ?>";

$(document).ready(function() {
    
    $('.edit19').editable(siteUrl + '/19', {
        type      : 'textarea',
        cancel    : 'Cancel',
        submit    : 'OK',
        tooltip   : 'Click pencil to edit...',
        event     : 'edit'
    });
    
    $('#ed19').bind('click', function(){
        $('.edit19').trigger('edit');
        return false;
    });
});
</script>
<?php endif ?>
</html>
