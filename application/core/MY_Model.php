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
        return $this->db->where('id', $id)->get($this->_table)->row();
    }
    
    public function get_where($field, $value, $limit = 1000000000, $offset = 0, $order_by = '', $order = 'ASC')
    {
        $this->db->where($field, $value);
        
        if(strlen($order_by) > 0)
        {
            $this->db->order_by($order_by, $order);
        }
        
        $this->db->limit($limit, $offset);
        
        if($limit == 1)
        {
            return $this->db->get($this->_table)->row();
        }
        
        else
        {
            return $this->db->get($this->_table)->result();
        }
    }
    
    public function get_all()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function count_all()
    {
        return $this->db->count_all_($this->_table);
    }
    
    public function count_where($field, $value)
    {
        return $this->db->where($field, $value)->count_all_results($this->_table);
    }
    
    public function insert($data)
    {
        $this->db->insert($this->_table, $data);
        return $this->db->insert_id();
    }
    
    public function update($id, $data)
    {
        $this->db->where('id', $id)->update($this->_table, $data);
    }
    
    public function delete($id)
    {
        $this->db->delete($this->_table, array('id' => $id)); 
    }
}