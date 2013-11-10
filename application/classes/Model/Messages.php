<?php
class Model_Messages extends ORM
{

    protected $_table_name = 'messages';
    protected $_primary_key = 'id';

    public function getLatestMessages()
    {
        $obj = $this->limit(15);
        $obj->order_by('id', 'DESC');
        return $obj->find_all()->as_array();

    }

    public function getMessagesRelativelyId($id)
    {
        if ((int)$id) {
            $obj = $this->where('id', '>', (int)$id);
            return $obj->find_all()->as_array();
        } else {
            return array();
        }
    }

    public static function _toArray($item)
    {
        return array(
            'id' => $item->id,
            'username' => $item->username,
            'message' => $item->message,
            'datetime' => $item->datetime
        );
    }

}