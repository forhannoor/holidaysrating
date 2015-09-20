<p><?php echo anchor('recipe/create?country=' . urlsafe_b64encode($this->uri->segment(2)), 'Upload Your Recipe') ?></p>
<br />
<?php foreach($recipes as $recipe): ?>
    <h3><?php echo $recipe->title ?></h3>
    <div class="recipe">
        <?php echo $recipe->recipe ?>
        <div class="score"><p><?php echo round($recipe->rating, 1) ?></p></div>
        <?php echo form_open('recipe/rate/' . $recipe->id) ?>
        <?php echo form_dropdown('rating', generateArray(1, 10)) ?>
        <?php echo form_submit('', 'Rate') ?>
        <?php echo form_close() ?>
    </div>
<?php endforeach ?>

<style>
.recipe{margin-bottom: 30px;}
.recipe select{border: solid 1px #cccccc;height: 22px;}
.recipe img{
    display: block;
    margin-top: 5px;
    margin-bottom: 5px;
    width: 75%;
    height: auto;
    margin-left: auto;
    margin-right: auto;
}
.starRate {position:relative; overflow:hidden; zoom:1;}
.starRate ul {width:160px; margin:0; padding:0;}
.starRate li {display:inline; list-style:none;}
.starRate a, .starRate b {background:url('../../assets/img/star_rate.gif') left top repeat-x;}
.starRate a {float:right; margin:0 80px 0 -144px; width:80px; height:16px; background-position:left 16px; color:#000; text-decoration:none;}
.starRate a:hover {background-position:left -32px;}
.starRate b {position:absolute; z-index:-1; width:80px; height:16px; background-position:left -16px;}
.starRate div b {left:0px; bottom:0px; background-position:left top;}
.starRate a span {position:absolute; left:-300px; font-size: 12px;}
.starRate a:hover span {left:90px; width:100%;}
</style>