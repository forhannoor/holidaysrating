<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Australia"/>
<meta name="keywords" content="Australia"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta name="language" content="English" />
<meta content="<?php echo base_url() ?>assets/images/flags/australia.gif" property="og:image" />

<title>Australia | Holidaysrating</title>
<?php echo js('assets/js/jquery-2.1.1.min.js') ?>
<?php echo js('assets/js/jquery.jeditable.min.js') ?>
</head>

<body>
<div id="top-head">
<?php $this->load->view($header) ?>
</div>

<div id="slider-australia" >
<center><img src="<?php echo base_url() ?>assets/images/regions/australia/australiaMap.jpg" height="412" width="940" alt="Australia" title="Australia" usemap="#australia" /></center>
<map name="australia">
<area shape="poly" coords="169,207,172,152,212,131,271,118,291,103,291,89,303,76,342,51,353,41,386,54,394,253,355,260,344,270,334,283,287,286,274,297,243,307,226,301,213,301,210,291,215,279,214,264," href="<?php echo base_url() ?>index.php/australia_states/western_australia" alt="Western Australia" title="Western Australia"   />
<area shape="poly" coords="395,185,390,54,412,25,433,12,511,22,489,53,528,72,523,185," href="<?php echo base_url() ?>index.php/australia_states/northern_territory" alt="Northern Territory" title="Northern Territory"   />
<area shape="poly" coords="529,186,534,76,556,90,584,79,589,55,601,9,622,55,630,49,644,60,644,75,653,84,659,106,683,118,702,152,712,151,718,171,739,192,744,231,729,227,714,234,704,232,694,225,681,225,674,230,565,223,565,184," href="<?php echo base_url() ?>index.php/australia_states/queensland" alt="Queensland" title="Queensland"   />
<area shape="poly" coords="564,225,675,230,688,228,700,233,715,238,729,231,744,232,732,256,702,286,690,296,671,329,652,321,651,314,620,311,607,311,587,295,586,291,574,291,568,282,558,280," href="<?php echo base_url() ?>index.php/australia_states/new_south_wales" alt="New South Wales" title="New South Wales"   />
<area shape="poly" coords="555,330,559,283,570,292,583,294,601,310,645,313,647,320,670,330,657,332,648,336,639,333,621,348,604,339,604,330,580,341," href="<?php echo base_url() ?>index.php/australia_states/victoria" alt="Victoria" title="Victoria"   />
<area shape="poly" coords="395,249,394,186,563,190,552,329,540,321,539,310,533,305,533,296,515,298,521,289,519,283,509,294,500,291,508,282,515,269,512,263,494,281,487,290,482,291,477,276,466,266,449,259,433,257,417,249," href="<?php echo base_url() ?>index.php/australia_states/south_australia" alt="South Australia" title="South Australia"   />
<area shape="poly" coords="614,401,600,385,594,370,597,363,620,369,633,367,644,370,639,387,633,397,627,394," href="<?php echo base_url() ?>index.php/australia_states/tasmania" alt="Tasmania" title="Tasmania"   />
</map>
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
<div class="flag" style="float:left"><img src="<?php echo base_url() ?>assets/images/flags/australia.jpg" alt="Australia" width="100px" height="70px" /></div>

<div class="intro">
<div class="edit1">
<p><strong>Australia</strong> is a country comprising the mainland, the island of <a href="http://www.holidaysrating.com/index.php/australia_states/tasmania">Tasmania</a>, and numerous smaller islands. Australia is a well-developed country, has many natural resources, like coal, gold, oil, diamants and is one of the wealthiest in the world.<br /><br />
It has a total size of 7,692,024 square kliometers. Most of the population lives in the Eastern states. The official language is English, but more than 250 languages of Aboriginal origin are also spoken.<br /><br />
Many tourists/ backpackers spend their holiday here. Australia got it all, from tropical rainforest to enormous deserts, snowy mountains to beautiful skylines...</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed1') ?>
<?php endif ?>

</div>

<div class="options">
<ul>
<li><?php echo anchor('australia_cities/australia_index', img('assets/images/buttonblue-cities-bg.png')); ?></li>
<li><?php echo anchor('http://www.holidaysrating.com/index.php/topmenu/videodump/oceania', img('assets/images/buttonblue-videos-bg.png')); ?></li>
<li><?php echo anchor('help/external_links', img('assets/images/buttonblue-links-bg.png')); ?></li>
</ul>
<br />
</div>

<h1>STATES</h1>
<p style="margin-bottom:20px;text-align:center">Click on the map or choose a state below:</p>
	<table style="width: 100%">
		<tr>
			<td><?php echo anchor('australia_states/new_south_wales', 'New South Wales') ?></td>
			<td><?php echo anchor('australia_states/south_australia', 'South Australia') ?></td>
			<td><?php echo anchor('australia_states/western_australia', 'Western Australia') ?></td>
		</tr>
		<tr>
			<td><?php echo anchor('australia_states/northern_territory', 'Northern Territory') ?></td>
			<td><?php echo anchor('australia_states/tasmania', 'Tasmania') ?></td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td><?php echo anchor('australia_states/queensland', 'Queensland') ?></td>
			<td><?php echo anchor('australia_states/victoria', 'Victoria') ?></td>
			<td>&nbsp;</td>
		</tr>
	</table>

<div class="clear"></div>

<div class="country-menu">
<ul>
<li><?php echo anchor('australia_before_you_go/australia', img('assets/images/countries/menu/before-you-go.png')); ?></li>
<li><?php echo anchor('australia_entry/australia', img('assets/images/countries/menu/entry.png')); ?></li>
<li><?php echo anchor('australia_adventures/australia', img('assets/images/countries/menu/adventures.png')); ?></li>
<li><?php echo anchor('australia_must_see/australia', img('assets/images/countries/menu/must-see.png')); ?></li>
</ul>
<ul>
<li><?php echo anchor('australia_getting_around/australia', img('assets/images/countries/menu/getting-around.png')); ?></li>
<li><?php echo anchor('australia_health/australia', img('assets/images/countries/menu/health.png')); ?></li>
<li><?php echo anchor('australia_local_food/australia', img('assets/images/countries/menu/food.png')); ?></li>
<li><?php echo anchor('australia_public_holidays/australia', img('assets/images/countries/menu/holidays.png')); ?></li>
</ul>
</div>

</div>
<div class="clear"></div>

</div>

<div class="right-side">
<div class="top"></div>
<div class="middle">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt;<?php echo anchor('topmenu/worldmap', 'Worldmap') ?>&gt;<?php echo anchor('regions/oceania', 'Oceania') ?>&gt;Australia</span></p>

<iframe width="180" height="100" src="http://www.youtube-nocookie.com/embed/6leHGHCKeSg?rel=0" frameborder="0" allowfullscreen></iframe>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" />

<div class="key-facts">	
<h2>Key Facts</h2>
<ul>
<li><strong>Capital city:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/city.png" style="margin-right:5px" alt="size"/>Canberra</li>

<li><strong>Size:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/size.png" style="margin-right:5px" alt="size"/>7,692,024 km2</li>
<li><img src="<?php echo base_url() ?>assets/assets/size.png" style="margin-right:5px" alt="size"/>2,969,907 sq mi</li>

<li><strong>Highest point:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/mountain.png" style="margin-right:5px" alt="mountain"/>Mount Kosciuszko</li>
<li>2,228 metres (7,310 ft)</li>

<li><strong>Time zone:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/clock.png" style="margin-right:5px" alt="clock"/><?php echo anchor('time/utc', 'UTC') ?> +8 -10.5</li>

<li><strong>Calling code:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/phone.png" style="margin-right:5px" alt="phone"/>+61</li>
</ul>
</div>

<h2>Facts</h2>
<ol>
<li><?php echo anchor('australia_states/tasmania', 'Tasmania') ?> has the cleanest air in the world.</li>
<li>The Great Barrier Reef is the largest reef in the World and visible form outer space. It also has a mailbox. You can take the ferry and send a postcard, stamped with the only Great Barrier Reef stamp.</li>
<li>Australia has the world's largest cattle station (ranch). At 30,029 km2 it is almost the same size as <?php echo anchor('europe_countries/belgium', 'Belgium') ?></li>
</ol>
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
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" style="margin-top:8px"/>
<h2>Cities</h2>
<ul>
<li>Mackay <?php echo anchor('australia_states/queensland', '(Queensland)') ?></li>
<li>Cairns <?php echo anchor('australia_states/queensland', '(Queensland)') ?></li>
<li>Sydney <?php echo anchor('australia_states/new_south_wales', '(New South Wales)') ?></li>
<li>Adelaide <?php echo anchor('australia_states/south_australia', '(South Australia)') ?></li>
<li>Melbourne <?php echo anchor('australia_states/victoria', '(Victoria)') ?></li>
</ul>
</div>

<div class="bottom"></div>
</div>
<div class="clear"></div>


<div id="footer">

<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Australia -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="6364976747"></ins>
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
<?php echo css('assets/css/region.css') ?>
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
