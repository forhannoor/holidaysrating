<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Favorites.. The best diving in the world!"/>
<meta name="keywords" content="dive, diving, divelocation, favorites, favoriteslist, best diving, top 10 dive"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta content="<?php echo base_url() ?>assets/images/thumbs/fav5.jpg" property="og:image" />

<title>The best diving | Holidaysrating</title>
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
<p>The water is filled with amazing locations to dive. It is not possible to mention them all but we have made a selection of the very best for you!</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed1') ?>
<?php endif ?>

<br /><br />

<div class="edit2">
<p><strong>Barracuda Point, Sipadan Island, <a href="http://www.holidaysrating.com/index.php/asia_countries/malaysia">Malaysia</a></strong><br>
Barracuda Point gets ranked as one of the five best diving spots. Turtles, batfish, schools of whitetip sharks and there are many amazing things to see in just one dive.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed2') ?>
<?php endif ?>

<div class="edit3">
<p><strong>Yongala, <a href="http://www.holidaysrating.com/index.php/australia_states/queensland">Queensland</a>, <a href="http://www.holidaysrating.com/index.php/regions/australia">Australia</a></strong><br>
One of the world’s most excotic diving experience can be found from Yongala Dive.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed3') ?>
<?php endif ?>

<div class="edit4">
<p><strong>SS Thistlegorm, Red Sea, <a href="http://www.holidaysrating.com/index.php/africa_countries/egypt">Egypt</a></strong><br>
The SS Thistlegorm was a British armed Merchant Navy ship built in 1940 by Joseph Thompson & Son in Sunderland,England. She was sunk on 6 October 1941 near Ras Muhammad in the Red Sea and is now a well known diving site.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed4') ?>
<?php endif ?>

<div class="edit5">
<p><strong>Blue Corner Wall, Palau, Oceania</strong><br>
Palau offers top-notch diving with sheer drop-offs, sea walls, caves and an exuberance of marine life. certainly, its Blue Corner Wall dive is at present ranked number one in the Top Ten Dives of the World list!</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed5') ?>
<?php endif ?>

<div class="edit6">
<p><strong>Gordon Rocks, Galapagos Islands</strong><br>
Gordon Rocks is a well-known of any diving experience in the Galapagos. It is the top of a submerged cone at the northeastern end of Santa Cruz Island.  It is sometimes referred to as 'the washing machine' for good reason. The exposed northern and southern rocks are what remain of a caldera. </p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed6') ?>
<?php endif ?>

<div class="edit7">
<p><strong>Great Blue Hole, <a href="http://www.holidaysrating.com/index.php/central_america_countries/belize">Belize</a></strong><br>
Diving is so great here. The island Long Caye in the Lighthouse Reef which is just only a few kilometers away from the Great Blue Hole offers one of the great diving experiences.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed7') ?>
<?php endif ?>

<div class="edit8">
<p><strong>Big Brother, Red Sea, <a href="http://www.holidaysrating.com/index.php/africa_countries/egypt">Egypt</a></strong><br>
The Red Sea is a great home of world class diving. diving the dramatic walls of the Brothers can be a matter of ultimate fun and thrill.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed8') ?>
<?php endif ?>

<div class="edit9">
<p><strong>Tubbataha, Palawan, <a href="http://www.holidaysrating.com/index.php/asia_countries/philippines">Philippines</a></strong><br>
Philippines is proud of its Tubbataha diving spot. Tubbataha, Palawan is one of the best diving spots in the world today. Beautiful landscape around El Nido will amaze everyone while diving.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed9') ?>
<?php endif ?>

<div class="edit10">
<p><strong>Maaya Thila, Maldives</strong><br>
All the diving spots are not in the West. Maldives has one of the top diving spots, in fact there are a number of scuba diving spots today. 
</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed10') ?>
<?php endif ?>

<div class="edit11">
<p><strong>Silfra, Þingvellir, <a href="http://www.holidaysrating.com/index.php/europe_countries/iceland">Iceland</a></strong><br>
Silfra is considered rich, this because it is a crack between the North American and Eurasian continents. People would dive where the continental plates meet and drift apart 2cm per year.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed11') ?>
<?php endif ?>

<div class="edit12">
<p><strong>Batu Bolong, <a href="http://www.holidaysrating.com/index.php/indonesia_islands/komodo">Komodo</a>, <a href="http://www.holidaysrating.com/index.php/regions/indonesia">Indonesia</a></strong><br>
At the surface area, no one will notice any eye-catchy things. But under the clear water there is a giant rock going deep into the blue to 70m. Amazing marine life which is with a mixture of soft coral cover and so many cracks are seen here. </p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed12') ?>
<?php endif ?>

<div class="edit13">
<p><strong>La Dania's Leap to Karpata, <a href="http://www.holidaysrating.com/index.php/caribbean_countries/bonaire">Bonaire</a>, <a href="http://www.holidaysrating.com/index.php/regions/caribbean">Caribbean</a></strong><br>
La Dania's could be an excellent dive site on Bonaire, but some warning should be exercised. but this is one the finest diving site.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed13') ?>
<?php endif ?>

<div class="edit14">
<p><strong>>Malapascua Island, <a href="http://www.holidaysrating.com/index.php/asia_countries/philippines">Philippines</a></strong><br>
Apart from Tubbataha, Malapascua Island is also another fine site for diving. It has something for all divers, so you should not miss the secret of the Philippines.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed14') ?>
<?php endif ?>

<div class="edit15">
<p><strong>>Raja Ampat, <a href="http://www.holidaysrating.com/index.php/regions/indonesia">Indonesia</a></strong><br>
Raja Ampat is great for its biodiversity and Papua Diving. This area is considered great for having the highest species counts in the World, healthy and vibrant corals, large numbers of fish and other interesting species and the natural beauty above water.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed15') ?>
<?php endif ?>

<div class="edit16">
<p><strong>Albatross Passage, New Ireland, <a href="http://www.holidaysrating.com/index.php/oceania_countries/papua_new_guinea">Papua New Guinea</a></strong><br>
Albatross Passage could be the best site on the Bismarck Sea side and is surely going to be your favorite.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed16') ?>
<?php endif ?>


</div>
</div>


<div class="right-side">
<div class="top-favorites"></div>
<div class="middle-favorites">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt; <?php echo anchor('topmenu/favorites', 'Favorites') ?>&gt;The best diving</span></p>
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

    $('.edit14').editable(siteUrl + '/14', {
        type      : 'textarea',
        cancel    : 'Cancel',
        submit    : 'OK',
        tooltip   : 'Click pencil to edit...',
        event     : 'edit'
    });
    
    $('#ed14').bind('click', function(){
        $('.edit14').trigger('edit');
        return false;
    });
    
    $('.edit15').editable(siteUrl + '/15', {
        type      : 'textarea',
        cancel    : 'Cancel',
        submit    : 'OK',
        tooltip   : 'Click pencil to edit...',
        event     : 'edit'
    });
    
    $('#ed15').bind('click', function(){
        $('.edit15').trigger('edit');
        return false;
    });    
       
    $('.edit16').editable(siteUrl + '/16', {
        type      : 'textarea',
        cancel    : 'Cancel',
        submit    : 'OK',
        tooltip   : 'Click pencil to edit...',
        event     : 'edit'
    });
    
    $('#ed16').bind('click', function(){
        $('.edit16').trigger('edit');
        return false;
    });    

});
</script>
<?php endif ?>
</html>