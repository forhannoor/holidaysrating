<?php

class Message_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->_table = 'personal_messages';
        $this->_fields = array(0 => 'id', 1 => 'from', 2 => 'to', 3 => 'created_at', 4 => 'subject', 5 => 'content', 6 => 'read_status');
        $this->rules = array(
            array(
                'field'     => 'subject',
                'label'     => 'Subject',
                'rules'     => 'trim|required|sanitize'
            ),
            
            array(
                'field'     => 'content',
                'label'     => 'Content',
                'rules'     => 'trim|required|sanitize'
            ),
        );
    }
    
    /* returns messages sent from a particular user */
    /* sent messages */
    public function allFrom($from)
    {
        $messages = R::find($this->_table, ' `from` = :from ORDER BY created_at DESC', array(':from' => $from));
        return $messages;
    }
    
    /* returns messages sent to a particular user */
    /* inbox */
    public function allTo($to)
    {
        $messages = R::find($this->_table, ' `to` = :to ORDER BY created_at DESC', array(':to' => $to));
        return $messages;
    }
    
    /* find message based on id and optional 'to' parameter */
    public function find($id, $to = 0)
    {
        if(! $to)
        {
            $message = $this->get($id);
        }
        
        else
        {
            $message = R::findOne($this->_table, ' id = :id AND (`to` = :to OR `from` = :to) LIMIT 1', array(':id' => $id, ':to' => $to));
            $message->read_status = 0;  // change read_status
            $i = R::store($message);
            $message = R::load($this->_table, $i);
        }
        
        return $message;
    }
    
    /* count number of new messages */
    public function count_new($user_id)
    {
        $sql = '
            SELECT COUNT(id) as C
            FROM personal_messages
            WHERE `to` = ' . $user_id . '
            AND read_status = 1
        ';
        
        $counter = R::getRow($sql);
        return $counter['C'];
    }
}