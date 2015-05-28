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
            $videos = R::findAll('videos');
            
        else if(! $ascending && ! $limit)   // get all videos in descending order
            $videos = R::findAll('video', ' ORDER BY uploaded_at DESC');
            
        else if($ascending && $limit)   // get videos with limit in ascending order
            $videos = R::findAll('videos', ' LIMIT :limit OFFSET :offset', array(':limit' => $limit, ':offset' => $offset));
            
        else if(! $ascending && $limit) // get videos with limit in descending order
            $videos = R::findAll('videos', ' ORDER BY uploaded_at DESC LIMIT :limit OFFSET :offset', array(':limit' => $limit, ':offset' => $offset));        
            
        return $videos;
    }
    
    public function get_videos($region)
    {
        $this->db->where('region', $region);
        return $this->db->get('videos');
    }
    
    /* upload and convert video */
    public function upload_video()
    {
        $data = $this->upload->get_multi_upload_data();
        $video = R::dispense('videos');
        $video->name = $data[0]['file_name'];
        $video->title = $this->input->post('title');
        $video->thumbnail = $data[1]['file_name'];
        $video->uploader = $this->input->post('uploader');
        $video->region = $this->input->post('region');
        $video->description = $this->input->post('description');
        
        R::store($video);
    }
    
    public function get_comments($video_name)
    {
        $this->db->where('pid', $video_name);
        return $this->db->get('comments');
    }
    
    public function find_by_uploader($id, $limit = 0)
    {
        if($limit == 0)
            $videos = R::find('videos', ' uploader = ? ', array($id));
            
        else
            $videos = R::find('videos', ' uploader = :uploader ORDER BY uploaded_at DESC LIMIT :limit ', array(':uploader' => $id, ':limit' => $limit));
            
        return $videos;
    }
}