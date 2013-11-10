<?php defined('SYSPATH') OR die('No direct access allowed.');


class Controller_Index extends Controller
{


    public function action_index()
    {

        $view = View::factory('index/index');

        $this->response->body($view);

    }


}

