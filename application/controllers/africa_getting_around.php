<?php 

class africa_getting_around extends CI_Controller
{
    public function algeria()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_getting_around/algeria', $data);
    }
    public function angola()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_getting_around/angola', $data);
    }
    public function benin()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_getting_around/benin', $data);
    }
    public function botswana()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_getting_around/botswana', $data);
    }
    public function burkino_faso()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_getting_around/burkino_faso', $data);
    }
    public function burundi()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_getting_around/burundi', $data);
    }
    public function cameroon()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_getting_around/cameroon', $data);
    }
    public function cape_verde()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_getting_around/cape_verde', $data);
    }
    public function car()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_getting_around/car', $data);
    }
    public function chad()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_getting_around/chad', $data);
    }
    public function comoros()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_getting_around/comoros', $data);
    }
    public function congo()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_getting_around/congo', $data);
    }
    public function cote()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_getting_around/cote', $data);
    }
    public function drc()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_getting_around/drc', $data);
    }
    public function djibouti()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_getting_around/djibouti', $data);
    }
    public function egypt()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_getting_around/egypt', $data);
    }
    public function equatorial_guinea()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_getting_around/equatorial_guinea', $data);
    }
    public function eritrea()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_getting_around/eritrea', $data);
    }
    public function ethiopia()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_getting_around/ethiopia', $data);
    }
    public function gabon()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_getting_around/gabon', $data);
    }
    public function gambia()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_getting_around/gambia', $data);
    }
    public function ghana()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_getting_around/ghana', $data);
    }
    public function guinea()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/guinea', $data);
    }
    public function guinea_bissau()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/guinea_bissau', $data);
    }
    public function kenya()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/kenya', $data);
    }
    public function lesotho()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/lesotho', $data);
    }
    public function liberia()
    {
      	$data['main']='africa_getting_around/liberia.php';
      	$data['heading']='Getting around';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/liberia', $data);
    }
    public function libya()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/libya', $data);
    }
    public function madagascar()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/madagascar', $data);
    }
    public function malawi()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/malawi', $data);
    }
    public function mali()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/mali', $data);
    }
    public function mauritania()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/mauritania', $data);
    }
    public function mauritius()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/mauritius', $data);
    }
    public function morocco()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/morocco', $data);
    }
    public function mozambique()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/mozambique', $data);
    }
    public function namibia()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/namibia', $data);
    }
    public function niger()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/niger', $data);
    }
    public function nigeria()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/nigeria', $data);
    }

    public function rwanda()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/rwanda', $data);
    }
    public function sao_tome_and_principe()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/sao_tome_and_principe', $data);
    }
    public function senegal()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/senegal', $data);
    }
    public function seychelles()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/seychelles', $data);
    }
    public function sierra_leone()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/sierra_leone', $data);
    }
    public function somalia()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/somalia', $data);
    }
    public function south_africa()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/south_africa', $data);
    }
    public function south_sudan()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/south_sudan', $data);
    }
    public function sudan()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/sudan', $data);
    }
    public function swaziland()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/swaziland', $data);
    }
    public function tanzania()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/tanzania', $data);
    }
    public function togo()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/togo', $data);
    }
    public function tunisia()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/tunisia', $data);
    }
    public function uganda()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/uganda', $data);
    }
    public function western_sahara()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/western_sahara', $data);
    }
    public function zambia()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/zambia', $data);
    }
    public function zanzibar()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/zanzibar', $data);
    }
    public function zimbabwe()
    {
      	$data['heading']    = 'Getting around';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_around'] = 'sidebar/right_bar_around';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_getting_around/zimbabwe', $data);
    }









}