<?php 

class asia_before_you_go extends CI_Controller
{
    public function afghanistan()
    {
      	$data['main']='asia_before_you_go/afghanistan.php';
      	$data['heading']='Before you go';
      	$data['right_bar_before'] = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_before_you_go/afghanistan', $data);
    }
    public function bangladesh()
    {
      	$data['main']='asia_before_you_go/bangladesh.php';
      	$data['heading']='Before you go';
      	$data['right_bar_before'] = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_before_you_go/bangladesh', $data);
    }
    public function bhutan()
    {
      	$data['main']='asia_before_you_go/bhutan.php';
      	$data['heading']='Before you go';
      	$data['right_bar_before'] = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_before_you_go/bhutan', $data);
    }
    public function brunei()
    {
      	$data['main']='asia_before_you_go/bhutan.php';
      	$data['heading']='Before you go';
      	$data['right_bar_before'] = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_before_you_go/brunei', $data);
    }
    public function burma()
    {
      	$data['main']='asia_before_you_go/burma.php';
      	$data['heading']='Before you go';
      	$data['right_bar_before'] = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_before_you_go/burma', $data);
    }
    public function cambodia()
    {
      	$data['main']='asia_before_you_go/cambodia.php';
      	$data['heading']='Before you go';
      	$data['right_bar_before'] = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_before_you_go/cambodia', $data);
    }
    public function china()
    {
      	$data['main']='asia_before_you_go/china.php';
      	$data['heading']='Before you go';
      	$data['right_bar_before'] = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_before_you_go/china', $data);
    }
    public function east_timor()
    {
      	$data['main']='asia_before_you_go/east_timor.php';
      	$data['heading']='Before you go';
      	$data['right_bar_before'] = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_before_you_go/east_timor', $data);
    }
    public function india()
    {
      	$data['main']='asia_before_you_go/india.php';
      	$data['heading']='Before you go';
      	$data['right_bar_before'] = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_before_you_go/india', $data);
    }
    public function indonesia()
    {
      	$data['main']='asia_before_you_go/indonesia.php';
      	$data['heading']='Before you go';
      	$data['right_bar_before'] = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_before_you_go/indonesia', $data);
    }
    public function iran()
    {
      	$data['main']='asia_before_you_go/iran.php';
      	$data['heading']='Before you go';
      	$data['right_bar_before'] = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_before_you_go/iran', $data);
    }
    public function iraq()
    {
      	$data['main']='asia_before_you_go/iraq.php';
      	$data['heading']='Before you go';
      	$data['right_bar_before'] = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_before_you_go/iraq', $data);
    }
    public function israel()
    {
      	$data['main']='asia_before_you_go/israel.php';
      	$data['heading']='Before you go';
      	$data['right_bar_before'] = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_before_you_go/israel', $data);
    }
    public function japan()
    {
      	$data['main']='asia_before_you_go/japan.php';
      	$data['heading']='Before you go';
      	$data['right_bar_before'] = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_before_you_go/japan', $data);
    }
    public function jordan()
    {
      	$data['main']='asia_before_you_go/jordan.php';
      	$data['heading']='Before you go';
      	$data['right_bar_before'] = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_before_you_go/jordan', $data);
    }
    public function kazakhstan()
    {
      	$data['main']='asia_before_you_go/kazakhstan.php';
      	$data['heading']='Before you go';
      	$data['right_bar_before'] = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_before_you_go/kazakhstan', $data);
    }
    public function kuwait()
    {
      	$data['main']='asia_before_you_go/kuwait.php';
      	$data['heading']='Before you go';
      	$data['right_bar_before'] = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_before_you_go/kuwait', $data);
    }
    public function kyrgyzstan()
    {
      	$data['main']='asia_before_you_go/kyrgyzstan.php';
      	$data['heading']='Before you go';
      	$data['right_bar_before'] = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_before_you_go/kyrgyzstan', $data);
    }
    public function laos()
    {
      	$data['main']='asia_before_you_go/laos.php';
      	$data['heading']='Before you go';
      	$data['right_bar_before'] = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_before_you_go/laos', $data);
    }
    public function lebanon()
    {
      	$data['main']='asia_before_you_go/lebanon.php';
      	$data['heading']='Before you go';
      	$data['right_bar_before'] = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_before_you_go/lebanon', $data);
    }
    public function malaysia()
    {
      	$data['main']='asia_before_you_go/malaysia.php';
      	$data['heading']='Before you go';
      	$data['right_bar_before'] = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_before_you_go/malaysia', $data);
    }
    public function maldives()
    {
      	$data['main']='asia_before_you_go/maldives.php';
      	$data['heading']='Before you go';
      	$data['right_bar_before'] = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_before_you_go/maldives', $data);
    }
    public function mongolia()
    {
      	$data['main']='asia_before_you_go/mongolia.php';
      	$data['heading']='Before you go';
      	$data['right_bar_before'] = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_before_you_go/mongolia', $data);
    }








}