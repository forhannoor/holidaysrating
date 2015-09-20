<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Algeria"/>
<meta name="keywords" content="Algeria, Algeria Travel"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta name="language" content="English" />
<meta content="<?php echo base_url() ?>assets/images/flags/africa/algeria.gif" property="og:image" />

<title>Algeria | Africa</title>
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
<div class="flag" style="float:left"><?php echo img(array('src' => 'assets/images/flags/africa/algeria.jpg', 'alt' => 'Algeria')) ?></div>

<div class="edit1">
<p><strong>Algeria</strong> is a country in north <a href="http://www.holidaysrating.com/index.php/regions/africa">Africa</a> on the Mediterranean coast. With its size of 2,381,741 square kilometres, it is the largest country in Africa. <a href="http://www.holidaysrating.com/index.php/africa_cities/algiers">Algiers</a> is the capital and largest city of Algeria. The official language spoken is Arabic. </p></div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed1') ?>
<?php endif ?>

<div class="travel-alerts">
<div class="edit2">
<p>Holidaysrating advise you to exercise a high degree of caution in Algeria. There is a high threat from terrorism, civil unrest, criminal violence and kidnaps. Therefore we advise you to reconsider your need to travel. <a href="http://www.holidaysrating.com/index.php/news/travel_alerts">See also Travel Alerts</a></p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed2') ?>
<?php endif ?>

</div>

<div class="country-menu">
<ul>
<li><?php echo anchor('africa_before_you_go/algeria', img('assets/images/countries/menu/before-you-go.png')); ?></li>
<li><?php echo anchor('africa_entry/algeria', img('assets/images/countries/menu/entry.png')); ?></li>
<li><?php echo anchor('africa_adventures/algeria', img('assets/images/countries/menu/adventures.png')); ?></li>
<li><?php echo anchor('africa_must_see/algeria', img('assets/images/countries/menu/must-see.png')); ?></li>
</ul>
<ul>
<li><?php echo anchor('africa_getting_around/algeria', img('assets/images/countries/menu/getting-around.png')); ?></li>
<li><?php echo anchor('africa_health/algeria', img('assets/images/countries/menu/health.png')); ?></li>
<li><?php echo anchor('africa_local_food/algeria', img('assets/images/countries/menu/food.png')); ?></li>
<li><?php echo anchor('africa_public_holidays/algeria', img('assets/images/countries/menu/holidays.png')); ?></li>
</ul>
</div>

<h1>Climate</h1>
<div class="edit3">
<p>Algeria has mild, wet winters with hot, dry summers. Along the coast it is drier with cold winters and hot summers. On higher ground, hot, dust and sandy winds are common, especially in summer. The highest official recorded temperature was 50.6 °C in Salah. </p></div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed3') ?>
<?php endif ?>

<h1>Flora and fauna</h1>
<div class="edit4">
<p>Algeria is very rich in wildlife due to its grassy desert-like and mountainous regions. Tourists will see animals like jackals, gazelles and wild boars but spot fennecs (foxes), and jerboas are also seen. a few leopard and cheetah also exist but they are not commonly seen. Bird watchers will definitely be amazed seeing the beautiful birds. Reptiles like snakes, lizards and many others can be found throughout the diverse regions of Algeria. Many major animals are now on the edge of extinction, lions and bears are among them. Macchia scrub, oaks, olive trees, cedars and other conifers are available in the north of the region. Visitor can see Aleppo pine, juniper, and evergreen oak In the mountainous areas which are really beautiful. In the warmer parts of the country,  Fig, eucalyptus, agave, and various palm trees are found. The grape vine is indigenous to the coast. some oases have palm trees in the Sahara region. Camels are very common in the region.  </p></div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed4') ?>
<?php endif ?>

<?php echo anchor('africa_national_parks/algeria', '(Go to National Parks)') ?>

<!-- Currency Converter script - fx-rate.net --> 
<div style="width:474px; background-color:white;border:2px solid #888;text-align:center;margin-top:10px;padding:0px"> 
<div style="background-color:#AEAF61 ;border-bottom:1px solid #888;width:100%;margin:0px;padding:0px;align:center;text-align:center;">
<a title="Algerian Dinar Calculator" class="HS1label" style="font-size:12px!important; line-height:16px!important;font-family: arial;text-decoration:none;color:#132105;margin-bottom:6px;" target="_blank" href="http://fx-rate.net/DZD/"><b>Algerian Dinar Calculator</b></a>
</div> <script type="text/javascript" src="http://www.fx-rate.net/converter.php?layout=horizontal&amount=1000&currency=DZD&tcolor=132105&default_pair=USD/DZD"> </script></div> 
<!-- End of Currency Converter script --> 

</div>

<div class="clear"></div>
<div class="comment">
<img src="<?php echo base_url() ?>assets/images/comments.png" alt="comment" style="margin-left:300px" /><?php echo anchor('user/make_comment/algeria', 'Leave a comment') ?>
</div>
</div>


<div class="right-side">
<div class="top"></div>

<div class="middle">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt;<?php echo anchor('topmenu/worldmap', 'Worldmap') ?>&gt; <?php echo anchor('regions/africa', 'Africa') ?>&gt;Algeria</span></p>

<iframe width="175" height="120" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=algeria&amp;aq=&amp;sll=-11.22151,17.885742&amp;sspn=27.837493,53.569336&amp;ie=UTF8&amp;hq=&amp;hnear=Algeria&amp;t=m&amp;ll=28.149503,1.757813&amp;spn=9.292101,15.292969&amp;z=4&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.au/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=algeria&amp;aq=&amp;sll=-11.22151,17.885742&amp;sspn=27.837493,53.569336&amp;ie=UTF8&amp;hq=&amp;hnear=Algeria&amp;t=m&amp;ll=28.149503,1.757813&amp;spn=9.292101,15.292969&amp;z=4" target="_blank" style="color:#5F6A6F;text-align:left">View Larger Map</a></small>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" style="margin-top:8px"/>

<div class="key-facts">	
<h2>Key Facts</h2>
<ul>
<li><strong>Capital city:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/city.png" style="margin-right:5px" alt="city"/><?php echo anchor('africa_cities/algiers', 'Algiers') ?></li>

<li><strong>Size:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/size.png" style="margin-right:5px" alt="size"/>2,381,741 km²</li>
<li><img src="<?php echo base_url() ?>assets/assets/size.png" style="margin-right:5px" alt="size"/>426,371 sq mi</li>

<li><strong>Water:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/water.png" style="margin-right:5px" alt="water"/>0.7%</li>

<li><strong>Highest point:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/mountain.png" style="margin-right:5px" alt="mountain"/>Mount Tahat</li>
<li>2,908 metres (9,541 ft)</li>

<li><strong>Drives on:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/car.png" style="margin-right:5px" alt="car"/>Right</li>

<li><strong>Time zone:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/clock.png" style="margin-right:5px" alt="clock"/><?php echo anchor('time/utc', 'UTC') ?>+1 <?php echo anchor('time/cet', '(CET)') ?></li>

<li><strong>Calling code:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/phone.png" style="margin-right:5px" alt="phone"/>+213</li>
</ul>
</div>
	
<h2>Cities</h2>
<ul>
<li><?php echo anchor('africa_cities/constantine', 'Constantine') ?></li>
<li><?php echo anchor('africa_cities/tamanrasset', 'Tamanrasset') ?></li>
</ul>

<h2>Stories</h2>
<ul>
<?php foreach($stories as $story): ?>
<li><?php echo anchor('story/read?id=' . $story->id . '&title=' . urlsafe_b64encode($story->title), $story->title)  ?></li>
<?php endforeach ?>
</ul>

<?php if(count($stories) > 0): ?>
<?php echo anchor('story/all?country=' . urlsafe_b64encode($this->uri->segment(2)), 'View All') ?>
<?php else: ?>
<p>Be the first to submit a story</p>
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

<h2 style="margin-bottom:5px">Explore Algeria</h2>
<div class="edit5">
<p>Algeria became the largest country in <a href="http://www.holidaysrating.com/index.php/regions/africa">Africa</a> with so many tourist attractions and sightseeing. Beaches, Algiers Botanical Gardens, Basilica of Algiers, and there are so many beautiful places are seen in this country. </p>
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
        event     : 'edit',
        cssclass  : 'editable-higher'
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

<style type="text/css">
.editable-higher textarea{
    min-height: 300px;
}
</style>
</html>