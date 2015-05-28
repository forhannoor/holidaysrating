<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Ethiopia"/>
<meta name="keywords" content="Ethiopia, Ethiopia Travel"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta name="language" content="English" />
<meta content="<?php echo base_url() ?>assets/images/flags/africa/ethiopia.gif" property="og:image" />

<title>Ethiopia | Africa</title>
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
<div class="flag" style="float:left"><img src="<?php echo base_url() ?>assets/images/flags/africa/ethiopia.jpg" alt="Ethiopia" /></div>

<div class="edit1">
<p><strong>Ethiopia</strong> is a country in the Horn of <a href="http://www.holidaysrating.com/index.php/regions/africa">Africa</a> and has a size of 1,127,127 square kilometres. <a href="http://www.holidaysrating.com/index.php/africa_cities/addis_ababa">Addis Ababa</a> is the capital and largest city. English and Amharic are the official languages spoken in Ethiopia but Omotic and 90 other indiginous languages are also commonly spoken.<br /><br />
Trekking rugged range, the Simien mountains, visiting simple mountain villages, or spot wildlife like the unbothered gelada baboon or the extravagantly horned wyala ibexes, Ethiopia is considered the cradle of mankind, and is home to many of the oldest sites of human existence known to us. It is also home to many of the most significant sites and artefacts of the world’s major religions.</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed1') ?>
<?php endif ?>

<div class="travel-alerts">
<div class="edit2">
<p>Holidaysrating recommends you to consider a high degree of caution in Ethiopia due to the threat of terrorist attack against Western interests and ongoing tensions. Hence we advise you to reconsider your need to travel. <a href="http://www.holidaysrating.com/index.php/news/travel_alerts">See also Travel Alerts</a></p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed2') ?>
<?php endif ?>

</div>

<div class="country-menu">
<ul>
<li><?php echo anchor('africa_before_you_go/ethiopia', img('assets/images/countries/menu/before-you-go.png')); ?></li>
<li><?php echo anchor('africa_entry/ethiopia', img('assets/images/countries/menu/entry.png')); ?></li>
<li><?php echo anchor('africa_adventures/ethiopia', img('assets/images/countries/menu/adventures.png')); ?></li>
<li><?php echo anchor('africa_must_see/ethiopia', img('assets/images/countries/menu/must-see.png')); ?></li>
</ul>
<ul>
<li><?php echo anchor('africa_getting_around/ethiopia', img('assets/images/countries/menu/getting-around.png')); ?></li>
<li><?php echo anchor('africa_health/ethiopia', img('assets/images/countries/menu/health.png')); ?></li>
<li><?php echo anchor('africa_local_food/ethiopia', img('assets/images/countries/menu/food.png')); ?></li>
<li><?php echo anchor('africa_public_holidays/ethiopia', img('assets/images/countries/menu/holidays.png')); ?></li>
</ul>
</div>

<h1>Climate</h1>
<div class="edit3">
<p>Ethiopia has three different climate zones according to elevation.<br />
The tropical zone (Kolla) is below 1830 metres in elevation and an average annual temperature of about 27°C with annual rainfall about 510mm. The Danakil Desert is about 125 metres below sea level and the hottest region in Ethiopia where the temperature climbs up to 50°C.
The subtropical zone (Woina dega) includes the highlands areas of 1830 - 2440 meters in elevation, it has an average annual temperature of about 22°C with annual rainfall between 510 and 1530mm.
Then the cool zone (Dega) is above 2440 metres in elevation with an average annual temperature of about 16°C with annual rainfall between 1270 and 1280mm.<br /><br />

Summer is from June, July and August. Heavy rain falls occurs in these three months.
Spring goes from September to November also known as the harvest season. The wintermonths would be December, January and February, which is the dry season with frost in morning.
And at last, Autumn from March to May with occasional showers. May is the hottest month in Ethiopia.</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed3') ?>
<?php endif ?>

<h1>Flora and Fauna</h1>
<div class="edit4">
<p>The lower areas have sparse vegetation consisting of desert shrubs, thorn bushes, and coarse savanna grasses. In the valleys and ravines, almost every form of African vegetation grows in abundance. And the rest of the country is mainly covered with grassland.
Wildlife includes the giraffe, leopard, hippopotamus, lion, elephant, antelope, and rhinoceros. The caracal, jackal, hyena, and various species of monkeys are also common. 
Ethiopia is also home to 813 bird species. Birds of prey include the eagle, hawk, and vulture. Heron, parrot, and such game birds as the snipe, partridge, teal, pigeon, and bustard are found in abundance.</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed4') ?>
<?php endif ?>

<?php echo anchor('africa_national_parks/ethiopia', '(Go to National Parks)') ?>


<!-- Currency Converter script - fx-rate.net --> 
<div style="width:474px; background-color:white;border:2px solid #888;text-align:center;margin-top:10px;padding:0px"> 
<div style="background-color:#AEAF61 ;border-bottom:1px solid #888;width:100%;margin:0px;padding:0px;align:center;text-align:center;">
<a title="Ethiopian Birr Converter" class="HS1label" style="font-size:12px!important; line-height:16px!important;font-family: arial;text-decoration:none;color:#132105;margin-bottom:6px;" target="_blank" href="http://fx-rate.net/ETB/"><b>Ethiopian Birr Converter</b></a>
</div> <script type="text/javascript" src="http://fx-rate.net/converter.php?size=short&layout=horizontal&currency=ETB"></script></div> 
<!-- End of Currency Converter script --> 


</div>

<div class="clear"></div>
<div class="comment">
<img src="<?php echo base_url() ?>assets/images/comments.png" alt="comment" style="margin-left:300px" /><?php echo anchor('user/make_comment/ethiopia', 'Leave a comment') ?>
</div>

</div>


<div class="right-side">
<div class="top"></div>

<div class="middle">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt;<?php echo anchor('topmenu/worldmap', 'Worldmap') ?>&gt; <?php echo anchor('regions/africa', 'Africa') ?>&gt;Ethiopia</span></p>

<iframe width="175" height="120" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Ethiopia&amp;aq=&amp;sll=15.179384,39.782334&amp;sspn=6.909329,13.392334&amp;ie=UTF8&amp;hq=&amp;hnear=Ethiopia&amp;t=m&amp;ll=8.711359,39.375&amp;spn=5.210848,7.646484&amp;z=5&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.au/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Ethiopia&amp;aq=&amp;sll=15.179384,39.782334&amp;sspn=6.909329,13.392334&amp;ie=UTF8&amp;hq=&amp;hnear=Ethiopia&amp;t=m&amp;ll=8.711359,39.375&amp;spn=5.210848,7.646484&amp;z=5" target="_blank" style="color:#5F6A6F;text-align:left">View Larger Map</a></small>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" style="margin-top:8px"/>
	
<div class="key-facts">	
<h2>Key Facts</h2>
<ul>
<li><strong>Capital city:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/city.png" style="margin-right:5px" alt="city"/><?php echo anchor('africa_cities/addis_ababa', 'Addis Ababa') ?></li>

<li><strong>Size:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/size.png" style="margin-right:5px" alt="size"/>1,104,300 km²</li>
<li><img src="<?php echo base_url() ?>assets/assets/size.png" style="margin-right:5px" alt="size"/>426,371 sq mi</li>

<li><strong>Water:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/water.png" style="margin-right:5px" alt="water"/>0.7%</li>

<li><strong>Highest point:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/mountain.png" style="margin-right:5px" alt="mountain"/>Ras Dashen</li>
<li>4,550 metres (14,928 ft)</li>

<li><strong>Drives on:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/car.png" style="margin-right:5px" alt="car"/>Right</li>

<li><strong>Time zone:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/clock.png" style="margin-right:5px" alt="clock"/><?php echo anchor('time/utc', 'UTC') ?> +3 <?php echo anchor('time/eat', '(EAT)') ?></li>

<li><strong>Calling code:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/phone.png" style="margin-right:5px" alt="phone"/>+251</li>
</ul>
</div>

<h2>Cities</h2>
<ul>
<li><?php echo anchor('africa_cities/adama', 'Adama') ?></li>
<li><?php echo anchor('africa_cities/dire_dawa', 'Dire Dawa') ?></li>
<li><?php echo anchor('africa_cities/mek_ele', 'Mek ele') ?></li>
</ul>

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
<!-- AfricaCountriesRight -->
<ins class="adsbygoogle"
     style="display:inline-block;width:180px;height:150px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="9874022741"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

<div class="clear"></div>

<h2 style="margin-bottom:5px">Explore Ethiopia</h2>
<div class="edit5">
<p>Don’t miss getting the sight of the Red Fox.  It will be a memorable experience for you. The mountains offer one of the most spectacular landscape, beautiful vistas. </p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed5') ?>
<?php endif ?>

</div>
<div class="bottom"></div>
</div>

<div class="clear"></div>
<div id="footer">

<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- AfricaCountries -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="6225375940"></ins>
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
    
    $('.edit2').editable(siteUrl + '/2', {
        type      : 'textarea',
        cancel    : 'Cancel',
        submit    : 'OK',
        tooltip   : 'Click pencil to edit...',
        event     : 'edit'
    });
    
    $('#ed2').bind('click', function(){
        $('.edit2').trigger('edit');
        return false;
    });
    
    $('.edit3').editable(siteUrl + '/3', {
        type      : 'textarea',
        cancel    : 'Cancel',
        submit    : 'OK',
        tooltip   : 'Click pencil to edit...',
        event     : 'edit'
    });
    
    $('#ed3').bind('click', function(){
        $('.edit3').trigger('edit');
        return false;
    });
    
    $('.edit4').editable(siteUrl + '/4', {
        type      : 'textarea',
        cancel    : 'Cancel',
        submit    : 'OK',
        tooltip   : 'Click pencil to edit...',
        event     : 'edit'
    });
    
    $('#ed4').bind('click', function(){
        $('.edit4').trigger('edit');
        return false;
    });
    
    $('.edit5').editable(siteUrl + '/5', {
        type      : 'textarea',
        cancel    : 'Cancel',
        submit    : 'OK',
        tooltip   : 'Click pencil to edit...',
        event     : 'edit'
    });
    
    $('#ed5').bind('click', function(){
        $('.edit5').trigger('edit');
        return false;
    });
});
</script>
<?php endif ?>
</html>