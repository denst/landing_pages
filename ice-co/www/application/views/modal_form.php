<form class="form-horizontal" action="/email" method="post">
    <fieldset>

    <!-- Form Name -->
        <legend>Заказать дезодорант</legend>

        <!-- Text input-->
        <div class="control-group">
          <label class="control-label" for="name">Имя</label>
          <div class="controls">
            <input id="name" name="name" type="text" placeholder="Иванов Иван Иванович" class="input-large required">

          </div>
        </div>

        <!-- Text input-->
        <div class="control-group">
          <label class="control-label" for="phone">Телефон</label>
          <div class="controls">
            <input id="phone" name="phone" type="text" placeholder="898765432" class="input-large required">

          </div>
        </div>

        <!-- Text input-->
        <div class="control-group">
          <label class="control-label" for="email">Почта</label>
          <div class="controls">
            <input id="email" name="email" type="text" placeholder="example@example.ru" class="input-large required">

          </div>
        </div>


        <fieldset class="inside">
            <legend>Выбрать размер и количество</legend>
            
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="quantity_big">Большой (120 гр.)</label>
              <div class="controls">
                <input id="quantity_big" name="quantity_big" type="text" placeholder="" class="input-mini">
                 - шт.
              </div>
            </div>

            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="quantity_small">Маленький (60 гр.)</label>
              <div class="controls">
                <input id="quantity_small" name="quantity_small" type="text" placeholder="" class="input-mini">
                - шт.
              </div>
            </div>
            
        </fieldset>
        
        <!-- Textarea -->
        <div class="control-group">
          <label class="control-label" for="comments">Комментарий</label>
          <div class="controls">                     
            <textarea id="comments" name="comments"></textarea>
          </div>
        </div>

        <!-- Button -->
        <div class="control-group">
          <label class="control-label" for="send"></label>
          <div class="controls">
            <button id="send" name="send" class="button basic">Отправить заказ</button>
          </div>
        </div>
        <input type='hidden' name="referer" value="<?=$referer?>">
        <input type='submit' id="submit" style="display: none">
        <div id="show_progress">
            <img src="/images/loader.gif" alt="">
        </div>
    </fieldset>
</form>