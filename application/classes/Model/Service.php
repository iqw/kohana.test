<?php

class Service_Model extends Model
{


    /**
     * function getLatestMessages
     *
     * @return  array
     */
    public function getLatestMessages()
    {

        $obj = ORM::factory('messages');
        $msgs = $obj->getLatestMessages();

        $msgs_arr = array();
        foreach ($msgs as $item) {

            $msgs_arr[] = Model_Messages::_toArray($item);

        }


        return $msgs_arr;
    }

    /**
     * function getLatestMessages
     * @param string $username
     * @param string $message
     * @return  bool
     */
    public function addMessage($username, $message)
    {
        $obj = ORM::factory('messages');
        $obj->username = $username;
        $obj->message = $message;
        $obj->datetime = date('Y-m-d H:i:s');
        if ($obj->save()) {
            return true;
        } else {
            return false;
        }

    }

    /**
     * function getLatestMessages
     * @param int $id
     * @return  array
     */
    public function getMessagesRelativelyId($id)
    {

        $obj = ORM::factory('messages');
        $msgs = $obj->getMessagesRelativelyId($id);

        $msgs_arr = array();
        foreach ($msgs as $item) {

            $msgs_arr[] = Model_Messages::_toArray($item);

        }


        return $msgs_arr;
    }
}