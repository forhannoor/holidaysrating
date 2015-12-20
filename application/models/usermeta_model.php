<?php

class Usermeta_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->_table = 'user_meta';
        $this->_fields = array(0 => 'id', 1 => 'user_id', 2 => 'value');
    }
    
    public function save()
    {
        $value = array(
            'left' => $this->input->post('left'),
            'right' => $this->input->post('right'),
            'top' => $this->input->post('top'),
        );
        
        $meta = R::findOne('user_meta', ' user_id = :user_id', array(':user_id' => $this->session->userdata('user_id')));
        R::setStrictTyping(false);
        
        if(! $meta) // record not found, create new
        {
            $meta = R::dispense('user_meta');
            $meta->user_id = $this->session->userdata('user_id');
            $meta->value = serialize($value);
            R::store($meta);
        }
        
        else // record found, update existing
        {
            $meta->value = serialize($value);
            R::store($meta);
        }
    }
    
    public function get($user_id)
    {
        $record = R::findOne('user_meta', ' user_id = :user_id', array(':user_id' => $user_id));
        
        if(! is_null($record)) // user meta exists
        {
            $value = unserialize($record->value);
            return $value;
        }
        
        $value = array(
            'left'  => '',
            'right' => '',
            'top'   => '',
        );
        
        return $value;
    }
}