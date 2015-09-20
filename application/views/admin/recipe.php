<?php if($recipe->id != 0): ?>
    <h3><?php echo $recipe->title ?></h3>
    <p><strong>Category: </strong><?php echo $recipe->category ?></p>
    <p><strong>Country: </strong><?php echo $recipe->country ?></p>
    <p><strong>Ingredients: </strong><?php echo $recipe->ingredients ?></p>
    <p><strong>Time: </strong><?php echo $recipe->time ?></p>
    
    <?php if(strlen($recipe->image) > 0): ?>
        <?php echo img('uploads/recipes/' . $recipe->image) ?>
    <?php endif ?>
    
    <p><strong>Recipe: </strong><?php echo $recipe->recipe ?></p>
    
    <?php if($recipe->approved): ?>
        <?php echo anchor('admin/disapprove_recipe/' . $recipe->id, '<i class = \'icon-thumbs-down\'></i>') ?>
    <?php else: ?>
        <?php echo anchor('admin/approve_recipe/' . $recipe->id, '<i class = \'icon-thumbs-up\'></i>') ?>
    <?php endif ?>
    
    &nbsp;
    
    <?php echo anchor('admin/recipe_delete/' . $recipe->id, '<i class = \'icon-trash\'></i>', array('onclick' => "return confirm('You are about to remove this recipe. This cannot be undone. Are you sure?')")) ?>
<?php else: ?>
    <h3>No such recipe found</h3>
<?php endif ?>
<br /><br />
<p><?php echo anchor('admin/recipes', 'Back') ?></p>

<style type="text/css">
img{display: block; max-width: 400px;max-height: 300px; margin: 5px auto 5px auto;}
</style>