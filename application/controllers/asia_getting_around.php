<?php 

class asia_getting_around extends CI_Controller
{
    public function afghanistan()
    {
      	$data['main']='asia_getting_around/afghanistan.php';
      	$data['heading']='Getting around';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_getting_around/afghanistan', $data);
    }
    public function bangladesh()
    {
      	$data['main']='asia_getting_around/bangladesh.php';
      	$data['heading']='Getting around';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_getting_around/bangladesh', $data);
    }
    public function bhutan()
    {
      	$data['main']='asia_getting_around/bhutan.php';
      	$data['heading']='Getting around';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_getting_around/bhutan', $data);
    }
    public function brunei()
    {
      	$data['main']='asia_getting_around/brunei.php';
      	$data['heading']='Getting around';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_getting_around/brunei', $data);
    }
    public function burma()
    {
      	$data['main']='asia_getting_around/burma.php';
      	$data['heading']='Getting around';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_getting_around/burma', $data);
    }
    public function cambodia()
    {
      	$data['main']='asia_getting_around/cambodia.php';
      	$data['heading']='Getting around';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_getting_around/cambodia', $data);
    }
    public function china()
    {
      	$data['main']='asia_getting_around/china.php';
      	$data['heading']='Getting around';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_getting_around/china', $data);
    }
    public function east_timor()
    {
      	$data['main']='asia_getting_around/east_timor.php';
      	$data['heading']='Getting around';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_getting_around/east_timor', $data);
    }
    public function india()
    {
      	$data['main']='asia_getting_around/india.php';
      	$data['heading']='Getting around';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_getting_around/india', $data);
    }
    public function indonesia()
    {
      	$data['main']='asia_getting_around/indonesia.php';
      	$data['heading']='Getting around';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_getting_around/indonesia', $data);
    }
    public function iran()
    {
      	$data['main']='asia_getting_around/iran.php';
      	$data['heading']='Getting around';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_getting_around/iran', $data);
    }
    public function iraq()
    {
      	$data['main']='asia_getting_around/iraq.php';
      	$data['heading']='Getting around';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_getting_around/iraq', $data);
    }
    public function israel()
    {
      	$data['main']='asia_getting_around/israel.php';
      	$data['heading']='Getting around';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_getting_around/israel', $data);
    }
    public function japan()
    {
      	$data['main']='asia_getting_around/japan.php';
      	$data['heading']='Getting around';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_getting_around/japan', $data);
    }
    public function jordan()
    {
      	$data['main']='asia_getting_around/jordan.php';
      	$data['heading']='Getting around';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_getting_around/jordan', $data);
    }
    public function kazakhstan()
    {
      	$data['main']='asia_getting_around/kazakhstan.php';
      	$data['heading']='Getting around';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_getting_around/kazakhstan', $data);
    }
    public function kuwait()
    {
      	$data['main']='asia_getting_around/kuwait.php';
      	$data['heading']='Getting around';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_getting_around/kuwait', $data);
    }
    public function kyrgyzstan()
    {
      	$data['main']='asia_getting_around/kyrgyzstan.php';
      	$data['heading']='Getting around';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_getting_around/kyrgyzstan', $data);
    }
    public function laos()
    {
      	$data['main']='asia_getting_around/laos.php';
      	$data['heading']='Getting around';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_getting_around/laos', $data);
    }
    public function lebanon()
    {
      	$data['main']='asia_getting_around/lebanon.php';
      	$data['heading']='Getting around';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_getting_around/lebanon', $data);
    }
    public function malaysia()
    {
      	$data['main']='asia_getting_around/malaysia.php';
      	$data['heading']='Getting around';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_getting_around/malaysia', $data);
    }
    public function maldives()
    {
      	$data['main']='asia_getting_around/maldives.php';
      	$data['heading']='Getting around';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_getting_around/maldives', $data);
    }
    public function mongolia()
    {
      	$data['main']='asia_getting_around/mongolia.php';
      	$data['heading']='Getting around';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_getting_around/mongolia', $data);
    }











}