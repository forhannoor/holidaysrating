<?php echo js('assets/js/jquery.jeditable.min.js') ?>

<div class="time-edit">
<p>Mauritius Time, or MUT, is a time zone used by the Indian Ocean island Mauritius. The zone is four hours ahead of <?php echo anchor('time/utc', 'UTC') ?>.<br /><br />

Daylight saving time was used in 2008. Clocks were put forward to UTC+5 on October 26, 2008 and put back to standard time on March 29, 2009 at 3 AM local daylight time. This time change is no longer applied.</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed8') ?>
<?php endif ?>

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
