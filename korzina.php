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

    <div class="content">
    </div>
    
	<div class="clear">

</div>
    
    <div class="footer">
        
    </div>
    
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script.js"></script>
</html>