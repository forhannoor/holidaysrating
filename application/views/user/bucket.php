<?php if(count($bucket_list) == 0): ?>
<h3 class="alert">Your bucket list is empty</h3>
<?php endif ?>
<ul>
<?php foreach($bucket_list as $item): ?>
<li><?php echo anchor($item->url, $item->url) ?></li>
<?php endforeach ?>
</ul>