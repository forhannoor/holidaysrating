<?php 

class news extends CI_Controller
{
    public function index()
    {
    }    

    public function news_index()
    {
      	$data['main']		= 'news/news_index.php';
      	$data['heading']	= 'Travel News';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']		= 'layouts/footer';
        $data['right_bar_news'] = 'sidebar/right_bar_news';              	
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('news/news_index', $data);
    }
    public function new_website()
    {
      	$data['main']		= 'news/new_website.php';
      	$data['heading']	= 'New website';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']		= 'layouts/footer';
        $data['right_bar_news'] = 'sidebar/right_bar_news';              	
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('news/new_website', $data);
    }
    public function travel_alerts()
    {
      	$data['main']		= 'news/travel_alerts.php';
      	$data['heading']	= 'Travel Alerts';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']		= 'layouts/footer';
        $data['right_bar_news'] = 'sidebar/right_bar_news';              	
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('news/travel_alerts', $data);
    }
    public function snow_in_cairo()
    {
      	$data['main']		= 'news/snow_in_cairo.php';
      	$data['heading']	= 'Snow in Cairo';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']		= 'layouts/footer';
        $data['right_bar_news'] = 'sidebar/right_bar_news';              	
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('news/snow_in_cairo', $data);
    }






}