<?php 

class asia_adventures extends CI_Controller
{
    public function afghanistan()
    {
      	$data['main']='asia_adventures/afghanistan.php';
      	$data['heading']='Adventures';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_adventures/afghanistan', $data);
    }
    public function bangladesh()
    {
      	$data['main']='asia_adventures/bangladesh.php';
      	$data['heading']='Adventures';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_adventures/bangladesh', $data);
    }
    public function bhutan()
    {
      	$data['main']='asia_adventures/bhutan.php';
      	$data['heading']='Adventures';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_adventures/bhutan', $data);
    }
    public function brunei()
    {
      	$data['main']='asia_adventures/brunei.php';
      	$data['heading']='Adventures';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_adventures/brunei', $data);
    }
    public function burma()
    {
      	$data['main']='asia_adventures/burma.php';
      	$data['heading']='Adventures';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_adventures/burma', $data);
    }
    public function cambodia()
    {
      	$data['main']='asia_adventures/cambodia.php';
      	$data['heading']='Adventures';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_adventures/cambodia', $data);
    }
    public function china()
    {
      	$data['main']='asia_adventures/china.php';
      	$data['heading']='Adventures';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_adventures/china', $data);
    }
    public function east_timor()
    {
      	$data['main']='asia_adventures/east_timor.php';
      	$data['heading']='Adventures';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_adventures/east_timor', $data);
    }
    public function india()
    {
      	$data['main']='asia_adventures/india.php';
      	$data['heading']='Adventures';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_adventures/india', $data);
    }
    public function indonesia()
    {
      	$data['main']='asia_adventures/indonesia.php';
      	$data['heading']='Adventures';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_adventures/indonesia', $data);
    }
    public function iran()
    {
      	$data['main']='asia_adventures/iran.php';
      	$data['heading']='Adventures';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_adventures/iran', $data);
    }
    public function iraq()
    {
      	$data['main']='asia_adventures/iraq.php';
      	$data['heading']='Adventures';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_adventures/iraq', $data);
    }
    public function israel()
    {
      	$data['main']='asia_adventures/israel.php';
      	$data['heading']='Adventures';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_adventures/israel', $data);
    }
    public function japan()
    {
      	$data['main']='asia_adventures/japan.php';
      	$data['heading']='Adventures';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_adventures/japan', $data);
    }
    public function jordan()
    {
      	$data['main']='asia_adventures/jordan.php';
      	$data['heading']='Adventures';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_adventures/jordan', $data);
    }
    public function kazakhstan()
    {
      	$data['main']='asia_adventures/kazakhstan.php';
      	$data['heading']='Adventures';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_adventures/kazakhstan', $data);
    }
    public function kuwait()
    {
      	$data['main']='asia_adventures/kuwait.php';
      	$data['heading']='Adventures';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_adventures/kuwait', $data);
    }
    public function kyrgyzstan()
    {
      	$data['main']='asia_adventures/kyrgyzstan.php';
      	$data['heading']='Adventures';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_adventures/kyrgyzstan', $data);
    }
    public function laos()
    {
      	$data['main']='asia_adventures/laos.php';
      	$data['heading']='Adventures';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_adventures/laos', $data);
    }
    public function lebanon()
    {
      	$data['main']='asia_adventures/lebanon.php';
      	$data['heading']='Adventures';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_adventures/lebanon', $data);
    }
    public function malaysia()
    {
      	$data['main']='asia_adventures/malaysia.php';
      	$data['heading']='Adventures';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_adventures/malaysia', $data);
    }
    public function maldives()
    {
      	$data['main']='asia_adventures/maldives.php';
      	$data['heading']='Adventures';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_adventures/maldives', $data);
    }
    public function mongolia()
    {
      	$data['main']='asia_adventures/mongolia.php';
      	$data['heading']='Adventures';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_adventures/mongolia', $data);
    }










}