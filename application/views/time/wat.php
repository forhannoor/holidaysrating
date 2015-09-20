<?php echo js('assets/js/jquery.jeditable.min.js') ?>

<div class="time-edit">
<p>West Africa Time, or <?php echo anchor('time/wat', 'WAT ') ?>, is a time zone used in west-central Africa 
(though not in countries west of Benin, which instead use <a href="http://www.holidaysrating.com/index.php/time/utc">Coordinated Universal Time</a>. The zone is one hour ahead (UTC+01), 
which makes it the same as <a href="http://www.holidaysrating.com/index.php/time/cet">Central European Time</a>. Note that it does not include most of the countries that make up the West Africa region (these use UTC).</p>
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
