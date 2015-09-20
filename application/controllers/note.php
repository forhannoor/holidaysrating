<?php

require APPPATH . 'core/Base_Editor.php';

class Note extends Base_Editor
{
    private $_layout = 'layout_admin';
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Note_model');
    }
    
    public function index()
    {
        if($this->input->get('id'))
        {
            $data['note'] = $this->Note_model->get($this->input->get('id'));
            $data['main'] = 'note/read.php';           
            $this->load->view($this->_layout, $data);
        }
        
        else
        {
            if(! $this->ion_auth->is_admin()) // user is editor, retrieve notes with editor access only
            {
                $data['notes'] = $this->Note_model->get_where('editor_access', 1);
            }
            
            else // user is admin, retrieve all notes
            {
                $data['notes'] = $this->Note_model->get_all();
            }
            
            $data['main'] = 'note/index.php';           
            $this->load->view($this->_layout, $data);
        }
    }
    
    public function create()
    {
        $this->form_validation->set_rules($this->Note_model->rules);
        
        if($this->form_validation->run() == TRUE)
        {
            $this->Note_model->insert(array('author' => $this->session->userdata('user_id'), 'title' => $this->input->post('title'), 'description' => $this->input->post('description'), 'editor_access' => $this->input->post('editor_access')));
            redirect('note', 'refresh');
        }
        
        else
        {
            $data['main'] = 'note/create.php'; 
            $this->load->view($this->_layout, $data);
        }
    }
    
    public function edit()
    {
        $this->form_validation->set_rules($this->Note_model->rules);
            
        if($this->form_validation->run() == TRUE)
        {
            $data = array(
                'title'         => $this->input->post('title'),
                'description'   => $this->input->post('description'),
                'editor_access' => $this->input->post('editor_access')
            );
            
            $this->Note_model->update($this->input->get('id'), $data);
            redirect('note', 'refresh');
        }
        
        else
        {
            $data['note'] = $this->Note_model->get($this->input->get('id'));
            $data['main'] = 'note/edit.php';
            $this->load->view($this->_layout, $data);
        }
    }
    
    public function delete()
    {
        $this->Note_model->delete($this->input->get('id'));
        redirect('note', 'refresh');
    }
}