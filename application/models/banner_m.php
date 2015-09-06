<?php

class Banner_m extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->_table = 'banners';
        $this->_fields = array(0 => 'id', 1 => 'uploader', 2 => 'time', 3 => 'name');
    }
}