<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Gardget | Augmented Reality. Дополняя привычное.</title>
    
    <meta charset="utf-8">
    <meta name="description" content="Разработка под ключ и сопровождение систем Дополненной Реальности">
    <meta name="keywords" content="">
    <!--begin Css styles-->
    <?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), "\n" ?>
    <!--end Css styles-->
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Inout Adserver - ad code starts -->
</head>
<body>

    <div class="wrapper">
        <div class="container">
            <div class="menu"></div>
            <?php
            if(Helper_Message::count() > 0) {
                echo Helper_Message::output();
            }?>
            <div class="header">
                <div class="logo">
                    <img src="/img/logo.png" alt="logo">
                    <div id="logo-title">Augmented Reality. Дополняя привычное.</div>
                </div>
                <div class="call-block">
                    <div class="email"><a href="">info@gardget.ru</a></div>
                    <div class="phone">+7 (495) 567-85-49 c 10:00 до 19:00</div>
                    <div style="text-align: right; float: right;">
                        <a href="#"><div class="call-button">Заказать звонок</div></a>
                    </div>
                    <!--<div><button class="call-button">Заказать звонок</button></div>-->
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="content">
                <div id="line-1">Разработка под ключ и сопровождение</div>
                <div id="line-2">систем Дополненной Реальности</div>
            </div>
            <div class="video-block">
                <div><div id="markers">Наши маркеры не &laquo; дрожат &raquo;. </div>&nbsp;Реальная статистика по внедренным проектам.</div>
                <iframe src="//www.youtube.com/embed/6v2L2UGZJAM" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="form-container">
                <div id="timer"></div>
                <div class="form-body">
                    <div>Бесплатная разработка</div>
                    <div>концепции и инфопакет</div>
                    <?php if(isset($content) AND is_object($content)){
                            echo $content; 
                    }?>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="benefits">
                <h2>Преимущества</h2>
                <div class="bnfs">
                    <div class="bnfs-line">
                        <div id="bnf-1"></div>
                        <div class="bnf">
                            Качество распознавания протестировано на 5000 маркерах
                        </div>
                        <div id="bnf-2"></div>
                        <div class="bnf">
                            Адаптирован подо все ведущие платформы: iOS, Android и др.
                        </div>
                        <div id="bnf-3"></div>
                        <div id="bnf-3-line" class="bnf">
                            Персональные решения и мультиплатформа AR
                        </div>
                    </div>
                    <div class="bnfs-line">
                        <div id="bnf-4"></div>
                        <div class="bnf" id="bnf-4-line">
                            Быстрорастущая аудитория, более 20 000 пользователей
                        </div>
                        <div id="bnf-5"></div>
                        <div class="bnf" id="bnf-5-line">
                            Берем на себя обслуживание систем
                        </div>
                        <div id="bnf-6"></div>
                        <div class="bnf" id="bnf-6-line">
                            Тренд: более 70 000 000 смартфонов продано в РФ
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="choice">
                <h2>Нас выбирают</h2>
                <a href="#">Узнать больше</a>
            </div>
            <div class="company"></div>
        </div>
        <div class="footer">&copy; Gardget 2013</div>
    </div>
    <?php foreach ($scripts as $file) echo HTML::script($file), "\n" ?>
</body>
</html>