<?php 

class asia_public_holidays extends CI_Controller
{
    public function afghanistan()
    {
      	$data['main']='asia_public_holidays/afghanistan.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_public_holidays/afghanistan', $data);
    }
    public function bangladesh()
    {
      	$data['main']='asia_public_holidays/bangladesh.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_public_holidays/bangladesh', $data);
    }
    public function bhutan()
    {
      	$data['main']='asia_public_holidays/bhutan.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_public_holidays/bhutan', $data);
    }
    public function brunei()
    {
      	$data['main']='asia_public_holidays/brunei.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_public_holidays/brunei', $data);
    }
    public function burma()
    {
      	$data['main']='asia_public_holidays/burma.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_public_holidays/burma', $data);
    }
    public function cambodia()
    {
      	$data['main']='asia_public_holidays/cambodia.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_public_holidays/cabodia', $data);
    }
    public function china()
    {
      	$data['main']='asia_public_holidays/china.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_public_holidays/china', $data);
    }
    public function east_timor()
    {
      	$data['main']='asia_public_holidays/east_timor.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_public_holidays/east_timor', $data);
    }
    public function india()
    {
      	$data['main']='asia_public_holidays/india.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_public_holidays/india', $data);
    }
    public function indonesia()
    {
      	$data['main']='asia_public_holidays/indonesia.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_public_holidays/indonesia', $data);
    }
    public function iran()
    {
      	$data['main']='asia_public_holidays/iran.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_public_holidays/iran', $data);
    }
    public function iraq()
    {
      	$data['main']='asia_public_holidays/iran.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_public_holidays/iraq', $data);
    }
    public function israel()
    {
      	$data['main']='asia_public_holidays/israel.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_public_holidays/israel', $data);
    }
    public function jordan()
    {
      	$data['main']='asia_public_holidays/jordan.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_public_holidays/jordan', $data);
    }
    public function kazakhstan()
    {
      	$data['main']='asia_public_holidays/kazakhstan.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_public_holidays/kazakhstan', $data);
    }
    public function kuwait()
    {
      	$data['main']='asia_public_holidays/kuwait.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_public_holidays/kuwait', $data);
    }
    public function kyrgyzstan()
    {
      	$data['main']='asia_public_holidays/kyrgyzstan.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_public_holidays/kyrgyzstan', $data);
    }
    public function laos()
    {
      	$data['main']='asia_public_holidays/laos.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_public_holidays/laos', $data);
    }
    public function lebanon()
    {
      	$data['main']='asia_public_holidays/lebanon.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_public_holidays/lebanon', $data);
    }
    public function malaysia()
    {
      	$data['main']='asia_public_holidays/malaysia.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_public_holidays/malaysia', $data);
    }
    public function maldives()
    {
      	$data['main']='asia_public_holidays/maldives.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_public_holidays/maldives', $data);
    }
    public function mongolia()
    {
      	$data['main']='asia_public_holidays/mongolia.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_public_holidays/mongolia', $data);
    }




}