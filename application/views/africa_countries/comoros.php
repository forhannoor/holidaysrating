<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Comoros"/>
<meta name="keywords" content="Comoros, Comoros Travel"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta name="language" content="English" />
<meta content="<?php echo base_url() ?>assets/images/flags/africa/comoros.gif" property="og:image" />

<title>Comoros | Africa</title>
<?php echo js('assets/js/jquery-2.1.1.min.js') ?>
<?php echo js('assets/js/jquery.jeditable.min.js') ?>
</head>

<body>
<div id="top-head-island">
<?php $this->load->view($header) ?>
</div>

<div id="slider-island">
<?php $this->load->view('bxslider') ?>
</div>

<div id="content">
<h1><?php echo $heading ?></h1>
<div class="clear"></div>
<div class="left-side">
<div class="top-island"></div>
<div class="middle-island">
<div class="my_login">
<?php $this->load->view($sidebar) ?>
</div>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="Holiday" style="margin-top:8px" />
<?php $this->load->view($left_sidebar) ?>
</div>
<div class="bottom-island"></div>
</div>

<div class="center">
<div class="hot">
<?php $msg = $this->session->flashdata('msg') ?>
<?php if(strlen($msg) > 0): ?>
<h5 class="alert"><?php echo $msg ?></h5>
<?php  endif?>
<h1>Introduction</h1>
<div class="flag" style="float:left"><img src="<?php echo base_url() ?>assets/images/flags/africa/comoros.jpg" alt="Comoros" /></div>

<div class="edit1"><p><strong>Comoros</strong> is a sovereign archipelago island nation in the Indian Ocean, just off the coast of eastern <a href="http://www.holidaysrating.com/index.php/regions/africa">Africa</a>, north of <a href="http://www.holidaysrating.com/index.php/africa_countries/madagascar">Madagascar</a>. It has a total size of 2,170 square kilomtres. <a href="http://www.holidaysrating.com/index.php/africa_cities/moroni">Moroni</a> is the capital city. The country has two official languages, French and literary Arabic. Next to that, Comorian is also commonly spoken.<br><br>
Holiday in Comoros is not just a holiday.. It is a complete adventure! This land has unbelievable mountains, prosperous local traditions and striking white-sandy beaches. Travelling Comoros will indeed be a memorable experience. The four main islands of Comoros are; <a href="http://www.holidaysrating.com/index.php/africa_countries/ngazidja">Ngazidja</a> (Grande Comore), <a href="http://www.holidaysrating.com/index.php/africa_countries/ndzwani">Ndzwani</a> (Anjouan), <a href="http://www.holidaysrating.com/index.php/africa_countries/mwali">Mwali</a> (Mohéli) and <a href="http://www.holidaysrating.com/index.php/africa_countries/mayotte">Mayotte</a> (Maore).</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed1') ?>
<?php endif ?>

<div class="country-menu">
<ul>
<li><?php echo anchor('africa_before_you_go/comoros', img('assets/images/countries/menu/before-you-go.png')); ?></li>
<li><?php echo anchor('africa_entry/comoros', img('assets/images/countries/menu/entry.png')); ?></li>
<li><?php echo anchor('africa_adventures/comoros', img('assets/images/countries/menu/adventures.png')); ?></li>
<li><?php echo anchor('africa_must_see/comoros', img('assets/images/countries/menu/must-see.png')); ?></li>
</ul>
<ul>
<li><?php echo anchor('africa_getting_around/comoros', img('assets/images/countries/menu/getting-around.png')); ?></li>
<li><?php echo anchor('africa_health/comoros', img('assets/images/countries/menu/health.png')); ?></li>
<li><?php echo anchor('africa_local_food/comoros', img('assets/images/countries/menu/food.png')); ?></li>
<li><?php echo anchor('africa_public_holidays/comoros', img('assets/images/countries/menu/holidays.png')); ?></li>
</ul>
</div>

<h1>Climate</h1>
<div class="edit2">
<p>Tropical climate; rainy and hot season, November to May. The warmest month is usually March. Because of its proximity to the equator, Comoros isn’t particularly vulnerable to cyclones.</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed2') ?>
<?php endif ?>

<h1>Flora and Fauna</h1>
<div class="edit3">
<p>All of the islands are volcanic. Comoros is home to many distinctive birds, insects and the distinctive green turtle, many are now threatened with extinction. 
The best location to spot the turtles is the marine reserve on the Southern side of the island <a href="http://www.holidaysrating.com/index.php/africa_countries/mwali">Mwali</a>. 
Comoros has one National Park; <a href="http://www.holidaysrating.com/index.php/africa_national_parks/comoros">Saziley National Park</a> located on the island <a href="http://www.holidaysrating.com/index.php/africa_countries/mayotte">Mayotte</a>.</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed3') ?>
<?php endif ?>

<!-- Currency Converter script - fx-rate.net --> 
<div style="width:474px; background-color:white;border:2px solid #888;text-align:center;margin-top:10px;padding:0px"> 
<div style="background-color:#FEE89D ;border-bottom:1px solid #888;width:100%;margin:0px;padding:0px;align:center;text-align:center;">
<a title="Comoros Franc Converter" class="HS1label" style="font-size:12px!important; line-height:16px!important;font-family: arial;text-decoration:none;color:#132105;margin-bottom:6px;" target="_blank" href="http://fx-rate.net/KMF/"><b>Comoros Franc Converter</b></a>
</div> <script type="text/javascript" src="http://fx-rate.net/converter.php?size=short&layout=horizontal&currency=KMF"></script></div> 
<!-- End of Currency Converter script --> 


</div>

<div class="clear"></div>
<div class="comment">
<img src="<?php echo base_url() ?>assets/images/comments.png" alt="comment" style="margin-left:300px" /><?php echo anchor('user/make_comment/comoros', 'Leave a comment') ?>
</div>

</div>


<div class="right-side">
<div class="top-island"></div>

<div class="middle-island">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt;<?php echo anchor('topmenu/worldmap', 'Worldmap') ?>&gt; <?php echo anchor('regions/africa', 'Africa') ?>&gt;Comoros</span></p>

<iframe width="175" height="120" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Comoros&amp;aq=1&amp;oq=comor&amp;sll=-27.40739,153.002859&amp;sspn=1.589717,3.348083&amp;ie=UTF8&amp;hq=&amp;hnear=Comoros&amp;t=m&amp;ll=-11.646856,43.335571&amp;spn=0.645604,0.955811&amp;z=8&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.au/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Comoros&amp;aq=1&amp;oq=comor&amp;sll=-27.40739,153.002859&amp;sspn=1.589717,3.348083&amp;ie=UTF8&amp;hq=&amp;hnear=Comoros&amp;t=m&amp;ll=-11.646856,43.335571&amp;spn=0.645604,0.955811&amp;z=8" target="_blank" style="color:#5F6A6F;text-align:left">View Larger Map</a></small>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" style="margin-top:8px"/>

<div class="key-facts">	
<h2>Key Facts</h2>
<ul>
<li><strong>Capital city:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/city.png" style="margin-right:5px" alt="city"/><?php echo anchor('africa_cities/moroni', 'Moroni') ?></li>

<li><strong>Size:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/size.png" style="margin-right:5px" alt="size"/>2,170 km²</li>
<li><img src="<?php echo base_url() ?>assets/assets/size.png" style="margin-right:5px" alt="size"/>837.84 sq mi</li>

<li><strong>Highest point:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/mountain.png" style="margin-right:5px" alt="mountain"/>Mount Karthala</li>
<li style="margin-left:23px"><?php echo anchor('africa_countries/ngazidja', '(Ngazidja)') ?></li>
<li>2,361 metres (7,748 ft)</li>

 <li><strong>Drives on:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/car.png" style="margin-right:5px" alt="car"/>Right</li>
 
<li><strong>Time zone:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/clock.png" style="margin-right:5px" alt="clock"/><?php echo anchor('time/utc', 'UTC') ?> +3 <?php echo anchor('time/eat', '(EAT) ') ?></li>

<li><strong>Calling code:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/phone.png" style="margin-right:5px" alt="phone"/>+269 </li>
</ul>
</div>
	
<h2>Cities</h2>
<ul>
<li><?php echo anchor('africa_cities/istandra', 'Istandra') ?></li>
<li><?php echo anchor('africa_cities/mamoudzou', 'Mamoudzou') ?></li>
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

<h2 style="margin-bottom:5px">Explore Comoros</h2>
<div class="edit4">
<p>Comoros has many natural resources for tourism, such as its beaches and marine environment, but it does not have as strong a tourist industry</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed4') ?>
<?php endif ?>

</div>
<div class="bottom-island"></div>
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