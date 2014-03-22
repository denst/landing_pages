<?php
defined('SYSPATH') or die('No direct access allowed.');

class Helper_Output {
    
    static public function get_rus_month()
    {
        return array(
            1 => "Января", 2 => "Февраля", 3 => "Марта",
            4 => "Апреля", 5 => "Мая", 6 => "Июня", 7 => "Июля", 
            8 => "Августа", 9 => "Сентября", 10 => "Октября", 
            11 => "Ноября", 12 => "Декабря");
    }
}