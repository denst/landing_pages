<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Email extends Controller_Public_App {

    public function action_index()
    {
        if(Valid::not_empty($_POST))
        {
            if(! Valid::email($_POST['email']))
                $this->redirect ('home');
            if(Valid::not_empty($_POST['referer']))
                $referer = $_POST['referer'];
            else
                $referer = $_SERVER['HTTP_REFERER'];
            if(Model::factory('Email')->send_email($_POST, $referer))
                Helper_Message::add('success', 'Ваша заявка отправлена');
            $this->template->content = View::factory('modal_form')
                ->set('referer', $referer);
        }
        else
            throw new HTTP_Exception_404;
    }
}