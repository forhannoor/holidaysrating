<?php 

class caribbean_cities extends CI_Controller
{
    public function caribbean_index()
    {
      	$data['main']='caribbean_cities/caribbean_index.php';
      	$data['heading']='Cities of Caribbean';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('caribbean_cities/caribbean_index', $data);
    }
    





}