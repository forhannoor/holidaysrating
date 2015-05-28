<?php

class Recipe_rating_m extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->_table = 'recipe_ratings';
        $this->_fields = array(
            0 => 'id',
            1 => 'recipe',
            2 => 'rater',
            3 => 'rating'
        );
        $this->rules = array(
            array(
                'field' => 'rating',
                'label' => 'Rating',
                'rules' => 'required'
            )
        );
    }
    
    public function get_num_rating($recipe, $rater)
    {
        $records = R::find($this->_table, ' recipe = :recipe AND rater = :rater', array(':recipe' => $recipe, ':rater' => $rater));
        return count($records);
    }
    
    public function get_rating($recipe_id)
    {
        $rating = $this->db->select_avg('rating')->where('recipe', $recipe_id)->get($this->_table)->row();
        return $rating->rating;
    }
}