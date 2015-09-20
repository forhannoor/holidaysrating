<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Local Food Algeria"/>
<meta name="keywords" content="Food, What to eat in Algeria, Travel to Algeria, Local Food, Recipes"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta name="viewport" content="maximum-scale=1"/>

<title>Local Food | Algeria</title>
<?php echo js('assets/js/jquery-2.1.1.min.js') ?>
<?php echo js('assets/js/jquery.jeditable.min.js') ?>
</head>

<body>
<div id="top-head-food">
<?php $this->load->view($header) ?>
</div>

<div id="banner-food">
<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- FoodTop -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="6237728744"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

</div>


<div id="content">
<h1><?php echo $heading ?></h1>
<div class="clear"></div>
<div class="left-side">
<div class="top-food"></div>
<div class="middle-food">
<div class="my_login">
<?php $this->load->view($sidebar) ?>
</div>
</div>
<div class="bottom-food"></div>
</div>


<div class="center">
<div class="hot">
<br />
<h5><?php echo $this->session->flashdata('msg') ?></h5>

<div class="edit1">
<p>The traditional food will definitely attract the appetite of the travelers.<br><br>
Specialties: <br><br>
• Brochettes (kebabs) in French bread and covered in a spicy sauce. <br> 
• Couscous (semolina-like pasta made from cracked wheat, is a staple food in Algeria and throughout North Africa). <br>
• Chickpea-cakes (usually added as a side dish to make a cheap and tasty accompaniment for food). <br>
• Shakshuka <br>
• Tajine <br>
• Pressed dates or figs, and hard cheese. </p>
</div>

<?php if($this->ion_auth->is_editor()): ?>
<?php echo anchor('', img('assets/images/edit-icon.png'), 'id=ed1') ?>
<?php endif ?>
<br />
<center><img src="<?php echo base_url() ?>assets/images/line.jpg" alt="line" /></center>
<br />	
<br />	

<table class="recipe-links">
<?php if(count($recipes) == 0): ?>
    <p style="text-align: center;"><?php echo anchor('recipe/create?country=' . urlsafe_b64encode($this->uri->segment(2)), 'Be the first to upload recipe') ?></p>
<?php endif ?>

<?php foreach($recipes as $recipe): ?>
    <tr>
        <td>
            <?php if(strlen($recipe->image) > 0): ?>
            <?php echo img('uploads/recipes/' . $recipe->image) ?>
            <?php else: ?>
            <?php echo img('uploads/recipes/default.jpg') ?>
            <?php endif ?>
        </td>
        <td>
            <?php echo anchor('recipe/view/' . $recipe->id, $recipe->title) ?>
            <br />
            <?php echo $recipe->ingredients ?>
        </td>
        <td>
            <div class="rating">
                <?php if(! is_null($recipe->rating)): ?>
                    <p><?php echo round($recipe->rating, 1) ?></p>
                <?php else: ?>
                    <p>--</p>
                <?php endif ?>
            </div>
            <p><?php echo $recipe->time ?> hour</p>
        </td>
    </tr>
<?php endforeach ?>
</table>

<p class="pagination">
    <?php if(count($recipes) > 0): ?>
        <?php echo $this->pagination->create_links() ?>
    <?php endif ?>
</p>

<center><img src="<?php echo base_url() ?>assets/images/line.jpg" alt="line" /></center>

<p><a href="#" onClick="history.go(-1)">Previous Page</a> | <?php echo anchor('recipe/create?country=' . urlsafe_b64encode($this->uri->segment(2)), 'Upload Your Recipe') ?></p>
</div>


<div class="clear"></div>
<div class="comment">
<img src="<?php echo base_url() ?>assets/images/comments.png" alt="comment" style="margin-left:300px" /><?php echo anchor('user/make_comment/algeria_food', 'Leave a comment') ?>
</div>


</div>


<div class="right-side">
<div class="top-food"></div>
<div class="middle-food">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt;<?php echo anchor('topmenu/worldmap', 'Worldmap') ?>&gt; <?php echo anchor('regions/africa', 'Africa') ?>&gt; <?php echo anchor('africa_countries/algeria', 'Algeria') ?>&gt; Local Food</span></p>


<?php $this->load->view($right_bar_food) ?>

<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" />
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

</div>
<div class="bottom-food"></div>
</div>
<div class="clear"></div>
<div id="footer">

<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- FoodBottom -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="7714461945"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<div class="clear"></div>
<?php $this->load->view($footer) ?>
<div class="logo"><center><img src="<?php echo base_url() ?>assets/images/photos.jpg" alt="logo" /></center>
<div class="slogin">You are our <span>travelguide!</span>
</div>
</div>
<div class="clear"></div>
<?php $this->load->view($last_line) ?>
</div>
</div>
<?php echo css('assets/css/holiday.css') ?>
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

});
</script>
<?php endif ?>

<style type="text/css">
.recipe-links{width: 100%;}
.recipe-links img{display: block; width: 64px; height: auto;}
.recipe-links td:nth-child(2){min-width: 325px;}
#content .center .hot tr td{width: auto;}
.rating{
    display: table;
    width: 40px;
    height: 40px;
    background: url('<?php echo base_url('assets/img/star.png') ?>') no-repeat;
    background-size: 40px 40px;
}
.rating p{
    display: table-cell;
    font-size: 10px;
    text-align: center;
    vertical-align: middle;
}
#content .center .hot .rating p{color: darkred;}
</style>
</html>