<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo $heading ?>, Asia"/>
<meta name="keywords" content="<?php echo $heading ?>, Coordinates, Population, Travel, Flora and fauna, Climate, Explore, Discover, Information, Story, Highest point, Capital city"/>
<meta name="author" content="Holidaysrating.com"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta name="language" content="English" />
<meta content="<?php echo base_url() ?>assets/images/flags/asia/japan.gif" property="og:image" />

<title><?php echo $heading ?> | Asia</title>
<?php echo js('assets/js/jquery-2.1.1.min.js') ?>
<?php echo js('assets/js/jquery.jeditable.min.js') ?>
</head>

<body>
<div id="top-head">
<?php $this->load->view($header) ?>
</div>

<div id="slider">
<?php $this->load->view('bxslider') ?>
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
<img src="<?php echo base_url() ?>assets/images/border.png" alt="Holidayrating" style="margin:8px 0 4px 0" />
<h2 style="margin-bottom:5px">Explore <?php echo $heading ?></h2>
<div class="edit1124">
<p>Coming soon </p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed1124') ?>
<?php endif ?>

<img src="<?php echo base_url() ?>assets/images/border.png" alt="Holiday" style="margin-top:8px" />
<?php $this->load->view($left_sidebar) ?>
</div>
<div class="bottom"></div>
</div>

<div class="center">
<div class="hot">
<?php $msg = $this->session->flashdata('msg') ?>
<?php if(strlen($msg) > 0): ?>
<h5 class="alert"><?php echo $msg ?></h5>
<?php  endif?>
<h1>Introduction</h1>
<div class="flag" style="float:left"><?php echo img(array('src' => 'assets/images/flags/asia/japan.jpg', 'alt' => 'Japan')) ?></div>

<div class="edit1125">
<p><strong>Japan</strong> is a country in east <a href="http://www.holidaysrating.com/index.php/regions/asia">Asia</a>, located in the Pacific Ocean. Japan is rich in natural beauty, culture, myth and technological advancement and research. 
A journey to this great land could be mesmerizing as well as memorable. Japanese people speak Japanese language but English is understood very well. The capital Tokyo is the hub of a number of activities. Japan is a land of 377,944 square kilometer with approximately a population of 127 million. 
Culturally, Japan will present an exclusive and stirring fusion of the traditional and the modern. The rapid rise of technological and economical advancement of Japan is quite unimaginable.</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed1125') ?>
<?php endif ?>

<div style="margin-top:10px">
<center>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13421785.408969791!2d134.37569025!3d34.78573239999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sau!4v1431738573311" width="430" height="200" frameborder="0" style="border:0"></iframe>
</center>
</div>

<h1>Climate</h1>
<div class="edit1126">
<p>Japan is a country of four seasons which are the spring, summer, autumn, and winter. Spring is the best time in Japan. The temperature is quite moderate and favorable to the travelers. The summer comes with rain in June. The temperature in summer goes above 35°C sometimes. The autumn is felt in September. Like spring, autumn is also a good time for travel. The winter could be miserable sometimes. Sometimes heavy snowfall occurs in Hokkaido and northeast Japan because of the cold wind blasts from Siberia.</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed1126') ?>
<?php endif ?>

<h1>Flora and Fauna</h1>
<div class="edit1127">
<p>A greater part of the land of Japan is forested. Trees include spruce, oak, maple, hinoki, sugi and pine. The northern part of the country focuses forests which are coniferous. Most Japanese forests have needle trees and broad-leaf. Animals include wild boar, foxes and deer. In the past, wolves inhabited in the country’s jungle areas, but they are no more now. many kinds of animals like the Japanese serow, tanuki and the Japanese macaque. Tanuki are common as raccoon dogs, but they are unconnected to raccoons.</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed41127') ?>
<?php endif ?>

<?php echo anchor('asia_national_parks/japan', '(Go to National Parks)') ?>

<div class="country-menu">
<ul>
<li><?php echo anchor('asia_before_you_go/japan', img('assets/images/countries/menu/before-you-go.png')); ?></li>
<li><?php echo anchor('asia_entry/japan', img('assets/images/countries/menu/entry.png')); ?></li>
<li><?php echo anchor('asia_adventures/japan', img('assets/images/countries/menu/adventures.png')); ?></li>
<li><?php echo anchor('asia_must_see/japan', img('assets/images/countries/menu/must-see.png')); ?></li>
</ul>
<ul>
<li><?php echo anchor('asia_getting_around/japan', img('assets/images/countries/menu/getting-around.png')); ?></li>
<li><?php echo anchor('asia_health/japan', img('assets/images/countries/menu/health.png')); ?></li>
<li><?php echo anchor('asia_local_food/japan', img('assets/images/countries/menu/food.png')); ?></li>
<li><?php echo anchor('asia_public_holidays/japan', img('assets/images/countries/menu/holidays.png')); ?></li>
</ul>
</div>

<!-- Currency Converter script - fx-rate.net --> 
<div style="width:474px; background-color:white;border:2px solid #888;text-align:center;margin-top:10px;padding:0px"> 
<div style="background-color:#62ffe0 ;border-bottom:1px solid #888;width:100%;margin:0px;padding:0px;align:center;text-align:center;">
<a title="Japanese Yen Converter" class="HS1label" style="font-size:12px!important; line-height:16px!important;font-family: arial;text-decoration:none;color:#132105;margin-bottom:6px;" target="_blank" href="http://fx-rate.net/JPY/"><b>Japanese Yen Converter</b></a>
</div> <script type="text/javascript" src="http://fx-rate.net/converter.php?size=short&layout=horizontal&currency=JPY"></script></div> 
<!-- End of Currency Converter script --> 

</div>
</div>

<div class="right-side">
<div class="top"></div>

<div class="middle">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt;<?php echo anchor('topmenu/worldmap', 'Worldmap') ?>&gt;<?php echo anchor('regions/asia', 'Asia') ?>&gt; <?php echo $heading ?></span></p>
	
<div class="key-facts">	
<h2>Key Facts</h2>
<ul>
<li><strong>Coordinates:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/globe.png" style="margin-right:5px" alt="coordinates"/><a href="http://tools.wmflabs.org/geohack/geohack.php?pagename=Japan&params=35_N_136_E_type:country" target="_blank">35° N 136° E</a></li>

<li><strong>Capital city:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/city.png" style="margin-right:5px" alt="city"/><?php echo anchor('asia_cities/tokyo', 'Tokyo') ?></li>

<li><strong>Size:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/size.png" style="margin-right:5px" alt="size"/>377,944 km²</li>
<li><img src="<?php echo base_url() ?>assets/assets/size.png" style="margin-right:5px" alt="size"/>145,925  sq mi</li>

<li><strong>Water:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/water.png" style="margin-right:5px" alt="water"/>0.8%</li>

<li><strong>Population:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/population.png" style="margin-right:5px" alt="population"/>127,338,621 <span>(2013)</span></li>

<li><strong>Highest point:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/mountain.png" style="margin-right:5px" alt="mountain"/>Mount Fuji</li>
<li>3,776 metres (12,389 ft)</li>

<li><strong>Driving on:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/car.png" style="margin-right:5px" alt="Car"/>Left</li>

<li><strong>Time zone:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/clock.png" style="margin-right:5px" alt="clock"/><?php echo anchor('time/utc', 'UTC') ?>+9 <?php echo anchor('time/jst', '(JST)') ?></li>

<li><strong>Calling code:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/phone.png" style="margin-right:5px" alt="phone"/>+81</li>
</ul>
</div>

<h2>Towns - Cities</h2>
<ul>
<li><?php echo anchor('asia_cities/ichikawa', 'Ichikawa') ?></li>
<li><?php echo anchor('asia_cities/kurashiki', 'Kurashiki') ?></li>
<li><?php echo anchor('asia_cities/machida', 'Machida') ?></li>
<li><?php echo anchor('asia_cities/matsudo', 'Matsudo') ?></li>
<li style="font-size:10px;margin-top:5px"><a href="http://www.holidaysrating.com/index.php/cities/asia_index?q=13">(More info)</a></li>
</ul>

<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" style="margin-top:8px"/>

<h2>Stories</h2>
<ul>
<?php foreach($stories as $story): ?>
<li><?php echo anchor('story/read?id=' . $story->id . '&title=' . urlsafe_b64encode($story->title), $story->title)  ?></li>
<?php endforeach ?>
</ul>

<?php if(count($stories) > 0): ?>
<?php echo anchor('story/all?country=' . urlsafe_b64encode($this->uri->segment(2)), 'View All') ?>
<?php else: ?>
<p style="margin-top:5px">Be the first to submit a story</p>
<?php endif ?>

<p><center><?php echo anchor('story/create?country=' . $this->uri->segment(2), img('assets/assets/story.png')) ?></center></p>
<?php if(strlen($this->session->flashdata('msg')) > 0): ?>
<p><?php echo $this->session->flashdata('msg') ?></p>
<?php endif ?> 

<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" style="margin-top:8px"/>
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
<!-- AsiaCountriesRight -->
<ins class="adsbygoogle"
     style="display:inline-block;width:180px;height:150px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="3266814343"></ins>
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
<!-- AsiaCountries -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="6132487545"></ins>
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
<?php echo css('assets/css/country.css') ?>
</body>
<?php $path = __FILE__ ?>
<?php $this->session->set_userdata('path', $path) ?>

<?php if($this->ion_auth->is_editor()): ?>
<script type="text/javascript">
var siteUrl = "<?php echo site_url('editor/update') ?>";

$(document).ready(function() {
    
    $('.edit1124').editable(siteUrl + '/1124', {
        type      : 'textarea',
        cancel    : 'Cancel',
        submit    : 'OK',
        tooltip   : 'Click pencil to edit...',
        event     : 'edit'
    });
    
    $('#ed1124').bind('click', function(){
        $('.edit1124').trigger('edit');
        return false;
    });
    
    $('.edit1125').editable(siteUrl + '/1125', {
        type      : 'textarea',
        cancel    : 'Cancel',
        submit    : 'OK',
        tooltip   : 'Click pencil to edit...',
        event     : 'edit'
    });
    
    $('#ed1125').bind('click', function(){
        $('.edit1125').trigger('edit');
        return false;
    });
    
    $('.edit1126').editable(siteUrl + '/1126', {
        type      : 'textarea',
        cancel    : 'Cancel',
        submit    : 'OK',
        tooltip   : 'Click pencil to edit...',
        event     : 'edit'
    });
    
    $('#ed1126').bind('click', function(){
        $('.edit1126').trigger('edit');
        return false;
    });
    
    $('.edit1127').editable(siteUrl + '/1127', {
        type      : 'textarea',
        cancel    : 'Cancel',
        submit    : 'OK',
        tooltip   : 'Click pencil to edit...',
        event     : 'edit'
    });
    
    $('#ed1127').bind('click', function(){
        $('.edit1127').trigger('edit');
        return false;
    });
});
</script>
<?php endif ?>
</html>