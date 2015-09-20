<?php echo js('assets/js/jquery.bxslider.min.js') ?>
<?php echo css('assets/css/jquery.bxslider.css') ?>

<ul class="bxslider">
<?php foreach($images as $img): ?>
<li><?php echo img($img) ?></li>
<?php endforeach ?>
</ul>

<script type="text/javascript">
$(document).ready(function(){
    $('.bxslider').bxSlider({
        responsive: false,
        captions: true,
        auto: true,
        speed: 800,
        pause: 5000
    });
});
</script>

<style type="text/css">
.bx-wrapper, .bx-viewport, .bx-wrapper img {height: 412px !important; width: 940px !important;}
.bx-caption a{text-decoration: none; color: #fff;}
.bx-caption a:hover{color: yellow;}
</style>