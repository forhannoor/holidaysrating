<?php 

class africa_before_you_go extends CI_Controller
{
    public function algeria()
    {
      	$data['main']       = 'africa_before_you_go/algeria.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/algeria', $data);
    }
    public function angola()
    {
      	$data['main']       = 'africa_before_you_go/angola.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/angola', $data);
    }
    public function benin()
    {
      	$data['main']       = 'africa_before_you_go/benin.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/benin', $data);
    }
    public function botswana()
    {
      	$data['main']       = 'africa_before_you_go/botswana.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/botswana', $data);
    }
    public function burkino_faso()
    {
      	$data['main']       = 'africa_before_you_go/botswana.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/botswana', $data);
    }
    public function burundi()
    {
      	$data['main']       = 'africa_before_you_go/burundi.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/burundi', $data);
    }
    public function cameroon()
    {
      	$data['main']       = 'africa_before_you_go/cameroon.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/cameroon', $data);
    }
    public function cape_verde()
    {
      	$data['main']       = 'africa_before_you_go/cape_verde.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/cape_verde', $data);
    }
    public function car()
    {
      	$data['main']       = 'africa_before_you_go/car.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/car', $data);
    }
    public function chad()
    {
      	$data['main']       = 'africa_adventures/chad.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/chad', $data);
    }
    public function comoros()
    {
      	$data['main']       = 'africa_before_you_go/comoros.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/comoros', $data);
    }
    public function congo()
    {
      	$data['main']       = 'africa_before_you_go/congo.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/congo', $data);
    }
    public function cote()
    {
      	$data['main']       = 'africa_before_you_go/cote.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/cote', $data);
    }
    public function drc()
    {
      	$data['main']       = 'africa_before_you_go/drc.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/drc', $data);
    }
    public function djibouti()
    {
      	$data['main']       = 'africa_before_you_go/djibouti.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/djibouti', $data);
    }
    public function egypt()
    {
      	$data['main']       = 'africa_before_you_go/egypt.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/egypt', $data);
    }
    public function equatorial_guinea()
    {
      	$data['main']       = 'africa_before_you_go/equatorial_guinea.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/equatorial_guinea', $data);
    }
    public function eritrea()
    {
      	$data['main']       = 'africa_before_you_go/eritrea.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/eritrea', $data);
    }
    public function ethiopia()
    {
      	$data['main']       = 'africa_before_you_go/ethiopia.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/ethiopia', $data);
    }
    public function gabon()
    {
      	$data['main']       = 'africa_before_you_go/gabon.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/gabon', $data);
    }
    public function gambia()
    {
      	$data['main']       = 'africa_before_you_go/gambia.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/gambia', $data);
    }
    public function ghana()
    {
      	$data['main']       = 'africa_before_you_go/ghana.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/ghana', $data);
    }
    public function guinea()
    {
      	$data['main']       = 'africa_before_you_go/guinea.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/guinea', $data);
    }
    public function guinea_bissau()
    {
      	$data['main']       = 'africa_before_you_go/guinea_bissau.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/guinea_bissau', $data);
    }
    public function kenya()
    {
      	$data['main']       = 'africa_before_you_go/kenya.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/kenya', $data);
    }
    public function lesotho()
    {
      	$data['main']       = 'africa_before_you_go/lesotho.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/lesotho', $data);
    }
    public function liberia()
    {
      	$data['main']       = 'africa_before_you_go/liberia.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/liberia', $data);
    }
    public function libya()
    {
      	$data['main']       = 'africa_before_you_go/libya.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/libya', $data);
    }
    public function madagascar()
    {
      	$data['main']       = 'africa_before_you_go/madagascar.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/madagascar', $data);
    }
    public function malawi()
    {
      	$data['main']       = 'africa_before_you_go/malawi.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/malawi', $data);
    }

    public function mali()
    {
      	$data['main']       = 'africa_before_you_go/mali.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/mali', $data);
    }
    public function mauritania()
    {
      	$data['main']       = 'africa_before_you_go/mauritania.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/mauritania', $data);
    }
    public function mauritius()
    {
      	$data['main']       = 'africa_before_you_go/mauritius.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/mauritius', $data);
    }
    public function morocco()
    {
      	$data['main']       = 'africa_before_you_go/morocco.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/morocco', $data);
    }
    public function mozambique()
    {
      	$data['main']       = 'africa_before_you_go/mozambique.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/mozambique', $data);
    }
    public function namibia()
    {
      	$data['main']       = 'africa_before_you_go/namibia.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/namibia', $data);
    }
    public function niger()
    {
      	$data['main']       = 'africa_before_you_go/niger.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/niger', $data);
    }
    public function nigeria()
    {
      	$data['main']       = 'africa_before_you_go/nigeria.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/nigeria', $data);
    }
    public function rwanda()
    {
      	$data['main']       = 'africa_before_you_go/rwanda.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/rwanda', $data);
    }
    public function sao_tome_and_principe()
    {
      	$data['main']       = 'africa_before_you_go/sao_tome_and_principe.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/sao_tome_and_principe', $data);
    }
    public function senegal()
    {
      	$data['main']       = 'africa_before_you_go/senegal.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/senegal', $data);
    }
    public function seychelles()
    {
      	$data['main']       = 'africa_before_you_go/seychelles.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/seychelles', $data);
    }
    public function sierra_leone()
    {
      	$data['main']       = 'africa_before_you_go/sierra_leone.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/sierra_leone', $data);
    }
    public function somalia()
    {
      	$data['main']       = 'africa_before_you_go/somalia.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/somalia', $data);
    }
    public function south_africa()
    {
      	$data['main']       = 'africa_before_you_go/south_africa.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/south_africa', $data);
    }
    public function south_sudan()
    {
      	$data['main']       = 'africa_before_you_go/south_sudan.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/south_sudan', $data);
    }
    public function sudan()
    {
      	$data['main']       = 'africa_before_you_go/sudan.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/sudan', $data);
    }
    public function swaziland()
    {
      	$data['main']       = 'africa_before_you_go/swaziland.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/swaziland', $data);
    }
    public function tanzania()
    {
      	$data['main']       = 'africa_before_you_go/tanzania.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/tanzania', $data);
    }
    public function togo()
    {
      	$data['main']       = 'africa_before_you_go/togo.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/togo', $data);
    }
    public function tunisia()
    {
      	$data['main']       = 'africa_before_you_go/tunisia.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/tunisia', $data);
    }
    public function uganda()
    {
      	$data['main']       = 'africa_before_you_go/uganda.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/uganda', $data);
    }
    public function western_sahara()
    {
      	$data['main']       = 'africa_before_you_go/western_sahara.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/western_sahara', $data);
    }
    public function zambia()
    {
      	$data['main']       = 'africa_before_you_go/zambia.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/zambia', $data);
    }
    public function zanziber()
    {
      	$data['main']       = 'africa_before_you_go/zanzibar.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/zanzibar', $data);
    }
    public function zimbabwe()
    {
      	$data['main']       = 'africa_before_you_go/zimbabwe.php';
      	$data['heading']    = 'Before you go';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
        $data['right_bar_before']     = 'sidebar/right_bar_before';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_before_you_go/zimbabwe', $data);
    }








}