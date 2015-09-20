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
    
    public function get($limit = 0, $offset = 0, $ascending = 1)
    {
        if(! $limit && ! $offset && $ascending) // get all videos in ascending order
            $videos = R::findAll($this->_table);
            
        else if(! $ascending && ! $limit)   // get all videos in descending order
            $videos = R::findAll($this->_table, ' ORDER BY uploaded_at DESC');
            
        else if($ascending && $limit)   // get videos with limit in ascending order
            $videos = R::findAll($this->_table, ' LIMIT :limit OFFSET :offset', array(':limit' => $limit, ':offset' => $offset));
            
        else if(! $ascending && $limit) // get videos with limit in descending order
            $videos = R::findAll($this->_table, ' ORDER BY uploaded_at DESC LIMIT :limit OFFSET :offset', array(':limit' => $limit, ':offset' => $offset));        
            
        return $videos;
    }
    
    public function get_videos($region)
    {
        $this->db->where($this->_fields[3], $region);
        return $this->db->get($this->_table);
    }
    
    public function get_comments($video_name)
    {
        $this->db->where('pid', $video_name);
        return $this->db->get('comments');
    }
    
    public function find_by_uploader($id, $limit = 0)
    {
        if($limit == 0)
            $videos = R::find($this->_table, ' uploader = ? ', array($id));
            
        else
            $videos = R::find($this->_table, ' uploader = :uploader ORDER BY uploaded_at DESC LIMIT :limit ', array(':uploader' => $id, ':limit' => $limit));
            
        return $videos;
    }
}