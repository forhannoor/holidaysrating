<?php echo js('assets/js/jquery.jeditable.min.js') ?>

<div class="time-edit">
<p>Greenwich Mean Time (GMT) originally referred to the mean solar time at the Royal Observatory in Greenwich, London, 
which later became adopted as a global time standard. It is for the most part the same as <a href="http://www.holidaysrating.com/index.php/time/utc">Coordinated Universal Time</a>, 
and when this is viewed as a time zone, the name Greenwich Mean Time is especially used by bodies connected with the United Kingdom, 
such as the BBC World Service, the Royal Navy, the Met Office and others particularly in Arab countries, such as the Middle East Broadcasting Center and OSN. 
It is the term in common use in the United Kingdom and countries of the Commonwealth, including Australia, South Africa, India, Pakistan and Malaysia, and many other countries in the Eastern Hemisphere.</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed8') ?>
<?php endif ?>

<a href="<?php echo base_url() ?>assets/images/time/africa-europe-time.png" title="Time" style="margin-top:15px">

<a href="<?php echo base_url() ?>assets/images/time/europe-time.png" title="Time" style="margin-top:15px">

<br />
<br />	
<p><a href="#" onClick="history.go(-1)">Previous Page</a></p>

<?php $path = __FILE__ ?>
<?php $this->session->set_userdata('path', $path) ?>

<?php if($this->ion_auth->is_editor()): ?>
<script type="text/javascript">
var siteUrl = "<?php echo site_url('editor/update') ?>";

$(document).ready(function() {
    $('.time-edit').editable(siteUrl + '/8', {
        type      : 'textarea',
        cancel    : 'Cancel',
        submit    : 'OK',
        tooltip   : 'This will edit multiple pages. Click pecil to proceed...',
        event     : 'edit'
    });
    
    $('#ed8').bind('click', function(){
        $('.time-edit').trigger('edit');
        return false;
    });
});
</script>
<?php endif ?>
