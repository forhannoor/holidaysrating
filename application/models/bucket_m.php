<?php

class Bucket_m extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->_table = 'bucket_list';
        $this->_fields = array(0 => 'id', 1 => 'user_id', 2 => 'url');
    }
}