<div class="inputs">
    <form action="/email" method="post">
        <input type='hidden' name="referer" value="<?=$referer?>">
        <input name="name" type="text" placeholder="Имя">
        <input name="phone" type="text" placeholder="Телефон">
        <input name="email" type="text" placeholder="Email">
        <input type="submit" id="send" style="display: none">
        <button id="submit">Отправить заявку</button>
    </form>
</div>