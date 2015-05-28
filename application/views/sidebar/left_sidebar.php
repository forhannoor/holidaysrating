<?php echo js('assets/js/jquery.jeditable.min.js') ?>

<div class="sidebar-edit">
<h2>Holidaysrating</h2>
<p>Send your favorite travel picture and we add it to our site as a country banner! <br /><br />
You can be our travelguide! <?php echo anchor('home/contact_us', 'Click here') ?> to send.</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed9') ?>
<?php endif ?>

<?php $path = __FILE__ ?>
<?php $this->session->set_userdata('path', $path) ?>

<?php if($this->ion_auth->is_editor()): ?>
<script type="text/javascript">
var siteUrl = "<?php echo site_url('editor/update') ?>";

$(document).ready(function() {
    $('.sidebar-edit').editable(siteUrl + '/9', {
        type      : 'textarea',
        cancel    : 'Cancel',
        submit    : 'OK',
        tooltip   : 'This will edit multiple pages. Click pecil to proceed...',
        event     : 'edit'
    });
    
    $('#ed9').bind('click', function(){
        $('.sidebar-edit').trigger('edit');
        return false;
    });
});
</script>
<?php endif ?>