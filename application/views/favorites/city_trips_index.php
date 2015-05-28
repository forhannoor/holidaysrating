<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Favorites.. Our selection of city trips!"/>
<meta name="keywords" content="Romantic cities, romance, favorites, favoriteslist, top 10 city trips"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta content="<?php echo base_url() ?>assets/images/sandlogo.jpg" property="og:image" />

<title>The best city trips | Holidaysrating</title>
<?php echo js('assets/js/jquery-2.1.1.min.js') ?>
<?php echo js('assets/js/jquery.jeditable.min.js') ?>
</head>

<body>
<div id="top-head-favorites">
<?php $this->load->view($header) ?>
</div>

<div id="slider-favorites">
<?php $this->load->view('bxslider') ?>
</div>

<div id="content">
<h1><?php echo $heading ?></h1>
<div class="clear"></div>
<div class="left-side">
<div class="top-favorites"></div>
<div class="middle-favorites">
<div class="my_login">
<?php $this->load->view($sidebar) ?>
</div>
</div>
<div class="bottom-favorites"></div>
</div>

<div class="center">
<div class="hot">
<div class="edit1">
<h1>Introduction</h1>
<p>There are millions beautiful cities around the world. We have made a selection of populair destinations.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed1') ?>
<?php endif ?>

<br /><br />

<div class="edit2">
<p><strong>Barcelona, <a href="http://www.holidaysrating.com/index.php/europe_countries/spain">Spain</a></strong><br>
Barcelona is a great holiday place which is proud of its nightlife, accommodations, sightseeing and pleasure.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed2') ?>
<?php endif ?>

<div class="edit3">
<p><strong>Rome, <a href="http://www.holidaysrating.com/index.php/europe_countries/italy">Italy</a></strong><br>
Text coming soon</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed3') ?>
<?php endif ?>

<div class="edit4">
<p><strong>London, <a href="http://www.holidaysrating.com/index.php/europe_countries/united_kingdom">United Kingdom</a></strong><br>
London is famous for a number of things. But this place could be amazing for your city trip. The restaurant, shopping, nightlife and accommodations are excellent which will satisfy tourists.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed4') ?>
<?php endif ?>

<div class="edit5">
<p><strong>Santiago, <a href="http://www.holidaysrating.com/index.php/south_america_countries/chile">Chile</a></strong><br>
Santiago is the capital and economic hub of Chile. You will enjoy its museums, restaurants, bars, events, theaters, and other entertainment and cultural programs.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed5') ?>
<?php endif ?>

<div class="edit6">
<p><strong>Hong Kong, <a href="http://www.holidaysrating.com/index.php/asia_countries/china">China</a></strong><br>
This former British colony is now a great tourism destination for China's increasingly affluent mainland population. It is considered as one of the important hubs in East Asia.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed6') ?>
<?php endif ?>

<div class="edit7">
<p><strong>Darwin, <a href="http://www.holidaysrating.com/index.php/regions/australia">Australia</a></strong><br>
This is a city where more than 50 nations make up its population of 110,000. Darwin is located on the Timor Sea. Darwin  is unique for its culture, music, language, lifestyle, sports fishing operators and sunset sails, etc.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed7') ?>
<?php endif ?>

<div class="edit8">
<p><strong>Las Vegas, <a href="http://www.holidaysrating.com/index.php/regions/usa">United States of America</a></strong><br>
If you are looking for a fantasy-like environment then do not miss a city trip in Las Vegas. This is the largest city in the U.S. state of Nevada. The city is proud of its mega-casino complexes decorated with lavish care.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed8') ?>
<?php endif ?>

<div class="edit9">
<p><strong>Moscow, <a href="http://www.holidaysrating.com/index.php/regions/russia">Russia</a></strong><br>
Moscow is the 860 year-old capital of the Russian Federation. This city is truly magnificent and proud to show you what you never really thought of. Some of the great things to see here are Lenin Mausoleum, The Kremlin, Pushkin Museum, The Institute of Russian Realist Art, Museum of soviet arcade machines and Gorky Park.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed9') ?>
<?php endif ?>

<div class="edit10">
<p><strong>Cape town, <a href="http://www.holidaysrating.com/index.php/africa_countries/south_africa">South Africa</a></strong><br>
Cape Town is the second largest city in South Africa. Bo-Kaap, The Castle of Good Hope, Kirstenbosch Botanical Gardens, Rhodes Memorial and Victoria and Alfred Waterfront are some of the best attractions of this city.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed10') ?>
<?php endif ?>

<div class="edit11">
<p><strong>Paris, <a href="http://www.holidaysrating.com/index.php/europe_countries/france">France</a></strong><br>
Paris is a city of dream. Paris is one of the luxurious, exotic and influential cities in the world. Paris is the ultimate home of the best quality of and cosmetics, such as L'Oréal, Chanel,  Saint-Laurent, Guerlain, Dior,Yves Lancôme,  Clarins, etc.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed11') ?>
<?php endif ?>

<div class="edit12">
<p><strong>Dubai, <a href="http://www.holidaysrating.com/index.php/asia_countries/uae">United Arab Emirates</a></strong><br>
Dubai is one of the richest cities in the world. IT has done some unimaginable things which include Burj Khalifa, Burj al-Arab Hotel and many more.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed12') ?>
<?php endif ?>

<div class="edit13">
<p><strong>Vancouver, <a href="http://www.holidaysrating.com/index.php/north_america_countries/canada">Canada</a></strong><br>
Vancouver is frequently ranked as one of the magnificent cities to live in. This city offers majestic natural beauty, as it is nestled between the Coast Mountains and the Pacific Ocean.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed13') ?>
<?php endif ?>


</div>
</div>


<div class="right-side">
<div class="top-favorites"></div>
<div class="middle-favorites">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt; <?php echo anchor('topmenu/favorites', 'Favorites') ?>&gt;City Trips</span></p>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" />

<?php $this->load->view($right_bar_fav) ?>

<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" />
<h2>Links</h2>

<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" />
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
</div>
<div class="bottom-favorites"></div>
</div>
<div class="clear"></div>


</div>
<div id="footer">

<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Favorites -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="1313838340"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<div class="clear"></div>
<?php $this->load->view($footer) ?>
<div class="logo"><center><img src="<?php echo base_url() ?>assets/images/globe-slogin.jpg" alt="logo" /></center>
</div>
<div class="clear"></div>
<?php $this->load->view($last_line) ?>
</div>
<?php echo css('assets/css/holiday.css') ?>
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
    
    $('.edit6').editable(siteUrl + '/6', {
        type      : 'textarea',
        cancel    : 'Cancel',
        submit    : 'OK',
        tooltip   : 'Click pencil to edit...',
        event     : 'edit'
    });
    
    $('#ed6').bind('click', function(){
        $('.edit6').trigger('edit');
        return false;
    });
    
    $('.edit7').editable(siteUrl + '/7', {
        type      : 'textarea',
        cancel    : 'Cancel',
        submit    : 'OK',
        tooltip   : 'Click pencil to edit...',
        event     : 'edit'
    });
    
    $('#ed7').bind('click', function(){
        $('.edit7').trigger('edit');
        return false;
    });
    
    $('.edit8').editable(siteUrl + '/8', {
        type      : 'textarea',
        cancel    : 'Cancel',
        submit    : 'OK',
        tooltip   : 'Click pencil to edit...',
        event     : 'edit'
    });
    
    $('#ed8').bind('click', function(){
        $('.edit8').trigger('edit');
        return false;
    });
    
    $('.edit9').editable(siteUrl + '/9', {
        type      : 'textarea',
        cancel    : 'Cancel',
        submit    : 'OK',
        tooltip   : 'Click pencil to edit...',
        event     : 'edit'
    });
    
    $('#ed9').bind('click', function(){
        $('.edit9').trigger('edit');
        return false;
    });
    
    $('.edit10').editable(siteUrl + '/10', {
        type      : 'textarea',
        cancel    : 'Cancel',
        submit    : 'OK',
        tooltip   : 'Click pencil to edit...',
        event     : 'edit'
    });
    
    $('#ed10').bind('click', function(){
        $('.edit10').trigger('edit');
        return false;
    });
    
    $('.edit11').editable(siteUrl + '/11', {
        type      : 'textarea',
        cancel    : 'Cancel',
        submit    : 'OK',
        tooltip   : 'Click pencil to edit...',
        event     : 'edit'
    });
    
    $('#ed11').bind('click', function(){
        $('.edit11').trigger('edit');
        return false;
    });
    
    $('.edit12').editable(siteUrl + '/12', {
        type      : 'textarea',
        cancel    : 'Cancel',
        submit    : 'OK',
        tooltip   : 'Click pencil to edit...',
        event     : 'edit'
    });
    
    $('#ed12').bind('click', function(){
        $('.edit12').trigger('edit');
        return false;
    });    
       
    $('.edit13').editable(siteUrl + '/13', {
        type      : 'textarea',
        cancel    : 'Cancel',
        submit    : 'OK',
        tooltip   : 'Click pencil to edit...',
        event     : 'edit'
    });
    
    $('#ed13').bind('click', function(){
        $('.edit13').trigger('edit');
        return false;
    });    

});
</script>
<?php endif ?>
</html>