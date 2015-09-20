<?php 

class russia_cities extends CI_Controller
{
    public function russia_index()
    {
      	$data['main']='russia_cities/russia_index.php';
      	$data['heading']='Cities of Russia';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_cities/russia_index', $data);
    }
    





}