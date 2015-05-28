<?php 

class asia_entry extends CI_Controller
{
    public function afghanistan()
    {
      	$data['main']='asia_entry/afghanistan.php';
      	$data['heading']='Entry requirements';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/asia_entry/afghanistan', $data);
    }
    public function bangladesh()
    {
      	$data['main']='asia_entry/bangladesh.php';
      	$data['heading']='Entry requirements';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/asia_entry/bangladesh', $data);
    }
    public function bhutan()
    {
      	$data['main']='asia_entry/bhutan.php';
      	$data['heading']='Entry requirements';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/asia_entry/bhutan', $data);
    }
    public function brunei()
    {
      	$data['main']='asia_entry/brunei.php';
      	$data['heading']='Entry requirements';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/asia_entry/brunei', $data);
    }
    public function burma()
    {
      	$data['main']='asia_entry/burma.php';
      	$data['heading']='Entry requirements';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/asia_entry/burma', $data);
    }
    public function cambodia()
    {
      	$data['main']='asia_entry/cambodia.php';
      	$data['heading']='Entry requirements';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/asia_entry/cambodia', $data);
    }
    public function china()
    {
      	$data['main']='asia_entry/china.php';
      	$data['heading']='Entry requirements';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/asia_entry/china', $data);
    }
    public function east_timor()
    {
      	$data['main']='asia_entry/east_timor.php';
      	$data['heading']='Entry requirements';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/asia_entry/east_timor', $data);
    }
    public function india()
    {
      	$data['main']='asia_entry/india.php';
      	$data['heading']='Entry requirements';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/asia_entry/india', $data);
    }
    public function indonesia()
    {
      	$data['main']='asia_entry/indonesia.php';
      	$data['heading']='Entry requirements';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/asia_entry/indonesia', $data);
    }
    public function iran()
    {
      	$data['main']='asia_entry/iran.php';
      	$data['heading']='Entry requirements';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/asia_entry/iran', $data);
    }
    public function iraq()
    {
      	$data['main']='asia_entry/iraq.php';
      	$data['heading']='Entry requirements';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/asia_entry/iraq', $data);
    }
    public function israel()
    {
      	$data['main']='asia_entry/israel.php';
      	$data['heading']='Entry requirements';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/asia_entry/israel', $data);
    }
    public function japan()
    {
      	$data['main']='asia_entry/japan.php';
      	$data['heading']='Entry requirements';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/asia_entry/japan', $data);
    }
    public function jordan()
    {
      	$data['main']='asia_entry/japan.php';
      	$data['heading']='Entry requirements';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/asia_entry/japan', $data);
    }
    public function kazakhstan()
    {
      	$data['main']='asia_entry/kazakhstan.php';
      	$data['heading']='Entry requirements';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/asia_entry/kazakhstan', $data);
    }
    public function kuwait()
    {
      	$data['main']='asia_entry/kuwait.php';
      	$data['heading']='Entry requirements';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/asia_entry/kuwait', $data);
    }
    public function kyrgyzstan()
    {
      	$data['main']='asia_entry/kyrgyzstan.php';
      	$data['heading']='Entry requirements';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/asia_entry/kyrgyzstan', $data);
    }
    public function laos()
    {
      	$data['main']='asia_entry/laos.php';
      	$data['heading']='Entry requirements';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/asia_entry/laos', $data);
    }
    public function lebanon()
    {
      	$data['main']='asia_entry/lebanon.php';
      	$data['heading']='Entry requirements';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/asia_entry/lebanon', $data);
    }
    public function malaysia()
    {
      	$data['main']='asia_entry/malaysia.php';
      	$data['heading']='Entry requirements';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/asia_entry/malaysia', $data);
    }
    public function maldives()
    {
      	$data['main']='asia_entry/maldives.php';
      	$data['heading']='Entry requirements';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/asia_entry/maldives', $data);
    }
    public function mongolia()
    {
      	$data['main']='asia_entry/mongolia.php';
      	$data['heading']='Entry requirements';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/asia_entry/mongolia', $data);
    }









}


