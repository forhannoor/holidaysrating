<?php

class MY_Model extends CI_Model
{
    protected $_table;
    protected $_primary_key = 'id';
    protected $_fields = array();
    
    public $rules = array();
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function get($id)
    {
        return R::load($this->_table, $id);
    }
    
    public function get_where($field, $value, $limit = 1000000000)
    {
        if($limit == 1)
        {
            $record = R::findOne($this->_table, ' `' . $field . '` = :value', array(':value' => $value));
        }
        
        else
        {
            $record = R::find($this->_table, ' `' . $field . '` = :value LIMIT :limit', array(':value' => $value, ':limit' => $limit));
        }
        
        return $record;
    }
    
    public function get_all()
    {
        return R::findAll($this->_table);
    }
    
    public function count_all()
    {
        return R::count($this->_table);
    }
    
    public function count_where($field, $value)
    {
        return R::count($this->_table, ' `' . $field . '` = :value', array(':value' => $value));
    }
    
    public function insert($data)
    {
        R::setStrictTyping(false);
        $record = R::dispense($this->_table);
        
        foreach($data as $key => $value)
        {
            $record->$key = $value;
        }
        
        R::store($record);
    }
    
    public function update($id, $data)
    {
        $record = R::load($this->_table, $id);
        
        foreach($data as $key => $value)
        {
            $record->$key = $value;
        }
        
        R::store($record);
    }
    
    public function delete($id)
    {
        $record = R::load($this->_table, $id);
        R::trash($record);
    }
}