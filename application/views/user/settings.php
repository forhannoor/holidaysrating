<h2>Color and Themes</h2>
<p><strong>If you wish to change the header banner of your profile page:</strong></p>
<?php echo anchor('user/change_banner', img('assets/assets/change-banner.png')) ?>
<br />
<br />
<p><strong>Choose your favorite color for the side bars:</strong></p>
<?php echo anchor('user/color', 'Choose Color', 'id=\'choose_color\'') ?>
&nbsp;
<?php echo anchor('user/color/reset', 'Reset to default', array('onclick' => "return confirm('Reset to default?')")) ?>
<br />
<div id="color_chooser"><?php $this->load->view('user/color') ?></div>
<br />
<h2>Notifications</h2>
<p><strong>Email me when buddy-request:</strong> change</p>
<p><strong>Email me when I recieve a message:</strong> change</p>
<p><strong>Subscribe to our newsletter:</strong> change</p>
<br />
<br />
<h2>Security</h2>
<p><strong>Your Profile level: <?php echo ($profile_info->privacy == 0) ? 'Public' : 'Private' ?></strong></p>
<?php echo anchor('user/privacy', 'Change your security here') ?>
<br />
<br />
<p><strong>Change your password:</strong></p>
<?php echo anchor('auth/change_password', 'Click here') ?>
<br />
<br />
<center><img src="<?php echo base_url() ?>assets/images/line.jpg" alt="line" /></center>
<br />
<?php echo anchor('user/index', img('assets/assets/back.png')) ?>

<script type="text/javascript">
$(document).ready(function(){
    $("#color_chooser").hide();
    
    $("#choose_color").click(function(e){
        e.preventDefault();
        $("#color_chooser").toggle('slow');
    });
});
</script>