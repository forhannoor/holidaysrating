<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Queensland"/>
<meta name="keywords" content="Queensland, QLD"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta name="language" content="English" />
<meta content="<?php echo base_url() ?>assets/images/flags/australia.gif" property="og:image" />

<title>Queensland | Australia</title>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.easing.1.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.wt-rotator.min.js"></script>    
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/preview.js"></script>
</head>

<body>
<div id="top-head-state">
<div class="main">
<div class="logo">
	<img src="<?php echo base_url() ?>assets/images/logo.png" width="350" height="78" alt="logo" /></div>
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

<div id="slider-state">
<div class="slideshow"><div class="panel">
 	<div class="container">
        <div class="wt-rotator">
            <div class="screen">
                <noscript><img src="<?php echo base_url() ?>assets/images/triworks_abstract17.jpg"/></noscript>
            </div>
            <div class="c-panel">
                <div class="buttons">
                    <div class="prev-btn"></div>
                     
                    <div class="next-btn"></div>               
                </div>
                <div class="thumbnails">
                    <ul>
                        <li>
                            <a href="<?php echo base_url() ?>assets/images/state/australia/queensland/queensland.jpg" title="Queensland"><img src="<?php echo base_url() ?>assets/images/thumbs/triworks_abstract17.jpg"/></a>
                            <a href="#" target="_blank"></a>                        
                            <div style="left:5px; top:94px; width:336px; height:0;"> 
                            	<h1>Travel to Queensland, Australia</h1>
                            	Explore the many amazing things Queensland has got to offer.</div>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>assets/images/state/australia/queensland/great-barrier-reef.jpg" title="Great Barrier Reef"><img src="<?php echo base_url() ?>assets/images/thumbs/sf.jpg"/></a>
                            <a href="#" target="_blank"></a>
                            <div style="left:5px; top:36px; width:336px; height:0; color:#000; background-color:#FFF"> 
                                <h1 style="color:#0CF">Queensland, Australia</h1>
                                Queensland is a sunny and beautiful state of Australia.</div>                                                  	
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>assets/images/state/australia/queensland/mill.jpg" title="Queensland"><img src="<?php echo base_url() ?>assets/images/thumbs/triworks_abstract26.jpg"/></a>   
                            <a href="#" target="_blank"></a>
                            <div style="left:5px; top:36px; width:336px; height:0; color:#000; background-color:#FFF">
                            	<h1 style="color:#0CF">Is the state Queensland your next travel destination?</h1>
                                Have you been in Queensland, tell us your story!</div>                                                          	                   
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>assets/images/state/australia/queensland/airlie-beach.JPG" title="Queensland"><img src="<?php echo base_url() ?>assets/images/thumbs/tokyo.jpg"/></a>                  
                            <a href="#" target="_blank"></a>
                            <div style="left:5px; top:36px; width:350px; height:0;"> 
                                <h1>Queensland, Australia in Oceania</h1>
                                Stunning isn't it? Visit Cairns, Mackay or Brisbane.</div>                                          	                          
                        </li>     
                    </ul>
                </div>     
            </div>
        </div>	
  	</div>    
</div>
<!--<img src="images/slider.png" alt="slideshow" title="slideshow" />--></div>
</div>

<div id="content">
<h1><?php echo $heading ?></h1>
<div class="clear"></div>
<div class="left-side">
<div class="top-state"></div>
<div class="middle-state">
<div class="my_login">
<?php if($this->ion_auth->logged_in()): ?>
<h2>Welcome</h2>
<?php if(isset($profile_info)): ?>
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
<h2>Members online</h2>
<br/>
<ul class="profile-items">
<?php $users_online = $this->Ion_auth_model->users_online() ?>
<?php foreach($users_online as $u_online): ?>
<li><?php echo anchor('user/browse/' . $u_online->id, $u_online->username) ?></li>
<?php endforeach ?>
</ul>

<img src="<?php echo base_url() ?>assets/images/border.png" alt="Holiday" style="margin-top:8px" />

<?php $this->load->view($left_sidebar) ?>

</div>

<div class="bottom-state"></div>
</div>

<div class="center">
<div class="hot">
<h1>Introduction</h1>

<div class="flag" style="float:left">
<img src="<?php echo base_url() ?>assets/images/flags/australia.jpg" alt="Australia" />
<p style="float:right;width:75%"><strong>Queensland</strong> is a state in the Eastern part of Australia. Also known as Tropical Queensland. It covers a size of 1.7 million square kilometres.</p>
<br />
<h5><?php echo $this->session->flashdata('msg') ?></h5>
</div>
<p>Touristinfo</p>

<h1>Climate</h1>
<p>Climate</p>

<!-- Currency Converter script - fx-rate.net --> 
<div style="width:474px; background-color:white;border:2px solid #888;text-align:center;margin-top:10px;padding:0px"> 
<div style="background-color:#CECECE ;border-bottom:1px solid #888;width:100%;margin:0px;padding:0px;align:center;text-align:center;">
<a title="Australian Dollar Converter" class="HS1label" style="font-size:12px!important; line-height:16px!important;font-family: arial;text-decoration:none;color:#132105;margin-bottom:6px;" target="_blank" href="http://fx-rate.net/AUD/"><b>Australian Dollar Converter</b></a>
</div> <script type="text/javascript" src="http://fx-rate.net/converter.php?size=short&layout=horizontal&currency=AUD"></script></div> 
<!-- End of Currency Converter script --> 

<h1>Flora and Fauna</h1>
<p>The oldest tropical rainforest, dry and wet tropics.</p>
<h1>Things to do</h1>
<p>Coming soon</p>







</div>

<div class="clear"></div>
<div class="comment">
<img src="<?php echo base_url() ?>assets/images/comments.png" alt="comment" style="margin-left:300px" /><?php echo anchor('user/make_comment/queensland', 'Leave a comment') ?>
</div>

</div>


<div class="right-side">
<div class="top-state"></div>

<div class="middle-state">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt;<?php echo anchor('topmenu/worldmap', 'Worldmap') ?>&gt;<?php echo anchor('regions/oceania', 'Oceania') ?>&gt;<?php echo anchor('regions/australia', 'Australia') ?>&gt; Queensland</span></p>

<iframe width="175" height="120" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Queensland&amp;aq=0&amp;oq=queens&amp;sll=-19.47695,132.539063&amp;sspn=26.795765,53.569336&amp;ie=UTF8&amp;hq=&amp;hnear=Queensland&amp;t=m&amp;ll=-24.126702,143.789063&amp;spn=9.616497,15.292969&amp;z=4&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.au/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Queensland&amp;aq=0&amp;oq=queens&amp;sll=-19.47695,132.539063&amp;sspn=26.795765,53.569336&amp;ie=UTF8&amp;hq=&amp;hnear=Queensland&amp;t=m&amp;ll=-24.126702,143.789063&amp;spn=9.616497,15.292969&amp;z=4" target="_blank" style="color:#5F6A6F;text-align:left">View Larger Map</a></small>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" style="margin-top:8px"/>
	
<div class="key-facts">	
<h2>Key Facts</h2>
<ul>
<li><strong>Capital city:</strong></li>
<li>     </li>

<li><strong>Size:</strong></li>
<li> km2</li>
<li> sq mi</li>

<li><strong>Water:</strong></li>
<li>%</li>

<li><strong>Languages:</strong></li>
<li>   </li>

<li><strong>Time zone:</strong></li>
<li>    </li>

<li><strong>Calling code:</strong></li>
<li>    </li>
</ul>
</div>

<h2>Cities</h2>
<ul>
<li><?php echo anchor('home/index', 'Home') ?></li>
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
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" style="margin-top:8px"/>
<h2>Explore QLD</h2>
<ul>
<li>Coming soon</li>
</ul>
</div>
<div class="bottom-state"></div>

</div>

<div class="clear"></div>
<div id="footer">

<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- AustraliaStates -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="6576152743"></ins>
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
<link href="<?php echo base_url() ?>assets/css/country.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/wt-rotator.css"/>
</body>
</html>
