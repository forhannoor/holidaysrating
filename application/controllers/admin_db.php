<?php

class Admin_db extends Base_Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }
    
    public function create_blogs()
    {
        $fields = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            
            'author' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE
            ),
            
            'title' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            
            'body' => array(
                'type' => 'VARCHAR',
                'constraint' => 500
            ),
            
            'approved' => array(
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 0
            )
        );
        
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('blogs');
    }
    
    public function drop_blogs()
    {
        $this->dbforge->drop_table('blogs');
    }
    
    public function alter_videos()
    {
        $thumbnail = array(
            'thumbnail' => array(
                'type' => 'VARCHAR',
                'constraint' => 40,
                'null' => True
            )
        );
        
        $name = array(
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 40,
                'null' => True
            )        
        );
        
        $this->dbforge->add_column('videos', $thumbnail);
        $this->dbforge->modify_column('videos', $name);
    }
    
    public function insert_group()
    {
        $group = R::dispense('groups');
        $group->name = 'editor';
        $group->description = 'Editor';
        R::store($group);
    }
    
    public function alter_users_personal()
    {
        $added_fields = array(
            'name' => array(
                'type'          => 'VARCHAR',
                'constraint'    => 150,
                'null'          => True
            ),
            
            'gender' => array(
                'type'          => 'TINYINT',
                'unsigned'      => True,
                'null'          => True
            ),
            
            'date_of_birth' => array(
                'type'  => 'Date',
                'null'  => True
            ),
            
            'countries_to_visit' => array(
                'type'          => 'VARCHAR',
                'constraint'    => 500,
                'null'          => True
            ),
            
            'travel_motto' => array(
                'type'          => 'VARCHAR',
                'constraint'    => 500,
                'null'          => True
            )
        );
        
        $modified_fields = array(
            'country' => array(
                'name'          => 'location',
                'type'          => 'VARCHAR',
                'constraint'    => 100,
                'null'          => True
            ),
            
            'privacy' => array(
                'name' => 'privacy',
                'type' => 'TINYINT',
                'unsigned' => True,
                'default' => 0
            )
        );
        
        $this->dbforge->add_column('users_personal', $added_fields);
        $this->dbforge->modify_column('users_personal', $modified_fields);
    }
    
    public function create_user_meta()
    {
        $fields = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            
            'user_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE
            ),
            
            'value' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),        
        );
        
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('user_meta');        
    }
    
    public function alter_stories()
    {
        $column = array(
            'country' => array(
                'type' => 'VARCHAR',
                'constraint' => 50
            )
        );
        
        $this->dbforge->add_column('stories', $column);
    }
    
    public function alter_notes_add_editor_access()
    {
        $column = array(
            'editor_access' => array(
                'type'      => 'TINYINT',
                'unsigned'  => true,
                'default'   => 0,
            ),
        );
        
        $this->dbforge->add_column('notes', $column);
    }
    
    public function alter_notes_delete_status()
    {
        $this->dbforge->drop_column('notes', 'status');
    }
    
    public function create_recipes()
    {
        $fields = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            
            'author' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE
            ),
            
            'country' => array(
                'type' => 'VARCHAR',
                'constraint' => 50
            ),
            
            'title' => array(
                'type' => 'VARCHAR',
                'constraint' => 150,
            ),
            
            'ingredients' => array(
                'type' => 'VARCHAR',
                'constraint' => 300,
            ),
            
            'time' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
            ),
            
            'recipe' => array(
                'type' => 'text',
            ),
        );
        
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('recipes');   
    }
    
    public function create_recipe_ratings()
    {
        $fields = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            
            'recipe' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE
            ),
            
            'rater' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE
            ),
            
            'rating' => array(
                'type' => 'DECIMAL',
                'constraint' => '3, 1'
            ),
        );
        
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('recipe_ratings');
    }
    
    public function create_story_ratings()
    {
        $fields = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            
            'story_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE
            ),
            
            'rater_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE
            ),
            
            'rating' => array(
                'type' => 'DECIMAL',
                'constraint' => '3, 1'
            ),
        );
        
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('story_ratings');
    }
    
    public function alter_stories_add_num_views()
    {
        $column = array(
            'num_views' => array(
                'type'      => 'INT',
                'constraint' => 11,
                'unsigned'  => true,
                'default'   => 1,
            ),
        );
        
        $this->dbforge->add_column('stories', $column);
    }
    
    public function alter_comments_add_url()
    {
        $column = array(
            'url' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            )
        );
        
        $this->dbforge->add_column('comments', $column);
    }
    
    public function create_cookbook()
    {
        $fields = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            
            'user_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE
            ),
            
            'recipe_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE
            ),
        );
        
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('cookbooks');
    }
    
    public function alter_recipes_add_category()
    {
        $columns = array(
            'category' => array(
                'type'      => 'VARCHAR',
                'constraint' => 25,
                'default'   => 'Miscellaneous',
            ),
        );
        
        $this->dbforge->add_column('recipes', $columns);
    }
    
    public function alter_recipes_add_image()
    {
        $column = array(
            'image' => array(
                'type' => 'VARCHAR',
                'constraint' => 60,
            )
        );
        
        $this->dbforge->add_column('recipes', $column);
    }
    
    public function alter_videos_alter_title_int_to_varchar()
    {
        $column = array(
            'title' => array(
                'type' => 'VARCHAR',
                'constraint' => 150
            )
        );
        
        $this->dbforge->modify_column('videos', $column);
    }
    
    public function alter_videos_add_viewed()
    {
        $column = array(
            'viewed' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'default' => 0
            )
        );
        
        $this->dbforge->add_column('videos', $column);
    }
    
    public function alter_users_personal_drop_name()
    {
        $this->dbforge->drop_column('users_personal', 'name');
    }
    
    public function alter_recipes_add_approved()
    {
        $column = array(
            'approved' => array(
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 0
            )
        );
        
        $this->dbforge->add_column('recipes', $column);
    }
    
    public function alter_stories_add_images()
    {
        $column = array(
            'images' => array(
                'type' => 'VARCHAR',
                'constraint' => 200,
            )
        );
        
        $this->dbforge->add_column('stories', $column);
    }   
}