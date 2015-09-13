<?php 

class Video_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
        $this->_table = 'videos';
        $this->_fields = array(0 => 'id', 1 => 'name', 2 => 'uploader', 3 => 'region', 4 => 'uploaded_at', 5 => 'title', 6 => 'description', 7 => 'thumbnail', 8 => 'viewed');
        $this->rules = array(
            array(
                'field'     => 'title',
                'label'     => 'Title',
                'rules'     => 'trim|required|sanitize'
            ),
            
            array(
                'field'     => 'description',
                'label'     => 'Description',
                'rules'     => 'trim|required|sanitize'
            ),
        );
	}
}