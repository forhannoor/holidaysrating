<?php

class Recipe extends CI_Controller
{
    private $_layout;
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Recipe_m');
        $this->load->model('Recipe_rating_m');
        $this->_layout = 'template_recipe';
    }
    
    public function create()
    {
        $this->form_validation->set_rules($this->Recipe_m->rules);
        
        if($this->form_validation->run() == TRUE)
        {
            $config['upload_path']='./uploads/recipes';
            $config['allowed_types']='gif|jpg|png|bmp';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            
            if(! $this->upload->do_upload()) // upload failed
            {
                $data['main'] = 'recipe/create';
                $data['header'] = 'layouts/header';
                $data['footer'] = 'layouts/footer';
                $data['last_line'] = 'layouts/last_line';
                $data['left_sidebar'] = 'sidebar/left_sidebar';
                $data['sidebar'] = 'layouts/sidebar';
                $data['heading'] ='Upload Recipe';
                $data['errors']=$this->upload->display_errors();
                $this->load->view($this->_layout, $data);
            }
            
            else // upload successful
            {
                $upload_data = $this->upload->data();
                
                $data = array(
                    'author' => $this->session->userdata('user_id'),
                    'country' => $this->input->post('country'),
                    'title' => $this->input->post('title'),
                    'ingredients' => $this->input->post('ingredients'),
                    'time' => $this->input->post('time'),
                    'recipe' => $this->input->post('recipe'),
                    'category' => $this->input->post('category'),
                    'image' => $upload_data['file_name']
                );
            
                $this->Recipe_m->insert($data);
                $this->session->set_flashdata('msg', 'Your recipe has been uploaded. It will take some time before being approved.');
                redirect('home', 'refresh');
            }
        }
        
        else
        {
            $data['main'] = 'recipe/create';
            $data['header'] = 'layouts/header';
            $data['footer'] = 'layouts/footer';
            $data['last_line'] = 'layouts/last_line';
            $data['left_sidebar'] = 'sidebar/left_sidebar';
            $data['sidebar'] = 'layouts/sidebar';
            $data['heading'] ='Upload Recipe';
            $this->load->view($this->_layout, $data);
        }
    }
    
    public function edit()
    {
        $this->load->view($this->_layout, $data);
    }
    
    public function delete()
    {
        $this->load->view($this->_layout, $data);
    }
    
    public function rate()
    {
        if(! $this->ion_auth->logged_in())
        {
            echo "<script type = \"text/javascript\">alert(\"Please log in to rate this recipe\")</script>";
            echo "<script type = \"text/javascript\">window.location.replace(document.referrer)</script>";
        }
        
        else
        {
            $data= array(
                'recipe'    => $this->uri->segment(3),
                'rater'     => $this->session->userdata('user_id'),
                'rating'    => $this->input->post('rating') 
            );
            
            $num_rating = $this->Recipe_rating_m->get_num_rating($data['recipe'], $data['rater']);
            
            if($num_rating > 0) // user already rated the recipe
            {
                echo "<script type = \"text/javascript\">alert(\"You already have rated this recipe\")</script>";
                echo "<script type = \"text/javascript\">window.location.replace(document.referrer)</script>";
            }
            
            else
            {
                $this->Recipe_rating_m->insert($data);
                echo "<script type = \"text/javascript\">window.location.replace(document.referrer)</script>";
            }           
        }
    }
    
    public function view()
    {
        $data['main'] = 'recipe/view';
        $data['header'] = 'layouts/header';
        $data['footer'] = 'layouts/footer';
        $data['last_line'] = 'layouts/last_line';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        $data['sidebar'] = 'layouts/sidebar';
        $data['heading'] ='View Recipe';
        $data['recipe'] = $this->Recipe_m->get($this->uri->segment(3));
        $data['recipe_rating'] = $this->Recipe_rating_m->get_rating($data['recipe']->id);
        $this->load->view($this->_layout, $data);
    }
}