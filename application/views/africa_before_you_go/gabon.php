<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Before you go to Gabon"/>
<meta name="keywords" content="Before you go to Gabon, Travel to Gabon, Planning your holiday to Gabon"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>

<title>Before you go | Gabon</title>
<?php echo js('assets/js/jquery-2.1.1.min.js') ?>
<?php echo js('assets/js/jquery.jeditable.min.js') ?>
</head>

<body>
<div id="top-head-before">
<?php $this->load->view($header) ?>
</div>

<div id="banner-before">
<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- BeforeYouGoTop -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="9039241546"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

</div>


<div id="content">
<h1><?php echo $heading ?></h1>
<div class="clear"></div>
<div class="left-side">
<div class="top-before"></div>
<div class="middle-before">
<div class="my_login">
<?php $this->load->view($sidebar) ?>
</div>
</div>
<div class="bottom-before"></div>
</div>


<div class="center">
<div class="hot">
<br />
<h5><?php echo $this->session->flashdata('msg') ?></h5>

<div class="edit1">
<p>Plan your journey<br>
The national airline is Air Gabon (GN) runs direct flights from Paris and London to Libreville. <br><br>
In Libreville travelers are able to see many private hotels and hotel chains. And other major cities and towns but, like most of the accommodation in Gabon, they are expensive. Tourist facilities, including tourist camps, are being expanded throughout the country, especially along the coast and in towns close to the national parks. <BR><BR>
Camping: <br><br>
Camping is possible and it is free but restricted. Carefulness should be used as to where camp is made. </p>  
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
<img src="<?php echo base_url() ?>assets/images/comments.png" alt="comment" style="margin-left:300px" /><?php echo anchor('user/make_comment/gabon_before_you_go', 'Leave a comment') ?>
</div>


</div>


<div class="right-side">
<div class="top-before"></div>
<div class="middle-before">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt;<?php echo anchor('topmenu/worldmap', 'Worldmap') ?>&gt; <?php echo anchor('regions/africa', 'Africa') ?>&gt; <?php echo anchor('africa_countries/gabon', 'Gabon') ?>&gt; Before you go</span></p>


<?php $this->load->view($right_bar_before) ?>

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
<div class="bottom-before"></div>
</div>
<div class="clear"></div>
<div id="footer">

<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- BeforeYouGoBottom -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="7562508343"></ins>
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
