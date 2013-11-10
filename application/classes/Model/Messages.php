<?php
class Model_Messages extends ORM
{

    protected $_table_name = 'messages';
    protected $_primary_key = 'id';

    public function getLatestMessages()
    {
        $obj = $this->limit(15);
        return $obj->find_all()->as_array();

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