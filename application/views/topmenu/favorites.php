<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="en-us" />
<meta name="description" content="Check out our favorites! We have collected the best travel idea's out there..."/>
<meta name="keywords" content="Favorites, list, favorite, favoritelist "/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta content="<?php echo base_url() ?>assets/images/schelpen.jpg" property="og:image" />
<meta name="viewport" content="maximum-scale=1"/>

<title>Favorites | Holidaysrating</title>
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
}(document, 'script', 'facebook-jssdk'));
</script>
<style>
	#pagi{
		color:black;
		margin-left:15px;
	};
</style>
<div id="top-head">
<div class="main">
<div class="logo"><?php echo anchor('home/index', img('assets/images/logo/holidaysrating.png')); ?></div>
<div class="menu">
<ul>
<?php if(! $this->ion_auth->logged_in()): ?>
<li><a href="<?php echo site_url('home/login') ?>" rel="nofollow">LOGIN</a></li>
<?php else: ?>
<li><a href="<?php echo site_url('user/index') ?>" rel="nofollow"><?php echo $this->session->userdata('username') ?></a></li>
<?php endif ?>
<li><?php echo anchor('topmenu/worldmap', 'WORLDMAP') ?></li>
<li><?php echo anchor('topmenu/videodump', 'VIDEODUMP') ?></li>
<li class="active"><?php echo anchor('topmenu/favorites', 'Favorites') ?></li>
<li><?php echo anchor('news/news_index', 'TRAVELNEWS') ?></li>
<li><?php echo anchor('topmenu/helpcenter', 'HELPCENTER') ?></li>
</ul>
</div>
</div>
</div>

<div id="banner">
<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- MainFavoritesTop -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="6487681541"></ins>
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
<div class="hot" >
<div class="edit1">
<h1>Our favorite lists:</h1>
<p>This world is enormous, there is plenty to see and explore. <strong>Holidaysrating</strong> has made different lists of what we think are the best destinations. We did not rank them, it is on you to decide which one is your favorite! Because there are so many great spots in the world, we probably have forgotten a few, therefore we ask for your help... Let us know what you want to see in these favorite lists, become our travelguide!</p>
</div>
<br>
<?php
$page = (isset($_GET['page'])) ? $_GET['page'] : 0;
$_GET['page'] = $page;
$content = "<div class='favlist'>
<div class='left' style='margin:6px'>".anchor('favorites/festivals_index', img('assets/images/img-1.jpg'))."</div>
<p><?php echo anchor('favorites/festivals_index', 'The best festivals around the world') ?>
We made a selection of festivals. For some persons these are unusual or funny, for the other it is a must visit!</p>
</div>
<div class='favlist'>
<div class='left' style='margin:6px'>".anchor('favorites/beaches_index', img('assets/images/img-2.jpg'))."</div>
<p><?php echo anchor('favorites/beaches_index', 'The most amazing beaches') ?>
From the tropical islands of the Caribbean to the sunfilled beaches of Australia. Check them out now. </p>
</div>
<div class='favlist'>
<div class='left' style='margin:6px'>".anchor('favorites/cruises_index', img('assets/images/img-3.jpg'))."</div>
<p><?php echo anchor('favorites/cruises_index', 'The best cruises around the globe') ?>
If you like small river cruises or big and luxurious, we got them on our list. Go see for yourself... </p>
</div>
<div class='favlist'>
<div class='left' style='margin:6px'>".anchor('favorites/wonders_index', img('assets/images/img-4.jpg'))."</div>
<p><?php echo anchor('favorites/wonders_index', 'Wonders of the world') ?>
The world has many wonders. We all can name a few but do you know all of them?</p>
</div>
{newpage}
<div class='favlist'>
<div class='left' style='margin:6px'>".anchor('favorites/diving_index', img('assets/images/img-5.jpg'))."</div>
<p><?php echo anchor('favorites/diving_index', 'The best diving locations') ?>
Want to find a great wreck or spot some colourful coral, we know the best dive locations.</p>
</div>
<div class='favlist'>
<div class='left' style='margin:6px'>".anchor('favorites/islands_index', img('assets/images/img-6.jpg'))."</div>
<p><?php echo anchor('favorites/islands_index', 'Spectacular islands') ?>
The world has got an uncountable amount of islands, we created a list with the most spectaculair onces.</p>
</div>
<div class='favlist'>
<div class='left' style='margin:6px'>".anchor('favorites/road_trips_index', img('assets/images/img-7.jpg'))."</div>
<p><?php echo anchor('favorites/road_trips_index', 'The finest road trips') ?>
Hours, days or maybe even weeks on the road. That is what you will get if you drive these roadtrips. </p>
</div>
{newpage}
<div class='favlist'>
<div class='left' style='margin:6px'>".anchor('favorites/ski_index', img('assets/images/img-8.jpg'))."</div>
<p><?php echo anchor('favorites/ski_index', 'Ski Locations') ?>
Are you a skier or snowboarder? Find out more about the best ski loactions. </p>
</div>
<div class='favlist'>
<div class='left' style='margin:6px'>".anchor('favorites/train_trips_index', img('assets/images/img-9.jpg'))."</div>
<p><?php echo anchor('favorites/train_trips_index', 'The greatest train trips') ?>
Exploring Africa, Europe or travelling with train through Asia. It is all possible, check out the possibilities.</p>
</div>
<div class='favlist'>
<div class='left' style='margin:6px'>".anchor('favorites/romantic_index', img('assets/images/img-10.jpg'))."</div>
<p><?php echo anchor('favorites/romantic_index', 'The most romantic cities') ?>
Love is in the air! Which city should you bring your date?</p>
</div>
<div class='favlist'>
<div class='left' style='margin:6px'>".anchor('favorites/city_trips_index', img('assets/images/img-11.jpg'))."</div>
<p><?php echo anchor('favorites/city_trips_index', 'The best city trips') ?>
Like to hop from city to city. Which one should you not forget...</p>

</div>";
$pages = explode('{newpage}', $content);
		
echo $pages[$page].'<br>';

$total_pages = count($pages);

$prevpage = $page - 1;
$nextpage = $page + 1;
echo "<div style='text-align:center;' >";

if ($page > 0)
{
	echo "<a href=\"?page={$prevpage}\" id='pagi'>Previous</a> ";
}
 
//echo "<a href=\"?page={$prevpage}\">Prev</a> ";

for($i = 0; $i< $total_pages; $i++){
		if($i== $_GET["page"]){
			echo "<a href=\"?page={$i}\" style='color:red;' id='pagi' >".($i+1)."</a>";
		} else {
		echo "<a href=\"?page={$i}\" id='pagi' >".($i+1)."</a>";
		}
}
// echo "<a href=\"?page={$nextpage}\" style='margin-left:15px;'>Next</a>";
if ($nextpage < $total_pages)
{
  echo "<a href=\"?page={$nextpage}\" id='pagi' >Next</a>";
}
echo "</div>";
?>

</div>
<div class="clear"></div>

</div>


<div class="right-side">
<div class="top"></div>
<div class="middle">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt;Favorites</span></p>
<h2 style="margin-bottom:6px">Holidaysrating</h2>
<a style="background:transparant" class="twitter-timeline"  width="190" height="255" href="https://twitter.com/holidaysrating"  data-widget-id="370721910037819392">@holidaysrating</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<h2 style="margin-bottom:6px">Favorites</h2>
<div class="edit2">
<p>There are thousands of wonderful travel destinations in the world. Do you already know where to go this year?</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed2') ?>
<?php endif ?>

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
<div class="fb-activity" data-site="http://www.holidaysrating.com" data-app-id="187439388064490" data-width="190" data-height="255" data-header="true" data-recommendations="true"></div>
</div>
<div class="bottom"></div>
</div>
<div class="clear"></div>
<div id="footer">

<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- MainFavoritesBottom -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="7964414747"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<div class="clear"></div>

<div class="first-column">
<ul>
<?php if(! $this->ion_auth->logged_in()): ?>
<li><a href="<?php echo site_url('home/login') ?>" rel="nofollow">LOGIN</a></li>
<?php else: ?>
<li><a href="<?php echo site_url('user/index') ?>" rel="nofollow"><?php echo $this->session->userdata('username') ?></a></li>
<?php endif ?>
<li><?php echo anchor('topmenu/worldmap', 'WORLDMAP') ?></li>
<li><?php echo anchor('topmenu/videodump', 'VIDEODUMP') ?></li>
<li class="active"><?php echo anchor('topmenu/favorites', 'FAVORITES') ?></li>
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
<li><?php echo anchor('regions/middle_east', 'MIDDLE EAST') ?></li>
<li><?php echo anchor('regions/north_america', 'NORTH AMERICA') ?></li>
</ul>
</div>
<div class="first-column">
<ul>
<li><?php echo anchor('regions/oceania', 'OCEANIA') ?></li>
<li><?php echo anchor('regions/south_america', 'SOUTH AMERICA') ?></li>
<li><?php echo anchor('news/news_index', 'TRAVEL NEWS') ?></li>
<li><?php echo anchor('topmenu/helpcenter', 'HELPCENTER') ?></li>
</ul>
</div>
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
