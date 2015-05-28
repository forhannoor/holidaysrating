<?php 

class central_america_cities extends CI_Controller
{
    public function central_america_index()
    {
      	$data['main']='central_america_cities/central_america_index.php';
      	$data['heading']='Cities of Central America';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('central_america_cities/central_america_index', $data);
    }
    





}