<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Benin"/>
<meta name="keywords" content="Benin, Benin Travel"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta name="language" content="English" />
<meta content="<?php echo base_url() ?>assets/images/flags/africa/benin.gif" property="og:image" />

<title>Benin | Africa</title>
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
<div class="flag" style="float:left"><img src="<?php echo base_url() ?>assets/images/flags/africa/benin.jpg" alt="Benin" /></div>

<div class="edit1">
<p><strong>Benin</strong> is a country in west <a href="http://www.holidaysrating.com/index.php/regions/africa">Africa</a> and has a size of 112,620 square kilometers. <a href="http://www.holidaysrating.com/index.php/africa_cities/porto_novo">Porto Novo</a> is the capital of the country. French is the official language in Benin. But indigenous languages like Yoruba and Fon are also spoken. Benin is also, luckily, one of the most stable and safe countries of the region for traveling to. Benin is the birthplace of Voodoo, with floating villages and python-filled temples. </p></div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed1') ?>
<?php endif ?>

<div class="country-menu">
<ul>
<li><?php echo anchor('africa_before_you_go/benin', img('assets/images/countries/menu/before-you-go.png')); ?></li>
<li><?php echo anchor('africa_entry/benin', img('assets/images/countries/menu/entry.png')); ?></li>
<li><?php echo anchor('africa_adventures/benin', img('assets/images/countries/menu/adventures.png')); ?></li>
<li><?php echo anchor('africa_must_see/benin', img('assets/images/countries/menu/must-see.png')); ?></li>
</ul>
<ul>
<li><?php echo anchor('africa_getting_around/benin', img('assets/images/countries/menu/getting-around.png')); ?></li>
<li><?php echo anchor('africa_health/benin', img('assets/images/countries/menu/health.png')); ?></li>
<li><?php echo anchor('africa_local_food/benin', img('assets/images/countries/menu/food.png')); ?></li>
<li><?php echo anchor('africa_public_holidays/benin', img('assets/images/countries/menu/holidays.png')); ?></li>
</ul>
</div>

<h1>Climate</h1>
<div class="edit2">
<p>The climate is hot and humid. About 1300 mm or about 51 inches rainfall is found in the coastal areas. People observe two rainy seasons and two dry seasons per year. Heavy rain occurs from April to July. And from December to April, dry season is seen. High temperature and humidity are in the tropical coast. The average maximum temperature is 31°C and the minimum is 24°C in Cotonou. </p></div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed2') ?>
<?php endif ?>

<h1>Flora and Fauna</h1>
<div class="edit3">
<p>Wildlife is protected and mainly seen in the National Parks. Deep forest exists in the country. Oil palms and ronier palms are growing because of the availability of coconut plantations. Trees include oil palm, shea nut, coconut, ronier palm, fromager, ebony, kapok and Senegal mahogany. Wild animals include elephant, lion, panther, monkey, wild pig, and there are so many kinds of antelope. Crocodiles, snakes, including python, puff adder, as well as mamba are normally seen. Tropical birds like Guinea fowl, Partridge, and wild duck are available.</p></div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed3') ?>
<?php endif ?>

<?php echo anchor('africa_national_parks/benin', '(Go to National Parks)') ?>

<!-- Currency Converter script - fx-rate.net --> 
<div style="width:474px; background-color:white;border:2px solid #888;text-align:center;margin-top:10px;padding:0px"> 
<div style="background-color:#AEAF61 ;border-bottom:1px solid #888;width:100%;margin:0px;padding:0px;align:center;text-align:center;">
<a title="CFA BEAC Franc Converter" class="HS1label" style="font-size:12px!important; line-height:16px!important;font-family: arial;text-decoration:none;color:#132105;margin-bottom:6px;" target="_blank" href="http://fx-rate.net/XAF/"><b>CFA BEAC Franc Converter</b></a>
</div> <script type="text/javascript" src="http://fx-rate.net/converter.php?size=short&layout=horizontal&currency=XAF"></script></div> 
<!-- End of Currency Converter script --> 

</div>

<div class="clear"></div>
<div class="comment">
<img src="<?php echo base_url() ?>assets/images/comments.png" alt="comment" style="margin-left:300px" /><?php echo anchor('user/make_comment/benin', 'Leave a comment') ?>
</div>

</div>


<div class="right-side">
<div class="top"></div>

<div class="middle">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt;<?php echo anchor('topmenu/worldmap', 'Worldmap') ?>&gt; <?php echo anchor('regions/africa', 'Africa') ?>&gt;Benin</span></p>

<iframe width="175" height="120" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=benin&amp;aq=&amp;sll=9.30769,2.315834&amp;sspn=7.064409,13.392334&amp;ie=UTF8&amp;hq=&amp;hnear=Benin&amp;t=m&amp;ll=9.492408,2.416992&amp;spn=5.199496,7.646484&amp;z=5&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.au/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=benin&amp;aq=&amp;sll=9.30769,2.315834&amp;sspn=7.064409,13.392334&amp;ie=UTF8&amp;hq=&amp;hnear=Benin&amp;t=m&amp;ll=9.492408,2.416992&amp;spn=5.199496,7.646484&amp;z=5" target="_blank" style="color:#5F6A6F;text-align:left">View Larger Map</a></small>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" style="margin-top:8px"/>

<div class="key-facts">	
<h2>Key Facts</h2>
<ul>
<li><strong>Capital city:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/city.png" style="margin-right:5px" alt="city"/><?php echo anchor('africa_cities/porto_novo', 'Porto Novo') ?></li>

<li><strong>Size:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/size.png" style="margin-right:5px" alt="size"/>112,620 km²</li>
<li><img src="<?php echo base_url() ?>assets/assets/size.png" style="margin-right:5px" alt="size"/>69,979 sq mi</li>

<li><strong>Water:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/water.png" style="margin-right:5px" alt="water"/>0.02%</li>

<li><strong>Highest point:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/mountain.png" style="margin-right:5px" alt="mountain"/>Mont Sokbaro</li>
<li>658 metres (2,159 ft)</li>

<li><strong>Drives on:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/car.png" style="margin-right:5px" alt="car"/>Right</li>

<li><strong>Time zone:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/clock.png" style="margin-right:5px" alt="clock"/><?php echo anchor('time/utc', 'UTC') ?> +1 <?php echo anchor('time/wat', '(WAT)') ?></li>

<li><strong>Calling code:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/phone.png" style="margin-right:5px" alt="phone"/>+229</li>
</ul>
</div>

<h2>Cities</h2>
<ul>
<li><?php echo anchor('africa_cities/cotonou', 'Cotonou') ?></li>
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

<h2 style="margin-bottom:5px">Explore Benin</h2>
<div class="edit4">
<p>Benin is a small country in West Africa with great tourist attractions. Situated in West <a href="http://www.holidaysrating.com/index.php/regions/africa">Africa</a>, Benin is the birthplace of voodoo and especially Voodoo ceremonies. </p>
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