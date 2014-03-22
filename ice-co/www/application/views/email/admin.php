<p>Новый подписчик на <?='http://'.$_SERVER['HTTP_HOST']?>, дата: <?=date('d/m/Y h:m:s')?></p>
<hr>
<p>Имя: <?=$data['name']?></p>
<p>Телефон: <?=$data['phone']?></p>
<p>Почта: <?=$data['email']?></p>
<p>Большой (120 гр.): <?=(Valid::not_empty($data['quantity_big']))? 
        $data['quantity_big']: '0'?> шт.</p>
<p>Маленький (60 гр.): <?=(Valid::not_empty($data['quantity_small']))? 
        $data['quantity_small']: '0'?> шт.</p>
<hr>
<p>Комментарий: <?=$data['comments']?></p>
<hr>
<p>Реферальный хвост: <?=$referral_tails?></p>
