<?php 

class usa_cities extends CI_Controller
{
    public function usa_index()
    {
      	$data['main']='usa_cities/usa_index.php';
      	$data['heading']='Cities of the USA';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('usa_cities/usa_index', $data);
    }
    





}