<?php echo js('assets/js/jquery.jeditable.min.js') ?>

<div class="edit29">
<p>The West Indies is a region of the Caribbean Basin and North Atlantic Ocean that includes the islands of the <a href="http://www.holidaysrating.com/index.php/regions/greater_antilles">Greater Antilles</a> and <a href="http://www.holidaysrating.com/index.php/regions/lesser_antilles">Lesser Antilles</a> together with the Lucayan Archipelago (.</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed29') ?>
<?php endif ?>

<img src="<?php echo base_url() ?>assets/images/time/africa-europe-time.png" title="Time" style="margin-top:15px">

<img src="<?php echo base_url() ?>assets/images/time/europe-time.png" title="Time" style="margin-top:15px">

<br />
<br />	
<p><a href="#" onClick="history.go(-1)">Previous Page</a></p>

<?php $path = __FILE__ ?>
<?php $this->session->set_userdata('path', $path) ?>

<?php if($this->ion_auth->is_editor()): ?>
<script type="text/javascript">
var siteUrl = "<?php echo site_url('editor/update') ?>";

$(document).ready(function() {
    $('.edit29').editable(siteUrl + '/29', {
        type      : 'textarea',
        cancel    : 'Cancel',
        submit    : 'OK',
        tooltip   : 'Click Pencil to edit..',
        event     : 'edit'
    });
    
    $('#ed29').bind('click', function(){
        $('.edit29').trigger('edit');
        return false;
    });
});
</script>
<?php endif ?>
