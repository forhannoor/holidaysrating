<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Sao Tome and Principe"/>
<meta name="keywords" content="Sao Tome and Principe, São Tomé and Príncipe"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta name="language" content="English" />
<meta content="<?php echo base_url() ?>assets/images/flags/africa/sao-tome-and-principe.gif" property="og:image" />

<title>São Tomé and Príncipe | Africa</title>
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
<div class="flag" style="float:left"><img src="<?php echo base_url() ?>assets/images/flags/africa/sao-tome-and-principe.jpg" alt="Sao Tome and Principe" /></div>

<div class="edit1"><p><strong>São Tomé and Príncipe</strong> country of central <a href="http://www.holidaysrating.com/index.php/regions/africa">Africa</a> with a size of 1,001 square km, located on the Equator in the Gulf of Guinea. It has two main islands: São Tomé and Príncipe. There are several rocky islets such as Rôlas, south of São Tomé island, Caroço, Pedras, and Tinhosas, south of Príncipe. <a href="http://www.holidaysrating.com/index.php/africa_cities/sao_tome">São Tomé</a>is the capital. Portuguese is the official language in São Tomé and Príncipe. </p></div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed1') ?>
<?php endif ?>

<div class="country-menu">
<ul>
<li><?php echo anchor('africa_before_you_go/sao_tome_and_principe', img('assets/images/countries/menu/before-you-go.png')); ?></li>
<li><?php echo anchor('africa_entry/sao_tome_and_principe', img('assets/images/countries/menu/entry.png')); ?></li>
<li><?php echo anchor('africa_adventures/sao_tome_and_principe', img('assets/images/countries/menu/adventures.png')); ?></li>
<li><?php echo anchor('africa_must_see/sao_tome_and_principe', img('assets/images/countries/menu/must-see.png')); ?></li>
</ul>
<ul>
<li><?php echo anchor('africa_getting_around/sao_tome_and_principe', img('assets/images/countries/menu/getting-around.png')); ?></li>
<li><?php echo anchor('africa_health/sao_tome_and_principe', img('assets/images/countries/menu/health.png')); ?></li>
<li><?php echo anchor('africa_local_food/sao_tome_and_principe', img('assets/images/countries/menu/food.png')); ?></li>
<li><?php echo anchor('africa_public_holidays/sao_tome_and_principe', img('assets/images/countries/menu/holidays.png')); ?></li>
</ul>
</div>

<h1>Climate</h1>
<div class="edit2">
<p>The climate is mainly maritime and tropical, but, because of the rough topography, there is a wide range of microclimates. The prevailing moist southwesterly winds are intercepted by the mountains, so annual rainfall exceeds 275 inches (7,000 mm) in the southwestern part of São Tomé island, while the far northeast receives less than 30 inches (760 mm).</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed2') ?>
<?php endif ?>

<h1>Flora and Fauna</h1>
<div class="edit3">
<p>The original vegetation of the islands was luxuriant tropical rainforest, with a gradual transition from lowland forest to mist forest. Some of the islands’ area, mainly in the south and west, is still covered with rainforest. Much of this is secondary growth on abandoned plantation land. The flora and fauna include many rare and endemic species, reflecting the isolation and environmental diversity of the islands. Birds such as the ibis, shrike, and grosbeak can be found in Sao Tome and Principe. Many of the plants, birds, reptiles, and small mammals are threatened by pressure on the remaining rainforest.</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed3') ?>
<?php endif ?>

<?php echo anchor('africa_national_parks/sao_tome_and_principe', '(Go to National Parks)') ?>

<!-- Currency Converter script - fx-rate.net --> 
<div style="width:474px; background-color:white;border:2px solid #888;text-align:center;margin-top:10px;padding:0px"> 
<div style="background-color:#FEE89D ;border-bottom:1px solid #888;width:100%;margin:0px;padding:0px;align:center;text-align:center;">
<a title="Sao Tome Dobra Converter" class="HS1label" style="font-size:12px!important; line-height:16px!important;font-family: arial;text-decoration:none;color:#132105;margin-bottom:6px;" target="_blank" href="http://fx-rate.net/STD/"><b>Sao Tome Dobra Converter</b></a>
</div> <script type="text/javascript" src="http://fx-rate.net/converter.php?size=short&layout=horizontal&currency=STD"></script></div> 
<!-- End of Currency Converter script --> 

</div>

<div class="clear"></div>
<div class="comment">
<img src="<?php echo base_url() ?>assets/images/comments.png" alt="comment" style="margin-left:300px" /><?php echo anchor('user/make_comment/sao_tome_and_principe', 'Leave a comment') ?>
</div>

</div>


<div class="right-side">
<div class="top-island"></div>

<div class="middle-island">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt;<?php echo anchor('topmenu/worldmap', 'Worldmap') ?>&gt;<?php echo anchor('regions/africa', 'Africa') ?>&gt; São Tomé and Príncipe</span></p>

<iframe width="175" height="120" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=S%C3%A3o+Tom%C3%A9+and+Pr%C3%ADncipe&amp;aq=1&amp;oq=Sao+&amp;sll=-1.940278,29.873888&amp;sspn=3.578912,6.696167&amp;ie=UTF8&amp;hq=&amp;hnear=S%C3%A3o+Tom%C3%A9+and+Pr%C3%ADncipe&amp;t=m&amp;ll=0.236205,6.61377&amp;spn=0.65917,0.955811&amp;z=8&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.au/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=S%C3%A3o+Tom%C3%A9+and+Pr%C3%ADncipe&amp;aq=1&amp;oq=Sao+&amp;sll=-1.940278,29.873888&amp;sspn=3.578912,6.696167&amp;ie=UTF8&amp;hq=&amp;hnear=S%C3%A3o+Tom%C3%A9+and+Pr%C3%ADncipe&amp;t=m&amp;ll=0.236205,6.61377&amp;spn=0.65917,0.955811&amp;z=8" target="_blank" style="color:#5F6A6F;text-align:left">View Larger Map</a></small>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" style="margin-top:8px"/>

<div class="key-facts">	
<h2>Key Facts</h2>
<ul>
<li><strong>Capital city:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/city.png" style="margin-right:5px" alt="city"/><?php echo anchor('africa_cities/sao_tome', 'São Tomé') ?></li>

<li><strong>Size:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/size.png" style="margin-right:5px" alt="size"/>1,001 km²</li>
<li><img src="<?php echo base_url() ?>assets/assets/size.png" style="margin-right:5px" alt="size"/>386 sq mi</li>

<li><strong>Water:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/water.png" style="margin-right:5px" alt="water"/>0%</li>

<li><strong>Highest point:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/mountain.png" style="margin-right:5px" alt="mountain"/>Pico de São Tomé</li>
<li>2,024 metres (6,640 ft)</li>

<li><strong>Driving on:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/car.png" style="margin-right:5px" alt="car"/>Right</li>
 
<li><strong>Time zone:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/clock.png" style="margin-right:5px" alt="clock"/><?php echo anchor('time/utc', 'UTC') ?> +0</li>

<li><strong>Calling code:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/phone.png" style="margin-right:5px" alt="phone"/>+239</li>
</ul>
</div>

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

<h2 style="margin-bottom:5px">São Tomé and Príncipe</h2>
<div class="edit4">
<p>This land is very silent, provincial with nearly no nightlife or much amusement. In contrast, it is a secure land with full of pretty if decrepit colonial architecture.</p>
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