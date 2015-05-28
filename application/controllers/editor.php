<?php

require APPPATH . 'core/Base_Editor.php';

class Editor extends Base_Editor
{
    public function __construct()
    {
        parent::__construct(); 
    }
    
    public function edit()
    {
        $this->session->set_flashdata('redirectUrl', $this->session->flashdata('redirectUrl'));
        $filename = $this->session->userdata('filename');
        $path = FCPATH . 'application/views/' . $filename;
        $data['content'] = read_file($path, TRUE);
        $data['path'] = $path;
        $data['redirectUrl'] = $this->session->flashdata('redirectUrl');
        $this->load->view('editor/edit', $data);
    }
    
    public function save()
    {
        $content = $this->input->post('content');
        $path = $this->input->post('path');
        write_file($path, $content);
		
        $redirectUrl = $this->session->flashdata('redirectUrl');
        
        if(isset($redirectUrl))
            redirect($redirectUrl, 'refresh');
            
        else
            redirect('home', 'refresh');
    }
    
    public function update($div_id)
    {
        $value = $this->input->post('value');
        $path = $this->session->userdata('path');
        $file_content =  file_get_contents($path);
        $new_file_content = preg_replace('/<div class=\"edit' . $div_id . '\">(.*?)<\/div>/s', '<div class="edit' . $div_id . '">' . $value . '</div>', $file_content);
        file_put_contents($path, $new_file_content);
        echo $value;         
    }
}