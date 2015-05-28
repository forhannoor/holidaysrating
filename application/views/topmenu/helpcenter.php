<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta http-equiv="content-language" content="en-us" />
<meta name="description" content="We are here to help. Any problems, issues or questions, we can answer them."/>
<meta name="keywords" content="Help, Helpcenter"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>

<title>Helpcenter | Holidaysrating</title>
<?php echo js('assets/js/jquery-2.1.1.min.js') ?>
<?php echo js('assets/js/jquery.jeditable.min.js') ?>
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=187439388064490";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="top-head">
<div class="main">
<div class="logo"><img src="<?php echo base_url('assets/images/logo/holidaysrating.png') ?>" alt="Holidaysrating" title="Holidaysrating" /></div>
<div class="menu">
<ul>
<li><?php echo anchor('home/index', 'HOME') ?></li>
<li><?php echo anchor('user/index', 'MY PROFILE') ?></li>
<li><?php echo anchor('topmenu/worldmap', 'WORLDMAP') ?></li>
<li><?php echo anchor('topmenu/videodump', 'VIDEODUMP') ?></li>
<li><?php echo anchor('topmenu/favorites', 'FAVORITES') ?></li>
<li><?php echo anchor('news/news_index', 'TRAVELNEWS') ?></li>
<li class="active"><?php echo anchor('topmenu/helpcenter', 'HELP') ?></li>
</ul>
</div>
</div>
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
<img src="<?php echo base_url('assets/images/border.png') ?>" alt="Holiday" style="margin:12px 0 8px 0" />
<p>Click on the following button if you do have any questions, comments or want to share something else with us...</p>
<div class="social">
<ul>
<li class="buttonlink" style="margin-top:8px"><?php echo anchor('home/contact_us', img('assets/assets/contact.png')); ?></li>
</ul>
</div>

<div class="edit1">
<p>Design, record and edit your Holidaysrating promo video! Upload it to YouTube and send us your embed link. We will publish it here!</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed1') ?>
<?php endif ?>

</div>
<div class="bottom"></div>
</div>


<div class="center">
<div class="hot">
<div class="image">

<div class="edit2">
<p>Holidaysrating.com is a new, fun and social travel-website where you can search for information, vote for your favorite destination, share your holiday experience or make new travel buddies!</p> 
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed2') ?>
<?php endif ?>

<div class="fb-follow" style="margin:18px 0 5px 34px" data-href="https://www.facebook.com/Holidaysrating" data-width="400" data-height="20" data-colorscheme="light" data-layout="standard" data-show-faces="false"></div>
</div>
<br /><br />
<h3 style="margin:-15px 0px 7px 0px">Frequently asked questions</h3>

<p><a id="q1" style="cursor: pointer">Why become a member?</a></p>
<div id="a1">
<p>With your own profile, you can find travel information, vote for your favorite destination, leave comments and upload your most beautiful pictures and explore our videodump.</p> 
</div>

<script type="text/javascript">
    $(document).ready(function()
    {
        $("#a1").hide();
        
        $("#q1").click(function()
        {
            $("#a1").toggle("medium");
        }
        );
        
        $("#a2").hide();
        
        $("#q2").click(function()
        {
            $("#a2").toggle("medium");
        }
        );
        
        $("#a3").hide();
        
        $("#q3").click(function()
        {
            $("#a3").toggle("medium");
        }
        );
        
        $("#a4").hide();
        
        $("#q4").click(function()
        {
            $("#a4").toggle("medium");
        }
        );
        $("#a5").hide();
        
        $("#q5").click(function()
        {
            $("#a5").toggle("medium");
        }
        );

    }
    );
</script>

<p><a id="q2" style="cursor: pointer">How to rate my favorite destination or adventure?</a></p>
<div id="a2">
<p>With your own profile, you can give a rating to your favorite destination and/or adventures. Go to worldmap and find your favorite. once there, click on the button rate now.
This brings you to the rate now page.</p> 
</div>

<p><a id="q3" style="cursor: pointer">How to upload and watch movies?</a></p>
<div id="a3">
<p>Every visitor to the videodump is able to watch movies but with your own profile, you can upload videos for others to watch. Go to my profile and click on the upload button on the right center bar. This brings you to the upload screen. You are also able to upload movies in the videodump section.\
All uploaded video's will be stored in videodump and on your profile.</p> 
</div>

<p><a id="q4" style="cursor: pointer">What is the bucketlist and what can you do with it?</a></p>
<div id="a4">
<p>Every member can place ten adventures in his bucketlist which is available in his/her profile page. Ten things you like to do. Your favorites.</p> 
</div>

<p><a id="q5" style="cursor: pointer">What is the cookbook and how to use it?</a></p>
<div id="a5">
<p>On your profile page ou will see the cookbook. Here you can store the recipes of local food around the world. When you browse through the different countries you will see the local food section. Here you can upload and find recipes of local food from other members.</p> 
</div>

<p style="text-align:center;margin-top:25px;">Click for more information:</p>

<div class="selectHelp">
<ul>
<li><?php echo anchor('help/profile_help', img('assets/images/help/profile.jpg')); ?></li>
<li><?php echo anchor('help/ratings_help', img('assets/images/help/ratings.jpg')); ?></li>
<li><?php echo anchor('help/video_help', img('assets/images/help/video.jpg')); ?></li>
<li><?php echo anchor('help/bookings_help', img('assets/images/help/bookings.jpg')); ?></li>
</ul>
</div>
<img src="<?php echo base_url() ?>assets/images/palm.JPG" style="margin-top:8px;margin-bottom:5px" alt="Palm" />
</div>
<div class="clear"></div>

</div>


<div class="right-side">
<div class="top"></div>
<div class="middle">
<p><span>You are here &gt;<?php echo anchor('home/index', 'Home') ?>&gt;Helpcenter</span></p>
<h2 style="margin-bottom:6px">Holidaysrating</h2>
<iframe width="192" height="120"  src="http://www.youtube-nocookie.com/embed/nihFnlZKiGY" frameborder="0" allowfullscreen></iframe>
	
<div class="social">
<p style="margin:5px 0 0 5px">Are you not a member?? Why wait.. Become a member, it is totally FREE!!</p>
<ul>
<li class="buttonlink"><?php echo anchor('auth/register', img('assets/assets/register.png')); ?></li>
</ul>
<img src="<?php echo base_url() ?>assets/images/border.png" style="margin-top:8px;margin-bottom:12px" alt="border" />
<p style="margin:5px 0 0 5px">Browse through the many partnersites and external sources.</p>
<ul>
<li class="buttonlink"><?php echo anchor('help/external_links', img('assets/assets/links.png')); ?></li>
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
<div class="google-right">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- HelpcenterRight2 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:180px;height:150px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="8918666740"></ins>
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
<div class="logo"><center><img src="<?php echo base_url() ?>assets/images/photos.jpg" alt="logo" /></center>
<div class="slogin">You are our <span>travelguide!</span>
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