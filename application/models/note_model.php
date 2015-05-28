<?php

class Note_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->_table = 'notes';
        
        $this->_fields = array(
            0 => 'id', 
            1 => 'author', 
            2 => 'title', 
            3 => 'description', 
            4 => 'created_at',
            5 => 'editor_access'
        );
        
        $this->rules = array(
            array(
                'field'     => 'title',
                'label'     => 'Title',
                'rules'     => 'trim|required|sanitize'
            ),
            
            array(
                'field'     => 'description',
                'label'     => 'Description',
                'rules'     => 'trim|required|sanitize'
            ),
        );
    }
}