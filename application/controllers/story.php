<?php 

class story extends CI_Controller
{
    private $layout = 'template_story';
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Story_model');
        $this->load->model('Story_rating_m');
    }
    
    public function index()
    {
        $data['main']='story/index.php';
        $data['heading']='Story';
        $data['title'] = 'Story';
        $data['header'] = 'layouts/header';
        $data['footer'] = 'layouts/footer';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['blogs'] = $this->Story_model->get_recent(10);
        
        $this->session->set_flashdata('redirectUrl', current_url());

        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view($this->layout, $data);
    }
    
    public function raymond()
    {
        $data['main']='story/raymond.php';
        $data['heading']='Ray and Dominica';
        $data['header'] = 'layouts/header';
        $data['footer'] = 'layouts/footer';
        $data['title'] = 'Follow Raymond in Dominica';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';

        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view($this->layout, $data);
    }
    
    public function angie()
    {
        $data['main']='story/angie.php';
        $data['heading']='Angie and Australia';
        $data['header'] = 'layouts/header';
        $data['footer'] = 'layouts/footer';
        $data['title'] = 'Explore Australia with Angie';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';

        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view($this->layout, $data);
    }
    
    public function josh()
    {
        $data['main']='story/josh.php';
        $data['heading']='Josh and Israel';
        $data['header'] = 'layouts/header';
        $data['footer'] = 'layouts/footer';
        $data['title'] = 'Josh knows his way in Israel';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';

        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view($this->layout, $data);
    }
    
    public function create()
    {
        if(! $this->ion_auth->logged_in())
        {
            $this->session->set_flashdata('msg', 'Please log in first');
            echo "<script type = \"text/javascript\">window.location.replace(document.referrer)</script>";
        }
        
        $this->form_validation->set_rules($this->Story_model->rules);
        
        $config['upload_path']='./uploads/media/story';
        $config['allowed_types']='*';
        $config['max_size']='10240';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        
        $large_thumbnail_width = 300;
        $large_thumbnail_height = 150;
        $small_thumbnail_width = 200;
        $small_thumbnail_height = 100;
        
        if($this->form_validation->run() == TRUE && $this->upload->do_multi_upload('images'))
        {
            $upload_data = $this->upload->get_multi_upload_data();
            $this->load->library('image_lib'); 
            $this->image_lib->clear();
            $image_config['image_library'] = 'gd2';
            $image_config['source_image'] = $upload_data[0]['full_path'];
            $image_config['create_thumb'] = FALSE;
            $image_config['maintain_ratio'] = TRUE;
            $image_config['width'] = $large_thumbnail_width;
            $image_config['height'] = $large_thumbnail_height;
            $this->image_lib->initialize($image_config);
            $this->image_lib->resize();

            $image_config['source_image'] = $upload_data[1]['full_path'];
            $image_config['width'] = $small_thumbnail_width;
            $image_config['height'] = $small_thumbnail_height;
            $this->image_lib->clear();
            $this->image_lib->initialize($image_config);
            $this->image_lib->resize();

            $image_config['source_image'] = $upload_data[2]['full_path'];
            $image_config['width'] = $small_thumbnail_width;
            $image_config['height'] = $small_thumbnail_height;
            $this->image_lib->clear();
            $this->image_lib->initialize($image_config);
            $this->image_lib->resize();

            $image_data = array(
                $upload_data[0]['file_name'],
                $upload_data[1]['file_name'],
                $upload_data[2]['file_name']
            );
            
            $insert_data = array(
                'author' => $this->session->userdata('user_id'),
                'title' => $this->input->post('title'),
                'body' => $this->input->post('body'),
                'country' => $this->input->post('country'),
                'images' => serialize($image_data)
            );

            $this->Story_model->insert($insert_data);
            $this->session->set_flashdata('msg', 'Your story is waiting for approval');
            redirect('story', 'refresh');
        }
        
        else
        {
            $data['title'] = 'Create Story';
            $data['heading'] = 'Create Story';
            $data['header'] = 'layouts/header';
            $data['footer'] = 'layouts/footer';
       		$data['last_line']  = 'layouts/last_line';
        	$data['sidebar']    = 'layouts/sidebar';
            $data['main'] = 'story/create.php';
            $data['large_thumbnail_width'] = $large_thumbnail_width;
            $data['large_thumbnail_height'] = $large_thumbnail_height;
            $data['small_thumbnail_width'] = $small_thumbnail_width;
            $data['small_thumbnail_height'] = $small_thumbnail_height;
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
            $this->load->view($this->layout, $data);
        }
    }
    
    public function read()
    {
        $story = $this->Story_model->get($this->uri->segment(3));
        $data['main'] = 'story/read.php';
        $data['heading'] = 'Story';
        $data['header'] = 'layouts/header';
        $data['footer'] = 'layouts/footer';
       	$data['last_line'] = 'layouts/last_line';
        $data['sidebar'] = 'layouts/sidebar';
        
        if(! is_null($story)) // story is found
        {
            if($story->approved) // story is approved
            {
                $this->Story_model->update($story->id, array('num_views' => $story->num_views + 1)); // update num_views
            }
            
            $story->num_views += 1;
            $this->load->model('Userpersonal_model');
            $data['story'] = $story;
            $data['author'] = $this->Userpersonal_model->get_where('uid', $story->author, 1);
            $data['title'] = $story->title;
        }

        if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view($this->layout, $data);
    }
    
    public function all()
    {
        $data['main'] = 'story/all.php';
        $data['heading'] = 'List of Stories';
        $data['header'] = 'layouts/header';
       	$data['last_line'] = 'layouts/last_line';
        $data['sidebar'] = 'layouts/sidebar';
        $data['footer'] = 'layouts/footer'; 
        $data['title'] = 'List of Stories';
        $data['stories'] = $this->Story_model->get_all(urlsafe_b64decode($this->input->get('country')));
        
        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view($this->layout, $data);
    }
    
    public function rate()
    {
        if(! $this->ion_auth->logged_in()) // user is not logged in
        {
            echo "<script type = \"text/javascript\">alert(\"Please log in first to rate this story\")</script>";
            echo "<script type = \"text/javascript\">window.location.replace(document.referrer)</script>";
        }
        
        else
        {
            $data = array(
                'story_id' => $this->uri->segment(3),
                'rater_id' => $this->session->userdata('user_id'),
                'rating'   => $this->input->post('rating')
            );
            
            $num_rating = $this->Story_rating_m->get_num_rating($data['story_id'], $data['rater_id']);
            
            if($num_rating > 0) // user already rated this story
            {
                echo "<script type = \"text/javascript\">alert(\"You have already rated this story\")</script>";
                echo "<script type = \"text/javascript\">window.location.replace(document.referrer)</script>";
            }
            
            else
            {
                $this->Story_rating_m->insert($data);
                echo "<script type = \"text/javascript\">window.location.replace(document.referrer)</script>";                
            }
        }   
    }
}