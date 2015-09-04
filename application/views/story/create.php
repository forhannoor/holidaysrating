<?php echo js('assets/js/tinymce/tinymce.min.js') ?>

<script>
tinymce.init({selector:'textarea'});
</script>

<?php if(isset($title)): ?>
	<title><?php echo $title ?></title>
<?php endif ?>

<?php echo validation_errors() ?>
<?php echo form_open_multipart('story/create?country=' . $this->input->get('country')) ?>
<p>Title</p>
<p><?php echo form_input('title', $this->input->post('title')) ?></p>
<br />
<p>Select a picture (will be scaled to <?php echo $large_thumbnail_width ?> X <?php echo $large_thumbnail_height ?>)</p>
<p><?php echo form_upload('images[]', '', 'class=\'large-thumbnail\' required id=\'largeImageLoader\'') ?></p>
<canvas id="largeCanvas"></canvas>
<br/>
<br />
<p>Your story</p>
<p><?php echo form_textarea('body', $this->input->post('body')) ?></p>
<br />
<?php echo form_hidden('country', $this->input->get('country')) ?>
<p>Select a picture (will be scaled to <?php echo $small_thumbnail_width ?> X <?php echo $small_thumbnail_height ?>)</p>
<p><?php echo form_upload('images[]', '', 'class=\'small-thumbnail\' required id=\'smallImageLoader1\'') ?></p>
<canvas id="smallCanvas1"></canvas>
<br/>
<br />
<p>Select a picture (will be scaled to <?php echo $small_thumbnail_width ?> X <?php echo $small_thumbnail_height ?>)</p>
<p><?php echo form_upload('images[]', '', 'class=\'small-thumbnail\' required id=\'smallImageLoader2\'') ?></p>
<canvas id="smallCanvas2"></canvas>
<br/><br/>
<?php echo form_submit('', '') ?>
<?php echo form_close() ?>

<script type="text/javascript">
var largeThumbnailWidth = "<?php echo $large_thumbnail_width ?>";
var largeThumbnailHeight = "<?php echo $large_thumbnail_height ?>";
var smallThumbnailWidth = "<?php echo $small_thumbnail_width ?>";
var smallThumbnailHeight = "<?php echo $small_thumbnail_height ?>";
var largeImageLoader = document.getElementById('largeImageLoader');
var smallImageLoader1 = document.getElementById('smallImageLoader1');
var smallImageLoader2 = document.getElementById('smallImageLoader2');
largeImageLoader.addEventListener('change', handleLargeImage, false);
smallImageLoader1.addEventListener('change', handleSmallImage1, false);
smallImageLoader2.addEventListener('change', handleSmallImage2, false);
var largeCanvas = document.getElementById('largeCanvas');
var smallCanvas1 = document.getElementById('smallCanvas1');
var smallCanvas2 = document.getElementById('smallCanvas2');
var ctx1 = largeCanvas.getContext('2d');
var ctx2 = smallCanvas1.getContext('2d');
var ctx3 = smallCanvas2.getContext('2d');

function handleLargeImage(e){
    var reader = new FileReader();
    reader.onload = function(event){
        var img = new Image();
        img.onload = function(){
            largeCanvas.width = largeThumbnailWidth;
            largeCanvas.height = largeThumbnailHeight;
            ctx1.drawImage(img,0,0, largeThumbnailWidth, largeThumbnailHeight);
        }
        img.src = event.target.result;
    }
    reader.readAsDataURL(e.target.files[0]);     
}

function handleSmallImage1(e){
    var reader = new FileReader();
    reader.onload = function(event){
        var img = new Image();
        img.onload = function(){
            smallCanvas1.width = smallThumbnailWidth;
            smallCanvas1.height = smallThumbnailHeight;
            ctx2.drawImage(img,0,0, smallThumbnailWidth, smallThumbnailHeight);
        }
        img.src = event.target.result;
    }
    reader.readAsDataURL(e.target.files[0]);     
}

function handleSmallImage2(e){
    var reader = new FileReader();
    reader.onload = function(event){
        var img = new Image();
        img.onload = function(){
            smallCanvas2.width = smallThumbnailWidth;
            smallCanvas2.height = smallThumbnailHeight;
            ctx3.drawImage(img,0,0, smallThumbnailWidth, smallThumbnailHeight);
        }
        img.src = event.target.result;
    }
    reader.readAsDataURL(e.target.files[0]);     
}
</script>

<style type="text/css">
#content .center input[type=text]{width: 470px;}
#content .center input[type=submit]{background: url('../../assets/assets/submit.png'); width: 123px; height: 32px; border: none;}
#largeCanvas{width: 300px; height: 150px; background: url('../../assets/assets/plus-sign.ico') no-repeat; background-size: contain; background-position: center; border: solid 1px #cccccc;}
#smallCanvas1{width: 200px; height: 100px; background: url('../../assets/assets/plus-sign.ico') no-repeat; background-size: contain; background-position: center; border: solid 1px #cccccc;}
#smallCanvas2{width: 200px; height: 100px; background: url('../../assets/assets/plus-sign.ico') no-repeat; background-size: contain; background-position: center; border: solid 1px #cccccc;}
#content .center #largeImageLoader{width: <?php echo $large_thumbnail_width ?>px;}
#content .center #smallImageLoader1, #content .center #smallImageLoader2{width: <?php echo $small_thumbnail_width ?>px;}
</style>