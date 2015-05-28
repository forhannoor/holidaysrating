<?php

class Recipe_m extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->_table = 'recipes';
        $this->_fields = array(0 => 'id', 1 => 'author', 2 => 'country', 3 => 'title', 4 => 'ingredients', 5 => 'time', 6 => 'recipe', 7 => 'category', 8 => 'image', 9 => 'approved');
        $this->rules = array(
            array(
                'field'     => 'recipe',
                'label'     => 'Recipe',
                'rules'     => 'trim|required'
            ),
            
            array(
                'field'     => 'title',
                'label'     => 'Title',
                'rules'     => 'trim|required'
            ),
            
            array(
                'field'     => 'ingredients',
                'label'     => 'Ingredients',
                'rules'     => 'trim|required'
            )
        );
    }
    
    public function get_recipes($country, $limit, $offset)
    {
        $this->db->select('recipes.id, recipes.author, recipes.country, recipes.title, recipes.ingredients, recipes.time, recipes.recipe AS recipe, recipes.category AS category, recipes.image AS image, recipe_ratings.recipe AS recipe_id, avg(recipe_ratings.rating) AS rating');
        $this->db->from($this->_table);
        $this->db->limit($limit, $offset);
        $this->db->join('recipe_ratings', 'recipes.id = recipe_ratings.recipe', 'left');
        $this->db->where('country', $country);
        $this->db->where('approved', 1);
        $this->db->group_by('recipes.id');
        return $this->db->get()->result();
    }
    
    public function set_recipe_approved($recipe_id, $approved)
    {
        $record = R::load('recipes', $recipe_id);
        
        if($record->id != 0) // record exists
        {
            $record->approved = $approved;
            R::store($record);
        }
    }
}