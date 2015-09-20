<?php 

class china_cities extends CI_Controller
{

       
     public function beijing()
    {
      	$data['main']='china_cities/beijing.php';
      	$data['heading']='Beijing';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('china_cities/beijing', $data);
    }
     public function guangzho()
    {
      	$data['main']='china_cities/guangzho.php';
      	$data['heading']='Guangzhou';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('china_cities/guangzho', $data);
    }
     public function quanzhou()
    {
      	$data['main']='china_cities/quanzhou.php';
      	$data['heading']='Quanzhou';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('china_cities/quanzhou', $data);
    }
     public function shanghai()
    {
      	$data['main']='china_cities/shanghai.php';
      	$data['heading']='Shanghai';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('china_cities/shanghai', $data);
    }
     public function shenzhen()
    {
      	$data['main']='china_cities/shenzhen.php';
      	$data['heading']='shenzhen';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('china_cities/shenzhen', $data);
    }
     public function yangjiang()
    {
      	$data['main']='china_cities/yangjiang.php';
      	$data['heading']='yangjiang';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('china_cities/yangjiang', $data);
    }
     public function zhaotong()
    {
      	$data['main']='china_cities/zhaotong.php';
      	$data['heading']='Zhaotong';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('china_cities/zhaotong', $data);
    }





}