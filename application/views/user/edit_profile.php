<div class="profile_info_form">
<?php echo validation_errors() ?>
<br/>
<?php echo form_open_multipart('user/edit_profile') ?>
<?php if(isset($profile_info)): ?>
<?php echo form_label('First Name', 'first_name') ?>
<br />
<?php echo form_input('first_name', $profile_info->first_name) ?> 
<br />
<?php echo form_label('Last Name', 'last_name') ?>
<br />
<?php echo form_input('last_name', $profile_info->last_name) ?> 
<br />
<?php echo form_label('Display Name', 'display_name') ?>
<br />
<?php echo form_input('display_name', $profile_info->display_name) ?>
<br />
<?php echo form_label('Gender', 'gender') ?>
<br />
<?php echo form_dropdown('gender', array(0 => 'Male', 1 => 'Female'), $profile_info->gender) ?>
<br />
<?php echo form_label('Date of Birth', 'date_of_birth') ?>
<br />
<?php echo form_input(array('name' => 'date_of_birth', 'value' => $profile_info->date_of_birth, 'placeholder' => '1990-03-01')) ?>
<br />
<?php echo form_label('Location', 'location') ?>
<br />
<?php echo form_input(array('name' => 'location', 'value' => $profile_info->location, 'id' => 'location', 'size' => '50', 'autocomplete' => 'on')) ?>
<br />
<?php echo form_label('About Me', 'about') ?>
<br/>
<?php echo form_textarea('about', $profile_info->about) ?>
<br/>
<?php echo form_label('Profile Privacy', 'privacy') ?>
<br/>
<?php $privacy_options=array(0 => 'Public', 1 => 'Private') ?>
<?php echo form_dropdown('privacy', $privacy_options, $profile_info->privacy) ?>
<br/>
<?php echo form_label('My favorite destination is', 'favorite_destination') ?>
<br/>
<?php echo form_input(array('name' => 'favorite_destination', 'id' => 'favorite_destination', 'value' => $profile_info->favorite_destination, 'size' => '50', 'autocomplete' => 'on')) ?>
<br/>
<?php echo form_label('Avatar', 'userfile') ?>
<br/>
<?php $avatar_upload=array('name' => 'userfile') ?>
<?php if(isset($errors)): ?>
<?php print_r($errors) ?>
<?php endif ?>     
<?php echo form_upload($avatar_upload) ?>
<br/>
<?php echo form_label('Countries I would like to visit (Hold CTRL to select multiple)', 'countries_to_visit[]') ?>
<br/>
<?php echo form_multiselect('countries_to_visit[]', $countries, explode(',', $profile_info->countries_to_visit), 'multiple=\'multiple\'') ?>
<br/>
<?php echo form_label('Travel Motto') ?>
<br/>
<?php echo form_textarea('travel_motto', $profile_info->travel_motto) ?>
<br/>
<?php else: ?>
<?php echo form_label('Name', 'name') ?>
<br />
<?php echo form_input('name') ?> 
<br />
<?php echo form_label('Display Name', 'display_name') ?>
<br />
<?php echo form_input('display_name') ?>
<br />
<?php echo form_label('Gender', 'gender') ?>
<br />
<?php echo form_dropdown('gender', array(0 => 'Male', 1 => 'Female')) ?>
<br />
<?php echo form_label('Date of Birth', 'date_of_birth') ?>
<br />
<?php $date_of_birth = array('name' => 'date_of_birth', 'placeholder' => '1990-03-31') ?>
<?php echo form_input($date_of_birth) ?>
<br />
<?php echo form_label('Location', 'location') ?>
<br />
<?php echo form_input(array('name' => 'location', 'id' => 'location', 'placeholder' => 'Enter a location', 'autocomplete' => 'on')) ?>
<br />
<?php echo form_label('About Me', 'about') ?>
<br/>
<?php echo form_textarea('about') ?>
<br/>
<?php echo form_label('Profile Privacy', 'privacy') ?>
<br/>
<?php $privacy_options=array(0 => 'Public', 1 => 'Private') ?>
<?php echo form_dropdown('privacy', $privacy_options) ?>
<br/>
<?php echo form_label('My favorite destination is', 'favorite_destination') ?>
<br/>
<?php echo form_input(array('name' => 'favorite_destination', 'id' => 'favorite_destination', 'size' => '50', 'autocomplete' => 'on')) ?>
<br/>
<?php echo form_label('Avatar', 'userfile') ?>
<br/>
<?php $avatar_upload=array('name' => 'userfile') ?>
<?php if(isset($errors)): ?>
<?php print_r($errors) ?>
<?php endif ?>     
<?php echo form_upload($avatar_upload) ?>
<br/>
<?php echo form_label('Countries I would like to visit (Hold CTRL to select multiple)', 'countries_to_visit[]') ?>
<br/>
<?php echo form_multiselect('countries_to_visit[]', $countries, 'multiple=\'multiple\'') ?>
<br />
<?php echo form_label('Travel Motto') ?>
<br/>
<?php echo form_textarea('travel_motto') ?>
<br/>
<?php endif ?>
<?php echo form_submit('', 'Submit') ?>
<?php echo form_reset('', 'Reset') ?>
<?php echo form_close() ?>
<br/>
<?php echo anchor('user/index', img('assets/assets/back.png')) ?>
</div>

<?php echo css('assets/css/jquery.datepick.css') ?>
<?php echo js('assets/js/datepicker/jquery.plugin.min.js') ?>
<?php echo js('assets/js/datepicker/jquery.datepick.min.js') ?>

<script>
$("input[name=date_of_birth]").datepick({dateFormat: 'dd-mm-yyyy'});
</script>

<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places" type="text/javascript"></script>
<script type="text/javascript">
   function initialize(){
       var input = document.getElementById('location');
       var autocomplete = new google.maps.places.Autocomplete(input);
       var input2 = document.getElementById('favorite_destination');
       var autocomplete2 = new google.maps.places.Autocomplete(input2);
   }
   
   google.maps.event.addDomListener(window, 'load', initialize);
</script>