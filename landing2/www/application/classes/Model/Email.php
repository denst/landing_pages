<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Email {
    
    private $error;
    
    private function referral_tails($referer)
    {
        $phrase = '';
//        $referer = $_SERVER['HTTP_REFERER'];
        // ищем в referer адреса поисковиков и присваиваем переменным
        // $search и $crawler соответствующие значения
        if (stristr($referer, 'yandex.ru'))  { $search = 'text=';  $crawler = 'Yandex';  }
        if (stristr($referer, 'rambler.ru')) { $search = 'words='; $crawler = 'Rambler'; }
        if (stristr($referer, 'google.ru'))  { $search = 'q=';     $crawler = 'Google';  }
        if (stristr($referer, 'google.com')) { $search = 'q=';     $crawler = 'Google';  }
        if (stristr($referer, 'mail.ru'))   { $search = 'q=';     $crawler = 'Mail.Ru'; }
        if (stristr($referer, 'bing.com'))   { $search = 'q=';     $crawler = 'Bing';    }
        if (stristr($referer, 'qip.ru'))     { $search = 'query='; $crawler = 'QIP';     }

        // если посетитель пришел с поисковика то выполняем следующий код
        if (isset($crawler)) 
        {
            // здесь мы приводим referer в понятный для человека вид
            $phrase = urldecode($referer);

            // ищем ключевое слово в referer
//            eregi($search.'([^&]*)', $phrase.'&', $phrase2);
            preg_match('/[?&]'.$search.'([^&]+)/', $phrase, $matches);
            $phrase = $matches[1];
        }
        if(Valid::not_empty($phrase))
            return $phrase;
        else
            return $referer;
    }
    
    public function send_email($post, $referer)
    {
        $subject = 'Новый подписчик на '.'http://'.$_SERVER['HTTP_HOST'];
        $view = View::factory('email')
            ->set('referral_tails', $this->referral_tails($referer))
            ->set('data', $post);
        
        if(Model::factory('Email')->send(Kohana::$config->load('email.admin_email'), $subject, $view->render()))
            return true;
        else
            return false; 
            
    }

    private function send($to, $subject, $message)
    {
        $config = Kohana::$config->load('email');
        Email::connect($config);
        $from = Kohana::$config->load('email.admin_email');
        $res = Email::send($to, $from, $subject, $message, $html = true);
        if($res > 0)
            return true;
        else
            return false;
    }
}