<?php 

class australia_cities extends CI_Controller
{
    public function australia_index()
    {
      	$data['main']='australia_cities/australia_index.php';
      	$data['heading']='Cities of Australia';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('australia_cities/australia_index', $data);
    }
    





}