<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="en-us" />
<meta name="keywords" content="Holiday rating, Destinations, Holidaysrating, Holiday, Local Food, Travelguide, Touring, Travel video's, Explore the world, Continents of the world, my next trip" />
<meta name="description" content="Make new travel buddies, find information about destinations and it's local food, rate your favorite, upload your movies for everyone to watch or share your favorite travel story... You are our travelguide!" />
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta name="msvalidate.01" content="57D79CCC62433A150A844B2643EEDA50" />
<meta name="p:domain_verify" content="c44cdfaf68409bf31f1eb315512cb084"/>
<meta name="alexaVerifyID" content="f5RvCQMxbBexwzgBhMFCNHolKkI"/>  
<meta name="language" content="English" />
<meta content="Holidaysrating | The Social Travel Community" property="og:title" />
<meta content="http://www.holidaysrating.com" property="og:url" />
<meta content="website" property="og:type" />
<meta content="<?php echo base_url('assets/images/logo/mediumtrans.png') ?>" property="og:image" />
<meta name="viewport" content="maximum-scale=1"/>

<title>Holidaysrating | The Social Travel Community</title>
<link rel="alternate" type="application/rss+xml" title="Holidaysrating" href="http/:www.holidaysrating.com" />
<?php echo js('assets/js/jquery-2.1.1.min.js') ?>
<?php echo js('assets/js/jquery.jeditable.min.js') ?>
<?php echo js('assets/js/ajax.js') ?>
</head>

<body>
<script type="text/javascript">
var base_url = "<?php echo base_url() ?>";
</script>
<div id="top-head">
<div class="main">
<div class="logo"><?php echo anchor('home/index', img('assets/images/logo/holidaysrating.png')); ?></div>
<div class="menu">
<ul>
<li><?php echo anchor('topmenu/worldmap', 'WORLDMAP') ?></li>
<li><?php echo anchor('topmenu/videodump', 'VIDEOS') ?></li>
<li><?php echo anchor('topmenu/favorites', 'FAVORITES') ?></li>
<li><?php echo anchor('news/news_index', 'TRAVELNEWS') ?></li>
<li><?php echo anchor('topmenu/helpcenter', 'HELP') ?></li>
</ul>

<div class="user-submenu">
<?php if(! $this->ion_auth->logged_in()): ?>
<a href="<?php echo site_url('home/login') ?>" rel="nofollow">LOGIN</a>
<?php else: ?>
<strong><a href="<?php echo site_url('user/index') ?>" rel="nofollow"><?php echo $this->session->userdata('username') ?></a></strong>&nbsp;&nbsp;<a id="q999" style="cursor: pointer">&#9660;</a>
<div id="a999">
<table style="border:collapse;border-top:1px solid #A1B8BE;margin-top:2px">
<tr>
<td style="padding:0 3px"><?php echo anchor('user/index', 'MY PROFILE') ?></td>
</tr>
<tr>
<td style="padding:0 3px"><?php echo anchor('user/inbox', 'INBOX') ?></td>
</tr>
<tr>
<td style="padding:0 3px"><?php echo anchor('user/bucket', 'BUCKETLIST') ?></td>
</tr>
<tr>
<td style="padding:0 3px"><?php echo anchor('user/settings', 'SETTINGS') ?></td>
</tr>
<tr>
<td style="padding:0 3px"><?php echo anchor('auth/logout', 'LOG OUT') ?></td>
</tr>
</table>
</div>
<?php endif ?>
<script type="text/javascript">
    $(document).ready(function()
    {
        $("#a999").hide();
        
        $("#q999").click(function()
        {
            $("#a999").toggle("medium");
        }
        );
    }
    );
</script>
</div>

</div>
</div>
</div>

<div id="slider">
 <?php include 'bxslider.php' ?>
</div>
 
<div id="content">
<h1><?php echo $heading ?></h1>
<div class="clear"></div>
<div class="left-side">
<div class="top"></div>
<div class="middle">
<div class="my_login">
<?php if($this->ion_auth->logged_in()): ?>
<h2>Welcome</h2>
<?php if(isset($profile_info) && strlen($profile_info->avatar) > 0): ?>
<p class="avatar"><?php echo anchor('user/index', img('./uploads/'.$profile_info->avatar)) ?></p>
<?php else: ?>
<p class="avatar"><?php echo anchor('user/index', img('assets/assets/avatar.jpg')) ?></p>
<?php endif ?>
<br />
<?php echo $this->session->userdata('username') ?>
<br />
<?php echo 'Member since: ' . date("d-m-Y" , $this->session->userdata('created_on')) ?>
<br />
<?php echo 'Last logged in: ' . date("d-m-Y" , $this->session->userdata('old_last_login')) ?>
<?php $CI = & get_instance() ?>
<?php $CI->load->model('Message_model') ?>
<?php $new_message_counter = $CI->Message_model->count_new($this->session->userdata('user_id')) ?>
<br/>
<br/>
<?php echo anchor('user/inbox', "Inbox ($new_message_counter new)") ?>
<br/>
<br/>
<?php echo anchor('auth/logout', 'Log Out') ?>
<?php else: ?>
<h2>Member Login</h2>
<?php $this->load->view('auth/my_login') ?>
<br />
<center>
<?php echo anchor('auth/register', 'Sign Up!', 'rel = "nofollow"') ?>
&nbsp;&nbsp;&nbsp;
<?php echo anchor('auth/forgot_password', 'Forgot Password?', 'rel = "nofollow"') ?>
</center>
<?php endif ?>
</div>
<img src="<?php echo base_url('assets/images/border.png') ?>" alt="Holidaysrating" title="Holidaysrating" style="margin-top:16px" />
<form name="Search">
<h2>Search</h2>
<select name="Region">
<option value="">-- Choose region --</option>
<option value="africa">Africa</option>
<option value="asia">Asia</option>
<option value="caribbean">Caribbean</option>
<option value="central_america">Central America</option>
<option value="europe">Europe</option>
<option value="middle_east">Middle East</option>
<option value="north_america">North America</option>
<option value="oceania">Oceania</option>
<option value="south_america">South America</option>
</select>
<br />
<br />
<!--div class="button" id="search">Go</div -->
</form>
<div id="countrylist"></div>
<img src="<?php echo base_url('assets/images/border.png') ?>" alt="Holidaysrating" title="Holidaysrating" style="margin-top:12px" />
<?php $CI = &get_instance() ?>
<?php $CI->load->model('Session_model') ?>
<h2>Members online</h2>
<p style="font-size:10px">Total: <?php echo $CI->Session_model->member_online() ?></p>
<br/>
<ul class="profile-items">
<?php $members_online = $CI->Session_model->member_online_list() ?>
<?php foreach($members_online as $key => $value): ?>
<li><?php echo anchor('user/browse/' . $key, $value) ?></li>
<?php endforeach ?>
</ul>
<br />
<h2>Guests online</h2>
<p style="font-size:10px">Total:<?php echo $CI->Session_model->guest_online() ?></p>
</div>
<div class="bottom"></div>
</div>
<div class="center"><?php $this->load->view($main) ?></div>
<div class="right-side">
<div class="top"></div>
<div class="middle">
<h2 style="margin-bottom:6px">Holidaysrating</h2>
<div class="edit99999">
<p>Make new travel buddies, find information about destinations and it's local food, vote for your favorite, upload your movies for everyone to watch or share your favorite travel story...</p>

<p><i>Join Holidaysrating and become a FREE member...<br>
No creditcard or payments needed!</i></p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed99999') ?>
<?php endif ?>

<img src="<?php echo base_url('assets/images/border.png') ?>" alt="Holidaysrating" title="Holidaysrating" style="margin-top:7px" />

<h2 style="margin-bottom:6px">Like it..</h2>
<div class="social">
<!-- AddThis Button BEGIN -->
<div>
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
<br />
<div class="google-right">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!--HomeRight -->
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
<!-- HomeRight2 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:180px;height:150px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="8918666740"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
</div>
<div class="bottom"></div>
</div>
<div class="clear"></div>
<div id="footer">
<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Index/UserBottom -->
<ins class="adsbygoogle"
style="display:inline-block;width:728px;height:90px"
data-ad-client="ca-pub-0797455318364345"
data-ad-slot="5117183149"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<div class="clear"></div>
<div class="first-column">
<ul>
<li class="active"><?php echo anchor('topmenu/worldmap', 'WORLDMAP') ?></li>
<li><?php echo anchor('topmenu/videodump', 'VIDEODUMP') ?></li>
<li><?php echo anchor('topmenu/favorites', 'FAVORITES') ?></li>
<li><?php echo anchor('news/news_index', 'TRAVEL NEWS') ?></li>
</ul>
</div>
<div class="first-column">
<ul>
<li><?php echo anchor('regions/africa', 'AFRICA') ?></li>
<li><?php echo anchor('regions/antartica', 'ANTARCTICA') ?></li>
<li><?php echo anchor('regions/asia', 'ASIA') ?></li>
<li><?php echo anchor('regions/caribbean', 'CARIBBEAN') ?></li>
</ul>
</div>
<div class="first-column">
<ul>
<li><?php echo anchor('regions/central_america', 'CENTRAL AMERICA') ?></li>
<li><?php echo anchor('regions/europe', 'EUROPE') ?></li>
<li><?php echo anchor('regions/indonesia', 'INDONESIA') ?></li>
<li><?php echo anchor('regions/middle_east', 'MIDDLE EAST') ?></li>
</ul>
</div>
<div class="first-column">
<ul>
<li><?php echo anchor('regions/north_america', 'NORTH AMERICA') ?></li>
<li><?php echo anchor('regions/oceania', 'OCEANIA') ?></li>
<li><?php echo anchor('regions/south_america', 'SOUTH AMERICA') ?></li>
<li><?php echo anchor('topmenu/helpcenter', 'HELPCENTER') ?></li>
</ul>
</div>
<div class="logo"><center><img src="<?php echo base_url('assets/images/photos.jpg') ?>" alt="holidaysrating" title="Holidaysrating"/></center>
<div class="slogin">You are our <span>travelguide!</span>
</div>
</div>
<div class="clear"></div>
<p><?php echo anchor('privacy/privacy_policy', 'Privacy Policy', 'rel = "nofollow"') ?> | <?php echo anchor('privacy/terms_of_use', 'Terms of Use', 'rel = "nofollow"') ?> | <?php echo anchor('home/contact_us', 'Contact Us', 'rel = "nofollow"') ?> | &copy; Copyright <?php echo date('Y') ?> Holidaysrating All Rights Reserved</p>
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
    
    $('.edit99999').editable(siteUrl + '/99999', {
        type      : 'textarea',
        cancel    : 'Cancel',
        submit    : 'OK',
        tooltip   : 'Click pencil to edit...',
        event     : 'edit'
    });
    
    $('#ed99999').bind('click', function(){
        $('.edit99999').trigger('edit');
        return false;
    });
});
</script>
<?php endif ?>
</html>