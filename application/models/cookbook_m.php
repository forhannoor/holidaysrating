<?php

class Cookbook_m extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->_table = 'cookbooks';
        $this->_fields = array(0 => 'id', 1 => 'user_id', 2 => 'recipe_id');
    }
    
    public function insert($data)
    {
        R::setStrictTyping(false);
        $record = R::find($this->_table, ' `user_id` = :user_id AND `recipe_id` = :recipe_id', array(':recipe_id' => $data['recipe_id'], ':user_id' => $data['user_id']));
        $status = 0;
        
        if(count($record) == 0) // recipe doesn't exist in cookbook
        {
            $new_record = R::dispense($this->_table);
        
            foreach($data as $key => $value)
            {
                $new_record->$key = $value;
            }
            
            $status = R::store($new_record);
        }
        
        return $status;
    }
    
    public function get_where($field, $value, $limit = 1000000000)
    {
        $rows = R::getAll('
            SELECT cookbooks.id, cookbooks.recipe_id, recipes.id, recipes.title, recipes.ingredients
            FROM `cookbooks`
            JOIN recipes
            ON cookbooks.recipe_id = recipes.id
            WHERE cookbooks.' . $field . ' = ' . $value . ' LIMIT ' . $limit 
        );
            
        $record = R::convertToBeans($this->_table, $rows);
        
        return $record;
    }
}