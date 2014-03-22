<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Home extends Controller_Public_App {

    public function action_index()
    {
        $this->template->content = View::factory('modal_form')
            ->set('referer', (isset($_SERVER['HTTP_REFERER']))? 
                $_SERVER['HTTP_REFERER']: '');
    }
}
