<?php 

class asia_local_food extends CI_Controller
{
    public function afghanistan()
    {
      	$data['main']='asia_local_food/afghanistan.php';
      	$data['heading']='Local Food';
      	$data['right_bar_food'] = 'sidebar/right_bar_food';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_local_food/afghanistan', $data);
    }
    public function bangladesh()
    {
      	$data['main']='asia_local_food/bangladesh.php';
      	$data['heading']='Local Food';
      	$data['right_bar_food'] = 'sidebar/right_bar_food';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_local_food/bangladesh', $data);
    }
    public function bhutan()
    {
      	$data['main']='asia_local_food/bhutan.php';
      	$data['heading']='Local Food';
      	$data['right_bar_food'] = 'sidebar/right_bar_food';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_local_food/bhutan', $data);
    }
    public function brunei()
    {
      	$data['main']='asia_local_food/brunei.php';
      	$data['heading']='Local Food';
      	$data['right_bar_food'] = 'sidebar/right_bar_food';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_local_food/brunei', $data);
    }
    public function burma()
    {
      	$data['main']='asia_local_food/burma.php';
      	$data['heading']='Local Food';
      	$data['right_bar_food'] = 'sidebar/right_bar_food';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_local_food/burma', $data);
    }
    public function cambodia()
    {
      	$data['main']='asia_local_food/cambodia.php';
      	$data['heading']='Local Food';
      	$data['right_bar_food'] = 'sidebar/right_bar_food';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_local_food/cambodia', $data);
    }
    public function china()
    {
      	$data['main']='asia_local_food/china.php';
      	$data['heading']='Local Food';
      	$data['right_bar_food'] = 'sidebar/right_bar_food';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_local_food/china', $data);
    }
    public function east_timor()
    {
      	$data['main']='asia_local_food/east_timor.php';
      	$data['heading']='Local Food';
      	$data['right_bar_food'] = 'sidebar/right_bar_food';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_local_food/east_timor', $data);
    }
    public function india()
    {
      	$data['main']='asia_local_food/india.php';
      	$data['heading']='Local Food';
      	$data['right_bar_food'] = 'sidebar/right_bar_food';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_local_food/india', $data);
    }
    public function indonesia()
    {
      	$data['main']='asia_local_food/indonesia.php';
      	$data['heading']='Local Food';
      	$data['right_bar_food'] = 'sidebar/right_bar_food';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_local_food/indonesia', $data);
    }
    public function iran()
    {
      	$data['main']='asia_local_food/iran.php';
      	$data['heading']='Local Food';
      	$data['right_bar_food'] = 'sidebar/right_bar_food';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_local_food/iran', $data);
    }
    public function iraq()
    {
      	$data['main']='asia_local_food/iraq.php';
      	$data['heading']='Local Food';
      	$data['right_bar_food'] = 'sidebar/right_bar_food';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_local_food/iraq', $data);
    }
    public function israel()
    {
      	$data['main']='asia_local_food/israel.php';
      	$data['heading']='Local Food';
      	$data['right_bar_food'] = 'sidebar/right_bar_food';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_local_food/israel', $data);
    }
    public function japan()
    {
      	$data['main']='asia_local_food/japan.php';
      	$data['heading']='Local Food';
      	$data['right_bar_food'] = 'sidebar/right_bar_food';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_local_food/japan', $data);
    }
    public function jordan()
    {
      	$data['main']='asia_local_food/jordan.php';
      	$data['heading']='Local Food';
      	$data['right_bar_food'] = 'sidebar/right_bar_food';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_local_food/jordan', $data);
    }
    public function kazakhstan()
    {
      	$data['main']='asia_local_food/kazakhstan.php';
      	$data['heading']='Local Food';
      	$data['right_bar_food'] = 'sidebar/right_bar_food';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_local_food/kazakhstan', $data);
    }
    public function kuwait()
    {
      	$data['main']='asia_local_food/kuwait.php';
      	$data['heading']='Local Food';
      	$data['right_bar_food'] = 'sidebar/right_bar_food';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_local_food/kuwait', $data);
    }
    public function kyrgyzstan()
    {
      	$data['main']='asia_local_food/kyrgyzstan.php';
      	$data['heading']='Local Food';
      	$data['right_bar_food'] = 'sidebar/right_bar_food';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_local_food/kyrgyzstan', $data);
    }
    public function laos()
    {
      	$data['main']='asia_local_food/laos.php';
      	$data['heading']='Local Food';
      	$data['right_bar_food'] = 'sidebar/right_bar_food';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_local_food/laos', $data);
    }
    public function lebanon()
    {
      	$data['main']='asia_local_food/lebanon.php';
      	$data['heading']='Local Food';
      	$data['right_bar_food'] = 'sidebar/right_bar_food';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_local_food/lebanon', $data);
    }
    public function malaysia()
    {
      	$data['main']='asia_local_food/malaysia.php';
      	$data['heading']='Local Food';
      	$data['right_bar_food'] = 'sidebar/right_bar_food';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_local_food/malaysia', $data);
    }
    public function maldives()
    {
      	$data['main']='asia_local_food/maldives.php';
      	$data['heading']='Local Food';
      	$data['right_bar_food'] = 'sidebar/right_bar_food';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_local_food/maldives', $data);
    }
    public function mongolia()
    {
      	$data['main']='asia_local_food/mongolia.php';
      	$data['heading']='Local Food';
      	$data['right_bar_food'] = 'sidebar/right_bar_food';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_local_food/mongolia', $data);
    }








}