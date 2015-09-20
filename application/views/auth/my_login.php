<div>
<?php echo form_open('auth/login') ?>
<?php echo form_label('Email', 'identity') ?>
<?php echo form_input('identity', '', 'required') ?>
<br />
<?php echo form_label('Password', 'password') ?>
<?php echo form_password('password', '', 'required') ?>
<p style = "color: black; margin-top: 8px;">Remember Me
<?php echo form_checkbox('remember', '1', FALSE, 'id="remember"') ?>
</p>
<?php $error = $this->session->flashdata('error') ?>
<?php if(strlen($error) > 0): ?>
<p><?php echo $error ?></p>
<?php endif ?>        
<?php echo form_submit('', 'Login') ?>
<?php echo form_close() ?>
<?php echo anchor('auth/fb_login', img('assets/images/FBlogin.png'), array('class' => 'anchor-opacity')) ?>
</div>