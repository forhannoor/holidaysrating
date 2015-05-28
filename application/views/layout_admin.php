<html>
<head>
<?php echo js('assets/js/jquery-2.1.1.min.js') ?>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.tablesorter.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.fancybox.pack.js') ?>"></script>
</head>    
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
<div class="navbar-inner">
<div class="container-fluid">
<div class="nav-collapse collapse">
<ul class="nav">
<?php if($this->ion_auth->is_admin()): ?>
<li><?php echo anchor('admin/index', 'Admin Panel') ?></li>
<?php endif ?>

<li><?php echo anchor('note', 'Notes') ?></li>
<li><?php echo anchor('auth/logout', 'Logout') ?></li>
</ul>
</div>
</div>
</div>
</div>
<div class="container-fluid">
<div class="row-fluid">
<div class="content">
    <?php if(strlen($this->session->flashdata('msg')) > 0): ?>
        <div class="alert"><h5><?php echo $this->session->flashdata('msg') ?></h5></div>
    <?php endif ?>
    
    <?php include $main ?>
</div>
<div class="footer"><h5>&copy; <?php echo date('Y') ?> by Holidaysrating.com</h5></div>
</div>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.fancybox.css') ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/admin.css') ?>" /> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/tablesorter.css') ?>" />
</body>
</html>