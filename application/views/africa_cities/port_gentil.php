<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Port Gentil, Gabon"/>
<meta name="keywords" content="Port Gentil"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta content="<?php echo base_url() ?>assets/images/sandlogo.jpg" property="og:image" />

<title>Port Gentil | Gabon</title>
<?php echo js('assets/js/jquery-2.1.1.min.js') ?>
<?php echo js('assets/js/jquery.jeditable.min.js') ?>
</head>

<body>
<div id="top-head">
<?php $this->load->view($header) ?>
</div>

<div id="slider">
<center>
<img src="<?php echo base_url() ?>assets/images/cities/africa/algiers.jpg"  alt="Algiers" title="Algiers" /></center>
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
<img src="<?php echo base_url() ?>assets/images/border.png" alt="Holiday" style="margin-top:8px" />
<?php $this->load->view($left_bar_city) ?>
</div>
<div class="bottom"></div>
</div>

<div class="center">
<div class="hot">
<div class="city">
<h5><?php echo $this->session->flashdata('msg') ?></h5>
</div>

<h1>INTRODUCTION</h1>
<div class="edit1">
<p>Coming Soon</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed1') ?>
<?php endif ?>

<h1>WEATHER</h1>
<!--Weather -->
<div class="weather"><script src="http://www.weatherforecastmap.com/weather1.php?zona=gabon_port-gentil"></script>
<a title="Weather Today in Port Gentil" target="blank"  style="margin-left:30px;font-size:9px;font-family:Verdana, Geneva, Tahoma, sans-serif;font-style:italic;color:#C0C0C0" href="http://www.weatherforecastmap.com/gabon/port_gentil" >Weather Today in Port Gentil</a></div>
<!--end of code-->






<p><a href="#" onClick="history.go(-1)">Previous Page</a></p>
</div>
<div class="clear"></div>
<div class="comment">
<img src="<?php echo base_url() ?>assets/images/comments.png" alt="comment" style="margin-left:300px" /><?php echo anchor('user/make_comment/port_gentil', 'Leave a comment') ?>
</div>

</div>


<div class="right-side">
<div class="top"></div>
<div class="middle">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt;<?php echo anchor('topmenu/worldmap', 'Worldmap') ?>&gt;<?php echo anchor('regions/africa', 'Africa') ?>&gt; <?php echo anchor('africa_countries/gabon', 'Gabon') ?>&gt; Port Gentil</span></p>
<div class="rating">
<div class="score"><p><?php echo round($rating, 1) ?></p></div>
<?php echo anchor('user/rate/port_gentil', img('assets/assets/rate-now.png')); ?>
<br />
<p style="font-size:9px;float:right;margin-right:45px">Members voted: <?php echo $num_voter ?></p>
<p style="font-size:9px;float:left;margin-left:1px">Current rating</p>
</div>


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
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border"style="margin:12px 0"/>
<iframe width="175" height="120" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;q=Tamanrasset,+Algeria&amp;aq=&amp;sll=-19.457034,145.879162&amp;sspn=16.647104,27.641602&amp;ie=UTF8&amp;geocode=FfG1bwEdFR85AA&amp;split=0&amp;hq=&amp;hnear=Tamanrasset,+Algeria&amp;t=m&amp;ll=22.512557,5.581055&amp;spn=2.435637,3.823242&amp;z=6&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.au/maps?f=q&amp;source=embed&amp;hl=en&amp;q=Tamanrasset,+Algeria&amp;aq=&amp;sll=-19.457034,145.879162&amp;sspn=16.647104,27.641602&amp;ie=UTF8&amp;geocode=FfG1bwEdFR85AA&amp;split=0&amp;hq=&amp;hnear=Tamanrasset,+Algeria&amp;t=m&amp;ll=22.512557,5.581055&amp;spn=2.435637,3.823242&amp;z=6&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>

<div class="clear"></div>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" style="margin-top:8px"/>

<div class="google-right">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- AfricaCountriesRight -->
<ins class="adsbygoogle"
     style="display:inline-block;width:180px;height:150px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="9874022741"></ins>
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
<!-- AfricaCities -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="3255013548"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<div class="clear"></div>
<?php $this->load->view($footer) ?>
<div class="logo"><center><img src="<?php echo base_url() ?>assets/images/photos.jpg" alt="logo" /></center>
<div class="slogin">What is your favorite <span>city!</span>
</div>
</div>
<div class="clear"></div>
<?php $this->load->view($last_line) ?>
</div>
</div>
<?php echo css('assets/css/city.css') ?>
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
