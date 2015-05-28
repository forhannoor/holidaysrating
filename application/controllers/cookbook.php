<?php

class Cookbook extends MY_Controller
{
    protected $_layout;
    
    public function __construct()
    {
        parent::__construct();
        $this->_layout = 'template_user';
        $this->load->model('Cookbook_m');
    }
    
    public function index()
    {
        $this->load->model('Story_model');
        $this->load->model('Usermeta_model');
        $this->load->model('Recipe_m');
        $data['heading']='My Cookbook';
        $data['main']='cookbook/index.php';
        $data['banner']=$this->User_model->get_banner($this->session->userdata('user_id'));
        $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
        $data['users_online'] = $this->Ion_auth_model->users_online();
        $data['user_meta'] = $this->Usermeta_model->get($this->session->userdata('user_id'));
        $data['num_uploaded_stories'] = $this->Story_model->count_where('author', $this->session->userdata('user_id'));
        $data['num_uploaded_recipes'] = $this->Recipe_m->count_where('author', $this->session->userdata('user_id'));
        $data['cookbook_items'] = $this->Cookbook_m->get_where('user_id', $this->session->userdata('user_id'));
        $this->load->view($this->_layout, $data);
    }
    
    public function add_to_cookbook()
    {
        $data = array(
            'user_id'   => $this->session->userdata('user_id'),
            'recipe_id' => $this->uri->segment(3)
        );
        
        $status = $this->Cookbook_m->insert($data);
        $str = null;
        
        if($status > 0) // recipe added into cookbook
        {
            $str = '<h4>Recipe has been added to your cookbook. Please wait while you are being redirected...</h4>';
        }
        
        else // recipe already exists in cookbook
        {
            $str = '<h4>Recipe is already in your cookbook. Please wait while you are being redirected...</h4>';
        }
        
        echo $str;
        header("Refresh:4; url=" . site_url('recipe/view/' . $data['recipe_id']));
    }
}