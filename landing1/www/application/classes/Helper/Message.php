<?php
defined('SYSPATH') or die('No direct access allowed.');

class Helper_Message {
    
    public static function add($type, $message)
    {
        // get session messages
        $messages = Session::instance()->get('messages');
        // initialize if necessary
        if (! is_array($messages))
        {
            $messages = array();
        }
        // append to messages
        $messages[$type][] = $message;
        // set messages
        Session::instance()->set('messages', $messages);
    }

    public static function count()
    {
        return count(Session::instance()->get('messages'));
    }

    public static function output()
    {
        $str = '';
        $messages = Session::instance()->get('messages');
        Session::instance()->delete('messages');
        if (! empty($messages))
        {
            foreach ($messages as $type => $messages)
            {
                foreach ($messages as $message)
                {
                    $str .= View::factory('helpers/messages')
                                ->set('type', $type)
                                ->set('message', $message)
                                ->render();
                }
            }
        }
        return $str;
    }
}
    
