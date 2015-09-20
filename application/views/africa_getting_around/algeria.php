<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Getting around in Algeria"/>
<meta name="keywords" content="Getting around in Algeria, Travel in Algeria, Transport, Bus, Taxi"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>

<title>Getting around | Algeria</title>
<?php echo js('assets/js/jquery-2.1.1.min.js') ?>
<?php echo js('assets/js/jquery.jeditable.min.js') ?>
</head>

<body>
<div id="top-head-around">
<?php $this->load->view($header) ?>
</div>

<div id="banner-around">
<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- GettingAroundTop -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="6098127945"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

</div>


<div id="content">
<h1><?php echo $heading ?></h1>
<div class="clear"></div>
<div class="left-side">
<div class="top-around"></div>
<div class="middle-around">
<div class="my_login">
<?php $this->load->view($sidebar) ?>
</div>
</div>
<div class="bottom-around"></div>
</div>


<div class="center">
<div class="hot">
<br />
<h5><?php echo $this->session->flashdata('msg') ?></h5>

<div class="edit1">
<p><strong>Road:</strong><br>
Driving in Algeria is very adventurous! If you drive within the boundary of the city you may not notice it. And Driving in the desert is not advised without thorough preparation beforehand. It will require a 4x4 and in some cases a permit. Road surfaces are practically good. Travelers must carry full supplies of water and petrol. Travel by road in northern Algeria should be avoided after dark.<br><br>
<strong>Car Rent:</strong><br>
Car for rent is available. You may talk to your hotel for this service.<br><br>
<strong>Taxi Service</strong><br>
It is advised not to use public transport other than taxis recommended by established hotels. All taxis are metered and are plentiful in most cities and major towns, though busy during the early evening in the main cities as many people use them to return home after work.<br><br>
<strong> Coach Services:</strong><br>
There is a long-distance bus network around Algeria, with fares and routes operating out of the major cities.<br><br>
<strong>Documentation:</strong><br>
Travelers must keep all international documents with them.<br><br>
<strong>Getting around towns and cities:</strong><br>
Municipal bus and tram services operate in Algiers, its suburbs and the coastal area. 10-journey carnets and daily, weekly or longer duration passes are available. There are also two public lifts and a funicular that lead up to the hill overlooking the old souk in Algiers.<br><br>>
<strong>Rail:</strong><br>
Algerian railways are run by the Société Nationale des Transports Ferroviaires. Daily services operate in the northern part of the country between Algiers and Oran, Béjaia, Skikda, Annaba and Constantine.<br><br>
<strong>By water:</strong><br>
The major ports are all on the northern coast and include Algiers, Annaba, Arzew, Béjaia, Djidjelli, Ghazaouet, Mostaganem, Oran and Skikda. Government ferries service the main coastal ports.</p>

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
<img src="<?php echo base_url() ?>assets/images/comments.png" alt="comment" style="margin-left:300px" /><?php echo anchor('user/make_comment/algeria_around', 'Leave a comment') ?>
</div>


</div>


<div class="right-side">
<div class="top-around"></div>
<div class="middle-around">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt;<?php echo anchor('topmenu/worldmap', 'Worldmap') ?>&gt; <?php echo anchor('regions/africa', 'Africa') ?>&gt; <?php echo anchor('africa_countries/algeria', 'Algeria') ?>&gt; Getting around</span></p>


<?php $this->load->view($right_bar_around) ?>

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
<div class="bottom-around"></div>
</div>
<div class="clear"></div>
<div id="footer">

<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- GettingAroundBottom -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="9051594344"></ins>
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
});
</script>
<?php endif ?>
</html>
