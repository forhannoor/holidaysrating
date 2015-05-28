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
            9   => 'gender',
            10  => 'date_of_birth',
            11  => 'countries_to_visit',
            12  => 'travel_motto'
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
            'uid'                   => $user_id,
            'avatar'                => $udata['file_name'] ,
            'location'              => $this->input->post('location'),
            'display_name'          => $this->input->post('display_name'),
            'favorite_destination'  => $this->input->post('favorite_destination'),
            'about'                 => $this->input->post('about'),
            'privacy'               => $this->input->post('privacy'),
            'name'                  => $this->input->post('name'),
            'gender'                => $this->input->post('gender'),
            'date_of_birth'			=> date('Y-m-d', strtotime($this->input->post('date_of_birth'))),        
            'countries_to_visit'    => implode(',', $this->input->post('countries_to_visit')),
            'travel_motto'          => $this->input->post('travel_motto')
        );

        $this->db->where('uid', $user_id);
        $record = $this->db->get('users_personal')->row();
        
        if(count($record) == 0)   // record doesn't exist
        {
            $this->db->insert('users_personal', $data);
        }
        
        else    // record already exists
        {
            if(strlen($data['avatar']) == 0 && strlen($record->avatar) > 0) // avatar already exists and user didn't upload a new one
            {
                $data['avatar'] = $record->avatar;
            }
            
            $this->db->where('uid', $user_id);
            $this->db->update('users_personal', $data);
        }
    }
}