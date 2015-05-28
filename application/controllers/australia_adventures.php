<?php 

class australia_adventures extends CI_Controller
     
{
     public function australia_index()
    {
      	$data['main']='australia_adventures/australia_index.php';
      	$data['heading']='Adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('template_view', $data);
    }



}