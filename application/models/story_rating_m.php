<?php

class Story_rating_m extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        
        $this->_table = 'story_ratings';
        
        $this->_fields = array(
            0 => 'id',
            1 => 'story_id',
            2 => 'rater_id',
            3 => 'rating'
        );
    }
    
    public function get_num_rating($story_id, $rater_id)
    {
        $records = R::find($this->_table, ' story_id = :story_id AND rater_id = :rater_id', array(':story_id' => $story_id, ':rater_id' => $rater_id));
        return count($records);
    }
}