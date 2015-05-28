<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Entry Requirements Kenya"/>
<meta name="keywords" content="Entry Requirements Kenya, Travel to Kenya, Visa"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>

<title>Entry Requirements | Kenya</title>
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
A visa is required by all nationals except people of Cyprus, who do not need a visa. <br><br>
Vaccination certificate:  <br>
A yellow fever certificate is essential.</p>

<h1>Embassy information</h1>
<p>Kenya Embassy in the USA <br>
Telephone: (202) 387 6101. Website: <a href="http://www.kenyaembassy.com" target="_blank">http://www.kenyaembassy.com</a><br><br>

Kenya High Commission in the UK <br>
Telephone: (020) 7636 2371/5. Website: <a href="http://www.kenyahighcommission.net" target="_blank">http://www.kenyahighcommission.net</a><br>
Opening times: <br>

Mon-Fri: applications 0930-1200, collections 1400-1530. <br><br>
British High Commission in Kenya <br>
Telephone: (20) 2844 000. Website: <a href="http://www.ukinkenya.fco.gov.uk " target="_blank">http://www.ukinkenya.fco.gov.uk </a></p>
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
<img src="<?php echo base_url() ?>assets/images/comments.png" alt="comment" style="margin-left:300px" /><?php echo anchor('user/make_comment/kenya_entry', 'Leave a comment') ?>
</div>


</div>


<div class="right-side">
<div class="top-entry"></div>
<div class="middle-entry">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt;<?php echo anchor('topmenu/worldmap', 'Worldmap') ?>&gt; <?php echo anchor('regions/africa', 'Africa') ?>&gt; <?php echo anchor('africa_countries/kenya', 'Kenya') ?>&gt; Entry Requirements</span></p>


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
