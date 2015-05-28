<?php echo css('assets/css/pure.css') ?>
<?php echo css('assets/css/style.css') ?>

<script type="text/javascript">
    // select file function only for styling up input[type="file"]
    function select_file(){
        document.getElementById('image').click();
        return false;
    }
</script>

<div class="status"></div>

<!--image upload form-->
<form class="pure-form" action="upload.php" enctype="multipart/form-data" method="post">

    <div class="upload">
    <a onclick="select_file()" class="pure-button">Choose a Image</a>
    <input id="image" type="file" name="image" >
    </div>
    
    <!--image preview-->
    <img src="" style="display:none">
    
    <input class="pure-button pure-button-primary" type="submit" value="Upload!">
</form>

<!--progress bar-->
<div class="progress">
    <div class="bar"></div >
    <div class="percent">0%</div >
</div>

<!-- jQuery Library-->
<?php echo js('assets/js/jquery-2.1.1.min.js') ?>

<!-- jQuery Form Plug in -->
<?php echo js('assets/js/jquery.form.js') ?>

<!-- our main javascript file -->
<?php echo js('assets/js/script.js') ?>