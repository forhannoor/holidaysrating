<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Mauritius"/>
<meta name="keywords" content="Mauritius"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta name="language" content="English" />
<meta content="<?php echo base_url() ?>assets/images/flags/africa/mauritius.gif" property="og:image" />

<title>Mauritius | Africa</title>
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
<div class="flag" style="float:left"><img src="<?php echo base_url() ?>assets/images/flags/africa/mauritius.jpg" alt="Mauritius" /></div>

<div class="edit1">
<p><strong>Mauritius</strong> is an island in the Indian Ocean around 2,000 kilometres off the southeast coast of <a href="http://www.holidaysrating.com/index.php/regions/africa">Africa</a>. It has a size of 2,040 square kilometres. French and Mauritiuan Creole are the most common languages but English is also spoken.<br><br>
Mauritius has incredible coral reefs and white sandy beaches, shaded by coconut palms and smiled upon by a canopy of blue sky and golden sunshine. <a href="http://www.holidaysrating.com/index.php/africa_cities/port_louis">Port Louis</a> is the capital and largest city of the island.</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed1') ?>
<?php endif ?>

<div class="country-menu">
<ul>
<li><?php echo anchor('africa_before_you_go/mauritius', img('assets/images/countries/menu/before-you-go.png')); ?></li>
<li><?php echo anchor('africa_entry/mauritius', img('assets/images/countries/menu/entry.png')); ?></li>
<li><?php echo anchor('africa_adventures/mauritius', img('assets/images/countries/menu/adventures.png')); ?></li>
<li><?php echo anchor('africa_must_see/mauritius', img('assets/images/countries/menu/must-see.png')); ?></li>
</ul>
<ul>
<li><?php echo anchor('africa_getting_around/mauritius', img('assets/images/countries/menu/getting-around.png')); ?></li>
<li><?php echo anchor('africa_health/mauritius', img('assets/images/countries/menu/health.png')); ?></li>
<li><?php echo anchor('africa_local_food/mauritius', img('assets/images/countries/menu/food.png')); ?></li>
<li><?php echo anchor('africa_public_holidays/mauritius', img('assets/images/countries/menu/holidays.png')); ?></li>
</ul>
</div>

<h1>Climate</h1>
<div class="edit2">
<p>Mauritius enjoys a tropical climate. It is also close to the Capricorn, which means that the sun is longer at it's highest point than anywhere else.
In winter, from May to October, the highest temperatures vary between 20°C and 26°C in the coastal regions. In summer, November to April, it is slightly higher, around 26°C to 32°C.
The water temperature of the Indian Ocean can go up to 28°C, with wind is usually blowing quiet steady from the East.</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed2') ?>
<?php endif ?>

<h1>Flora and Fauna</h1>
<div class="edit3">
<p>In Mauritius, there are some 685 various plant species, out of which 311 are endemic. However, 60% of these species as endangered and Mauritius as the third country in the world with the most threatened island flora.<br />
When Mauritius was discovered by the Dutch in 1598, a thick ebony forest covered the island. With the French and British colonisation this led to serious deforestation and now only 2% of quality native forest is left. Most of it is found on the Northern islets offshore and in Black River National Park.<br /><br />
Between all these rare and endemic species, three stand out:<br />
The Trochetia Boutoniana, only found only on Le Morne mountain, and declared National Flower in 1992. The Diospyros tessellaria, or ebony tree, endemic to Mauritius.<br /> 
This was the most valuable wood worldwide during the Dutch colonization period and it has been widely exploited.<br />
Crinum Mauritianum grows in swampy conditions on Mauritius. This plant, commonly called the Fleur de Lys du pays, was presumed extinct in the wild until its rediscovery.<br /><br />

With the destruction of native forests, a lot of animal species have disappeared in Mauritius. The most famous would be the Dodo which disappeared in the 17th century.
The Mauritius Kestrel was once the world’s rarest bird, as its entire population in the early 1970s, had been reduced to only four. It is the only bird of prey in Mauritius and still the rarest falcon in the world.
The Pink Pigeon is the world’s rarest pigeon and was once found all over the island. It is now restricted to the wet upland forests in Southwestern Mauritius.
Today you are able to spot; Macaque monkeys, Flying foxes, Fruitbats, Elephant seals, Dugongs, Whales, Dolphins and the once extincted tortoises.</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed3') ?>
<?php endif ?>

<?php echo anchor('africa_national_parks/mauritius', '(Go to National Parks)') ?>

<!-- Currency Converter script - fx-rate.net --> 
<div style="width:474px; background-color:white;border:2px solid #888;text-align:center;margin-top:10px;padding:0px"> 
<div style="background-color:#FEE89D ;border-bottom:1px solid #888;width:100%;margin:0px;padding:0px;align:center;text-align:center;">
<a title="Mauritius Rupee Converter" class="HS1label" style="font-size:12px!important; line-height:16px!important;font-family: arial;text-decoration:none;color:#132105;margin-bottom:6px;" target="_blank" href="http://fx-rate.net/MUR/"><b>Mauritius Rupee Converter</b></a>
</div> <script type="text/javascript" src="http://fx-rate.net/converter.php?size=short&layout=horizontal&currency=MUR"></script></div> 
<!-- End of Currency Converter script --> 


</div>

<div class="clear"></div>
<div class="comment">
<img src="<?php echo base_url() ?>assets/images/comments.png" alt="comment" style="margin-left:300px" /><?php echo anchor('user/make_comment/mauritius', 'Leave a comment') ?>
</div>

</div>


<div class="right-side">
<div class="top-island"></div>

<div class="middle-island">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt;<?php echo anchor('topmenu/worldmap', 'Worldmap') ?>&gt; <?php echo anchor('regions/africa', 'Africa') ?>&gt;Mauritius</span></p>

<iframe width="175" height="120" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=mauritius&amp;aq=&amp;sll=-19.457034,145.879162&amp;sspn=21.351879,41.44043&amp;ie=UTF8&amp;hq=&amp;hnear=Mauritius&amp;t=m&amp;ll=-20.344627,57.546387&amp;spn=2.472071,3.823242&amp;z=6&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.au/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=mauritius&amp;aq=&amp;sll=-19.457034,145.879162&amp;sspn=21.351879,41.44043&amp;ie=UTF8&amp;hq=&amp;hnear=Mauritius&amp;t=m&amp;ll=-20.344627,57.546387&amp;spn=2.472071,3.823242&amp;z=6" target="_blank" style="color:#5F6A6F;text-align:left">View Larger Map</a></small>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" style="margin-top:8px"/>
	
<div class="key-facts">	
<h2>Key Facts</h2>
<ul>
<li><strong>Capital city:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/city.png" style="margin-right:5px" alt="city"/><?php echo anchor('africa_cities/port_louis', 'Port Louis') ?></li>

<li><strong>Size:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/size.png" style="margin-right:5px" alt="size"/>2,040 km²</li>
<li><img src="<?php echo base_url() ?>assets/assets/size.png" style="margin-right:5px" alt="size"/>787 sq mi</li>

<li><strong>Water:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/water.png" style="margin-right:5px" alt="water"/>0.07%</li>

<li><strong>Highest point:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/mountain.png" style="margin-right:5px" alt="mountain"/>Piton de la Petite Rivière Noire</li>
<li>828 metres (2,717 ft)</li>

<li><strong>Drives on:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/car.png" style="margin-right:5px" alt="car"/>Right</li>

<li><strong>Time zone:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/clock.png" style="margin-right:5px" alt="clock"/><?php echo anchor('time/utc', 'UTC') ?> +4 <?php echo anchor('time/mut', '(MUT)') ?></li>

<li><strong>Calling code:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/phone.png" style="margin-right:5px" alt="phone"/>+230</li>
</ul>
</div>

<h2>Cities</h2>
<ul>
<li><?php echo anchor('africa_cities/plaisance', 'Plaisance') ?></li>
<li><?php echo anchor('africa_cities/vacoas', 'Vacoas') ?></li>
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

<h2 style="margin-bottom:5px">Explore Mauritius</h2>
<div class="edit4">
<p>Mauritius is a beautiful small, multi-cultural island. Many tourists come every year to celebrate exotic new year and holidays.</p>
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