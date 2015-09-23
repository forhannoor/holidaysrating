<?php 

class topmenu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->output->nocache();
        $this->load->model('Video_model');
    }
    
    public function worldmap()
    {
    	$data['last_line']      = 'layouts/last_line';
		$data['heading']		= 'Worldmap';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('topmenu/worldmap', $data);
    }

    public function favorites()
    {
        	$data['header']         = 'layouts/header';
       	 	$data['last_line']      = 'layouts/last_line';
        	$data['sidebar']        = 'layouts/sidebar';
			$data['heading']		= 'Favorites';
	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
        
        $this->load->view('topmenu/favorites', $data);
    }

    public function helpcenter()
    {
        	$data['last_line']      = 'layouts/last_line';
        	$data['sidebar']        = 'layouts/sidebar';
        	$data['heading']		= 'Helpcenter';
        	$data['footer']			= 'layouts/footer';
      
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      
        $this->load->view('topmenu/helpcenter', $data);
    }
    
    public function latest_stories()
    {     
    	    $data['heading']		= 'Latest Stories';
    	    
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      
        $this->load->view('topmenu/latest_stories', $data);
    }
    
    public function social_media()
    {
    	    $data['heading']		= 'Social Media';
    
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      
        $this->load->view('topmenu/social_media', $data);
    }
    
    public function videodump()
    {
        $this->session->set_flashdata('redirectUrl', site_url('topmenu/videodump'));
        
        if($this->uri->segment(3) == '')    // region not specified
        {
        	$data['last_line']      = 'layouts/last_line';
        	$data['sidebar']        = 'layouts/sidebar';
            $data['heading']		= 'Videodump';
            $data['videos'] = $this->Video_model->get(4, 0, 0);
            $this->load->view('topmenu/videodump', $data);
        }
        
        else    // region specified
        {
            $data['main'] = 'topmenu/videodump_view.php';
            $region = $this->uri->segment(3);
            $tokens = explode('_', $region);
            $region = implode(' ', $tokens); 
            $data['heading'] 	= $region;
        	$data['header']     = 'layouts/header';
       		$data['last_line']  = 'layouts/last_line';
        	$data['sidebar']    = 'layouts/sidebar';
            $data['footer']		= 'layouts/footer';
            $data['videos'] 	= $this->Video_model->get_where('region', $this->uri->segment(3));
            $this->load->view('template_view', $data);
        }
    }
   
    /* video upload */
    public function dump_video()
    {
        $this->load->model('Story_model');
        
        /* upload configurations */    
        $config['upload_path']='./uploads/media/videos';
        $config['allowed_types']='mp4|gif|jpg|png|bmp';
        $config['max_size']='1024000';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        
        $this->form_validation->set_rules($this->Video_model->rules);
        
        if($this->form_validation->run() == TRUE)
        {
            if(! $this->upload->do_multi_upload("files"))
            {
                /* upload failed */
                $data['main'] = 'topmenu/dump_video.php';
                $data['heading'] = 'Video Upload';
       			$data['last_line'] = 'layouts/last_line';
                $data['num_uploaded_stories'] = $this->Story_model->count_where('author', $this->session->userdata('user_id'));
                $data['banner'] = $this->User_model->get_banner($this->ion_auth->user()->row()->id);
                $data['errors'] = $this->upload->display_errors();
                $this->load->view('template_user', $data);
            }
            
            else
            {
                /* upload successful*/
                $this->Video_model->upload_video();
                redirect('topmenu/success', 'refresh');
            }
        }
        
        else
        {
            $data['main'] = 'topmenu/dump_video.php';
            $data['heading'] = 'Video Upload';
       		$data['last_line'] = 'layouts/last_line';
            $data['allowed_types'] = $config['allowed_types'];
            $data['banner'] = $this->User_model->get_banner($this->ion_auth->user()->row()->id);
            $data['num_uploaded_stories'] = $this->Story_model->count_where('author', $this->session->userdata('user_id'));
            $this->load->view('template_user', $data);
        }
    }
    
    public function dump_video_process()
    {
        dd($this->input->post());
    }
    
    /* video playback */   
    public function video($name)
    {
        $this->load->model('Comment_m');
        $vid = $this->Video_model->get_where('name', $name, 1);
        $vid->viewed += 1;
        R::store($vid);
        $data['video'] = $vid;
        $data['related_videos'] = $this->Video_model->get_where('region', $vid->region, 6);
        $data['main'] = 'topmenu/video_view';
        $data['heading'] = 'Holidays Player';
        $data['header'] = 'layouts/header';
       	$data['last_line'] = 'layouts/last_line';
        $data['sidebar'] = 'layouts/sidebar';
        $data['footer'] = 'layouts/footer';
        $data['comments'] = $this->Comment_m->get_where('pid', $name);
        $this->load->view('template_player', $data);
    }
    
    /* message to display after successful video upload */
    public function success()
    {
        $str = '<h3>File has been uploaded successfully. Redirecting to your profile page...</h3>';
        echo $str;
        header("Refresh:4; url=" . site_url('user'));
    }
}