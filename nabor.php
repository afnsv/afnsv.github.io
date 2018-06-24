<?php
    session_start();
	include "2.php";
	header('Content-Type: text/html; charset=UTF-8 without BOM');
	
?>
<html>
    <title>Доставка пиццы</title>
    <head>
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
    </head>
<div class="header">
  <a class="logo" href="index.php">
    <img src="img/logo.png" />
    </a>
  <a class="phone" target="_blank" href="tel: +79142222222"> 8 (914) 222-22-22</a>
  <div class="menu">
    <a href="index.php" class="button">Пицца</a>
    <a href="napitki.php" class="button">Напитки</a>
    <a href="nabor.php" class="button">Наборы</a>
	<a href="onas.php" class="button">О нас</a>
    <a href="korzina.php" class="button">Корзина</a>
        <a href="vhod.php" class="button2">Вход</a>
    <a href="zareg.php" class="button3">Вы не зарегистрированы?</a>
  </div>
  </div>

    <div class="content"><center>
                    <div class="convert">
                        <a class="kartina" href="#">
                        <img src="nabor/football400.png" />
                        </a>
                        <p class="text"><h2>Набор "ФАН-КОМБО!"</h2></p>
                        
                                <p class="text2">
            1,199 рб
                     <a href="#" class="dew">
        в корзину
        </a>
        </p>
                    </div>
        
                                   <div class="convert">
                        <a class="kartina" href="#">
                        <img src="nabor/5pizz.jpg" />
                        </a>
                                       <p class="text"><h2>5 пицц за 2199 руб.</h2></p>
                                               <p class="text2">
            2,199 рб
                     <a href="#" class="dew">
        в корзину
        </a>
        </p>
                    </div>
    
                                <div class="convert">
                        <a class="kartina" href="#">
                        <img src="nabor/1.jpeg" />
                        </a>
                                       <a href="#" class="text"><h2>Чемпионат --</h2></a>
                                    <p>Закажите пиццу Спорт FM и отправьте в сообщения Пицца Россия <a href="vk.com/id372844620" class="q">ВКонтакте</a> пароль «чемпионат--». PlayStation 4 Pro, 5 годовых запасов пиццы и гарантированные призы от ЛитРес ждут вас! Подробные условия акции доступны в сообществе Пицца Россия <a href="vk.com/id372844620" class="q">ВКонтакте</a></p>
                    </div>
    
        <div class="convert">
                        <a class="kartina" href="#">
                        <img src="nabor/2.jpeg" />
                        </a>
                                       <a href="#" class="text"><h2>Додоброе комбо</h2></a>
            <p>Две оригинальные пиццы 30 см – 4 сезона и Ранч + пара бутылочек Кока-Кола 0,5 л. Самое додоброе и бодрящее сочетание! Выберите комбо в меню</p>
                                             
                    </div>
    
        </center>
    </div>
    
<br><br>
	<div class="clear">

</div>
    
    <div class="footer">
        
    </div>
    
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script.js"></script>
</html>