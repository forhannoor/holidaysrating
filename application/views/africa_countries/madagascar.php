<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Madagascar"/>
<meta name="keywords" content="Madagascar, travel to Madagascar"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta name="language" content="English" />
<meta content="<?php echo base_url() ?>assets/images/flags/africa/madagascar.gif" property="og:image" />

<title>Madagascar | Africa</title>
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
<div class="flag" style="float:left"><img src="<?php echo base_url() ?>assets/images/flags/africa/madagascar.jpg" alt="Madagascar" /></div>

<div class="edit1">
<p><strong>Madagascar</strong> is a island country just off the coast of southeastern <a href="http://www.holidaysrating.com/index.php/regions/africa">Africa</a>. It has a total size of 587,041 square kilometres. <a href="http://www.holidaysrating.com/index.php/africa_cities/antananarivo">Antananarivo</a> is the capital and largest city. The official languages of Madagascar are Malagasy and French.<br /><br />
Lemurs, baobabs, rainforest, beaches, desert, trekking and diving, it is all possible... Madagascar is the dream destination for nature and outdoor lovers.</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed1') ?>
<?php endif ?>

<div class="country-menu">
<ul>
<li><?php echo anchor('africa_before_you_go/madagascar', img('assets/images/countries/menu/before-you-go.png')); ?></li>
<li><?php echo anchor('africa_entry/madagascar', img('assets/images/countries/menu/entry.png')); ?></li>
<li><?php echo anchor('africa_adventures/madagascar', img('assets/images/countries/menu/adventures.png')); ?></li>
<li><?php echo anchor('africa_must_see/madagascar', img('assets/images/countries/menu/must-see.png')); ?></li>
</ul>
<ul>
<li><?php echo anchor('africa_getting_around/madagascar', img('assets/images/countries/menu/getting-around.png')); ?></li>
<li><?php echo anchor('africa_health/madagascar', img('assets/images/countries/menu/health.png')); ?></li>
<li><?php echo anchor('africa_local_food/madagascar', img('assets/images/countries/menu/food.png')); ?></li>
<li><?php echo anchor('africa_public_holidays/madagascar', img('assets/images/countries/menu/holidays.png')); ?></li>
</ul>
</div>

<h1>Climate</h1>
<div class="edit2">
<p>Madagascar is dominated by the Southeastern trade winds that blows from the Indian Ocean. There are two seasons: a rainy season from November to April, and a dry season, which goes from May to October. There is, however, great variation in climate owing to elevation and position relative to dominant winds. The East coast has a subequatorial climate, is the most exposed to the trade winds and has the heaviest rainfall, an annually averaging of 3.5 metres. This region is notorious not only for a hot, humid climate in which tropical fevers are endemic but also for the destructive cyclones that occur during the rainy season.<br><br>

The Central highlands are appreciably drier and, owing to the altitude, also cooler. Thunderstorms are common during the rainy season in the central highlands, and lightning is a serious hazard. The dry season is pleasant and sunny, the mornings can be chilly. The West coast is drier because the trade winds lose their humidity by the time they reach this region. The Southwest and the extreme South are semidesert; not much rain falls here.</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed2') ?>
<?php endif ?>

<h1>Flora and Fauna</h1>
<div class="edit3">
<p>Madagascar's flora and fauna is remarkable. The vast majority of plant and animal species are endemic to this island. 165 million years ago, Madagascar seperated from <a href="http://www.holidaysrating.com/index.php/regions/asia">Asia</a> mainland. Once seperated it envolved in an isolated environment. New species of plant and animal are being discovered each time a scientific team goes on expedition. 
A long time ago, the humid Eastern part of the island was covered in rainforest with many palms, ferns and bamboo, but much of this forest has been reduced by humans. The West has areas of dry deciduous forest with many lianas, tamarind and baobabs among the dominant trees. Grassland is the dominant vegetation on the Central plateau.
The island is famous of it's endangered Lemurs but other wildlife like the fossa, turtles, brightly coloured frogs, beautiful butterflies and whales during the breeding season. </p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed3') ?>
<?php endif ?>

<?php echo anchor('africa_national_parks/madagascar', '(Go to National Parks)') ?>

<!-- Currency Converter script - fx-rate.net --> 
<div style="width:474px; background-color:white;border:2px solid #888;text-align:center;margin-top:10px;padding:0px"> 
<div style="background-color:#AEAF61 ;border-bottom:1px solid #888;width:100%;margin:0px;padding:0px;align:center;text-align:center;">
<a title="Malagasy Ariary Converter" class="HS1label" style="font-size:12px!important; line-height:16px!important;font-family: arial;text-decoration:none;color:#132105;margin-bottom:6px;" target="_blank" href="http://fx-rate.net/MGA/"><b>Malagasy Ariary Converter</b></a>
</div> <script type="text/javascript" src="http://fx-rate.net/converter.php?size=short&layout=horizontal&currency=MGA"></script></div> 
<!-- End of Currency Converter script --> 


</div>

<div class="clear"></div>
<div class="comment">
<img src="<?php echo base_url() ?>assets/images/comments.png" alt="comment" style="margin-left:300px" /><?php echo anchor('user/make_comment/madagascar', 'Leave a comment') ?>
</div>

</div>


<div class="right-side">
<div class="top"></div>

<div class="middle">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt;<?php echo anchor('topmenu/worldmap', 'Worldmap') ?>&gt; <?php echo anchor('regions/africa', 'Africa') ?>&gt;Madagascar</span></p>

<iframe width="175" height="120" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Madagascar&amp;aq=0&amp;oq=Mada&amp;sll=26.3351,17.228331&amp;sspn=25.513069,53.569336&amp;ie=UTF8&amp;hq=&amp;hnear=Madagascar&amp;t=m&amp;ll=-20.385825,46.318359&amp;spn=9.875746,15.292969&amp;z=4&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.au/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Madagascar&amp;aq=0&amp;oq=Mada&amp;sll=26.3351,17.228331&amp;sspn=25.513069,53.569336&amp;ie=UTF8&amp;hq=&amp;hnear=Madagascar&amp;t=m&amp;ll=-20.385825,46.318359&amp;spn=9.875746,15.292969&amp;z=4" target="_blank" style="color:#5F6A6F;text-align:left">View Larger Map</a></small>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" style="margin-top:8px"/>
	
<div class="key-facts">	
<h2>Key Facts</h2>
<ul>
<li><strong>Capital city:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/city.png" style="margin-right:5px" alt="city"/><?php echo anchor('africa_cities/antananarivo', 'Antananarivo') ?></li>

<li><strong>Size:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/size.png" style="margin-right:5px" alt="size"/>587,041 km²</li>
<li><img src="<?php echo base_url() ?>assets/assets/size.png" style="margin-right:5px" alt="size"/>226,597 sq mi</li>

<li><strong>Water:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/water.png" style="margin-right:5px" alt="water"/>0.009%</li>

<li><strong>Highest point:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/mountain.png" style="margin-right:5px" alt="mountain"/>Maromokotro</li>
<li>2,876 metres (9,450 ft)</li>

<li><strong>Drives on:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/car.png" style="margin-right:5px" alt="car"/>Right</li>

<li><strong>Time zone:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/clock.png" style="margin-right:5px" alt="clock"/><?php echo anchor('time/utc', 'UTC') ?> +3 <?php echo anchor('time/eat', '(EAT)') ?></li>

<li><strong>Calling code:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/phone.png" style="margin-right:5px" alt="phone"/>+261</li>
</ul>
</div>

<h2>Cities</h2>
<ul>
<li><?php echo anchor('africa_cities/antsirabe', 'Antsirabe') ?></li>
<li><?php echo anchor('africa_cities/fianarantsoa', 'Fianarantsoa') ?></li>
<li><?php echo anchor('africa_cities/toamasina', 'Toamasina') ?></li>
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

<h2 style="margin-bottom:5px">Explore Madagascar</h2>
<div class="edit4">
<p>Tourists should see the country’s wonderful beaches and its stunning interior with its exclusive biodiversity. Madagascar has natural beauty and fascinating ethnic towns which can be someone’s once-in-a-lifetime experience!</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed4') ?>
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
});
</script>
<?php endif ?>
</html>