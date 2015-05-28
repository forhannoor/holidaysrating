<?php 

class indonesia_cities extends CI_Controller
{
    public function indonesia_index()
    {
      	$data['main']='indonesia_cities/indonesia_index.php';
      	$data['heading']='Cities of Indonesia';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('indonesia_cities/indonesia_index', $data);
    }
    





}