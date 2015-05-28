<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Entry Requirements Senegal"/>
<meta name="keywords" content="Entry Requirements Senegal, Travel to Senegal, Visa"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>

<title>Entry Requirements | Senegal</title>
<?php echo js('assets/js/jquery-2.1.1.min.js') ?>
<?php echo js('assets/js/jquery.jeditable.min.js') ?>
</head>

<body>
<div id="top-head-entry">
<?php $this->load->view($header) ?>
</div>

<div id="banner-entry">
<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- EntryTop -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="3284262348"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

</div>


<div id="content">
<h1><?php echo $heading ?></h1>
<div class="clear"></div>
<div class="left-side">
<div class="top-entry"></div>
<div class="middle-entry">
<div class="my_login">
<?php $this->load->view($sidebar) ?>
</div>
</div>
<div class="bottom-entry"></div>
</div>


<div class="center">
<div class="hot">
<br />
<h5><?php echo $this->session->flashdata('msg') ?></h5>

<div class="edit1">
<p><strong>Passports:</strong><br>
A six-month valid passport is required for all nationals. <br><br>
<strong>Visas:</strong><br>
A visa is required by all nationals. <br><br>
<strong>Vaccination certificate: </strong><br>
A yellow fever certificate is essential.</p>

<h1>Embassy Information</h1>
<p>Embassy of the Republic of Senegal in the UK <br>
Telephone: (020) 7938 4048. Website: <a href="http://www.senegalembassy.co.uk" target="_blank">http://www.senegalembassy.co.uk</a><br>
Opening times: Mon-Fri 0900-1700; 1030-1500 (consular section). <br><br>

Embassy of the Republic of Senegal in the USA <br>
Website: <a href="http://www.ambasenegal-us.org" target="_blank">http://www.ambasenegal-us.org </a><br>
Opening times: Mon-Fri 0800-1700. <br><br>

British Embassy in Senegal <br>
Telephone: 823 7392. Website: <a href="https://www.gov.uk/government/world/senegal" target="_blank">https://www.gov.uk/government/world/senegal</a><br>
Opening times: Mon-Thur 0800-1630, Fri 0800-1230. </p>  
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
<img src="<?php echo base_url() ?>assets/images/comments.png" alt="comment" style="margin-left:300px" /><?php echo anchor('user/make_comment/senegal_entry', 'Leave a comment') ?>
</div>


</div>


<div class="right-side">
<div class="top-entry"></div>
<div class="middle-entry">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt;<?php echo anchor('topmenu/worldmap', 'Worldmap') ?>&gt; <?php echo anchor('regions/africa', 'Africa') ?>&gt; <?php echo anchor('africa_countries/senegal', 'Senegal') ?>&gt; Entry Requirements</span></p>


<?php $this->load->view($right_bar_entry) ?>

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
<div class="bottom-entry"></div>
</div>
<div class="clear"></div>
<div id="footer">

<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- EntryBottom -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="4760995549"></ins>
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
