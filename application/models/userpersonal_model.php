<?php

class Userpersonal_Model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->_table = 'users_personal';
        
        $this->_fields = array(
            0   => 'id',
            1   => 'uid',
            2   => 'avatar',
            3   => 'location',
            4   => 'favorite_destination',
            5   => 'about',
            6   => 'privacy',
            7   => 'display_name',
            8   => 'gender',
            9  => 'date_of_birth',
            10  => 'countries_to_visit',
            11  => 'travel_motto'
        );
        
        $this->rules = array(
            array(
                'field'     => 'location',
                'label'     => 'Location',
                'rules'     => 'trim|required|sanitize'
            ),
            
            array(
                'field'     => 'about',
                'label'     => 'About Me',
                'rules'     => 'trim|required|sanitize'
            ),
            
            array(
                'field'     => 'display_name',
                'label'     => 'Display Name',
                'rules'     => 'trim|sanitize'
            ),
            
            array(
                'field'     => 'date_of_birth',
                'label'     => 'Date of Birth',
                'rules'     => 'trim|sanitize'
            ),
            
            array(
                'field'     => 'favorite_destination',
                'label'     => 'Favorite Destination',
                'rules'     => 'trim|sanitize'
            ),
        );
    }
    
    public function update_profile_info($user_id)
    {
        $udata = $this->upload->data();
        $data = array(
            $this->_fields[1]     => $user_id,
            $this->_fields[2]     => $udata['file_name'] ,
            $this->_fields[3]     => $this->input->post('location'),
            $this->_fields[4]     => $this->input->post('favorite_destination'),
            $this->_fields[5]     => $this->input->post('about'),
            $this->_fields[6]     => $this->input->post('privacy'),
            $this->_fields[7]     => $this->input->post('display_name'),
            $this->_fields[8]     => $this->input->post('gender'),
            $this->_fields[9]     => date('Y-m-d', strtotime($this->input->post('date_of_birth'))),        
            $this->_fields[10]    => implode(',', $this->input->post('countries_to_visit')),
            $this->_fields[11]    => $this->input->post('travel_motto')
        );

        $this->db->where($this->_fields[1], $user_id);
        $record = $this->db->get($this->_table)->row();
        
        if(count($record) == 0)   // record doesn't exist
        {
            $this->db->insert($this->_table, $data);
        }
        
        else    // record already exists
        {
            if(strlen($data[$this->_fields[2]]) == 0 && strlen($record->avatar) > 0) // avatar already exists and user didn't upload a new one
            {
                $data[$this->_fields[2]] = $record->avatar;
            }
            
            $this->db->where($this->_fields[1], $user_id);
            $this->db->update($this->_table, $data);
        }
    }
}