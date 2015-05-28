<ul id="cookbook_items">
    <?php foreach($cookbook_items as $item): ?>
        <li>
            <?php echo img('assets/images/img-1.jpg') ?>
            <br />
            <?php echo anchor('recipe/view/' . $item->id, $item->title) ?>
            <br />
        </li>
    <?php endforeach ?>
</ul>

<style type="text/css">
#cookbook_items{list-style: none;}
#cookbook_items li{float: left; clear: none; margin-right: 5px; margin-bottom: 5px; max-width: 100px;}
#cookbook_items li a{text-decoration: none;}
</style>