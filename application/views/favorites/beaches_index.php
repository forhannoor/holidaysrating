<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Favorites.. The most amazing beaches around the world!"/>
<meta name="keywords" content="beach, beaches, favorites, favoriteslist, top 10 beaches "/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta content="<?php echo base_url() ?>assets/images/thumbs/fav2.jpg" property="og:image" />

<title>Beaches | Holidaysrating</title>
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
<p>There are thousands of beautiful beaches. One more pristine than the other. We made a favorite selection for you...</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed1') ?>
<?php endif ?>

<br /><br />

<div class="edit2">
<p><strong>Whitehaven Beach, <a href="http://www.holidaysrating.com/index.php/australia_states/queensland">Queensland Australia</a></strong><br>
Text coming soon</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed2') ?>
<?php endif ?>

<div class="edit3">
<p><strong>Shoal Bay, <a href="http://www.holidaysrating.com/index.php/caribbean_countries/anguilla">Anguilla</a></strong><br>
It is a long sandy beach, and one can walk from one end to the other. It is busy and most popular beach in Anguilla for tourists. Voted best beach of the Caribbean a few years ago.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed3') ?>
<?php endif ?>

<div class="edit4">
<p><strong>Kaiteriteri Beach, <a href="http://www.holidaysrating.com/index.php/oceania_countries/new_zealand">New Zealand</a></strong><br>
Kaiteriteri beach can be divided into two main beaches. Amazingly, the two beaches are not same. Tourists always enjoy the two kinds of characteristics of the two amazing beaches.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed4') ?>
<?php endif ?>

<div class="edit5">
<p><strong>Na'ama Bay, <a href="http://www.holidaysrating.com/index.php/africa_countries/egypt">Egypt</a></strong><br>
Na'ama Bay could offer a good time and fun. The nightlife at the beach offers several clubs which would be enjoyable.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed5') ?>
<?php endif ?>

<div class="edit6">
<p><strong>Phra Nang Beach, <a href="http://www.holidaysrating.com/index.php/asia_countries/thailand">Thailand</a></strong><br>
This beach has been ranked one of the finest beaches in the world today. It is 20 minutes away from Ao Nang by longtail boat.  This nice beach is your exceptional swimming beach.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed6') ?>
<?php endif ?>

<div class="edit7">
<p><strong>Matira Beach, Tahiti</strong><br>
This beach is often described as the most beautiful beach in the world. Matira Beach is in fact the only public beach on the main island that is worth a visit.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed7') ?>
<?php endif ?>

<div class="edit8">
<p><strong>Anse Source d’Argent, <a href="http://www.holidaysrating.com/index.php/africa_countries/seychelles">Seychelles</a></strong><br>
This is a great beach. For the travelers looking for peace, Seychelles is the ultimate destination. This archipelago, made up of 115 islands in the Indian Ocean.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed8') ?>
<?php endif ?>

<div class="edit9">
<p><strong>Champagne Beach, <a href="http://www.holidaysrating.com/index.php/oceania_countries/vanuatu">Vanuatu</a></strong><br>
Champagne Beach is one of the frequently visited beaches in the world that is located on the island of Espiritu Santo in Vanuatu. This beach is famous for its gorgeous white sandy beaches.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed9') ?>
<?php endif ?>

<div class="edit10">
<p><strong>Sun Island Beach, Maldives</strong><br>
Sun Island is in the wonderful island of Nalaguraidhoo. This Island will definitely catch your heart with its exotic tropical flowers and beautiful greenery in the gardens.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed10') ?>
<?php endif ?>

<div class="edit11">
<p><strong>Tulum, <a href="http://www.holidaysrating.com/index.php/central_america_countries/mexico">Mexico</a></strong><br>
Tulum is a top beach in the world where one can combine leisure and never-ending journey. This is a town which is home to one of today’s best preserved Maya sites.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed11') ?>
<?php endif ?>

<div class="edit12">
<p><strong>Maya Bay, <a href="http://www.holidaysrating.com/index.php/asia_countries/thailand">Thailand</a></strong><br>
Maya Bay is a good-looking bay that is amid by 100-metre high cliffs on three sides. And within the bay there are many beaches.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed12') ?>
<?php endif ?>

<div class="edit13">
<p><strong>Boulders Beach, <a href="http://www.holidaysrating.com/index.php/africa_countries/south_africa">South Africa</a></strong><br>
This is a place where the African Penguins are seen. This beach works as an important Shelter for the Penguins and is one of the gorgeous beaches.</p>
</div>
<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed13') ?>
<?php endif ?>


</div>
</div>


<div class="right-side">
<div class="top-favorites"></div>
<div class="middle-favorites">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt; <?php echo anchor('topmenu/favorites', 'Favorites') ?>&gt;Beaches</span></p>
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