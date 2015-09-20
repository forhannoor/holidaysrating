<?php 

class africa_adventures extends CI_Controller
{
    public function algeria()
    {
      	$data['main']       = 'africa_adventures/algeria.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/algeria', $data);
    }
    public function angola()
    {
      	$data['main']       = 'africa_adventures/angola.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/angola', $data);
    }
    public function benin()
    {
      	$data['main']       = 'africa_adventures/benin.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/benin', $data);
    }
    public function botswana()
    {
      	$data['main']       = 'africa_adventures/botswana.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/botswana', $data);
    }
    public function burkino_faso()
    {
      	$data['main']       = 'africa_adventures/burkino_faso.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/burkino_faso', $data);
    }
    public function burundi()
    {
      	$data['main']       = 'africa_adventures/burundi.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/burundi', $data);
    }
    public function cameroon()
    {
      	$data['main']       = 'africa_adventures/cameroon.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/cameroon', $data);
    }
    public function cape_verde()
    {
      	$data['main']       = 'africa_adventures/cape_verde.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/cape_verde', $data);
    }
    public function car()
    {
      	$data['main']       = 'africa_adventures/car.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/car', $data);
    }
    public function chad()
    {    
      	$data['main']       = 'africa_adventures/chad.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/chad', $data);
    }
    public function comoros()
    {
      	$data['main']       = 'africa_adventures/comoros.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/comoros', $data);
    }
    public function congo()
    {
      	$data['main']       = 'africa_adventures/congo.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/congo', $data);
    }
    public function cote()
    {
      	$data['main']       = 'africa_adventures/cote.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/cote', $data);
    }
    public function drc()
    {
      	$data['main']       = 'africa_adventures/drc.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/drc', $data);
    }
    public function djibouti()
    {
      	$data['main']       = 'africa_adventures/djibouti.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/djibouti', $data);
    }
    public function egypt()
    {
      	$data['main']       = 'africa_adventures/egypt.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/egypt', $data);
    }
    public function equatorial_guinea()
    {
      	$data['main']       = 'africa_adventures/equatorial_guinea.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/equatorial_guinea', $data);
    }
    public function eritrea()
    {
      	$data['main']       = 'africa_adventures/eritrea.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/eritrea', $data);
    }
    public function ethiopia()
    {
      	$data['main']       = 'africa_adventures/ethiopia.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/ethiopia', $data);
    }
    public function gabon()
    {
      	$data['main']       = 'africa_adventures/gabon.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/gabon', $data);
    }
    public function gambia()
    {
      	$data['main']       = 'africa_adventures/gambia.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/gambia', $data);
    }
    public function ghana()
    {
      	$data['main']       = 'africa_adventures/ghana.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/ghana', $data);
    }
    public function guinea()
    {
      	$data['main']       = 'africa_adventures/guinea.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/guinea', $data);
    }
    public function guinea_bissau()
    {
      	$data['main']       = 'africa_adventures/guinea_bissau.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/guinea_bissau', $data);
    }
    public function kenya()
    {
      	$data['main']       = 'africa_adventures/kenya.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/kenya', $data);
    }
    public function lesotho()
    {
      	$data['main']       = 'africa_adventures/lesotho.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/lesotho', $data);
    }
    public function liberia()
    {
      	$data['main']       = 'africa_adventures/liberia.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/liberia', $data);
    }
    public function libya()
    {
      	$data['main']       = 'africa_adventures/libya.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/libya', $data);
    }
    public function madagascar()
    {   
      	$data['main']       = 'africa_adventures/madagascar.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/madagascar', $data);
    }
    public function malawi()
    {
      	$data['main']       = 'africa_adventures/malawi.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/malawi', $data);
    }
    public function mali()
    {
      	$data['main']       = 'africa_adventures/mali.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/mali', $data);
    }
    public function mauritania()
    {
      	$data['main']       = 'africa_adventures/mauritania.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/mauritania', $data);
    }
    public function mauritius()
    {
      	$data['main']       = 'africa_adventures/mauritius.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/mauritius', $data);
    }
    public function morocco()
    {
      	$data['main']       = 'africa_adventures/morocco.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/morocco', $data);
    }
    public function mozambique()
    {
      	$data['main']       = 'africa_adventures/mozambique.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/mozambique', $data);
    }
    public function namibia()
    {
      	$data['main']       = 'africa_adventures/namibia.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/namibia', $data);
    }
    public function niger()
    {
      	$data['main']       = 'africa_adventures/niger.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/niger', $data);
    }
    public function nigeria()
    {
      	$data['main']       = 'africa_adventures/nigeria.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/nigeria', $data);
    }
    public function rwanda()
    {
      	$data['main']       = 'africa_adventures/rwanda.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/rwanda', $data);
    }
    public function sao_tome_and_principe()
    {
      	$data['main']       = 'africa_adventures/sao_tome_and_principe.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/sao_tome_and_principe', $data);
    }
    public function senegal()
    {
      	$data['main']       = 'africa_adventures/senegal.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/senegal', $data);
    }
    public function seychelles()
    {
      	$data['main']       = 'africa_adventures/seychelles.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/seychelles', $data);
    }
    public function sierra_leone()
    {
      	$data['main']       = 'africa_adventures/sierra_leone.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/sierral_leone', $data);
    }
    public function somalia()
    {
      	$data['main']       = 'africa_adventures/somalia.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/somalia', $data);
    }
    public function south_africa()
    {
      	$data['main']       = 'africa_adventures/south_africa.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/south_africa', $data);
    }
    public function south_sudan()
    {
      	$data['main']       = 'africa_adventures/south_sudan.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/south_sudan', $data);
    }
    public function sudan()
    {
      	$data['main']       = 'africa_adventures/sudan.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/sudan', $data);
    }
    public function swaziland()
    {
      	$data['main']       = 'africa_adventures/swaziland.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/swaziland', $data);
    }
    public function tanzania()
    {
      	$data['main']       = 'africa_adventures/tanzania.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/tanzania', $data);
    }
    public function togo()
    {
      	$data['main']       = 'africa_adventures/togo.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/togo', $data);
    }
    public function tunisia()
    {
      	$data['main']='africa_adventures/tunisia.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/tunisia', $data);
    }
    public function uganda()
    {
      	$data['main']       = 'africa_adventures/uganda.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/uganda', $data);
    }
    public function western_sahara()
    {
      	$data['main']       = 'africa_adventures/western_sahara.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/western_sahara', $data);
    }
    public function zambia()
    {
      	$data['main']       = 'africa_adventures/zambia.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/zambia', $data);
    }
    public function zanzibar()
    {
      	$data['main']       = 'africa_adventures/zanzibar.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/zanzibar', $data);
    }
    public function zimbabwe()
    {
      	$data['main']       = 'africa_adventures/zimbabwe.php';
      	$data['heading']    = 'Adventures';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['sidebar_adventures'] = 'sidebar/sidebar_adventures';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_adventures/zimbabwe', $data);
    }








}