<?php

class Story_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->_table = 'stories';
        $this->_fields = array(0 => 'id', 1 => 'author', 2 => 'title', 3 => 'body', 4 => 'approved', 5 => 'created_at', 6 => 'country', 7 => 'num_views');
        $this->rules = array(
            array(
                'field'     => 'title',
                'label'     => 'Title',
                'rules'     => 'trim|required|max_length[100]|sanitize'
            ),
            
            array(
                'field'     => 'body',
                'label'     => 'Body',
                'rules'     => 'trim|required|max_length[500]|sanitize'
            ),
        );
    }
    
    public function create($author)
    {
        $story = R::dispense($this->_table);
        $story->author = $author;
        $story->title = $this->input->post('title');
        $story->body = $this->input->post('body');
        $story->country = $this->input->post('country');
        R::store($story);
    }
    
    public function get_all($country, $limit = 1000000000)
    {
        $stories = R::find($this->_table, ' `country` = :country AND `approved` = :approved ORDER BY `created_at` DESC LIMIT 0, :limit', array(':country' => $country, ':approved' => 1, ':limit' => $limit));
        return $stories;
    }
    
    public function approve($id)
    {
        $data = array(
            'approved' => 1
        );
        
        $this->update($id, $data);
    }
    
    public function get($id)
    {
        $this->db->select('stories.id, stories.author, stories.title, stories.body, stories.approved, stories.created_at, stories.country, stories.num_views, story_ratings.story_id, avg(story_ratings.rating) AS rating');
        $this->db->from($this->_table);
        $this->db->join('story_ratings', 'stories.id = story_ratings.story_id');
        $this->db->where('stories.id', $id);
        return $this->db->get()->row();
    }
    
    public function get_recent($limit = 1)
    {
        $stories = R::find($this->_table, ' approved = 1 ORDER BY created_at DESC LIMIT :limit', array(':limit' => $limit));
        return $stories;
    }
}