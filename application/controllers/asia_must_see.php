<?php 

class asia_must_see extends CI_Controller
{
    public function afghanistan()
    {
      	$data['main']='asia_must_see/afghanistan.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_must_see/afghanistan', $data);
    }
    public function bangladesh()
    {
      	$data['main']='asia_must_see/bangladesh.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_must_see/bangladesh', $data);
    }
    public function bhutan()
    {
      	$data['main']='asia_must_see/bhutan.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_must_see/bhutan', $data);
    }
    public function brunei()
    {
      	$data['main']='asia_must_see/brunei.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_must_see/brunei', $data);
    }
    public function burma()
    {
      	$data['main']='asia_must_see/burma.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_must_see/burma', $data);
    }
    public function cambodia()
    {
      	$data['main']='asia_must_see/cambodia.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_must_see/cambodia', $data);
    }
    public function china()
    {
      	$data['main']='asia_must_see/china.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_must_see/china', $data);
    }
    public function east_timor()
    {
      	$data['main']='asia_must_see/east_timor.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_must_see/east_timor', $data);
    }
    public function india()
    {
      	$data['main']='asia_must_see/india.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_must_see/india', $data);
    }
    public function indonesia()
    {
      	$data['main']='asia_must_see/indonesia.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_must_see/indonesia', $data);
    }
    public function iran()
    {
      	$data['main']='asia_must_see/iran.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_must_see/iran', $data);
    }
    public function iraq()
    {
      	$data['main']='asia_must_see/iraq.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_must_see/iraq', $data);
    }
    public function israel()
    {
      	$data['main']='asia_must_see/israel.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_must_see/israel', $data);
    }
    public function japan()
    {
      	$data['main']='asia_must_see/japan.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_must_see/japan', $data);
    }
    public function jordan()
    {
      	$data['main']='asia_must_see/jordan.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_must_see/jordan', $data);
    }
    public function kazakhstan()
    {
      	$data['main']='asia_must_see/kazakhstan.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_must_see/kazakhstan', $data);
    }
    public function kuwait()
    {
      	$data['main']='asia_must_see/kuwait.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_must_see/kuwait', $data);
    }
    public function kyrgyzstan()
    {
      	$data['main']='asia_must_see/kyrgyzstan.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_must_see/kyrgyzstan', $data);
    }
    public function laos()
    {
      	$data['main']='asia_must_see/laos.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_must_see/laos', $data);
    }
    public function lebanon()
    {
      	$data['main']='asia_must_see/lebanon.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_must_see/lebanon', $data);
    }
    public function malaysia()
    {
      	$data['main']='asia_must_see/malaysia.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_must_see/malaysia', $data);
    }
    public function maldives()
    {
      	$data['main']='asia_must_see/maldives.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_must_see/maldives', $data);
    }
    public function mongolia()
    {
      	$data['main']='asia_must_see/mongolia.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_must_see/mongolia', $data);
    }












}