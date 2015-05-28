<h3>Recipes</h3>
<table class="table table-condensed">
    <th></th>
    <th>Title</th>
    <th>Country</th>
    <th>Ingredients</th>
    <th>Category</th>
    <th>Status</th>
    <th>Action</th>
    
    <?php foreach($recipes as $recipe): ?>
        <tr>
            <td class="recipe-image">
                <?php if(strlen($recipe->image) > 0): ?>
                <?php echo img('uploads/recipes/' . $recipe->image) ?>
                <?php else: ?>
                <?php echo img('uploads/recipes/default.jpg') ?>
                <?php endif ?>
            </td>
            <td><?php echo anchor('admin/recipe/' . $recipe->id, $recipe->title, 'title = \'Click to view recipe\'') ?></td>
            <td><?php echo ucfirst($recipe->country) ?></td>
            <td><?php echo $recipe->ingredients ?></td>
            <td><?php echo $recipe->category ?></td>
            <td>
                <?php if($recipe->approved): ?>
                Approved
                <?php else: ?>
                Not approved
                <?php endif ?>
            </td>
            <td>
                <?php if($recipe->approved): ?>
                    <?php echo anchor('admin/disapprove_recipe/' . $recipe->id, '<i class = \'icon-thumbs-down\'></i>') ?>
                <?php else: ?>
                    <?php echo anchor('admin/approve_recipe/' . $recipe->id, '<i class = \'icon-thumbs-up\'></i>') ?>
                <?php endif ?>
                
                &nbsp;
                
                <?php echo anchor('admin/recipe_delete/' . $recipe->id, '<i class = \'icon-trash\'></i>', array('onclick' => "return confirm('You are about to remove this recipe. This cannot be undone. Are you sure?')")) ?>
            </td>
        </tr>
    <?php endforeach ?>
</table>

<?php echo anchor('admin/index', 'Back') ?>

<style type="text/css">
.recipe-image img{width: 72px; height: auto;}
</style>