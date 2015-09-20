<?php 

class oceania_cities extends CI_Controller
{
    public function oceania_index()
    {
      	$data['main']='oceania_cities/oceania_index.php';
      	$data['heading']='Cities of Oceania';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('oceania_cities/oceania_index', $data);
    }
    





}