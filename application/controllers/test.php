<?php

class Test extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $config['upload_path']='./uploads/testupload';
        $config['allowed_types']='*';
        $config['max_size']='1024000';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
    }
    
    public function index()
    {
        $this->load->view('test/index');
    }
    
    public function process()
    {
        $this->upload->do_upload('file1');
    }
    
    public function rate()
    {
        echo $this->uri->segment(3) . ' => ' . $this->uri->segment(4);
        //echo "<script type = \"text/javascript\">window.location.replace(document.referrer)</script>";
    }
}