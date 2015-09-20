<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="China, Asia"/>
<meta name="keywords" content="China"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta name="language" content="English" />
<meta content="<?php echo base_url() ?>assets/images/flags/asia/china.gif" property="og:image" />

<title>China | Asia</title>
<?php echo js('assets/js/jquery-2.1.1.min.js') ?>
<?php echo js('assets/js/jquery.jeditable.min.js') ?>
</head>

<body>
<div id="top-head">
<div class="main">
<div class="logo">
	<img src="<?php echo base_url() ?>assets/images/logo.png" width="350" height="78" alt="logo" /></div>
<div class="menu">
<ul>
<li><?php echo anchor('home/index', 'HOME') ?></li>
<li><?php echo anchor('user/index', 'MY PROFILE') ?></li>
<li><?php echo anchor('topmenu/worldmap', 'WORLDMAP') ?></li>
<li><?php echo anchor('topmenu/videodump', 'VIDEODUMP') ?></li>
<li><?php echo anchor('blog/blog_index', 'BLOG') ?></li>
<li><?php echo anchor('news/news_index', 'TRAVELNEWS') ?></li>
<li><?php echo anchor('topmenu/helpcenter', 'HELPCENTER') ?></li>
</ul>
</div>
</div>
</div>

<div id="slider">
<?php $this->load->view('bxslider') ?>
</div>

<div id="content">
<h1><?php echo $heading ?></h1>
<div class="clear"></div>
<div class="left-side">
<div class="top"></div>
<div class="middle">
<div class="my_login">
<?php if($this->ion_auth->logged_in()): ?>
<h2>Welcome</h2>
<?php if(isset($profile_info) && strlen($profile_info->avatar) > 0): ?>
<p class="avatar"><?php echo anchor('user/index', img('./uploads/'.$profile_info->avatar)) ?></p>
<?php else: ?>
<p class="avatar"><?php echo anchor('user/index', img('assets/assets/avatar.jpg')) ?></p>
<?php endif ?>
<br />
<?php echo $this->session->userdata('username') ?>
<br />
<?php echo 'Member since&nbsp;: ' . date("d-m-Y" , $this->session->userdata('created_on')) ?>
<br />
<?php echo 'Last logged in: ' . date("d-m-Y" , $this->session->userdata('old_last_login')) ?>
<?php $CI = & get_instance() ?>
<?php $CI->load->model('Message_model') ?>
<?php $new_message_counter = $CI->Message_model->count_new($this->session->userdata('user_id')) ?>
<br/>
<br/>
<?php echo anchor('user/inbox', "Inbox ($new_message_counter new)") ?>
<br/>
<br/>
<?php echo anchor('auth/logout', 'Logout') ?>
<?php else: ?>
<h2>Member Login</h2>
<?php $this->load->view('auth/my_login') ?>
<br />
<?php echo anchor('auth/forgot_password', 'Forgot Password') ?>
&nbsp;&nbsp;&nbsp;
<?php echo anchor('auth/register', 'Register') ?>
<?php endif ?>
</div>
<img src="<?php echo base_url('assets/images/border.png') ?>" alt="Holiday" style="margin-top:12px" />
<?php $CI = &get_instance() ?>
<?php $CI->load->model('Session_model') ?>
<h2>Members online</h2>
<p style="font-size:10px">Total: <?php echo $CI->Session_model->member_online() ?></p>
<br/>
<ul class="profile-items">
<?php $members_online = $CI->Session_model->member_online_list() ?>
<?php foreach($members_online as $key => $value): ?>
<li><?php echo anchor('user/browse/' . $key, $value) ?></li>
<?php endforeach ?>
</ul>
<br />
<h2>Guests online</h2>
<p style="font-size:10px">Total:<?php echo $CI->Session_model->guest_online() ?></p>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="Holiday" style="margin-top:8px" />

<?php $this->load->view($left_sidebar) ?>

</div>

<div class="bottom"></div>
</div>

<div class="center">
<div class="hot">
<?php $msg = $this->session->flashdata('msg') ?>
<?php if(strlen($msg) > 0): ?>
<h5 class="alert"><?php echo $msg ?></h5>
<?php  endif?>
<h1>Introduction</h1>
<div class="flag" style="float:left"><img src="<?php echo base_url() ?>assets/images/flags/asia/china.jpg" alt="China" /></div>

<div class="edit1">
<p><strong>Cmbodia</strong> is a country in.... <a href="http://www.holidaysrating.com/index.php/regions/asia">Asia</a>, with a size of 652,864 square kilometres. The official language is ....</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed1') ?>
<?php endif ?>

<div class="territoriesMap">
<img src="<?php echo base_url() ?>assets/images/territories/chinaMap.jpg" alt="China" title="China" usemap="#china"/>
<map name="china">
<area shape="poly" coords="136.50001525878906,36,143.50001525878906,40,155,49.50000762939453,153.50001525878906,64.50000762939453,172.50001525878906,73,189.50001525878906,90.50001525878906,185.50001525878906,92.50001525878906,185.50001525878906,98,166,105,161,115.50001525878906,140,120.50001525878906,144.50001525878906,129,140.50001525878906,134.50001525878906,141,139.50001525878906,127.50001525878906,136.50001525878906,111.50000762939453,134,102.50000762939453,136.50001525878906,83,135,75,132.50001525878906,65.50000762939453,133.50001525878906,55.500003814697266,138.50001525878906,47,132,46,123.50001525878906,38,118.50001525878906,35,109,29.500003814697265,107.50001525878906,35,98,28,94,36,84.50001525878906,43.500003814697266,82,50.500003814697266,86,63,80,76.50000762939453,80,83.50000762939453,73,88,69.50000762939453,86,59.50000762939453,96,58,106.50000762939453,59.50000762939453,103,54,111,46.50000762939453,122,49,130,46,127.50001525878906,39.50000762939453," href="<?php echo base_url() ?>index.php/china_provinces/xinjiang" alt="Xinjiang" title="Xinjiang"   />
<area shape="poly" coords="187.50001525878906,94.50001525878906,194,95.50001525878906,193.50001525878906,105,200.50001525878906,110,211,108.50001525878906,208.50001525878906,117.50001525878906,224,127,227,123.50001525878906,231.50001525878906,126.50001525878906,239.50001525878906,123,233.50001525878906,133,245,139.50001525878906,249,151.50001525878906,256,152.50001525878906,260,150.50001525878906,259.5000305175781,141.50001525878906,271.5000305175781,147,264,158,257,158,257.5000305175781,165,250,173.50001525878906,235,166.50001525878906,226.50001525878906,164,223,170,215,163,222.50001525878906,162,227.50001525878906,147,223,135,209.50001525878906,126.50001525878906,200,122.50001525878906,190,122.50001525878906,187,126,176,118.50001525878906,161,117,164,110.50001525878906,166,107,184.50001525878906,101," href="<?php echo base_url() ?>index.php/china_provinces/gansu" alt="Gansu" title="Gansu"   />
<area shape="poly" coords="142.09091186523437,121.33334350585937,165.1212158203125,120.72727966308594,183.30303955078125,127.39395141601562,190.5757598876953,124.3636474609375,208.75758361816406,130.42425537109375,225.1212158203125,138.30303955078125,226.9394073486328,145.5757598876953,222.6969757080078,160.1212158203125,213,160.72727966308594,217.242431640625,169.8181915283203,213,175.27273559570312,191.18182373046875,164.3636474609375,186.9394073486328,172.242431640625,177.84849548339844,177.6969757080078,165.72727966308594,172.242431640625,138.45455932617187,164.3636474609375,133.60606384277344,157.09091186523437,136.03030395507812,141.9394073486328,146.33334350585937,144.3636474609375,148.15151977539062,131.63636779785156," href="<?php echo base_url() ?>index.php/china_provinces/qinghai" alt="Qinghai" title="Qinghai"   />
<area shape="poly" coords="51.787879943847656,138.30303955078125,59.66667175292969,140.72727966308594,63.909095764160156,132.84849548339844,72.3939437866211,135.27273559570312,80.2727279663086,133.45455932617187,84.51515197753906,135.87879943847656,102.69697570800781,141.33334350585937,117.8484878540039,137.09091186523437,128.15151977539062,141.33334350585937,128.75758361816406,156.48486328125,145.72727966308594,168.60606384277344,176.63636779785156,181.33334350585937,187.5454559326172,175.87879943847656,194.8181915283203,189.21212768554687,190.5757598876953,208,181.48486328125,209.81820678710937,169.96971130371094,208.6060791015625,159.06060791015625,211.63638305664062,148.15151977539062,216.48486328125,135.42425537109375,204.96969604492187,123.30303955078125,201.33334350585937,115.42424774169922,206.78790283203125,110.57575988769531,200.12123107910156,86.93939971923828,195.87879943847656,78.45455169677734,189.8181915283203,71.18182373046875,181.33334350585937,56.63636779785156,174.0606231689453,42.090911865234375,152.84849548339844,53,152.242431640625," href="<?php echo base_url() ?>index.php/china_provinces/tibet" alt="Tibet " title="Tibet "   />
<area shape="poly" coords="244.51516723632812,135.87879943847656,253.6060791015625,129.21212768554687,257.242431640625,121.93940734863281,262.0909118652344,131.63636779785156,257.242431640625,137.09091186523437,257.242431640625,149.21212768554687,252.39395141601562,151.63636779785156,248.15151977539062,143.15151977539062," href="<?php echo base_url() ?>index.php/china_provinces/ningxia" alt="Ningxia" title="Ningxia"   />
<area shape="poly" coords="192.39395141601562,91.03030395507812,222.09091186523437,95.87879943847656,246.33334350585937,104.3636474609375,265.1212158203125,95.87879943847656,283.90911865234375,97.09091186523437,293,89.81819152832031,293.6060791015625,77.09091186523437,305.727294921875,77.69697570800781,317.8485107421875,71.03031158447265,328.1515197753906,58.909095764160156,340.8788146972656,58.909095764160156,335.42425537109375,49.212127685546875,325.1212158203125,52.848487854003906,316.0303039550781,54.06060791015625,320.2727355957031,40.72727966308594,337.8485107421875,35.87879180908203,334.2121276855469,28,341.48486328125,11.636367797851562,359.66668701171875,20.727279663085937,369.3636474609375,20.1212158203125,372.3939514160156,28.606063842773437,359.06060791015625,48.60606384277344,367.54547119140625,57.69697570800781,364.5151672363281,64.36363983154297,355.42425537109375,63.151519775390625,363.30303955078125,72.242431640625,371.18182373046875,81.33334350585937,352.3939514160156,94.66667175292969,345.1212158203125,94.06060791015625,346.9394226074219,101.93940734863281,334.8182067871094,97.09091186523437,320.8788146972656,100.72727966308594,311.18182373046875,98.30303955078125,306.3333435058594,108.60606384277344,299.66668701171875,115.27273559570312,291.18182373046875,120.1212158203125,277.242431640625,124.96971130371094,269.9696960449219,137.09091186523437,262.0909118652344,129.8181915283203,258.4545593261719,120.1212158203125,253,126.18182373046875,242.09092712402344,135.87879943847656,237.242431640625,130.42425537109375,239.0606231689453,123.15151977539062,229.3636474609375,126.18182373046875,222.09091186523437,122.54545593261719,222.6969757080078,126.78788757324219,209.96971130371094,118.30303955078125,213.60606384277344,108.60606384277344,203.9091033935547,109.21212768554687,192.39395141601562,100.72727966308594,197.84849548339844,96.48484802246094," href="<?php echo base_url() ?>index.php/china_provinces/neimongol" alt="Neimongol" title="Neimongol"   />
<area shape="poly" coords="349.3636474609375,5.5757598876953125,356.6363830566406,1.9393959045410156,360.8788146972656,6.181819915771484,366.9394226074219,4.969699859619141,386.3333435058594,26.787879943847656,402.0909423828125,31.636367797851562,414.2121276855469,41.333335876464844,424.5151672363281,31.636367797851562,433,29.212127685546875,429.9697265625,55.87879180908203,419.66668701171875,58.30303192138672,421.48486328125,66.18182373046875,411.18182373046875,68,404.5151672363281,71.03031158447265,392.3939514160156,64.9697036743164,376.03033447265625,61.333335876464844,362.6969909667969,52.242431640625,370.5757751464844,36.48485565185547,373.6060791015625,20.727279663085937,365.727294921875,18.30303192138672,357.242431640625,14.666671752929687,351.78790283203125,12.848487854003906," href="<?php echo base_url() ?>index.php/china_provinces/heilongjiang" alt="Heilongjiang" title="Heilongjiang"   />
<area shape="poly" coords="358.4545593261719,64.36363983154297,369.3636474609375,64.36363983154297,386.9394226074219,67.3939437866211,399.66668701171875,75.27273559570312,411.18182373046875,73.45455169677734,420.2727355957031,74.06061553955078,422.6969909667969,78.30303955078125,412.3939514160156,80.1212158203125,405.1212158203125,86.18182373046875,408.7575988769531,91.63636779785156,393,95.27273559570312,380.8788146972656,83.75758361816406,372.3939514160156,78.90910339355469,367.54547119140625,74.66667175292969,363.30303955078125,71.63636779785156," href="<?php echo base_url() ?>index.php/china_provinces/jilin" alt="Jilin" title="Jilin"   />
<area shape="poly" coords="374.8182067871094,84.3636474609375,379.66668701171875,86.18182373046875,388.7575988769531,97.69697570800781,383.30303955078125,108.60606384277344,366.3333435058594,117.09091186523437,364.5151672363281,111.63636779785156,368.1515197753906,105.57575988769531,362.0909118652344,103.75758361816406,353.6060791015625,110.42425537109375,343.30303955078125,103.75758361816406,347.54547119140625,98.90910339355469,354.2121276855469,97.09091186523437,369.9697265625,86.78788757324219," href="<?php echo base_url() ?>index.php/china_provinces/liaoning" alt="Liaoning" title="Liaoning"   />
<area shape="poly" coords="334.2121276855469,93.45455932617187,342.6969909667969,101.33334350585937,348.1515197753906,109.81819152832031,336.6363830566406,121.33334350585937,337.8485107421875,128.60606384277344,331.18182373046875,131.63636779785156,320.2727355957031,143.15151977539062,314.8182067871094,144.96971130371094,311.18182373046875,131.03030395507812,311.18182373046875,124.96971130371094,315.42425537109375,121.93940734863281,315.42425537109375,109.81819152832031,310.5757751464844,103.75758361816406,318.4545593261719,103.75758361816406,326.9394226074219,100.1212158203125," href="<?php echo base_url() ?>index.php/china_provinces/hebei" alt="Hebei" title="Hebei"   />
<area shape="poly" coords="328.7575988769531,121.33334350585937,333,120.72727966308594,332.3939514160156,126.18182373046875,329.9697265625,126.78788757324219," href="<?php echo base_url() ?>index.php/china_cities/beijing" alt="Beijing" title="Beijing"   />
<area shape="poly" coords="286.3333435058594,127.39395141601562,295.42425537109375,116.48486328125,308.1515197753906,114.06060791015625,309.9696960449219,121.33334350585937,305.1212158203125,125.57575988769531,311.18182373046875,131.63636779785156,308.7575988769531,144.3636474609375,301.48486328125,153.45455932617187,287.54547119140625,158.9091033935547,287.54547119140625,138.9091033935547," href="http://www.image-maps.com/" alt="Shanxi" title="Shanxi"   />
<area shape="poly" coords="253,174.6666717529297,257.8485107421875,163.15151977539062,269.3636474609375,158.30303955078125,274.2121276855469,147.39395141601562,266.3333435058594,140.1212158203125,274.8182067871094,135.87879943847656,288.7575988769531,123.15151977539062,289.9696960449219,143.75758361816406,287.54547119140625,160.1212158203125,288.1515197753906,169.8181915283203,282.6969909667969,168.60606384277344,279.06060791015625,180.72727966308594,265.1212158203125,178.30303955078125," href="<?php echo base_url() ?>index.php/china_provinces/shaanxi" alt="Shaanxi" title="Shaanxi"   />
<area shape="poly" coords="343.90911865234375,128,349.3636474609375,135.27273559570312,360.2727355957031,128.60606384277344,373.6060791015625,132.84849548339844,365.1212158203125,137.6969757080078,358.4545593261719,148,351.18182373046875,152.242431640625,335.42425537109375,155.27273559570312,331.18182373046875,158.9091033935547,326.9394226074219,153.45455932617187,326.3333435058594,143.15151977539062,335.42425537109375,133.45455932617187," href="<?php echo base_url() ?>index.php/china_provinces/shandong" alt="Shandong" title="Shandong"   />
<area shape="poly" coords="287.54547119140625,160.72727966308594,300.8788146972656,155.87879943847656,313.6060791015625,146.7878875732422,317.8485107421875,154.06060791015625,328.7575988769531,160.1212158203125,324.5151672363281,166.7878875732422,329.9697265625,177.09091186523437,323.30303955078125,183.15151977539062,313,177.6969757080078,303.30303955078125,178.30303955078125,299.06060791015625,177.09091186523437,291.18182373046875,172.242431640625," href="<?php echo base_url() ?>index.php/china_provinces/henan" alt="Henan" title="Henan"   />
<area shape="poly" coords="287.54547119140625,174.0606231689453,297.8485107421875,178.30303955078125,314.2121276855469,176.48486328125,319.66668701171875,181.9394073486328,325.727294921875,190.42425537109375,329.3636474609375,195.87879943847656,317.242431640625,200.12123107910156,304.5151672363281,198.30303955078125,293.6060791015625,195.27273559570312,279.06060791015625,203.15151977539062,274.8182067871094,195.87879943847656,283.30303955078125,194.6666717529297,288.7575988769531,188,280.2727355957031,180.1212158203125," href="<?php echo base_url() ?>index.php/china_provinces/hubei" alt="Hubei" title="Hubei"   />
<area shape="poly" coords="190.5757598876953,166.7878875732422,209.96971130371094,178.30303955078125,217.242431640625,173.45455932617187,223.9091033935547,174.6666717529297,224.51516723632812,166.18182373046875,236.0303192138672,170.42425537109375,240.87879943847656,174.0606231689453,252.39395141601562,178.30303955078125,283.90911865234375,187.39395141601562,279.66668701171875,192.242431640625,271.78790283203125,191.0303192138672,278.4545593261719,206.78790283203125,275.42425537109375,211.63638305664062,269.9696960449219,202.54547119140625,249.3636474609375,207.39395141601562,234.8181915283203,211.63638305664062,225.1212158203125,221.93939208984375,220.27273559570312,224.96969604492187,203.9091033935547,208,196.0303192138672,204.3636474609375,197.242431640625,186.18182373046875,189.3636474609375,175.87879943847656," href="<?php echo base_url() ?>index.php/china_provinces/sichuan" alt="Sichuan" title="Sichuan"   />
<area shape="poly" coords="335.42425537109375,157.6969757080078,346.3333435058594,157.6969757080078,351.18182373046875,152.242431640625,359.06060791015625,154.6666717529297,374.8182067871094,175.27273559570312,377.242431640625,183.75758361816406,359.06060791015625,183.15151977539062,354.2121276855469,177.6969757080078,354.2121276855469,171.63636779785156,350.5757751464844,168,347.54547119140625,164.96971130371094," href="<?php echo base_url() ?>index.php/china_provinces/jiangsu" alt="Jiangsu" title="Jiangsu"   />
<area shape="poly" coords="326.3333435058594,169.8181915283203,335.42425537109375,161.33334350585937,344.5151672363281,167.39395141601562,350.5757751464844,175.27273559570312,359.66668701171875,185.57577514648437,351.18182373046875,198.30303955078125,345.1212158203125,196.48486328125,334.2121276855469,193.45455932617187,327.54547119140625,184.3636474609375,330.5757751464844,175.87879943847656," href="<?php echo base_url() ?>index.php/china_provinces/anhui" alt="Anhui" title="Anhui"   />
<area shape="poly" coords="362.0909118652344,185.57577514648437,373,186.18182373046875,369.3636474609375,189.21212768554687,383.30303955078125,188,376.6363830566406,208.6060791015625,369.3636474609375,211.03030395507812,360.8788146972656,212.242431640625,352.3939514160156,200.12123107910156,357.8485107421875,191.63636779785156," href="<?php echo base_url() ?>index.php/china_provinces/zhejiang" alt="Zhejiang" title="Zhejiang"   />
<area shape="poly" coords="320.2727355957031,207.39395141601562,332.3939514160156,197.09092712402344,340.8788146972656,198.9091033935547,346.9394226074219,197.09092712402344,352.3939514160156,204.3636474609375,345.1212158203125,211.63638305664062,337.8485107421875,232.242431640625,328.1515197753906,235.87881469726562,326.9394226074219,229.81820678710937,320.2727355957031,228.6060791015625,317.8485107421875,218.30303955078125," href="<?php echo base_url() ?>index.php/china_provinces/jiangxi" alt="Jiangxi" title="Jiangxi"   />
<area shape="poly" coords="282.0909118652344,205.57577514648437,293,197.09092712402344,313.6060791015625,201.33334350585937,318.4545593261719,208,314.2121276855469,215.27273559570312,319.06060791015625,230.42425537109375,300.2727355957031,240.1212158203125,296.6363830566406,228,283.30303955078125,228,280.2727355957031,217.69699096679687," href="<?php echo base_url() ?>index.php/china_provinces/hunan" alt="Hunan" title="Hunan"   />
<area shape="poly" coords="251.78790283203125,210.42425537109375,265.727294921875,206.78790283203125,278.4545593261719,212.8485107421875,277.242431640625,219.51516723632812,281.48486328125,227.39395141601562,274.2121276855469,237.69699096679687,261.48486328125,231.63638305664062,254.81820678710937,238.30303955078125,240.27273559570312,235.87881469726562,239.6666717529297,227.39395141601562,236.0303192138672,221.93939208984375,254.81820678710937,217.09091186523437," href="<?php echo base_url() ?>index.php/china_provinces/guizhou" alt="Guizhou" title="Guizhou"   />
<area shape="poly" coords="194.8181915283203,206.78790283203125,216.63636779785156,228.6060791015625,225.1212158203125,228.6060791015625,233,212.8485107421875,245.72727966308594,217.09091186523437,234.21212768554687,219.51516723632812,235.42425537109375,228.6060791015625,248.75758361816406,246.18182373046875,235.42425537109375,255.27273559570312,216.0303192138672,252.8485107421875,220.87879943847656,265.5757751464844,215.42425537109375,268,197.84849548339844,258.30303955078125,197.242431640625,251.03030395507812,191.18182373046875,244.96969604492187,182.09091186523437,242.54547119140625,182.09091186523437,238.30303955078125,194.8181915283203,229.81820678710937,194.8181915283203,219.51516723632812," href="<?php echo base_url() ?>index.php/china_provinces/yunnan" alt="Yunnan" title="Yunnan"   />
<area shape="poly" coords="339.66668701171875,234.06060791015625,344.5151672363281,215.87881469726562,354.8182067871094,209.21212768554687,360.2727355957031,212.242431640625,371.78790283203125,213.45455932617187,373,218.30303955078125,357.242431640625,234.06060791015625,354.2121276855469,239.51516723632812,349.9697265625,243.15151977539062,345.1212158203125,237.09091186523437," href="<?php echo base_url() ?>index.php/china_provinces/fujian" alt="Fujian" title="Fujian"   />
<area shape="poly" coords="289.9696960449219,264.9696960449219,301.48486328125,241.93939208984375,317.8485107421875,233.45455932617187,323.90911865234375,237.09091186523437,337.8485107421875,237.09091186523437,349.9697265625,242.54547119140625,339.06060791015625,248.6060791015625,321.48486328125,255.87881469726562,303.30303955078125,263.7575988769531,296.6363830566406,269.8182067871094,285.1212158203125,272.242431640625," href="<?php echo base_url() ?>index.php/china_provinces/guangdong" alt="Guangdong" title="Guangdong"   />
<area shape="poly" coords="248.15151977539062,249.81820678710937,253,245.57577514648437,241.48486328125,239.51516723632812,259.06060791015625,239.51516723632812,263.30303955078125,234.66668701171875,270.5757751464844,235.27273559570312,293.6060791015625,229.21212768554687,293.6060791015625,237.09091186523437,302.0909118652344,240.1212158203125,283.30303955078125,263.1515197753906,273.6060791015625,262.54547119140625,263.30303955078125,260.727294921875,259.06060791015625,256.48486328125," href="<?php echo base_url() ?>index.php/china_provinces/guangxi" alt="Guangxi" title="Guangxi"   />
<area shape="poly" coords="373,242.54547119140625,376.03033447265625,234.06060791015625,388.1515197753906,229.21212768554687,388.7575988769531,237.09091186523437,381.48486328125,251.63638305664062," href="<?php echo base_url() ?>index.php/asia_countries/taiwan" alt="Taiwan" title="Taiwan"   />
<area shape="poly" coords="278.4545593261719,285.5757751464844,278.4545593261719,278.30303955078125,297.8485107421875,275.8788146972656,296.0303039550781,289.2121276855469,286.93939208984375,289.8182067871094," href="<?php echo base_url() ?>index.php/china_provinces/hainan" alt="Hainan" title="Hainan"   />
<area shape="poly" coords="324.6279296875,258.69769287109375,327.8837585449219,256.37213134765625,329.27911376953125,261.0232849121094," href="<?php echo base_url() ?>index.php/china_provinces/hongkong" alt="Hongkong" title="Hongkong"   />
<area shape="poly" coords="315.42425537109375,258.30303955078125,320.2727355957031,257.0909118652344,320.8788146972656,261.9394226074219,316.0303039550781,263.7575988769531," href="<?php echo base_url() ?>index.php/china_provinces/macau" alt="Macau" title="Macau"   />
</map>
</div>
<br /><br />

<h1>Provinces</h1>
 	<table style="width: 100%">
		<tr>
			<td><?php echo anchor ('china_provinces/anhui', 'Anhui') ?></td>
			<td><?php echo anchor ('china_provinces/hongkong', 'Hongkong') ?></td>
			<td><?php echo anchor ('china_provinces/qinghai', 'Qinghai') ?></td>
		</tr>
		<tr>
			<td><?php echo anchor ('china_provinces/fujian', 'Fujian') ?></td>
			<td><?php echo anchor ('china_provinces/hubei', 'Hubei') ?></td>
			<td><?php echo anchor ('china_provinces/shaanxi', 'Shaanxi') ?></td>
		</tr>
				<tr>
			<td><?php echo anchor ('china_provinces/gansu', 'Gansu') ?></td>
			<td><?php echo anchor ('china_provinces/hunan', 'Hunan') ?></td>
			<td><?php echo anchor ('china_provinces/shandong', 'Shandong') ?></td>
		</tr>
		<tr>
			<td><?php echo anchor ('china_provinces/guangdong', 'Guangdong') ?></td>
			<td><?php echo anchor ('china_provinces/neimongol', 'Neimongol') ?></td>
			<td><?php echo anchor ('china_provinces/shanxi', 'Shanxi') ?></td>
		</tr>
		<tr>
			<td><?php echo anchor ('china_provinces/guangxi', 'Guangxi ') ?></td>
			<td><?php echo anchor ('china_provinces/jiangsu', 'Jiangsu') ?></td>
			<td><?php echo anchor ('china_provinces/sichuan', 'Sichuan') ?></td>
		</tr>
		<tr>
			<td><?php echo anchor ('china_provinces/guizhou', 'Guizhou') ?></td>
			<td><?php echo anchor ('china_provinces/jiangxi', 'Jiangxi') ?></td>
			<td><?php echo anchor ('china_provinces/tibet', 'Tibet') ?></td>
		</tr>
		<tr>
			<td><?php echo anchor ('china_provinces/hainan', 'Hainan') ?></td>
			<td><?php echo anchor ('china_provinces/jilin', 'Jilin') ?></td>
			<td><?php echo anchor ('china_provinces/xinjiang', 'Xinjiang ') ?></td>
		</tr>
		<tr>
			<td><?php echo anchor ('china_provinces/hebei', 'Hebei') ?></td>
			<td><?php echo anchor ('china_provinces/liaoning', 'Liaoning') ?></td>
			<td><?php echo anchor ('china_provinces/yunnan', 'Yunnan') ?></td>
		</tr>
		<tr>			
			<td><?php echo anchor ('china_provinces/heilongjiang', 'Heilongjiang') ?></td>
			<td><?php echo anchor ('china_provinces/macau', 'Macau') ?></td>
			<td><?php echo anchor ('china_provinces/zhejiang', 'Zhejiang') ?></td>
		</tr>
		<tr>
			<td><?php echo anchor ('china_provinces/henan', 'Henan') ?></td>
			<td><?php echo anchor ('china_provinces/ningxia', 'Ningxia') ?></td>
			<td>&nbsp;</td>
		</tr>
</table>

<div class="country-menu">
<ul>
<li><?php echo anchor('asia_before_you_go/china', img('assets/images/countries/menu/before-you-go.png')); ?></li>
<li><?php echo anchor('asia_entry/china', img('assets/images/countries/menu/entry.png')); ?></li>
<li><?php echo anchor('asia_adventures/china', img('assets/images/countries/menu/adventures.png')); ?></li>
<li><?php echo anchor('asia_must_see/china', img('assets/images/countries/menu/must-see.png')); ?></li>
</ul>
<ul>
<li><?php echo anchor('asia_getting_around/china', img('assets/images/countries/menu/getting-around.png')); ?></li>
<li><?php echo anchor('asia_health/china', img('assets/images/countries/menu/health.png')); ?></li>
<li><?php echo anchor('asia_local_food/china', img('assets/images/countries/menu/food.png')); ?></li>
<li><?php echo anchor('asia_public_holidays/china', img('assets/images/countries/menu/holidays.png')); ?></li>
</ul>
</div>

<h1>Climate</h1>
<div class="edit2">
<p>Coming soon.</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed2') ?>
<?php endif ?>

<h1>Flora and fauna</h1>
<div class="edit3">
<p>Coming soon.</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed3') ?>
<?php endif ?>

<?php echo anchor('asia_national_parks/cambodia', '(Go to National Parks)') ?>
</div>

<div class="clear"></div>
<div class="comment">
<img src="<?php echo base_url() ?>assets/images/comments.png" alt="comment" style="margin-left:300px" /><?php echo anchor('user/make_comment/china', 'Leave a comment') ?>
</div>

</div>


<div class="right-side">
<div class="top"></div>

<div class="middle">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt;<?php echo anchor('topmenu/worldmap', 'Worldmap') ?>&gt;<?php echo anchor('regions/asia', 'Asia') ?>&gt; China</span></p>

<iframe width="175" height="120" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=china&amp;aq=&amp;sll=12.565679,104.990963&amp;sspn=6.987402,13.392334&amp;ie=UTF8&amp;hq=&amp;hnear=China&amp;t=m&amp;ll=35.746512,104.414063&amp;spn=17.088916,30.585937&amp;z=3&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.au/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=china&amp;aq=&amp;sll=12.565679,104.990963&amp;sspn=6.987402,13.392334&amp;ie=UTF8&amp;hq=&amp;hnear=China&amp;t=m&amp;ll=35.746512,104.414063&amp;spn=17.088916,30.585937&amp;z=3" target="_blank" style="color:#5F6A6F;text-align:left">View Larger Map</a></small>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" style="margin-top:8px"/>
	
<div class="key-facts">	
<h2>Key Facts</h2>
<ul>
<li><strong>Capital city:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/city.png" style="margin-right:5px" alt="city"/><?php echo anchor('china_cities/beijing', 'Beijing') ?></li>

<li><strong>Size:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/size.png" style="margin-right:5px" alt="size"/>9,596,961 km²</li>
<li><img src="<?php echo base_url() ?>assets/assets/size.png" style="margin-right:5px" alt="size"/>3,705,407 sq mi</li>

<li><strong>Water:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/water.png" style="margin-right:5px" alt="water"/>0.28%</li>

<li><strong>Highest point:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/mountain.png" style="margin-right:5px" alt="mountain"/>Mount Everest</li>
<li>8,848 metres (29,029 ft)</li>

<li><strong>Driving on:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/car.png" style="margin-right:5px" alt="car"/>Right</li>

<li><strong>Time zone:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/clock.png" style="margin-right:5px" alt="clock"/><?php echo anchor('time/utc', 'UTC') ?>+8 <?php echo anchor('time/cst', '(CST)') ?></li>

<li><strong>Calling code:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/phone.png" style="margin-right:5px" alt="phone"/>+86</li>
</ul>
</div>
	
<h2>Cities</h2>
<ul>
<li><?php echo anchor('china_cities/guangzho', 'Guangzhou') ?></li>
<li><?php echo anchor('china_cities/quanzhou', 'Quanzhou') ?></li>
<li><?php echo anchor('china_cities/shanghai', 'Shanghai') ?></li>
<li><?php echo anchor('china_cities/shenzhen', 'Shenzhen') ?></li>
<li><?php echo anchor('china_cities/yangjiang', 'Yangjiang') ?></li>
<li><?php echo anchor('china_cities/zhaotong', 'Zhaotong') ?></li>


</ul>
<p style="font-size:9px">For more cities go to the province or <?php echo anchor ('asia_cities/asia_index', 'click here') ?>.</p>

<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" style="margin-top:8px"/>
<h2>Like it..</h2>
<div class="social">
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style">
<table style="margin-top:8px;">
<tr>
<td><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a></td>
<td><a class="addthis_button_tweet"></a></td>
</tr>
<tr>
<td><a class="addthis_button_google_plusone" g:plusone:size="medium"></a></td>
<td><a class="addthis_counter addthis_pill_style"></a></td>
</tr>
</table>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-512f1c611545a1da"></script>
<!-- AddThis Button END -->
</div>

<div class="clear"></div>

<div class="google-right">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- AsiaCountriesRight -->
<ins class="adsbygoogle"
     style="display:inline-block;width:180px;height:150px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="3266814343"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

<div class="clear"></div>

<h2 style="margin-bottom:5px">Explore China</h2>
<div class="edit4">
<p>Coming soon.</p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed4') ?>
<?php endif ?>

</div>
<div class="bottom"></div>

</div>

<div class="clear"></div>
<div id="footer">

<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- AsiaCountries -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="6132487545"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<div class="clear"></div>
<div class="first-column">
<ul>
<li><?php echo anchor('home/index', 'HOME') ?></li>
<li><?php echo anchor('user/index', 'MY PROFILE') ?></li>
<li><?php echo anchor('topmenu/videodump', 'VIDEODUMP') ?></li>
<li><?php echo anchor('topmenu/worldmap', 'WORLDMAP') ?></li>
</ul>
</div>
<div class="first-column">
<ul>
<li><?php echo anchor('regions/africa', 'AFRICA') ?></li>
<li><?php echo anchor('regions/asia', 'ASIA') ?></li>
<li><?php echo anchor('regions/caribbean', 'CARIBBEAN') ?></li>
<li><?php echo anchor('regions/central_america', 'CENTRAL AMERICA') ?></li>
</ul>
</div>
<div class="first-column">
<ul>
<li><?php echo anchor('regions/europe', 'EUROPE') ?></li>
<li><?php echo anchor('regions/north_america', 'NORTH AMERICA') ?></li>
<li><?php echo anchor('regions/oceania', 'OCEANIA') ?></li>
<li><?php echo anchor('regions/south_america', 'SOUTH AMERICA') ?></li>
</ul>
</div>
<div class="first-column">
<ul>
<li><?php echo anchor('topmenu/favorites', 'FAVORITES') ?></li>
<li><?php echo anchor('news/news_index', 'TRAVEL NEWS') ?></li>
<li><?php echo anchor('blog/blog_index', 'BLOG') ?></li>
<li><?php echo anchor('topmenu/helpcenter', 'HELPCENTER') ?></li>
</ul>
</div>
<div class="logo"><center><img src="<?php echo base_url() ?>assets/images/photos.jpg" alt="logo" /></center>
<div class="slogin">You are our <span>travelguide!</span>
</div>
</div>
<div class="clear"></div>
<p> <?php echo anchor('privacy/privacy_policy', 'Privacy Policy') ?> | <?php echo anchor('privacy/terms_of_use', 'Terms of Use') ?> | <?php echo anchor('home/contact_us', 'Contact Us') ?> | &copy; Copyright <?php echo date('Y') ?> Holidaysrating All Rights Reserved</p>
</div>
</div>
<?php echo css('assets/css/country.css') ?>
</body>
<?php $path = __FILE__ ?>
<?php $this->session->set_userdata('path', $path) ?>

<?php if($this->ion_auth->is_editor()): ?>
<script type="text/javascript">
var siteUrl = "<?php echo site_url('editor/update') ?>";

$(document).ready(function() {
    
    $('.edit1').editable(siteUrl + '/1', {
        type      : 'textarea',
        cancel    : 'Cancel',
        submit    : 'OK',
        tooltip   : 'Click pencil to edit...',
        event     : 'edit'
    });
    
    $('#ed1').bind('click', function(){
        $('.edit1').trigger('edit');
        return false;
    });
    
    $('.edit2').editable(siteUrl + '/2', {
        type      : 'textarea',
        cancel    : 'Cancel',
        submit    : 'OK',
        tooltip   : 'Click pencil to edit...',
        event     : 'edit'
    });
    
    $('#ed2').bind('click', function(){
        $('.edit2').trigger('edit');
        return false;
    });
    
    $('.edit3').editable(siteUrl + '/3', {
        type      : 'textarea',
        cancel    : 'Cancel',
        submit    : 'OK',
        tooltip   : 'Click pencil to edit...',
        event     : 'edit'
    });
    
    $('#ed3').bind('click', function(){
        $('.edit3').trigger('edit');
        return false;
    });
    
    $('.edit4').editable(siteUrl + '/4', {
        type      : 'textarea',
        cancel    : 'Cancel',
        submit    : 'OK',
        tooltip   : 'Click pencil to edit...',
        event     : 'edit'
    });
    
    $('#ed4').bind('click', function(){
        $('.edit4').trigger('edit');
        return false;
    });
});
</script>
<?php endif ?>
</html>