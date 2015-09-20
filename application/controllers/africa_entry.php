<?php 

class africa_entry extends CI_Controller
{
    public function algeria()
    {
      	$data['main']		= 'africa_entry/algeria.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/algeria', $data);
    }
    public function angola()
    {
      	$data['main']		= 'africa_entry/angola.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/angola', $data);
    }
    public function benin()
    {
      	$data['main']		= 'africa_entry/benin.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/benin', $data);
    }
    public function botswana()
    {
      	$data['main']       = 'africa_entry/botswana.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/botswana', $data);
    }
    public function burkino_faso()
    {
      	$data['main']       = 'africa_entry/burkino_faso.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/burkino_faso', $data);
    }
    public function burundi()
    {
      	$data['main']       = 'africa_entry/burundi.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/burundi', $data);
    }
    public function cameroon()
    {
      	$data['main']       = 'africa_entry/cameroon.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/cameroon', $data);
    }
    public function cape_verde()
    {
      	$data['main']       = 'africa_entry/cape_verde.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/cape_verde', $data);
    }
    public function car()
    {
      	$data['main']       = 'africa_entry/car.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/car', $data);
    }
    public function chad()
    {
      	$data['main']       = 'africa_entry/chad.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/chad', $data);
    }
    public function comoros()
    {
      	$data['main']       = 'africa_entry/comoros.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/comoros', $data);
    }
    public function congo()
    {
      	$data['main']       = 'africa_entry/congo.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/congo', $data);
    }
    public function cote()
    {
      	$data['main']       = 'africa_entry/cote.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/cote', $data);
    }
    public function drc()
    {
      	$data['main']       = 'africa_entry/drc.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/drc', $data);
    }
    public function djibouti()
    {
      	$data['main']       = 'africa_entry/djibouti.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/djibouti', $data);
    }
    public function egypt()
    {
      	$data['main']       = 'africa_entry/egypt.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/egypt', $data);
    }
    public function equatorial_guinea()
    {
      	$data['main']       = 'africa_entry/equatorial_guinea.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/equatorial_guinea', $data);
    }
    public function eritrea()
    {
      	$data['main']       = 'africa_entry/eritrea.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/eritrea', $data);
    }
    public function ethiopia()
    {
      	$data['main']       = 'africa_entry/ethiopia.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/ethiopia', $data);
    }
    public function gabon()
    {
      	$data['main']       = 'africa_entry/gabon.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/gabon', $data);
    }
    public function gambia()
    {
      	$data['main']       = 'africa_entry/gambia.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/gambia', $data);
    }
    public function ghana()
    {
      	$data['main']       = 'africa_entry/ghana.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/ghana', $data);
    }
    public function guinea()
    {
      	$data['main']       = 'africa_entry/guinea.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/guinea', $data);
    }
    public function guinea_bissau()
    {
      	$data['main']       = 'africa_entry/guinea_bissau.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/guinea_bissau', $data);
	}
    public function kenya()
    {
      	$data['main']       = 'africa_entry/kenya.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/kenya', $data);
    }
    public function lesotho()
    {
      	$data['main']       = 'africa_entry/lesotho.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/lesotho', $data);
    }
    public function liberia()
    {
      	$data['main']       = 'africa_entry/liberia.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/liberia', $data);
    }
    public function libya()
    {
      	$data['main']       = 'africa_entry/libya.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/libya', $data);
    }
    public function madagascar()
    {
      	$data['main']       = 'africa_entry/madagascar.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/madagascar', $data);
    }
    public function malawi()
    {
      	$data['main']       = 'africa_entry/malawi.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/malawi', $data);
    }
    public function mali()
    {
      	$data['main']       = 'africa_entry/mali.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/mali', $data);
    }
    public function mauritania()
    {
      	$data['main']       = 'africa_entry/mauritania.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/mauritania', $data);
    }
    public function mauritius()
    {
      	$data['main']       = 'africa_entry/mauritius.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/mauritius', $data);
    }
    public function morocco()
    {
      	$data['main']       = 'africa_entry/morocco.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/morocco', $data);
    }
    public function mozambique()
    {
      	$data['main']       = 'africa_entry/mozambique.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/mozambique', $data);
    }
    public function namibia()
    {
      	$data['main']       = 'africa_entry/namibia.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/namibia', $data);
    }
    public function niger()
    {
      	$data['main']       = 'africa_entry/niger.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/niger', $data);
    }
    public function nigeria()
    {
      	$data['main']       = 'africa_entry/nigeria.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/nigeria', $data);
    }
    public function rwanda()
    {
      	$data['main']       = 'africa_entry/rwanda.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/rwanda', $data);
    }
    public function sao_tome_and_principe()
    {
      	$data['main']       = 'africa_entry/sao_tome_and_principe.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/sao_tome_and_principe', $data);
    }
    public function senegal()
    {
      	$data['main']       = 'africa_entry/senegal.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/senegal', $data);
    }
    public function seychelles()
    {
      	$data['main']       = 'africa_entry/seychelles.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/seychelles', $data);
    }
    public function sierra_leone()
    {
      	$data['main']       = 'africa_entry/sierra_leone.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/sierra_leone', $data);
    }
    public function somalia()
    {
      	$data['main']       = 'africa_entry/somalia.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/somalia', $data);
    }
    public function south_africa()
    {
      	$data['main']       = 'africa_entry/south_africa.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/south_africa', $data);
    }
    public function south_sudan()
    {
      	$data['main']       = 'africa_entry/south_sudan.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/south_sudan', $data);
    }
    public function sudan()
    {
      	$data['main']       = 'africa_entry/sudan.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/sudan', $data);
    }
    public function swaziland()
    {
      	$data['main']       = 'africa_entry/swaziland.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/swaziland', $data);
    }
    public function tanzania()
    {
      	$data['main']       = 'africa_entry/tanzania.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/tanzania', $data);
    }
    public function togo()
    {
      	$data['main']       = 'africa_entry/togo.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/togo', $data);
    }
    public function tunisia()
    {
      	$data['main']       = 'africa_entry/tunisia.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/tunisia', $data);
    }
    public function uganda()
    {
      	$data['main']       = 'africa_entry/uganda.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/uganda', $data);
    }
    public function western_sahara()
    {
      	$data['main']       = 'africa_entry/western_sahara.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/western_sahara', $data);
    }
    public function zambia()
    {
      	$data['main']       = 'africa_entry/zambia.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/zambia', $data);
    }
    public function zanzibar()
    {
      	$data['main']       = 'africa_entry/zanzibar.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/zanzibar', $data);
    }
    public function zimbabwe()
    {
      	$data['main']       = 'africa_entry/zimbabwe.php';
      	$data['heading']    = 'Entry requirements';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['right_bar_entry'] = 'sidebar/right_bar_entry';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_entry/zimbabwe', $data);
    }














}