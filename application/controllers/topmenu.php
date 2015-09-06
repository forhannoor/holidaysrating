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
        $data['last_line'] = 'layouts/last_line';
        $data['heading'] = 'Worldmap';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('topmenu/worldmap', $data);
    }

    public function favorites()
    {
        $data['header'] = 'layouts/header';
        $data['last_line'] = 'layouts/last_line';
        $data['sidebar'] = 'layouts/sidebar';
        $data['heading'] = 'Favorites';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('topmenu/favorites', $data);
    }

    public function helpcenter()
    {
        $data['last_line'] = 'layouts/last_line';
        $data['sidebar'] = 'layouts/sidebar';
        $data['heading'] = 'Helpcenter';
        $data['footer'] = 'layouts/footer';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('topmenu/helpcenter', $data);
    }

    public function videodump()
    {
        $this->session->set_flashdata('redirectUrl', site_url('topmenu/videodump'));

        if (!strlen($this->uri->segment(3))) // region not specified
        {
            $data['last_line'] = 'layouts/last_line';
            $data['sidebar'] = 'layouts/sidebar';
            $data['heading'] = 'Videodump';
            $data['videos'] = $this->Video_model->get(4, 0, 0);
            $this->load->view('topmenu/videodump', $data);
        }

        else // region specified
        {
            $data['main'] = 'topmenu/videodump_view.php';
            $region = $this->uri->segment(3);
            $tokens = explode('_', $region);
            $region = implode(' ', $tokens);
            $data['heading'] = $region;
            $data['header'] = 'layouts/header';
            $data['last_line'] = 'layouts/last_line';
            $data['sidebar'] = 'layouts/sidebar';
            $data['footer'] = 'layouts/footer';
            $data['videos'] = $this->Video_model->get_where('region', $this->uri->segment(3));
            $this->load->view('template_view', $data);
        }
    }

    /* video upload form */
    public function dump_video()
    {
        $this->load->model('Story_model');
        $data['main'] = 'topmenu/dump_video.php';
        $data['heading'] = 'Video Upload';
        $data['last_line'] = 'layouts/last_line';
        $data['allowed_types'] = 'mp4|flv|avi';
        $data['banner'] = $this->User_model->get_banner($this->ion_auth->user()->row()->id);
        $data['num_uploaded_stories'] = $this->Story_model->count_where('author', $this->session->userdata('user_id'));
        $this->load->view('template_user', $data);
    }

    /* video upload process */
    public function dump_video_process()
    {
        $config['upload_path'] = './uploads/media/videos';
        $config['allowed_types'] = '*';
        $config['max_size'] = '1024000';
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file1')) // upload successful
        {
            $data = $this->upload->data();
            $original_file = $data['file_name'];
            $converted_file = sha1($original_file) . '.mp4';
            $thumbnail = sha1($original_file) . '.jpg';
            $ffmpeg = 'ffmpeg\\ffmpeg';
            $file_path = 'uploads/media/videos/';
            $conversion_command = $ffmpeg . ' -i ' . $file_path . $original_file . ' -vcodec h264 -acodec aac -strict -2 ' . $file_path . $converted_file;
            $thumbnail_command = $ffmpeg . ' -i ' . $file_path . $converted_file . ' -ss 00:00:05 -vframes 1 ' . $file_path . $thumbnail;
            $form_data = $this->input->post('formdata');
            $form = json_decode($form_data);
            exec($conversion_command); // convert file to mp4
            exec($thumbnail_command); // create thumbnail
            unlink($data['full_path']); // delete original file
            $insert_data = array(
                'name' => $converted_file,
                'uploader' => $form->uploader,
                'region' => $form->region,
                'title' => $form->title,
                'description' => $form->description,
                'thumbnail' => $thumbnail);

            $this->Video_model->insert($insert_data);
            $this->session->set_userdata('upload_status', 1);
            echo 'Upload successful';
            var_dump($insert_data);
        }

        else // upload failed
        {
            $this->session->set_userdata('upload_status', 0);
            echo 'Upload failed';
        }
    }

    /* video upload success */
    public function success()
    {
        $upload_status = $this->session->userdata('upload_status');
        $this->session->unset_userdata('upload_status');

        if ($upload_status == 1) // video upload successful
        {
            $str = '<h3>File upload successful. Redirecting to your profile page...</h3>';
            $url = site_url('user');
        }

        else // video upload failed
        {
            $str = '<h3>File upload failed. Redirecting back to the page...</h3>';
            $url = site_url('topmenu/dump_video');
        }

        echo $str;
        header("Refresh:2; url=" . $url);
    }

    /* video playback */
    public function video($name)
    {
        $this->load->model('Comment_m');
        $vid = $this->Video_model->get_where('name', urlsafe_b64decode($name), 1);
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
}
