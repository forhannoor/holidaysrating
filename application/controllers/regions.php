<?php 

class regions extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function australia()
    {    	
    	$data['heading']	= 'Australia';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';

    	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));
    	
    	$this->load->view('regions/australia', $data);
    }
    
    public function africa()
    {	
    	$data['heading']    = 'Africa';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';

    	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));
    	
    	$this->load->view('regions/africa', $data);
    }

    public function antarctica()
    {
    	$data['heading']    = 'Antarctica';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';

    	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));
    	
    	$this->load->view('regions/antarctica', $data);
    }
    
    public function asia()
    {
    	$data['heading']    = 'Asia';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        
    	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));
    	
        $this->load->view('regions/asia', $data);
    }
    
    public function caribbean()
    {
    	$data['heading']    = 'Caribbean';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';

    	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));
    	
    	$this->load->view('regions/caribbean', $data);
    }
    
    public function central_america()
    {
    	$data['heading']    = 'Central America';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';

    	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));
    	
    	$this->load->view('regions/central_america', $data);
    }
    
    public function europe()
    {
    	$data['heading']    = 'Europe';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';

    	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));
    	
    	$this->load->view('regions/europe', $data);
    }
    
    public function indonesia()
    {
    	$data['heading']    = 'Indonesia';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';

    	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));
    	
    	$this->load->view('regions/indonesia', $data);
    }
    
    public function middle_east()
    {
    	$data['heading']    = 'Middle East';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';

    	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));
    	
    	$this->load->view('regions/middle_east', $data);
    }
    
    public function north_america()
    {
    	$data['heading']    = 'North America';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';

    	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));
    	
    	$this->load->view('regions/north_america', $data);
    }
    
    public function oceania()
    {
    	$data['heading']    = 'Oceania';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';

    	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));
    	
    	$this->load->view('regions/oceania', $data);
    }
    
    public function russia()
    {
    	$data['heading']    = 'Russia';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';

    	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));
    	
    	$this->load->view('regions/russia', $data);
    }
    
    public function south_america()
    {
    	$data['heading']    = 'South America';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';

    	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));
    	
    	$this->load->view('regions/south_america', $data);
    }
    
    public function usa()
    {
    	$data['heading']    = 'United States of America';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';

    	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));
    	
    	$this->load->view('regions/usa', $data);
    }
    
    
    
    
    
    
}



