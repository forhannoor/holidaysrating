<?php

class User extends MY_Controller
{
    protected $_layout;

    public function __construct()
    {
        parent::__construct();
        $this->_layout = 'template_user';
        $this->load->model('Story_model');
        $this->load->model('Banner_m');
    }

    public function index()
    {
        $this->load->model('Video_model');
        $this->load->model('Bucket_m');
        $this->load->model('Country_model');
        $this->load->model('Usermeta_model');

        $data['heading'] = 'My Profile';
        $data['main'] = 'user/index.php';
        $data['banner'] = $this->Banner_m->get_where('uploader', $this->session->userdata('user_id'), 1);
        $data['name'] = $this->User_model->get_name($this->session->userdata('user_id'));
        $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
        $data['country_list'] = $this->Country_model->country_list();
        $data['pictures'] = $this->Picture_model->find_by_uploader($this->session->userdata('user_id'), 4);
        $data['videos'] = $this->Video_model->get_where('uploader', $this->session->userdata('user_id'), 4);
        $data['bucket_list'] = $this->Bucket_m->get_where('user_id', $this->session->userdata('user_id'), 10);
        $data['users_online'] = $this->Ion_auth_model->users_online();
        $data['user_meta'] = $this->Usermeta_model->get($this->session->userdata('user_id'));
        $data['num_uploaded_stories'] = $this->Story_model->count_where('author', $this->session->userdata('user_id'));
        $this->load->view($this->_layout, $data);
    }

    public function settings()
    {
        $this->load->model('Usermeta_model');
        $data['heading'] = 'Settings';
        $data['main'] = 'user/settings.php';
        $data['banner'] = $this->Banner_m->get_where('uploader', $this->session->userdata('user_id'), 1);
        $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
        $data['users_online'] = $this->Ion_auth_model->users_online();
        $data['user_meta'] = $this->Usermeta_model->get($this->session->userdata('user_id'));
        $data['num_uploaded_stories'] = $this->Story_model->count_where('author', $this->session->userdata('user_id'));
        $this->load->view($this->_layout, $data);
    }

    public function edit_profile()
    {
        $this->load->model('Userpersonal_model');
        $this->form_validation->set_rules($this->Userpersonal_model->rules);

        $this->config->load('avatar');
        $avatar_config = $this->config->item('avatar');
        $this->load->library('upload', $avatar_config);

        if ($this->form_validation->run() == true)
        {
            $this->upload->do_upload();
            $this->Userpersonal_model->update_profile_info($this->session->userdata('user_id'));
            redirect('user/index', 'refresh');
        }

        else
        {
            $this->load->model('Country_model');
            $data['heading'] = 'Edit Profile Information';
            $data['main'] = 'user/edit_profile.php';
            $data['banner'] = $this->Banner_m->get_where('uploader', $this->session->userdata('user_id'), 1);
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $data['countries'] = $this->Country_model->country_list();
            $data['num_uploaded_stories'] = $this->Story_model->count_where('author', $this->session->userdata('user_id'));
            $this->load->view($this->_layout, $data);
        }
    }

    public function upload_image()
    {
        $config['upload_path'] = './uploads/media';
        $config['allowed_types'] = 'gif|jpg|png|bmp';
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload())
        {
            /* upload failed */
            $data['banner'] = $this->Banner_m->get_where('uploader', $this->session->userdata('user_id'), 1);
            $data['heading'] = 'Upload Picture';
            $data['errors'] = $this->upload->display_errors();
            $data['main'] = 'user/upload_image.php';
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $data['allowed_types'] = $config['allowed_types'];
            $data['num_uploaded_stories'] = $this->Story_model->count_where('author', $this->session->userdata('user_id'));
            $this->load->view($this->_layout, $data);
        }

        else
        {
            /* upload successful */
            $this->Picture_model->save($this->session->userdata('user_id'));
            redirect('user/index', 'refresh');
        }
    }

    public function change_banner()
    {
        $config['upload_path'] = './uploads/banners';
        $config['allowed_types'] = 'gif|jpg|png|bmp';
        $config['max_width'] = '2000';
        $config['max_height'] = '200';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload())
        {
            /* upload failed */
            $data['banner'] = $this->Banner_m->get_where('uploader', $this->session->userdata('user_id'), 1);
            $data['heading'] = 'Add Banner';
            $data['errors'] = 'You must upload gif, jpg, png or bmp file<br/>Max allowed dimension 2000 * 200';
            $data['main'] = 'user/add_banner.php';
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $data['num_uploaded_stories'] = $this->Story_model->count_where('author', $this->session->userdata('user_id'));
            $this->load->view($this->_layout, $data);
        }

        else
        {
            /* upload successful */
            $this->User_model->add_banner($this->session->userdata('user_id'));
            redirect('user/index', 'refresh');
        }
    }

    public function show_picture()
    {
        $this->load->model('Rating_model');
        $section = $this->uri->segment(3);

        /* show all */
        if (strcmp('all', $section) == 0)
        {
            $data['banner'] = $this->Banner_m->get_where('uploader', $this->session->userdata('user_id'), 1);
            $data['pictures'] = $this->Picture_model->get_where('uploader', $this->session->userdata('user_id'));
            $data['heading'] = 'Picture Gallery';
            $data['main'] = 'user/show_picture_view.php';
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $data['num_uploaded_stories'] = $this->Story_model->count_where('author', $this->session->userdata('user_id'));
            $this->load->view($this->_layout, $data);
        }

        /* show one */
        else
        {
            $this->session->set_flashdata('redirectUrl', current_url());
            $config['base_url'] = site_url('user/show_picture/' . $section);
            $config['total_rows'] = R::count('comments', ' pid = :pid', array(':pid' => $section));
            $config['per_page'] = 5;
            $config['num_links'] = 2;
            $config['uri_segment'] = 4;
            $this->load->library('pagination', $config);
            $this->load->library('table');
            $data['main'] = 'user/show_single_picture_view.php';
            $data['heading'] = 'Picture Gallery';
            $data['banner'] = $this->Banner_m->get_where('uploader', $this->session->userdata('user_id'), 1);
            $data['picture'] = $section;
            $data['rating'] = $this->Rating_model->get_rating($section);
            $data['num_voter'] = $this->Rating_model->num_vote($section);
            $this->db->where('pid', $section);
            $data['comments'] = $this->db->get('comments', $config['per_page'], $this->uri->segment($config['uri_segment']));
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $data['num_uploaded_stories'] = $this->Story_model->count_where('author', $this->session->userdata('user_id'));
            $this->load->view($this->_layout, $data);
        }
    }

    public function show_video()
    {
        $this->load->model('Video_model');
        $section = $this->uri->segment(3);

        /* if show/all is selected */
        if (strcmp('all', $section) == 0)
        {
            $data['banner'] = $this->Banner_m->get_where('uploader', $this->session->userdata('user_id'), 1);
            $data['heading'] = 'Video Gallery';
            $data['videos'] = $this->Video_model->get_where('uploader', $this->session->userdata('user_id'));
            $data['main'] = 'user/show_video_all.php';
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $data['num_uploaded_stories'] = $this->Story_model->count_where('author', $this->session->userdata('user_id'));
            $this->load->view($this->_layout, $data);
        }

        else
        {
            $data['banner'] = $this->Banner_m->get_where('uploader', $this->session->userdata('user_id'), 1);
            $data['heading'] = 'Video Gallery';
            $data['main'] = 'user/show_video_view.php';
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $data['num_uploaded_stories'] = $this->Story_model->count_where('author', $this->session->userdata('user_id'));
            $this->load->view($this->_layout, $data);
        }
    }

    public function make_comment()
    {
        $this->load->library('table');
        $this->load->model('Comment_m');
        $this->form_validation->set_rules($this->Comment_m->rules);

        if ($this->form_validation->run() == true)
        {
            $this->User_model->make_comment($this->session->userdata('user_id'));
            $redirectUrl = $this->session->flashdata('redirectUrl');

            if ($redirectUrl)
                redirect($redirectUrl, 'refresh');

            redirect('home/index', 'refresh');
        }

        else
        {
            $this->session->set_flashdata('redirectUrl', $this->session->flashdata('redirectUrl'));
            $img_array = get_clickable_smileys(base_url() . 'assets/smileys/', 'description');
            $col_array = $this->table->make_columns($img_array, 10);
            $data['smiley_table'] = $this->table->generate($col_array);
            $data['banner'] = $this->Banner_m->get_where('uploader', $this->session->userdata('user_id'), 1);
            $data['heading'] = 'Leave Comment';
            $data['main'] = 'user/make_comment.php';
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $data['num_uploaded_stories'] = $this->Story_model->count_where('author', $this->session->userdata('user_id'));
            $this->load->view($this->_layout, $data);
        }
    }

    public function rate()
    {
        $this->load->model('Rating_model');
        /* check if user is rating a picture or a country */
        $segment = $this->uri->segment(3);
        $pattern = '/\..../'; // to detect image extensions , i.e. .gif, .png etc.
        preg_match($pattern, $segment, $matches, PREG_OFFSET_CAPTURE);
        $count = count($matches); // if match found, $count > 0

        $this->form_validation->set_rules('star1', 'Rating', 'required');

        if ($this->form_validation->run() == true)
        {
            $item = $this->input->post('name');
            $this->Rating_model->save($this->session->userdata('user_id'), $item);

            if ($this->input->post('count') > 0)
                redirect('user/show_picture/' . $item, 'refresh');

            else
                redirect('topmenu/worldmap', 'refresh');
        }

        else
        {
            $data['banner'] = $this->Banner_m->get_where('uploader', $this->session->userdata('user_id'), 1);
            $data['heading'] = 'Give Rating';
            $data['main'] = 'user/rate_view.php';
            $data['count'] = $count;
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $data['num_uploaded_stories'] = $this->Story_model->count_where('author', $this->session->userdata('user_id'));
            $this->load->view($this->_layout, $data);
        }
    }

    public function send_message()
    {
        $this->load->library('table');
        $this->load->model('Message_model');
        $this->form_validation->set_rules($this->Message_model->rules);

        if ($this->form_validation->run() == true)
        {
            $this->User_model->send_message();
            redirect('user/sent', 'refresh');
        }

        else
        {
            $img_array = get_clickable_smileys(base_url() . 'assets/smileys/', 'description');
            $col_array = $this->table->make_columns($img_array, 10);
            $data['smiley_table'] = $this->table->generate($col_array);
            $data['banner'] = $this->Banner_m->get_where('uploader', $this->session->userdata('user_id'), 1);
            $data['heading'] = 'Send PM';
            $data['main'] = 'user/send_message_view.php';
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $data['num_uploaded_stories'] = $this->Story_model->count_where('author', $this->session->userdata('user_id'));
            $this->load->view($this->_layout, $data);
        }
    }

    public function inbox()
    {
        $this->_layout = 'template_message';
        $this->load->model('Message_model');
        $user_id = $this->session->userdata('user_id');
        $data['messages'] = $this->Message_model->allTo($user_id);
        $data['heading'] = 'Inbox';
        $data['banner'] = $this->Banner_m->get_where('uploader', $this->session->userdata('user_id'), 1);
        $data['main'] = 'user/inbox_view.php';
        $data['num_uploaded_stories'] = $this->Story_model->count_where('author', $this->session->userdata('user_id'));
        $this->load->view($this->_layout, $data);
    }

    /* sent messages */
    public function sent()
    {
        $this->_layout = 'template_message';
        $this->load->model('Message_model');
        $user_id = $this->session->userdata('user_id');
        $data['messages'] = $this->Message_model->allFrom($user_id);
        $data['heading'] = 'Sent Messages';
        $data['banner'] = $this->Banner_m->get_where('uploader', $this->session->userdata('user_id'), 1);
        $data['main'] = 'user/sent_view.php';
        $data['users_online'] = $this->Ion_auth_model->users_online();
        $data['num_uploaded_stories'] = $this->Story_model->count_where('author', $this->session->userdata('user_id'));
        $this->load->view($this->_layout, $data);
    }

    /* read message */
    public function message()
    {
        $this->_layout = 'template_message';
        $this->load->model('Message_model');
        $data['heading'] = 'Message';
        $data['banner'] = $this->Banner_m->get_where('uploader', $this->session->userdata('user_id'), 1);
        $data['message'] = $this->Message_model->find($this->input->get('id'), $this->session->userdata('user_id'));
        $data['main'] = 'user/message.php';
        $data['num_uploaded_stories'] = $this->Story_model->count_where('author', $this->session->userdata('user_id'));
        $data['users_online'] = $this->Ion_auth_model->users_online();
        $this->load->view($this->_layout, $data);
    }

    public function browse()
    {
        $this->load->model('Video_model');
        $this->load->model('Picture_model');
        $user_id = $this->uri->segment(3);

        if (strlen($user_id) == 0) // user id not defined
        {

        }

        else
        {
            $data['heading'] = $this->User_model->get_display_name($user_id);
            $data['main'] = 'user/browse.php';
            $data['banner'] = $this->Banner_m->get_where('uploader', $this->session->userdata('user_id'), 1);
            $data['profile_info'] = $this->User_model->get_profile_information($user_id);
            $data['pictures'] = $this->Picture_model->find_by_uploader($user_id, 4);
            $data['videos'] = $this->Video_model->get_where('uploader', $user_id, 4);
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $data['num_uploaded_stories'] = $this->Story_model->count_where('author', $user_id);
            $this->load->view($this->_layout, $data);
        }
    }

    public function browse_picture()
    {
        $user_id = $this->uri->segment(3);
        $data['banner'] = $this->Banner_m->get_where('uploader', $this->session->userdata('user_id'), 1);
        $data['pictures'] = $this->User_model->get_pictures($user_id);
        $data['heading'] = 'Picture Gallery';
        $data['main'] = 'user/show_picture_view.php';
        $data['num_uploaded_stories'] = $this->Story_model->count_where('author', $this->session->userdata('user_id'));
        $data['users_online'] = $this->Ion_auth_model->users_online();
        $this->load->view($this->_layout, $data);
    }

    public function bucket()
    {
        $this->load->model('Bucket_m');
        $data['banner'] = $this->Banner_m->get_where('uploader', $this->session->userdata('user_id'), 1);
        $data['heading'] = 'Bucket List';
        $data['main'] = 'user/bucket.php';
        $data['users_online'] = $this->Ion_auth_model->users_online();
        $data['bucket_list'] = $this->Bucket_m->get_where('user_id', $this->session->userdata('user_id'), 10);
        $data['num_uploaded_stories'] = $this->Story_model->count_where('author', $this->session->userdata('user_id'));
        $this->load->view($this->_layout, $data);
    }

    public function add_to_bucket()
    {
        $this->User_model->add_to_bucket($this->session->userdata('user_id'));
    }

    public function privacy()
    {
        $data['main'] = 'user/privacy.php';
        $data['heading'] = 'Privacy';
        $data['banner'] = $this->Banner_m->get_where('uploader', $this->session->userdata('user_id'), 1);
        $data['privacy'] = $this->User_model->get_privacy($this->session->userdata('user_id'));
        $data['num_uploaded_stories'] = $this->Story_model->count_where('author', $this->session->userdata('user_id'));
        $this->load->view($this->_layout, $data);
    }

    public function change_privacy()
    {
        $privacy = $this->input->post('privacy');
        $this->User_model->set_privacy($this->session->userdata('user_id'), $privacy);
        redirect('user/settings', 'refresh');
    }

    public function color()
    {
        if($this->uri->segment(3) == 'reset')
        {
            /* reset color settings */
        	$this->load->model('Usermeta_model');
        	$usermeta = $this->Usermeta_model->get_where('user_id', $this->session->userdata('user_id'), 1);
        	
        	if(count($usermeta) > 0) // usermeta exists
        	{
        		$this->Usermeta_model->delete($usermeta->id);
        	}
        	
            redirect('user', 'refresh');
        }
        
        if ($this->input->server('REQUEST_METHOD') === 'POST') // form is submitted
        {
            $this->load->model('Usermeta_model');
            $this->Usermeta_model->save();
            redirect('user', 'refresh');
        }

        else // form is requested to be rendered
        {
            $this->load->model('Usermeta_model');
            $data['heading'] = 'Choose Color';
            $data['banner'] = $this->Banner_m->get_where('uploader', $this->session->userdata('user_id'), 1);
            $data['main'] = 'user/color.php';
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
            $data['user_meta'] = $this->Usermeta_model->get($this->session->userdata('user_id'));
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $data['num_uploaded_stories'] = $this->Story_model->count_where('author', $this->session->userdata('user_id'));
            $this->load->view($this->_layout, $data);
        }
    }
}