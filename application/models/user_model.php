<?php

class User_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
    
    public function get_profile_info($user_id)
    {
        $this->db->where('uid', $user_id);
        return $this->db->get('users_personal');
    }
    
    /* get user information from both users and users_personal table */
    public function get_user_info($user_id)
    {
        $sql = '
            SELECT u.email, u.created_on, u.last_login, u.first_name, u.last_name, p.avatar, p.display_name, p.country, p.favorite_destination, p.about, p.privacy
            FROM users as u
            JOIN users_personal as p
            ON u.id = p.uid
            LIMIT 1
        ';
        
        $result = R::getRow($sql);
        return $result;
    }
    
    public function get_profile_information($user_id)
    {
        $profile = R::findOne('users_personal', ' uid = :uid LIMIT 1', array(':uid' => $user_id));
        return $profile;
    }
    
    /* upload picture/video */
    public function upload_media($user_id)
    {
        $udata=$this->upload->data();
        $data=array(
                    'uploader' => $user_id,
                    'category' => $this->input->post('category'),
                    'name' => $udata['file_name']
                ); 
                     
        $this->db->insert('media', $data);             
    }
    
    /* retrieve media uploaded by user */   
    public function get_pictures($user_id)
    {
        $condition=array(
            'uploader' => $user_id,
            'category' => 'image'
        );
        
        $this->db->where($condition);
        return $this->db->get('media');       
    }
    
    public function add_banner($user_id)
    {
        $udata=$this->upload->data();
        
        $data=array(
            'uploader' => $user_id,
            'name' => $udata['file_name']
        );       
        
        $this->db->insert('banners', $data);
    }
    
    public function get_banner($user_id)
    {
        $banners = R::findOne('banners', ' uploader = :uploader ORDER BY time DESC LIMIT 1', array(':uploader' => $user_id));
        
        if(is_null($banners))
        {
            $banners = R::findOne('banners', ' uploader = 0');
        }
            
        return $banners;
    }
    
    public function make_comment($user_id)
    {
        $data=array(
            'pid' => $this->input->post('pid'),
            'cid' => $user_id,
            'description' => $this->input->post('description'),
            'url' => $this->input->post('url')
        );
        
        $this->db->insert('comments', $data);
    }
    
    /* returns comments for a media file */
    public function get_comments($pid)
    {
        $this->db->where('pid', $pid);
        return $this->db->get('comments'); 
    }
    
    /* returns username of a user */
    public function get_username($user_id)
    {
        $this->db->select('username');
        $this->db->where('id', $user_id);
        return $this->db->get('users')->result();       
    }
    
    public function username($id)
    {
        $sql = '
            SELECT username FROM users
            WHERE id = ' . $id . '
            LIMIT 1
        ';
        
        $username = R::getRow($sql);
        return $username['username'];
    }
    
    public function set_rating($user_id, $pid)
    {
        $data=array(
            'name' => $pid,
            'rating' => $this->rate_conversion($this->input->post('rating')),
            'rater' => $user_id
        );
        
        $this->db->insert('ratings', $data);
    }
    
    /* returns rating of an object */
    public function get_rating($pid)
    {
        $total = 0;
        $this->db->select('rating');
        $this->db->where('name', $pid);
        $x=$this->db->get('ratings');
        
        foreach($x->result() as $value)
            $total += $value->rating;
        
        if(count($x->result()) != 0)
            return $total/count($x->result());
            
        return '..';
    }
    
    /* count number of voters for a given picture or video or location */
    public function count_voter($pid)
    {
    	$this->db->select('rating');
        $this->db->where('name', $pid);
        $this->db->from('ratings');
        return $this->db->count_all_results();
    }
    
    /* gets avatar of specific user */
    public function get_avatar($user_id)
    {
        $this->db->select('avatar');
        $this->db->where('uid', $user_id);
        return $this->db->get('users_personal');       
    }
    
    public function avatar($user_id)
    {
        $sql = '
            SELECT avatar
            FROM users_personal
            WHERE uid = ' . $user_id . '
            LIMIT 1
        ';
        
        $result = R::getRow($sql);
        return $result['avatar'];
    }
    
    /* sends message to a specific user */
    public function send_message()
    {
        $data = array(
            'from' => $this->input->post('from'),
            'to' => $this->input->post('to'),
            'subject' => $this->input->post('subject'),
            'content' => $this->input->post('content')
        );       
        
        $this->db->insert('personal_messages', $data);
    }
    
    /* gets inbox messages */
    public function get_inbox($user_id)
    {
        $this->db->where('to', $user_id);
        return $this->db->get('personal_messages');
    }
    
    /* gets sent messages */
    public function get_sent($user_id)
    {
        $this->db->where('from', $user_id);
        return $this->db->get('personal_messages');
    }
    
    /* counts number of unread messages */
    public function count_new($user_id)
    {
        $this->db->where('to', $user_id);
        $this->db->where('read_status', 1);
        $query = $this->db->get('personal_messages');
        return count($query->result());
    }
    
    /* gets a message and marks it as being read */
    public function get_message($message_id)
    {
        $data = array(
            'read_status' => 0
        );
        
        $this->db->where('id', $message_id);
        $this->db->update('personal_messages', $data);
        
        $this->db->where('id', $message_id);
        return $this->db->get('personal_messages');       
    }

    /* returns display name based on id */
    public function get_display_name($user_id)
    {
        $this->db->select('display_name');
        $this->db->where('uid', $user_id);
        $record = $this->db->get('users_personal', 1)->row();
        
        if(count($record) > 0)
            return $record->display_name;
            
        else
        {
            return $this->username($user_id);
        }
    }
    
    /* returns fullname of user */
    public function get_name($user_id)
    {
        $sql = '
            SELECT CONCAT(first_name, \' \', last_name) as name
            FROM users
            WHERE id = '. $user_id .'
            LIMIT 1
        ';
        
        $result = R::getRow($sql);
        return $result['name'];
    }
    
    public function get_privacy($user_id)
    {
        $sql = '
            SELECT privacy
            FROM users_personal
            WHERE uid = ' . $user_id . '
            LIMIT 1
        ';
        
        $result = R::getRow($sql);
        return $result['privacy'];        
    }
    
    public function set_privacy($user_id, $privacy)
    {
        $sql = '
            UPDATE users_personal
            SET privacy = ' . $privacy .'
            WHERE uid = ' . $user_id;
        
        R::exec($sql);
    }
}