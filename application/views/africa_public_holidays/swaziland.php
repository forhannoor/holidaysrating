<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Public holidays of Swaziland"/>
<meta name="keywords" content="Public holidays, Swaziland holidays, When is perfect time to travel to Swaziland"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>

<title>Public holidays | Swaziland</title>
<?php echo js('assets/js/jquery-2.1.1.min.js') ?>
<?php echo js('assets/js/jquery.jeditable.min.js') ?>
</head>

<body>
<div id="top-head-holidays">
<div class="main">
<div class="logo"><img src="<?php echo base_url() ?>assets/images/logo.png" width="350" height="78" alt="logo" /></div>
<div class="menu">
<ul>
<li><?php echo anchor('home/index', 'HOME') ?></li>
<li><?php echo anchor('user/index', 'MY PROFILE') ?></li>
<li><?php echo anchor('topmenu/worldmap', 'WORLDMAP') ?></li>
<li><?php echo anchor('topmenu/videodump', 'VIDEODUMP') ?></li>
<li><?php echo anchor('blog/blog_index', 'BLOG') ?></li>
<li><?php echo anchor('news/news_index', 'TRAVELNEWS') ?></li>
<li><?php echo anchor('topmenu/helpcenter', 'HELPCENTER') ?></li>
</ul>
</div>
</div>
</div>
<div id="banner-holidays">
<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- PublicHolidaysTop -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="4342193140"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

</div>


<div id="content">
<h1><?php echo $heading ?></h1>
<div class="clear"></div>
<div class="left-side">
<div class="top-holidays"></div>
<div class="middle-holidays">
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
<?php echo 'Member since&nbsp;: ' . date("d-m-Y" , $this->session->userdata('created_on')) ?>
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
<?php echo anchor('auth/logout', 'Logout') ?>
<?php else: ?>
<h2>Member Login</h2>
<?php $this->load->view('auth/my_login') ?>
<br />
<?php echo anchor('auth/forgot_password', 'Forgot Password') ?>
&nbsp;&nbsp;&nbsp;
<?php echo anchor('auth/register', 'Register') ?>
<?php endif ?>
</div>
<img src="<?php echo base_url('assets/images/border.png') ?>" alt="Holiday" style="margin-top:12px" />
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
<div class="bottom-holidays"></div>
</div>


<div class="center">
<div class="hot">
<br />
<h5><?php echo $this->session->flashdata('msg') ?></h5>

<div class="edit1"><p>  
•	January 1: New Year's Day<br>
•	April 6: Good Friday<br>
•	April 9: Easter Monday<br>
•	April 19: Birthday of King Mswati III<br>
•	April 25: National Flag Day<br>
•	May 1: Labour Day<br>
•	May 17: Ascension<br>
•	July 22: Birthday of the Late King Sobhuza<br>
•	August To be announced: Umhlanga reed dance<br>
•	September 6: Somhlolo Day (Independence Day) <br>
•	December date To be announced: Incwala Day<br>
•	December 25: Christmas Day<br>
•	December 26: Boxing Day
</p>  
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed1') ?>
<?php endif ?>

<br />
<br />	
<p><a href="#" onClick="history.go(-1)">Previous Page</a></p>
</div>


<div class="clear"></div>
<div class="comment">
<img src="<?php echo base_url() ?>assets/images/comments.png" alt="comment" style="margin-left:300px" /><?php echo anchor('user/make_comment/swaziland_holidays', 'Leave a comment') ?>
</div>


</div>


<div class="right-side">
<div class="top-holidays"></div>
<div class="middle-holidays">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt;<?php echo anchor('topmenu/worldmap', 'Worldmap') ?>&gt; <?php echo anchor('regions/africa', 'Africa') ?>&gt; <?php echo anchor('africa_countries/swaziland', 'Swaziland') ?>&gt; Public holidays</span></p>

<div align="center" style="margin:15px 0px 0px 0px">
<noscript><div align="center" style="width:175px;border:1px solid #ccc;background:#fff ;color: #fff ;font-weight:bold;"><a style="font-size:10px;text-decoration:none;color:#000 ;" target="_blank" href="http://mycalendar.org/Holiday/Seasons/">Calendar</a></div></noscript>
<script type="text/javascript" src="http://mycalendar.org/calendar.php?group=Holiday&calendar=Seasons&widget_number=2&cp3_Hex=8F228f&cp2_Hex=FFFFF3&cp1_Hex=090909&fwdt=200&lab=1"></script></div>

<img src="<?php echo base_url() ?>assets/images/border.png" alt="Holiday" style="margin-top:8px" />

<?php $this->load->view($right_bar_holidays) ?>

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
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" style="margin-top:8px"/>

<div class="google-right">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- AfricaHolidaysRight -->
<ins class="adsbygoogle"
     style="display:inline-block;width:180px;height:150px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="4392565548"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

</div>
<div class="bottom-holidays"></div>
</div>
<div class="clear"></div>
<div id="footer">

<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- PublicHolidaysBottom -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="2865459949"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<div class="clear"></div>

<div class="first-column">
<ul>
<li><?php echo anchor('home/index', 'HOME') ?></li>
<li><?php echo anchor('user/index', 'MY PROFILE') ?></li>
<li><?php echo anchor('topmenu/videodump', 'VIDEODUMP') ?></li>
<li><?php echo anchor('topmenu/worldmap', 'WORLDMAP') ?></li>
</ul>
</div>
<div class="first-column">
<ul>
<li><?php echo anchor('regions/africa', 'AFRICA') ?></li>
<li><?php echo anchor('regions/asia', 'ASIA') ?></li>
<li><?php echo anchor('regions/caribbean', 'CARIBBEAN') ?></li>
<li><?php echo anchor('regions/central_america', 'CENTRAL AMERICA') ?></li>
</ul>
</div>
<div class="first-column">
<ul>
<li><?php echo anchor('regions/europe', 'EUROPE') ?></li>
<li><?php echo anchor('regions/north_america', 'NORTH AMERICA') ?></li>
<li><?php echo anchor('regions/oceania', 'OCEANIA') ?></li>
<li><?php echo anchor('regions/south_america', 'SOUTH AMERICA') ?></li>
</ul>
</div>
<div class="first-column">
<ul>
<li><?php echo anchor('topmenu/favorites', 'FAVORITES') ?></li>
<li><?php echo anchor('news/news_index', 'TRAVEL NEWS') ?></li>
<li><?php echo anchor('blog/blog_index', 'BLOG') ?></li>
<li><?php echo anchor('topmenu/helpcenter', 'HELPCENTER') ?></li>
</ul>
</div>
<div class="logo"><center><img src="<?php echo base_url() ?>assets/images/photos.jpg" alt="logo" /></center>
<div class="slogin">You are our <span>travelguide!</span>
</div>
</div>
<div class="clear"></div>
<p> <?php echo anchor('privacy/privacy_policy', 'Privacy Policy') ?> | <?php echo anchor('privacy/terms_of_use', 'Terms of Use') ?> | <?php echo anchor('home/contact_us', 'Contact Us') ?> | &copy; Copyright <?php echo date('Y') ?> Holidaysrating All Rights Reserved</p>
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

});
</script>
<?php endif ?>
</html>
