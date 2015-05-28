<?php 

class north_america_cities extends CI_Controller
{
    public function north_america_index()
    {
      	$data['main']='north_america_cities/north_america_index.php';
      	$data['heading']='Cities of North America';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('north_america_cities/north_america_index', $data);
    }
    





}