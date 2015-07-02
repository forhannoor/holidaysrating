<script>
var submissionUrl = "<?php echo site_url('topmenu/dump_video_process') ?>";
var redirectUrl = "<?php echo site_url('topmenu/success') ?>";
</script>

<script>
function _(el){
	return document.getElementById(el);
}
function uploadFile(){
	var file = _("file1").files[0];
	var formdata = new FormData();
	formdata.append("file1", file);
	var ajax = new XMLHttpRequest();
	ajax.upload.addEventListener("progress", progressHandler, false);
	ajax.addEventListener("load", completeHandler, false);
	ajax.addEventListener("error", errorHandler, false);
	ajax.addEventListener("abort", abortHandler, false);
    ajax.open("POST", submissionUrl);
	ajax.send(formdata);
}
function progressHandler(event){
	_("loaded_n_total").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
	var percent = (event.loaded / event.total) * 100;
	_("progressBar").value = Math.round(percent);
	_("status").innerHTML = Math.round(percent)+"% uploaded... please wait";
}
function completeHandler(event){
	_("status").innerHTML = event.target.responseText;
	_("progressBar").value = 0;
    window.location.replace(redirectUrl);
}
function errorHandler(event){
	_("status").innerHTML = "Upload Failed";
}
function abortHandler(event){
	_("status").innerHTML = "Upload Aborted";
}
</script>

<?php echo validation_errors() ?>

<?php if(isset($errors)): ?>
<?php print_r($errors) ?>
<?php endif ?>

<?php echo form_open_multipart() ?>
<label>Video</label>
<br />
<?php echo form_upload('file1', '', 'id = \'file1\'') ?>
<br /><br />
<?php $regions = array('asia' => 'Asia', 'africa' => 'Africa', 'antarctica' => 'Antarctica', 'caribbean' => 'Caribbean', 'central_america' => 'Central America', 'europe' => 'Europe', 'north_america' => 'North America', 'oceania' => 'Oceania', 'south_america' => 'South America') ?>
<?php echo form_label('Select Region', 'region') ?>
<br />
<?php echo form_dropdown('region', $regions) ?>
<br /><br />
<?php echo form_label('Title', 'title') ?>
<br />
<?php echo form_input('title', '', 'required') ?>
<br />
<?php echo form_hidden('uploader', $this->session->userdata('user_id')) ?>
<br />
<?php echo form_label('Description', 'description') ?>
<br />
<?php echo form_textarea('description') ?>
<br /><br />
<progress id="progressBar" value="0" max="100" style="width:300px; height: 25px;"></progress>
<br /><br />
<input type="button" value="Upload File" onclick="uploadFile()">
<h3 id="status"></h3>
<p id="loaded_n_total"></p>
<?php echo form_close() ?>