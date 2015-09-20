<?php 

class europe_cities extends CI_Controller
{
    public function europe_index()
    {
      	$data['main']='europe_cities/europe_index.php';
      	$data['heading']='Cities of Europe';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('europe_cities/europe_index', $data);
    }
    





}