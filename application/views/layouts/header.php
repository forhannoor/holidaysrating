<div class="main">
<div class="logo"><?php echo anchor('home/index', img('assets/images/logo/holidaysrating.png')); ?></div>
<div class="menu">
<ul>
<li><?php echo anchor('topmenu/worldmap', 'WORLDMAP') ?></li>
<li><?php echo anchor('topmenu/videodump', 'VIDEODUMP') ?></li>
<li><?php echo anchor('topmenu/favorites', 'FAVORITES') ?></li>
<li><?php echo anchor('news/news_index', 'TRAVELNEWS') ?></li>
<li><?php echo anchor('topmenu/helpcenter', 'HELP') ?></li>
</ul>

<div class="user-submenu">
<?php if(! $this->ion_auth->logged_in()): ?>
<a href="<?php echo site_url('home/login') ?>" rel="nofollow">LOGIN</a>
<?php else: ?>
<strong><a href="<?php echo site_url('user/index') ?>" rel="nofollow"><?php echo $this->session->userdata('username') ?></a></strong>&nbsp;&nbsp;<a id="q999" style="cursor: pointer">&#9660;</a>
<div id="a999">
<table style="border:collapse;border-top:1px solid #A1B8BE;margin-top:2px">
<tr>
<td style="padding:0 3px"><?php echo anchor('user/index', 'MY PROFILE') ?></td>
</tr>
<tr>
<td style="padding:0 3px"><?php echo anchor('user/inbox', 'INBOX') ?></td>
</tr>
<tr>
<td style="padding:0 3px"><?php echo anchor('user/bucket', 'BUCKETLIST') ?></td>
</tr>
<tr>
<td style="padding:0 3px"><?php echo anchor('user/settings', 'SETTINGS') ?></td>
</tr>
<tr>
<td style="padding:0 3px"><?php echo anchor('auth/logout', 'LOG OUT') ?></td>
</tr>
</table>
</div>
<?php endif ?>
<script type="text/javascript">
    $(document).ready(function()
    {
        $("#a999").hide();
        
        $("#q999").click(function()
        {
            $("#a999").toggle("medium");
        }
        );
    }
    );
</script>
</div>

</div>
</div>
