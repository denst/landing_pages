<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Home extends Controller_Public_App {

    public function action_index()
    {
        $this->template->content = View::factory('home')
            ->set('referer', (isset($_SERVER['HTTP_REFERER']))? 
//                $_SERVER['HTTP_REFERER']: '');
//                '': 'http://yandex.ru/clck/jsredir?from=yandex.ru%3Byandsearch%3Bweb%3B%3B&text=gardget.com&uuid=&state=AiuY0DBWFJ4ePaEse6rgeKdnI0e4oXuRYo0IEhrXr7w0L24O5Xv8RltBkBGfRlcPPu2YsKgw8wbo0dxsF3g4ArCJyZlHqzLljU-SPOhV0HTfJn6h8GI5pO4LgQ9MPeIPQXiNPOaEQRJuKtA9SAoLwPQqRJKZ-p5GfVoL2oQUy_jAqzJ4hl-mcpbxCFhd3sMDsF3aEbu8Xvc&data=UlNrNmk5WktYejR0eWJFYk1LdmtxbVQ0dUFOQWpSd1Y4TE54RXZvSVJRNnB2clBmclNWT3JqYjllUFVacWJZYlRCVEtZQmp4aFRvekt2NkVKdDZfX3hWd3FjSnVxZTV6&b64e=2&sign=4bb76ff5cc30865bb401c611ff8281bd&keyno=0&l10n=ru&mc=4.241729296672174');
//                '': 'http://yandex.ru/clck/jsredir?from=yandex.ru%3Byandsearch%3Bweb%3B%3B&text=%D0%BA%D1%83%D0%BF%D0%B8%D1%82%D1%8C%20%D1%82%D1%80%D0%B0%D0%B2%D0%B0%D0%BB%D0%BE&uuid=&state=AiuY0DBWFJ4ePaEse6rgeAjgs2pI3DW99KUdgowt9XtO8xHuNro5yXnaWOPAKDIipkgpilwsSuNePwFAnDNg3p-MbcU_rhADwCwTUME_T7JXOPvQ4vYKCbrvYXMuuShTq-_wChoWbrX8iHMc-9jxId7j_X74xqxamhgXkfkMpKzIfqTIBFZ1MC7rX3M2Zu--&data=UlNrNmk5WktYejR0eWJFYk1LdmtxdW8xUVVJRU54R00waDUtdmVvTmk0V3VDV0ZqcVVlVUpDVktXR3VqbHJBU0JDTjRPMjlXalBKd3RJT3o0X040OG4wTlJEdjdnTTZMWkgwbW92UGc1dVk&b64e=2&sign=27dcf4d055f777b8213936ec174c281e&keyno=0&l10n=ru&mc=2.2516291673878226
                '': 'http://tadzhibaev.com/');
    }
}
