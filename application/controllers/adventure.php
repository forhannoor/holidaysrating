<?php

class Adventure extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view(uri_string(), $data);
    }
}