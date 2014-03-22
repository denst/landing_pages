<p>Новый подписчик на <?='http://'.$_SERVER['HTTP_HOST']?>, дата: <?=date('d/m/Y h:m:s')?></p>
<hr>
<p>Имя: <?=$data['name']?></p>
<p>Телефон: <?=$data['phone']?></p>
<p>Удобные день и время : <?=$data['day'].' '.$data['month'].' '.
        $data['hour'].':'.$data['minute']?></p>
<hr>
<p>Реферальный хвост: <?=$referral_tails?></p>
