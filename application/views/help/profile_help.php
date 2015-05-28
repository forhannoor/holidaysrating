<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="description" content="Helpcenter: Ratings"/>
<meta name="keywords" content="Help, Ratings"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta content="<?php echo base_url() ?>assets/images/ratings.jpg" property="og:image" />

<title>Helpcenter | Profile</title>
<?php echo js('assets/js/jquery-2.1.1.min.js') ?>
<?php echo js('assets/js/jquery.jeditable.min.js') ?>
</head>

<body>
<div id="top-head">
<?php $this->load->view($header) ?>
</div>

<div id="banner">
<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Help Top -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="8416472740"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

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
</div>
<div class="bottom"></div>
</div>


<div class="center">
<div class="hot">
<div class="help-page">
<div class="edit1">

<h3>Why become a member?</h3>
<p>With your own profile, you can find travel information, vote for your favorite destination, leave comments and upload your best pictures and explore our videodump.</p> 

<h3>How to edit your profile information?</h3>
<p>You can add information about yourself. Change your avatar and banner. The size for the avatar is max. 128x128 pixels.</p> 

<h3>How to add your avatar?</h3>
<p>Change your avatar. Click on the button "edit profile". In this next section you can upload your picture by clicking on "browse". The size for the avatar is max. 128x128 pixels.</p> 

<h3>How to upload your new banner into your profile section?</h3>
<p>You can easily upload your own banner by pressing the upload button; the image you would like to upload should be 200 pixels height and 2000 pixels width.</p>

<h3>Leave a comment</h3>
<p>On many pages members are able to leave a comment. Inappropiate text or links are not permitted and therefore immediately be deleted.</p>

<h3>What should I do when somebody publish inappropriate text, video's or pictures?</h3>
<p>Our team is working hard to delete this materia.If you detect some, please <a href="http://www.holidaysrating.com/index.php/home/contact_us">Contact us</a>.</p>

<h3>What is the bucketlist and what can I do with it?</h3>
<p>A bucketlist is a list with things or adventures that you would like to do before your time has come. Here on Holidaysrating, you can add adventures that you like. Adventures that you want to do!</p>

<h3>What is the cookbook and what can I use it for?</h3>
<p>The cookbook is used to collect recipes. Every country has got a local food section. There you can find recipes uploaded by other members. Collect them and try them yourself.</p>

<h3>Can I send pictures to change slide show pictures?</h3>
<p>You can help us! Send us your favorite travel picture and we will add it as a slide show picture to the specific destination or adventure. Become our travelguide send in your picture and share your story! 
<a href="http://www.holidaysrating.com/index.php/home/contact_us">Click here</a> to send your banner.<br />
If you believe some of the pictures on our site may infringe your copyright and don't want them to appear on Holidaysrating, please contact us and we will delete them on demand, as soon as possible.</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed1') ?>
<?php endif ?>

</div>

<p><a href="#" onClick="history.go(-1)">Previous Page</a></p>
</div>


<div class="clear"></div>

</div>


<div class="right-side">
<div class="top"></div>
<div class="middle">
<p><span>You are here&gt;<?php echo anchor('home/index', 'Home') ?>&gt; Helpcenter:Profile</span></p>
<h2>Help</h2>
<div class="social">
<div class="edit2">
<p>Holidaysrating is the new social travel community website</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed2') ?>
<?php endif ?>

<ul>
<li class="buttonlink" style="margin-top:10px"><?php echo anchor('help/external_links', img('assets/assets/links.png')); ?></li>
<li class="buttonlink" style="margin-top:10px"><?php echo anchor('home/contact_us', img('assets/assets/contact.png')); ?></li>
</ul>

<div class="clear"></div>

<div class="google-right">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- HelpcenterRight -->
<ins class="adsbygoogle"
     style="display:inline-block;width:180px;height:150px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="7441933540"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

</div>
<div class="clear"></div>

</div>
<div class="bottom"></div>
</div>
<div class="clear"></div>
<div id="footer">

<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Help Bottom -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="2369939146"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<div class="clear"></div>
<?php $this->load->view($footer) ?>
<div class="logo"><center><img src="<?php echo base_url() ?>assets/images/logo/xsmall.png" alt="logo" /></center>
<div class="slogin">Holidays<span>rating</span>
</div>
</div>
<div class="clear"></div>
<?php $this->load->view($last_line) ?>
</div>
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
        
});
</script>
<?php endif ?>
</html>