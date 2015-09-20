<?php

class Picture_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->_table = 'pictures';
        
        $this->_fields = array(
            0 => 'id', 
            1 => 'uploader', 
            2 => 'name',
            3 => 'created_at',
        );
    }
    
    /* insert uploaded image */
    public function save($uploader)
    {
        $picture_data = $this->upload->data();        
        $picture = R::dispense($this->_table);
        $picture->uploader = $uploader;
        $picture->name = $picture_data['file_name'];
        R::store($picture);
    }
    
    public function find_by_uploader($uploader, $limit = 0)
    {
        if(!$limit)
            $pictures = R::find('pictures', ' uploader = :uploader', array(':uploader' => $uploader));
            
        else
            $pictures = R::find('pictures', ' uploader = :uploader ORDER BY created_at DESC LIMIT :limit', array(':uploader' => $uploader, ':limit' => $limit));
            
        return $pictures;
    }
}