<div class="recipe">
    <h4>Title</h4>
    <p><?php echo $recipe->title ?></p>
    <br />
    <h4>Ingredients</h4>
    <?php $ingredients = explode(',', $recipe->ingredients) ?>
    
    <?php foreach($ingredients as $ing): ?>
        <li><?php echo ucfirst(trim($ing)) ?></li>
    <?php endforeach ?>

    <br />
    <h4>Time</h4>
    <p><?php echo $recipe->time ?> hour</p>
    <br />
    
    <?php if(strlen($recipe->image) > 0): ?>
        <?php echo img('uploads/recipes/' . $recipe->image) ?>
    <?php else: ?>
        <?php echo img('uploads/recipes/default.jpg') ?>
    <?php endif ?>
    
    <br />
    <h4>Description</h4>
    <p><?php echo $recipe->recipe ?></p>
    <br />
    <div class="score">
        <?php if(! is_null($recipe->rating)): ?>
            <p><?php echo round($recipe->rating, 1) ?></p>
        <?php else: ?>
            <p>--</p>
        <?php endif ?>
    </div>
    
    <?php echo form_open('recipe/rate/' . $recipe->id) ?>
    <p>
        <?php echo form_dropdown('rating', generateArray(1, 10)) ?>
        <?php echo form_submit('', 'Rate') ?>
    </p>
    <?php echo form_close() ?>
    
    <br />
    <p><?php echo anchor('cookbook/add_to_cookbook/' . $recipe->id, 'Add to Cookbook') ?></p>
</div>

<style type="text/css">
.recipe img{display: block; margin: 10px auto 10px auto; max-width: 95%; height: auto;}
.recipe select{border: solid 1px #cccccc; height: 22px;}
</style>