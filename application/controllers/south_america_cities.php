<?php 

class south_america_cities extends CI_Controller
{
    public function south_america_index()
    {
      	$data['main']='south_america_cities/south_america_index.php';
      	$data['heading']='Cities of South America';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('south_america_cities/south_america_index', $data);
    }
    





}