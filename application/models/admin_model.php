<?php 

class Admin_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
    
    public function get_comments()
    {
        $comments = R::findAll('comments', ' ORDER BY time DESC ');
        return $comments;
    }
    
    public function delete_comment($id)
    {
        $comment = R::load('comments', $id);
        R::trash($comment);
    }
    
    public function get_banners()
    {
        $banners = R::findAll('banners', ' WHERE uploader <> 0 ');
        return $banners;
    }
    
    public function delete_banner($id)
    {
        $banner = R::load('banners', $id);
        R::trash($comment);
    }
    
    public function get_pictures()
    {
        $pictures = R::findAll('pictures');
        return $pictures;
    }
    
    public function delete_picture($id)
    {
        $picture = R::load('pictures', $id);
        R::trash($picture);
    }
    
    public function get_videos()
    {
        $sql = '
            SELECT v.id, v.name, v.name, v.title, v.uploader, u.username 
            FROM videos as v
            JOIN users as u
            ON v.uploader = u.id
        ';
        
        $rows = R::getAll($sql);
        return $rows;
    }
    
    public function delete_video($id)
    {
        $video = R::load('videos', $id);
        R::trash($video);       
    }
    
    public function get_users()
    {
        $sql = "
            SELECT u.id, u.ip_address, u.username, u.email, u.created_on, u.last_login, u.active, u.first_name, u.last_name, p.avatar, p.location, g.group_id 
            FROM users as u 
            LEFT JOIN users_personal as p 
            ON u.id = p.uid
            LEFT JOIN users_groups as g
            ON u.id = g.user_id 
        ";
        
        $rows = R::getAll($sql);
        $users = R::convertToBeans('users', $rows);
        
        /* convert ip address from varbinary to ip address format */
        foreach($users as $user)
        {
            $ip_hex = $user->ip_address;
            $ip_dec = hexdec($ip_hex);
            $user->ip_address = long2ip($ip_dec);
        }
        
        return $users;
    }
    
    public function get_user_by_ip($ip)
    {
        $users = R::find('users', ' ip_address = :ip', array(':ip' => $ip));
        
        foreach($users as $user)
        {
            $ip_hex = $user->ip_address;
            $ip_dec = hexdec($ip_hex);
            $user->ip_address = long2ip($ip_dec);
        }
        
        return $users;
    }
    
    public function delete_user($id)
    {
        $user = R::load('users', $id);
        R::trash($user);       
    }
    
    public function get_ratings()
    {
        $sql = "SELECT id, name, AVG(rating) AS rating, COUNT(DISTINCT(rater)) as num_voter FROM ratings GROUP BY name ORDER BY rating DESC";
        $rows = R::getAll($sql);
        $ratings = R::convertToBeans('ratings', $rows);
        return $ratings;
    }
    
    public function get_num_voters($name)
    {
        $num_voters = R::count('ratings', 'name = ?', array($name));
        return $num_voters;
    }
    
    public function send_pm($to)
    {
        R::setStrictTyping(false);
        $from = $this->input->post('from');
        $subject = $this->input->post('subject');
        $content = $this->input->post('message');
        
        if(strlen($to) == 0) // pm to all users
        {
            $users = R::findAll('users');
        
            foreach($users as $user)
            {
                if($user->id != $from)
                {
                    $personal_message = R::dispense('personal_messages');
                    $personal_message->from = $from;
                    $personal_message->to = $user->id;
                    $personal_message->content = $content;
                    $personal_message->subject = $subject;
                    R::store($personal_message);
                }
            }
        }
        
        else // pm to individual user
        {
            $personal_message = R::dispense('personal_messages');
            $personal_message->from = $from;
            $personal_message->to = $to;
            $personal_message->content = $content;
            $personal_message->subject = $subject;
            R::store($personal_message);
        }
    }
    
    public function delete_avatar($id)
    {
        $user_personal = R::findOne('users_personal', ' uid = :user_id LIMIT 1', array(':user_id' => $id));
        
        if($user_personal)  // if such record exists
        {
            $user_personal->avatar = '';
            R::store($user_personal);
        }
    }
    
    public function get_group($id)
    {
        $group = R::load('groups', $id);
        
        if($group->id != 0)
            return $group;
    }
    
    public function get_groups()
    {
        return R::findAll('groups');
    }
    
    public function update_group($id)
    {
        $group = R::load('groups', $id);
        $group->name = $this->input->post('name');
        $group->description = $this->input->post('description');
        R::store($group);
    }   
    
    public function delete_group($id)
    {
        $group = R::load('groups', $id);
        
        if($group->id != 0)
            R::trash($group);
    }
    
    public function create_group()
    {
        $group = R::dispense('groups');
        $group->name = $this->input->post('name');
        $group->description = $this->input->post('description');
        R::store($group);
    }
    
    public function update_role($user_id, $group_name)
    {
        $group = R::findOne('groups', ' name = :name', array(':name' => $group_name));
        $user_group = R::findOne('users_groups', ' user_id = :user_id', array(':user_id' => (int) $user_id));
        $user_group->group_id = (int) $group->id;
        R::store($user_group);      
    }
    
    public function set_user_status($user_id, $status)
    {
        $user = R::load('users', $user_id);
        
        if($user)
        {
            $user->active = $status;
            R::store($user);
        }
    }
}