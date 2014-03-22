<div class="inputs">
    <form action="/email" method="post">
        <input type='hidden' name="referer" value="<?=$referer?>">
        <input name="name" type="text" placeholder="Имя">
        <input name="phone" type="text" placeholder="Телефон">
        <div class="date">
            <div>Выберите удобные для вас день и время</div>
            <select name="day" id="">
                <? for ($i = 1; $i <= 31; $i++):?>
                    <option value="<?=$i?>" <?=(date('d') == $i)? 'selected': ''?>><?=$i?></option>
                <? endfor;?>
            </select>
            <select class="large" name="month" id="">
                <? foreach (Helper_Output::get_rus_month() as $index => $month):?>
                    <option value="<?=$month?>" <?=(date('n') == $index)? 'selected': ''?>><?=$month?></option>
                <? endforeach;?>
            </select>
            <select class="hour" name="hour" id="hour">
                <? for ($i = 0; $i <= 23; $i++):?>
                    <? $i= str_pad($i, 2, '0', STR_PAD_LEFT);?>
                    <option value="<?=$i?>" <?=(date('h') == $i)? 'selected': ''?>><?=$i?></option>
                <? endfor;?>
            </select>
            :
            <select name="minute" id="">
                <? for ($i = 0; $i <= 59; $i++):?>
                    <? $i= str_pad($i, 2, '0', STR_PAD_LEFT);?>
                    <option value="<?=$i?>" <?=(date('m') == $i)? 'selected': ''?>><?=$i?></option>
                <? endfor;?>
            </select>
        </div>
        <div class="save-info">Защищаем контактную информацию в интересах наших клиентов</div>
        <div class="form-button">
            <input type="submit" id="send" style="display: none">
            <button class="btn primary" id="submit">Это надо услышать и увидеть!</button>
        </div>
        <div class="take-info">Возьмите любимую мызыку с собой</div>
    </form>
</div>