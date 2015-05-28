<?php echo validation_errors() ?>
<?php echo form_open_multipart('home/contact_us') ?>
<p>Name</p>
<p><?php echo form_input('name', $this->input->post('name')) ?></p>
<br />
<p>Email</p>
<p><?php echo form_input('email', $this->input->post('email'), 'required') ?></p>
<br />
<p>Subject</p>
<p><?php echo form_input('subject', $this->input->post('subject')) ?></p>
<br />
<p>Message</p>
<p><?php echo form_textarea('message', $this->input->post('message'), 'required') ?></p>
<br />
<p>Attachment</p>
<p><?php echo form_upload('userfile') ?></p>
<br />
<?php echo $image  ?>
<p>Captcha</p>
<p><?php echo form_input('captcha', '', 'required') ?></p>
<p><?php echo form_hidden('captcha_path', $captcha_path) ?></p>
<br />
<p><?php echo form_submit('', 'Submit') ?></p>
<?php echo form_close() ?>

<style>
input[type=text], textarea{
    width: 100%;
    border: solid 1px;
    border-color: #cccccc;
    border-radius: 3px;
    padding: 2px;
}

input[type=submit]{background: url('../assets/green-large.png');}

form img{margin-bottom: 10px;}
</style>