<?php 

class help extends CI_Controller
{
    public function index()
    {
    }    

    public function external_links()
    {
        $data['main']		= 'help/external_links.php';
        $data['heading'	]   = 'External Links';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']		= 'layouts/footer';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('help/external_links', $data);
    }
        public function profile_help()
    {
        $data['main']		= 'help/profile_help.php';
        $data['heading']	= 'Helpcenter: Profile';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']		= 'layouts/footer';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('help/profile_help', $data);
    }
        public function bookings_help()
    {
        $data['main']		= 'help/bookings_help.php';
        $data['heading']	= 'Helpcenter: Bookings';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']		= 'layouts/footer';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('help/bookings_help', $data);
    }
        public function video_help()
    {
        $data['main']		= 'help/video_help.php';
        $data['heading']	= 'Helpcenter: Video';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']		= 'layouts/footer';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('help/video_help', $data);
    }
        public function ratings_help()
    {
        $data['main']		= 'help/ratings_help.php';
        $data['heading']	= 'Helpcenter: Ratings';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']		= 'layouts/footer';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('help/ratings_help', $data);
    }

    public function link_to_us()
    {
        $data['main']		= 'help/nk_to_us.php';
        $data['heading']	= 'Link to us';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']		= 'layouts/footer';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('help/link_to_us', $data);
    }

}