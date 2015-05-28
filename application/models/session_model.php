<?php

class Session_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }
    
    /*
     * Prepares a list contaning members id and display name who are online
     * @return array
     */
    public function member_online_list()
    {
        $this->db->where('user_data !=', '');
        $records = $this->db->get('ci_sessions')->result();
        $names = array();
        
        foreach($records as $r)
        {
            $u = unserialize($r->user_data);
            
            if(array_key_exists('identity', $u))
            {
                if(strlen($this->User_model->get_display_name($u['user_id'])) > 0) // if display name is set
                {
                    $names[$u['user_id']] = $this->User_model->get_display_name($u['user_id']);
                }
                
                else
                {
                    $names[$u['user_id']] = $this->User_model->get_name($u['user_id']);
                }
            }
        }
        
        return $names;
    }
    
    /*
     * Calculates number of guests online
     * @return int
     */
    public function guest_online()
    {
        $counter = 0;
        $records = $this->db->get('ci_sessions');
        
        foreach($records->result() as $r)
        {
            if(strlen($r->user_data) > 0)
            {
                $obj = unserialize($r->user_data);
            
                if(! array_key_exists('identity', $obj))
                {
                    $counter += 1; 
                }
            }
            
            else
            {
                $counter += 1;
            }
        }
        
        return $counter;
    }
    
    /*
     * Calculates number of members online
     * @return int
     */
    public function member_online()
    {
        $counter = 0;
        $records = $this->db->get('ci_sessions');
        
        foreach($records->result() as $r)
        {
            if(strlen($r->user_data) > 0)
            {
                $obj = unserialize($r->user_data);
            
                if(array_key_exists('identity', $obj))
                {
                    $counter += 1; 
                }
            }
        }
        
        return $counter;
    }
}