<?php 

class asia_health extends CI_Controller
{
    public function afghanistan()
    {
      	$data['main']='asia_health/afghanistan.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_health/afghanistan', $data);
    }
    public function bangladesh()
    {
      	$data['main']='asia_health/bangladesh.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_health/bangladesh', $data);
    }
    public function bhutan()
    {
      	$data['main']='asia_health/bhutan.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_health/bhutan', $data);
    }
    public function brunei()
    {
      	$data['main']='asia_health/brunei.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_health/brunei', $data);
    }
    public function burma()
    {
      	$data['main']='asia_health/burma.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_health/burma', $data);
    }
    public function cambodia()
    {
      	$data['main']='asia_health/cambodia.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_health/cambodia', $data);
    }
    public function china()
    {
      	$data['main']='asia_health/china.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_health/china', $data);
    }
    public function east_timor()
    {
      	$data['main']='asia_health/east_timor.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_health/east_timor', $data);
    }
    public function india()
    {
      	$data['main']='asia_health/india.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_health/india', $data);
    }
    public function indonesia()
    {
      	$data['main']='asia_health/indonesia.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_health/indonesia', $data);
    }
    public function iran()
    {
      	$data['main']='asia_health/iran.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_health/iran', $data);
    }
    public function iraq()
    {
      	$data['main']='asia_health/iraq.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_health/iraq', $data);
    }
    public function israel()
    {
      	$data['main']='asia_health/israel.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_health/israel', $data);
    }
    public function japan()
    {
      	$data['main']='asia_health/japan.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_health/japan', $data);
    }
    public function jordan()
    {
      	$data['main']='asia_health/jordan.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_health/jordan', $data);
    }
    public function kazakhstan()
    {
      	$data['main']='asia_health/kazakhstan.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_health/kazakhstan', $data);
    }
    public function kuwait()
    {
      	$data['main']='asia_health/kuwait.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_health/kuwait', $data);
    }
    public function kyrgyzstan()
    {
      	$data['main']='asia_health/kyrgyzstan.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_health/kyrgyzstan', $data);
    }
    public function laos()
    {
      	$data['main']='asia_health/laos.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_health/laos', $data);
    }
    public function lebanon()
    {
      	$data['main']='asia_health/lebanon.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_health/lebanon', $data);
    }
    public function malaysia()
    {
      	$data['main']='asia_health/malaysia.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_health/malaysia', $data);
    }
    public function maldives()
    {
      	$data['main']='asia_health/maldives.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_health/maldives', $data);
    }
    public function mongolia()
    {
      	$data['main']='asia_health/mongolia.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_health/mongolia', $data);
    }








}