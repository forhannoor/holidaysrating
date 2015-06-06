<?php 

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->output->nocache();
    }
    
    public function login()
    {
      	$this->load->view('login');
    }
    
    public function index()
    {
        $this->load->model('Video_model');
        $this->load->model('User_model');
        $data['main']='home';
        $data['heading']= 'Travel with us...';
        $data['videos'] = $this->Video_model->get(4, 0, 0);        
        
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/slider/1.JPG',
                'title' => 'It is all about travel! Find ratings, adventures, tips and tools or stories written by our members.<br />
    			On Holidayrating, you can make new travel buddies, edit detailed information or <a href = http://holidaysrating.com/index.php/topmenu/videodump>watch uploaded travel videos.</a>'
            ),
            
            1 => array(
                'src' => 'assets/images/slider/2.jpg',
                'title' => 'Explore the <a href = http://holidaysrating.com/index.php/topmenu/worldmap>world</a> or check out our <a href = http://holidaysrating.com/index.php/topmenu/favorites>favorites</a>.<br />
    			Read more about countries, cities or what there is to do. <a href = http://holidaysrating.com/index.php/auth/register>Click here</a> to become our travelguide and share your information to others.'
            ),
            
            2 => array(
                'src' => 'assets/images/slider/3.jpg',
                'title' => 'This planet has many great things to offer, you just need to know where!<br />
    			Like us with Facebook, Google+ or tweet us, help us grow!!'
            ),
            
            3 => array(
                'src' => 'assets/images/slider/4.jpg',
                'title' => 'Ready for some cooking? Find the best local recipes! Edit your own cookbook!'
            ),
        );

		
        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));
            
		$this->load->view('template', $data);
    }
    
    public function contact_us()
    {
        $this->load->helper('captcha');
        $config['upload_path']='./uploads/';
        $config['allowed_types']='bmp|gif|png|jpg|jpeg|jpe|tif|tiff|pdf|doc|docx|rtf|txt|xl|xlsx';
        $config['max_size']=8000;
        $config['encrypt_name']=FALSE;
        $this->load->library('upload', $config);
        
        $this->email->mailtype = 'text';
        $this->email->charset = 'utf-8';
        
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');
        $this->form_validation->set_rules('captcha', 'Captcha', 'required');
        
        if($this->form_validation->run() == TRUE)
        {
            /* delete captcha */
            unlink(realpath('captcha/' . $this->input->post('captcha_path') . '.jpg'));
            
            if(strcasecmp($this->session->userdata('captcha'), $this->input->post('captcha')) == 0)
            {
                $this->email->from($this->input->post('email'));
                $this->email->to($this->config->item('contact_email'));
                $this->email->subject($this->input->post('subject'));
                $this->email->message($this->input->post('message'));
                $fpath = '';
                
                if($this->upload->do_upload())      /* if there's an attachment */
                {
                    $attachment= $this->upload->data();
                    $fname=$attachment['file_name'];
                    $fpath=$attachment['file_path'].$fname;
                }
                
                /* if attachement exists */        
                if($fpath != '')
                    $this->email->attach($fpath);
                    
                $this->email->send();
                
                /* email is dispatched, now delete attachment from server */
                if($fpath != '')
                    unlink($fpath);
                    
                $data['main']='thank_you.php';
                $data['heading'] = 'Message Sent';
                $data['header']     = 'layouts/header';
                $data['last_line']  = 'layouts/last_line';
            	$data['sidebar']    = 'layouts/sidebar';
                $data['footer']		= 'layouts/footer';
                $this->load->view('template_view', $data);
            }
            
            /* wrong captcha, redirect to same page */
            else
            {
                $generated_captcha = generateRandomString(5);
                $this->session->set_userdata('captcha', $generated_captcha);
                $captcha = array(
        			'word'			=> $generated_captcha,
        			'img_path'		=> './captcha/',
        			'img_url' 		=> base_url() . 'captcha/',
        			'font_path'		=> './fonts/impact.ttf',
        			'img_width'		=> '300',
        			'img_height' 	=> '50',
        			'expiration'	=> '600'
                );
    
        		$img = create_captcha($captcha);
                $data['image'] = $img['image'];
                $data['captcha_path'] = $img['time'];
                $data['main'] = 'contact_us.php';
                $data['heading'] = 'Contact Us';
                $data['header']     = 'layouts/header';
                $data['last_line']  = 'layouts/last_line';
            	$data['sidebar']    = 'layouts/sidebar';
                $data['footer']		= 'layouts/footer';
                $this->load->view('template_view', $data);
            } 
        }
        
        else 
        {
            $generated_captcha = generateRandomString(5);
            $this->session->set_userdata('captcha', $generated_captcha);
            $captcha = array(
    			'word'			=> $generated_captcha,
    			'img_path'		=> './captcha/',
    			'img_url' 		=> base_url() . 'captcha/',
    			'font_path'		=> './fonts/impact.ttf',
    			'img_width'		=> '300',
    			'img_height' 	=> '50',
    			'expiration'	=> '600'
            );

    		$img = create_captcha($captcha);
            $data['image'] = $img['image'];
            $data['captcha_path'] = $img['time'];
            $data['main'] = 'contact_us.php';
            $data['heading'] = 'Contact Us';
        	$data['header']     = 'layouts/header';
       		$data['last_line']  = 'layouts/last_line';
        	$data['sidebar']    = 'layouts/sidebar';
            $data['footer']		= 'layouts/footer';

            if($this->ion_auth->logged_in())
                $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));
            
            $this->load->view('template_view', $data);
        }       
    }
    
    public function countrylist()
    {
        $this->load->model('Country_model');
        $data['countries'] = $this->Country_model->get_countries($this->uri->segment(3));
        $this->load->view('countrylist', $data);
    }
    
    public function search()
    {
        $this->load->model('Country_model');
        $country = $this->input->post('country');
        
        if(strlen($country) > 0)
        {
            $result = $this->Country_model->country_to_controller($country);
            redirect($result . '/' . $country, 'refresh');
        }
        
        else
        {
            redirect('/', 'refresh');
        }
    }
}