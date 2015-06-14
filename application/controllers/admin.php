<?php 

class Admin extends Base_Admin_Controller
{
    private $_layout = 'layout_admin';
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }
    
    public function index()
    {
        $data['main']='admin/index.php';
        $this->load->view($this->_layout, $data);
    }
    
    public function comments()
    {
        $data['main']='admin/comments.php';
        $data['comments'] = $this->Admin_model->get_comments();
        $this->load->view($this->_layout, $data);
    }
    
    public function comment_delete()
    {
        $this->Admin_model->delete_comment($this->uri->segment(3));
        echo "<script type = \"text/javascript\">window.location.replace(document.referrer)</script>";
    }
    
    public function banners()
    {
        $data['main']='admin/banners.php';
        $data['banners'] = $this->Admin_model->get_banners();
        $this->load->view($this->_layout, $data);       
    }
    
    public function banner_delete()
    {
        $this->Admin_model->delete_banner($this->uri->segment(3));
        redirect('admin/banners', 'refresh');
    }
    
    public function pictures()
    {
        $data['main']='admin/pictures.php';
        $data['pictures'] = $this->Admin_model->get_pictures();
        $this->load->view($this->_layout, $data);       
    }
    
    public function picture_delete()
    {
        $this->Admin_model->delete_picture($this->uri->segment(3));
        redirect('admin/pictures', 'refresh');       
    }
    
    public function videos()
    {
        $data['main']='admin/videos.php';
        $data['videos'] = $this->Admin_model->get_videos();
        $this->load->view($this->_layout, $data);
    }
    
    public function video_delete()
    {
        $this->Admin_model->delete_video($this->uri->segment(3));
        redirect('admin/videos', 'refresh');       
    }
    
    public function users()
    {
        $data['main']='admin/users.php';
        $ip = $this->input->get('ip');
        
        if($ip) // filter users using ip
        {
            $ip = ip2long($ip);
            $ip = dechex($ip);
            $data['users'] = $this->Admin_model->get_user_by_ip($ip);
        }
        
        else
        {
            $data['users'] = $this->Admin_model->get_users();
        }
        
        $this->load->view($this->_layout, $data);       
    }
    
    public function user_delete()
    {
        $this->Admin_model->delete_user($this->uri->segment(3));
        redirect('admin/users', 'refresh');       
    }
    
    public function ratings()
    {
        $data['main']='admin/ratings.php';
        $data['ratings'] = $this->Admin_model->get_ratings();
        $this->load->view($this->_layout, $data);              
    }
    
    public function pm()
    {
        $this->form_validation->set_rules('message', 'Message', 'required');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        
        if($this->form_validation->run() == TRUE)
        {
            $this->Admin_model->send_pm($this->uri->segment(3));
            redirect('admin/index', 'refresh');
        }
        
        else
        {
            $data['main']='admin/pm.php';
            $this->load->view($this->_layout, $data);
        }
    }
    
    public function stories()
    {
        $this->load->model('Story_model');
        $uri_segment = $this->uri->segment(3);
        $data = array();
        
        if(strlen($uri_segment) > 0)
        {
            $data['stories'] = $this->Story_model->get_all();
        }
        
        else
        {
            $data['stories'] = $this->Story_model->get_where('approved', 0);
        }
        
        $data['main'] = 'admin/stories.php';
        $this->load->view($this->_layout, $data);
    }
    
    public function story_delete($id)
    {
        $this->load->model('Story_model');
        $this->Story_model->delete($id);
        redirect('admin/stories', 'refresh');
    }
    
    public function story_approve($id)
    {
        $this->load->model('Story_model');
        $this->Story_model->set_approved($id, 1);
        redirect('admin/stories', 'refresh');
    }
    
    public function story_disapprove($id)
    {
        $this->load->model('Story_model');
        $this->Story_model->set_approved($id, 0);
        redirect('admin/stories', 'refresh');
    }
    
    public function story_read($id)
    {
        $this->load->model('Story_model');
        $this->load->model('Userpersonal_model');
        $data['story'] = $this->Story_model->get($id);
        $data['author'] = $this->Userpersonal_model->get_where('uid', $data['story']->author, 1);
        $data['main'] = 'admin/story_read.php';
        $this->load->view($this->_layout, $data);
    }
    
    public function story_edit($id)
    {
        $this->load->model('Story_model');
        
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('body', 'Body', 'required');
        
        if($this->form_validation->run() == TRUE)
        {
            $data = array(
                'title' => $this->input->post('title'),
                'body' => $this->input->post('body')
            );
            
            $this->Story_model->update($id, $data);
            redirect('admin/story_read/' . $id, 'refresh');
        }
        
        else
        {
            $data['story'] = $this->Story_model->get($id);
            $data['main'] = 'admin/story_edit.php';
            $this->load->view($this->_layout, $data);
        }
    }
    
    public function avatar_delete($id)
    {
        $this->Admin_model->delete_avatar($id);
        redirect('admin/users', 'refresh');
    }
    
    public function group()
    {
        $data['groups'] = $this->Admin_model->get_groups();
        $data['main'] = 'admin/group.php';
        $this->load->view($this->_layout, $data);
    }
    
    public function group_edit($id)
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('description', 'Description', 'trim|required|xss_clean');
        
        if($this->form_validation->run() == TRUE)
        {
            $this->Admin_model->update_group($id);
            redirect('admin/group', 'refresh');
        }
        
        else
        {
            $data['group'] = $this->Admin_model->get_group($id);
            $data['main'] = 'admin/group_edit.php';
            $this->load->view($this->_layout, $data);
        }        
    }
    
    public function group_delete($id)
    {
        $this->Admin_model->delete_group($id);
        redirect('admin/group', 'refresh');        
    }
    
    public function group_create()
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('description', 'Description', 'trim|required|xss_clean');
        
        if($this->form_validation->run() == TRUE)
        {
            $this->Admin_model->create_group();
            redirect('admin/group', 'refresh');
        }
        
        else
        {
            $data['main'] = 'admin/group_create.php';
            $this->load->view($this->_layout, $data);
        }        
    }
    
    public function assign_editor($id)
    {
        $this->Admin_model->update_role($id, 'editor');
        redirect('admin/users', 'refresh');
    }
    
    public function dissociate_editor($id)
    {
        $this->Admin_model->update_role($id, 'member');
        redirect('admin/users', 'refresh');
    }
    
    public function deactivate_user($id)
    {
        $this->Admin_model->set_user_status($id, 0);
        redirect('admin/users', 'refresh');
    }
    
    public function activate_user($id)
    {
        $this->Admin_model->set_user_status($id, 1);
        redirect('admin/users', 'refresh');
    }
    
    public function assign_admin($id)
    {
        $this->Admin_model->update_role($id, 'admin');
        redirect('admin/users', 'refresh');
    }
    
    public function remove_admin($id)
    {
        if($this->session->userdata('user_id') != $id) // admin should not remove himself
            $this->Admin_model->update_role($id, 'member');
        
        else
            $this->session->set_flashdata('msg', 'You cannot remove yourself from Admin position');
                
        redirect('admin/users', 'refresh');
    }
    
    public function recipes()
    {
        $this->load->model('Recipe_m');
        $data['main'] = 'admin/recipes.php';
        $data['recipes'] = $this->Recipe_m->get_all();
        $this->load->view($this->_layout, $data);
    }
    
    public function approve_recipe($id)
    {
        $this->load->model('Recipe_m');
        $this->Recipe_m->set_recipe_approved($id, 1);
        redirect('admin/recipes', 'refresh');
    }
    
    public function disapprove_recipe($id)
    {
        $this->load->model('Recipe_m');
        $this->Recipe_m->set_recipe_approved($id, 0);
        redirect('admin/recipes', 'refresh');
    }
    
    public function recipe_delete($id)
    {
        $this->load->model('Recipe_m');
        $this->Recipe_m->delete($id);
        redirect('admin/recipes', 'refresh');
    }
    
    public function recipe($id)
    {
        $this->load->model('Recipe_m');
        $data['recipe'] = $this->Recipe_m->get($id);
        $data['main'] = 'admin/recipe.php';
        $this->load->view($this->_layout, $data);
    }
}