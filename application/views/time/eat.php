<?php echo js('assets/js/jquery.jeditable.min.js') ?>

<div class="time-edit">
<p>The East Africa Time (EAT), is a time zone used in Eastern <a href="http://www.holidaysrating.com/index.php/regions/africa">Africa</a>. The zone is three hours ahead of <a href="http://www.holidaysrating.com/index.php/time/utc">Coordinated Universal Time (UTC+3), which is the same as Arabia Standard Time, and also the same as Eastern European Summer Time.
<br /><br />
As this Time Zone is predominantly in the equatorial region, there is no significant change in day length throughout the year, so daylight saving time is not observed.</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed8') ?>
<?php endif ?>

<a href="<?php echo base_url() ?>assets/images/time/africa-europe-time.png" title="Time" style="margin-top:15px">

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

