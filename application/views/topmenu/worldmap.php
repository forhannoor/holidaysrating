<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="en-us" />
<meta name="description" content="Explore the world"/>
<meta name="keywords" content="<?php echo $heading ?>, world, explore, map, world population"/>
<meta name="author" content="Holidaysrating.com"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta content="<?php echo base_url() ?>assets/images/thumbs/world.jpg" property="og:image" />

<title><?php echo $heading ?> | Holidaysrating</title>
<?php echo js('assets/js/jquery-2.1.1.min.js') ?>
<?php echo js('assets/js/ajax.js') ?>
</head>

<body>
<div id="top-head">
<div class="main">
<div class="logo"><?php echo anchor('home/index', img('assets/images/logo/holidaysrating.png')); ?></div>
<div class="menu">
<ul>
<li class="active"><?php echo anchor('topmenu/worldmap', 'WORLDMAP') ?></li>
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
<div id="slider" >
<center><img src="<?php echo base_url() ?>assets/images/world.jpg" height="412" width="940" alt="Worldmap" title="Worldmap" usemap="#worldmap"/></center>
<map name="worldmap">
<area shape="poly" coords="522, 125, 557, 176, 574, 172, 543, 213, 571, 235, 562, 262, 528, 263, 505, 287, 492, 287, 473, 243, 474, 222, 465, 200, 465, 189, 454, 184, 420, 191, 397, 164, 398, 146, 429, 115, 466, 110, 469, 120, 493, 127, 494, 120" href="<?php echo base_url() ?>index.php/regions/africa" alt="Africa" title="Africa" /> 
<area shape="poly" coords="577, 29, 626, 18, 701, 27, 818, 42, 800, 71, 769, 58, 749, 57, 746, 67, 762, 70, 797, 105, 770, 125, 746, 104, 739, 116, 769, 173, 782, 210, 768, 225, 720, 217, 693, 187, 695, 158, 686, 159, 676, 146, 649, 161, 653, 183, 644, 177, 630, 147, 594, 138, 594, 147, 556, 168, 528, 125, 530, 111, 513, 110, 510, 103, 524, 99, 536, 103, 542, 97, 560, 103, 574, 109, 565, 77, 582, 76, 572, 44, 582, 40"  href="<?php echo base_url() ?>index.php/regions/asia" alt="Asia" title="Asia"/>
<area shape="poly" coords="574, 36, 567, 42, 575, 72, 555, 74, 563, 83, 560, 99, 534, 90, 535, 81, 524, 89, 516, 84, 511, 98, 499, 101, 500, 113, 477, 109, 467, 92, 452, 97, 440, 109, 422, 107, 422, 94, 438, 95, 437, 81, 425, 71, 406, 44, 471, 15, 565, 21" href="<?php echo base_url() ?>index.php/regions/europe" alt="Europe" title="Europe" />
<area shape="poly" coords="745, 405, 763, 368, 514, 368, 416, 387, 351, 389, 334, 362, 312, 379, 175, 390, 218, 406"  href="<?php echo base_url() ?>index.php/regions/antarctica" alt="Antarctica" title="Antarctica"/>
<area shape="poly" coords="151, 122, 189, 134, 231, 143, 284, 159, 288, 185, 264, 191, 252, 201, 237, 193, 237, 187, 195, 161, 188, 162, 163, 154" href="<?php echo base_url() ?>index.php/regions/central_america" alt="Central America" title="Central America" />
<area shape="poly" coords="104, 60, 129, 38, 203, 32, 233, 24, 298, 13, 346, 8, 425, 12, 403, 32, 364, 41, 355, 51, 321, 43, 309, 49, 317, 70, 320, 84, 289, 90, 254, 106, 237, 132, 224, 125, 196, 132, 149, 117, 143, 102, 159, 78, 157, 59, 137, 52" href="<?php echo base_url() ?>index.php/regions/north_america" alt="North America" title="North America"/>
<area shape="poly" coords="235, 197, 258, 209, 260, 195, 294, 190, 358, 220, 299, 302, 302, 336, 274, 327, 248, 239, 225, 214"  href="<?php echo base_url() ?>index.php/regions/south_america" alt="South America" title="South America"/>
<area shape="poly" coords="789, 205, 789, 234, 735, 258, 731, 284, 773, 281, 792, 308, 839, 315, 879, 296, 932, 235, 840, 208"  href="<?php echo base_url() ?>index.php/regions/oceania" alt="Oceania" title="Oceania"/>
</map>
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
<?php echo anchor('auth/logout', 'Logout') ?>
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
<img src="<?php echo base_url('assets/images/border.png') ?>" alt="Holiday" style="margin-top:12px" />
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
<img src="<?php echo base_url('assets/images/border.png') ?>" alt="Holiday" style="margin-top:12px" />
<!--Currency Converter widget - HTML code - fx-rate.net --> 
<div style="width: 160px; border:1px solid #000;background-color:#fff;align:center;text-align;left;margin:12px 0px 10px 10px;padding:0px 0px;"> 
<div style="text-align:center;font-size:11px; line-height:16px;font-family: arial;color:#173a00; font-weight:bold;background:#FFFFFF;padding:3px 3px;"> 
<a href="http://fx-rate.net/USD/" title="American Dollar Exchange Rate" style="text-decoration:none;color:#173a00;font-size:11px; line-height:16px;font-family: arial;" target="_blank"> <img border="" width="16" height="11" style="margin:0;padding:0;border:0;" src = "http://fx-rate.net/images/countries/us.png"></img> &#160; Dollar Exchange Rate</a> 
</div>		
<script type="text/javascript" src="http://fx-rate.net/fx-rates.php?currency=USD&length=short&label_type=currency_code"></script>
</div>
<!--end of code-->
<img src="<?php echo base_url() ?>assets/images/border.png" alt="Holiday" style="margin-top:12px" />
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

<div class="center">
<marquee behavior="scroll" direction="left">Click on the region in the map or select one of the folowing links...</marquee>
<div class="region">
<center>
<ul class="line">
<li class="asia"><?php echo anchor('regions/asia', 'Asia') ?></li>
<li class="europe"><?php echo anchor('regions/Europe', 'Europe') ?></li>
</ul>
<ul>
<li class="africa"><?php echo anchor('regions/africa', 'Africa') ?></li>
<li class="north-america"><?php echo anchor('regions/north_america', 'North America') ?></li>
</ul>
<ul>
<li class="south-america"><?php echo anchor('regions/south_america', 'South America') ?></li>
<li class="oceania"><?php echo anchor('regions/oceania', 'Oceania') ?></li>
</ul>
<ul>
<li class="central-america"><?php echo anchor('regions/central_america', 'Central America') ?></li>
</ul>
<ul>
<li class="antartica"><?php echo anchor('regions/antarctica', 'Antarctica') ?></li>
</ul>
</center>
</div>

<div class="clear"><br /><br /></div>

<div class="top"></div>
<div class="middle">
<?php echo anchor('favorites/festivals_index', img('assets/images/img-1.jpg')); ?>
<?php echo anchor('favorites/beaches_index', img('assets/images/img-2.jpg')); ?>
<?php echo anchor('favorites/cruises_index', img('assets/images/img-3.jpg')); ?>
<?php echo anchor('favorites/wonders_index', img('assets/images/img-4.jpg')); ?>
<?php echo anchor('favorites/diving_index', img('assets/images/img-5.jpg')); ?>
<?php echo anchor('favorites/romantic_index', img('assets/images/img-10.jpg')); ?>
<?php echo anchor('favorites/train_trips_index', img('assets/images/img-9.jpg')); ?>
<?php echo anchor('favorites/ski_index', img('assets/images/img-8.jpg')); ?>
<?php echo anchor('favorites/road_trips_index', img('assets/images/img-7.jpg')); ?>
<?php echo anchor('favorites/islands_index', img('assets/images/img-6.jpg')); ?>
</div>
<div class="bottom"></div>

<div class="other-region">
<center>
<ul>
<li class="indonesia"><?php echo anchor('regions/indonesia', 'Indonesia') ?></li>
</ul>
<ul>
<li class="middle_east"><?php echo anchor('regions/middle_east', 'Middle East') ?></li>
</ul>
<ul>
<li class="usa"><?php echo anchor('regions/usa', 'United States of America') ?></li>
</ul>
<ul>
<li class="russia"><?php echo anchor('regions/russia', 'Russia') ?></li>
<li class="china"><?php echo anchor('asia_countries/china', 'China') ?></li>
</ul>
<ul>
<li class="caribbean"><?php echo anchor('regions/caribbean', 'Caribbean') ?></li>
</ul>
</center>
</div>

</div>


<div class="right-side">
<div class="top"></div>
<div class="middle">
<p><span>You are here&gt;<?php echo anchor('home/index', 'Home') ?>&gt; <?php echo $heading ?></span></p>

<h2 style="margin-bottom:6px">World Facts</h2>
<p><strong>World population:<br />
<a href="http://www.worldometers.info/world-population" style="text-decoration:none;font-size:17px;margin-left:4px;color:#AA99AE" target="_blank">7,307,239,607</a></strong><br />
<span style="font-size:x-small;margin-left:4px">(last updated:1th of April 2015)</span></p>
<p>There are 196 independent countries around the world, all with their own capital city. <br /><br />
<?php echo anchor('africa_countries/south_sudan', 'South Sudan') ?> is the world's newest country. On July 9, 2011 South Sudan peacefully seceded from <?php echo anchor('africa_countries/sudan', 'Sudan') ?> following a January 2011 referendum.</p>
<p>The world's largest desert is the North African desert; the Saharan. The Arabian Desert in the <?php echo anchor('regions/middle_east', 'Middle East') ?> is the second largest desert.</p>
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
<img src="<?php echo base_url() ?>assets/images/border.png" alt="Holiday" style="margin-top:8px" />
<div style="border-radius: 10px; overflow: hidden;padding:0px 3px;padding-top:3px; width:190px; align:center; text-align:center;margin-left: -5px;margin-top: 8px;"><iframe src="http://localtimes.info/timediff.php?lcid=USNY0996,CUXX0003,JAXX0085,NLXX0002,RSXX0063,CHXX0008,BRXX0201,ASXX0112&cp=000000,ffffff&uc=0" seamless="" frameborder="0" width="190" height="293" style="background:white"></iframe></div>
</div>
<div class="bottom"></div>
</div>
<div class="clear"></div>

</div>

<div id="footer">

<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Worldmap -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="4731746747"></ins>
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
<div class="logo"><center><img src="<?php echo base_url() ?>assets/images/sand.jpg" width="125px" style="margin-bottom:4px" alt="logo" /></center>
<div class="slogin">You are our <span>travelguide!</span>
</div>
</div>
<div class="clear"></div>
<?php $this->load->view($last_line) ?>
</div>
<?php echo css('assets/css/holiday.css') ?>
</body>
</html>