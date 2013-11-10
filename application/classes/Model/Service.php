<?php

class Service_Model extends Model
{


    /**
     * function getSomething
     *
     * @param   string $string
     * @return  string
     */
    public function getSomething($string)
    {
        return 'lol_' . $string;
    }
}