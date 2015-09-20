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
        $this->load->model('User_model');
        $data['main'] = 'home';
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