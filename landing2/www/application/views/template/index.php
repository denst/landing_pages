<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Акустические кресла-яица №1 в мире</title>
    
    <meta charset="utf-8">
    <meta name="description" content="Продажа акустических кресел-яиц и сингл-кинотеатров класса люкс в Москве">
    <meta name="keywords" content="">
    <!--begin Css styles-->
    <?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), "\n" ?>
    <!--end Css styles-->
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

	<script src="js/slides.js"></script>
	<script>
		$(function(){
			$("#slides").slides({
				responsive: true,
			});
                        $("#slides").slides("play");
		});
	</script>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Inout Adserver - ad code starts -->
</head>
<body>
    <div class="wrapper">
        <div class="container">
          <div class="header">
              <div class="logo">
                <img src="/img/logo.png" alt="logo">
                <div class="title">
                    <div>Акустические</div>
                    <div>кресла-яица №1 в мире</div>
                </div>
              </div>
              <div class="call-block">
                  <div class="call-button">
                    <a href="#" class="btn primary">Заказать звонок</a>
                  </div>
                <div class="info">
                      <div>+7 (495) 220-04-46</div>
                      <div>г. Москва, Рублевское шоссе д.76 к 2</div>
                </div>
              </div>
                <?php
                if(Helper_Message::count() > 0) {
                    echo Helper_Message::output();
                }?>
          </div>
          <div class="content-container">
              <div class="title">
                  <!--<div>-->
                      <h2>Продажа акустических кресел-яиц</h2>
                      <h2>и сингл-кинотеатров класса люкс в Москве</h2>
                      <div class="limit">Лимитированные серии. Лучшие материалы. Индивидуальные проекты.</div>
                  <!--</div>-->
              </div>
              <div class="content">
                    <div id="slides">
			<img src="/img/egg.jpg" width="100%" alt="Slide 1">
			<img src="/img/egg.jpg" width="100%" alt="Slide 2">
			<img src="/img/egg.jpg" width="100%" alt="Slide 3">
			<img src="/img/egg.jpg" width="100%" alt="Slide 4">
			<img src="/img/egg.jpg" width="100%" alt="Slide 5">
			<img src="/img/egg.jpg" width="100%" alt="Slide 6">
			<img src="/img/egg.jpg" width="100%" alt="Slide 7">
                    </div>
                    <div class="form-container">
                        <h3>Запишитесь на тест-драйв в нашем салоне</h3>
                        <?php if(isset($content) AND is_object($content)){
                            echo $content; 
                        }?>
                    </div>
              </div>
            </div>
            <div class="footer">
                <div class="benefits">
                    <div class="bnfs">
                        <div class="bnfs-line">
                            <div id="bnf-1"></div>
                            <div class="bnf">
                                 Эргономичные кресла c отделкой Alcantara
                            </div>
                            <div id="bnf-2"></div>
                            <div class="bnf">
                                Сенсорное управление аудио-настройками
                            </div>
                            <div id="bnf-3"></div>
                            <div class="bnf">
                                Лимитированные серии «Carbon» — 60 шт, «Ideal luster» — 100 шт
                            </div>
                        </div>
                        <div class="bnfs-line" style="margin-top: 50px;">
                            <div id="bnf-4"></div>
                            <div class="bnf">
                                Совместимы со всеми мобильными <div>медиа-устройствами</div>
                            </div>
                            <div id="bnf-5"></div>
                            <div class="bnf" id="bnf-5-line">
                                Сфера чистейшего концентрированного звука
                            </div>
                            <div id="bnf-6"></div>
                            <div class="bnf">
                                Сингл-кинотеатры <div>«под ключ»</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php foreach ($scripts as $file) echo HTML::script($file), "\n" ?>
</body>
</html>