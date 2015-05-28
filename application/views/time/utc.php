<?php echo js('assets/js/jquery.jeditable.min.js') ?>

<div class="time-edit">
<p>Coordinated Universal Time (UTC) is the primary time standard by which the world regulates clocks and time. 
It is one of several closely related successors to Greenwich Mean Time (GMT). 
For most purposes, UTC is synonymous with GMT, but GMT is no longer precisely defined by the scientific community.</p>
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
