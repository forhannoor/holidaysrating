<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Gambia"/>
<meta name="keywords" content="Gambia, Gambia travel, The Gambia"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta name="language" content="English" />
<meta content="<?php echo base_url() ?>assets/images/flags/africa/gambia.gif" property="og:image" />

<title>Gambia | Africa</title>
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
<div class="flag" style="float:left"><img src="<?php echo base_url() ?>assets/images/flags/africa/gambia.jpg" alt="Gambia" /></div>

<div class="edit1">
<p><strong>Gambia</strong> or better said; "The Gambia" is a country on the west coast of central <a href="http://www.holidaysrating.com/index.php/regions/africa">Africa</a> with a size of 11,300 square kilometres. It is the smallest country on <a href="http://www.holidaysrating.com/index.php/regions/africa">African</a> mainland. English is the official language spoken in the Gambia.<br /><br />
<a href="http://www.holidaysrating.com/index.php/africa_cities/banjul">Banjul</a> is the capital city, located on Mary's Island, there where the Gambia river enters the Atlantic Ocean. Gambia offers fabulous sandy beaches, amazing wildlife and virtually guaranteed sunshine. This country is a great introduction of <a href="http://www.holidaysrating.com/index.php/regions/africa">Africa</a>.</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed1') ?>
<?php endif ?>

<div class="country-menu">
<ul>
<li><?php echo anchor('africa_before_you_go/gambia', img('assets/images/countries/menu/before-you-go.png')); ?></li>
<li><?php echo anchor('africa_entry/gambia', img('assets/images/countries/menu/entry.png')); ?></li>
<li><?php echo anchor('africa_adventures/gambia', img('assets/images/countries/menu/adventures.png')); ?></li>
<li><?php echo anchor('africa_must_see/gambia', img('assets/images/countries/menu/must-see.png')); ?></li>
</ul>
<ul>
<li><?php echo anchor('africa_getting_around/gambia', img('assets/images/countries/menu/getting-around.png')); ?></li>
<li><?php echo anchor('africa_health/gambia', img('assets/images/countries/menu/health.png')); ?></li>
<li><?php echo anchor('africa_local_food/gambia', img('assets/images/countries/menu/food.png')); ?></li>
<li><?php echo anchor('africa_public_holidays/gambia', img('assets/images/countries/menu/holidays.png')); ?></li>
</ul>
</div>

<h1>Climate</h1>
<div class="edit2">
<p>The climate is sub-tropical with a dry and rainy season. The dry season starts in October and ends around mid-June each year. Dry season stays from October to April. The Gambia is considered one of the best winter-sun tourism spots renowned for regular sunny days, cool sea breezes & very lovely sub-tropical temperatures. But Temperature drops to around 16°C during the Evenings.  Not only is The Gambia an admired winter holiday destination, it is now also becoming an increasingly admired summer holiday spot too.</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed2') ?>
<?php endif ?>

<h1>Flora and Fauna</h1>
<div class="edit3">
<p>Gambia has a progressive decline of the forests due to droughts. The countryside contains many flowers, including yellow cassias and scarlet combretum. The banks of the river are lined with mangroves and gorgeous rural scenery. The tropical shrub area contains bougainvillea, oleander, and some varieties of hibiscus. 
Wildlife includes some one hundred hippos, servals, deer, gazelles, warthogs, varans, and lots of monkeys. Gambia is a paradise for birds because of it's geographical location, it is a mandatory stopping point for many migratory birds, but it is also home to more than 500 exotic species. </p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed3') ?>
<?php endif ?>

<?php echo anchor('africa_national_parks/gambia', '(Go to National Parks)') ?>

<!-- Currency Converter script - fx-rate.net --> 
<div style="width:474px; background-color:white;border:2px solid #888;text-align:center;margin-top:10px;padding:0px"> 
<div style="background-color:#AEAF61 ;border-bottom:1px solid #888;width:100%;margin:0px;padding:0px;align:center;text-align:center;">
<a title="Gambian Dalasi Converter" class="HS1label" style="font-size:12px!important; line-height:16px!important;font-family: arial;text-decoration:none;color:#132105;margin-bottom:6px;" target="_blank" href="http://fx-rate.net/GMD/"><b>Gambian Dalasi Converter</b></a>
</div> <script type="text/javascript" src="http://fx-rate.net/converter.php?size=short&layout=horizontal&currency=GMD"></script></div> 
<!-- End of Currency Converter script --> 

</div>

<div class="clear"></div>
<div class="comment">
<img src="<?php echo base_url() ?>assets/images/comments.png" alt="comment" style="margin-left:300px" /><?php echo anchor('user/make_comment/gambia', 'Leave a comment') ?>
</div>

</div>


<div class="right-side">
<div class="top"></div>

<div class="middle">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt;<?php echo anchor('topmenu/worldmap', 'Worldmap') ?>&gt; <?php echo anchor('regions/africa', 'Africa') ?>&gt;Gambia</span></p>

<iframe width="175" height="120" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Gambia&amp;aq=&amp;sll=-0.803689,11.609444&amp;sspn=7.157726,13.392334&amp;ie=UTF8&amp;hq=&amp;hnear=The+Gambia&amp;t=m&amp;ll=13.603278,-14.897461&amp;spn=2.562551,3.823242&amp;z=6&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.au/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Gambia&amp;aq=&amp;sll=-0.803689,11.609444&amp;sspn=7.157726,13.392334&amp;ie=UTF8&amp;hq=&amp;hnear=The+Gambia&amp;t=m&amp;ll=13.603278,-14.897461&amp;spn=2.562551,3.823242&amp;z=6" target="_blank" style="color:#5F6A6F;text-align:left">View Larger Map</a></small>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" style="margin-top:8px"/>

<div class="key-facts">	
<h2>Key Facts</h2>
<ul>
<li><strong>Capital city:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/city.png" style="margin-right:5px" alt="city"/><?php echo anchor('africa_cities/banjul', 'Banjul') ?></li>

<li><strong>Size:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/size.png" style="margin-right:5px" alt="size"/>11,300 km²</li>
<li><img src="<?php echo base_url() ?>assets/assets/size.png" style="margin-right:5px" alt="size"/>4,749 sq mi</li>

<li><strong>Water:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/water.png" style="margin-right:5px" alt="water"/>11.7%</li>

<li><strong>Highest point:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/mountain.png" style="margin-right:5px" alt="mountain"/>Red rock</li>
<li>53 metres (174 ft)</li>

<li><strong>Drives on:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/car.png" style="margin-right:5px" alt="car"/>Right</li>

<li><strong>Time zone:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/clock.png" style="margin-right:5px" alt="clock"/><?php echo anchor('time/gmt', 'GMT') ?></li>

<li><strong>Calling code:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/phone.png" style="margin-right:5px" alt="phone"/>+220</li>
</ul>
</div>
	
<h2>Cities</h2>
<ul>
<li><?php echo anchor('africa_cities/brikama', 'Brikama') ?></li>
<li><?php echo anchor('africa_cities/bakau', 'Bakau') ?></li>
<li><?php echo anchor('africa_cities/serekunda', 'Serekunda') ?></li>
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

<h2 style="margin-bottom:5px">Explore Gambia</h2>
<div class="edit4">
<p>Gambia is a small country; however it is rich in attractions from colonial towns, beaches, natural surroundings, traditional villages and eye-catching wildlife. </p>
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