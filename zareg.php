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
	
        <h1>Регистрация:</h1>
	<br/><br>
        <form action="3.php" method="post" name="loginf">
            <p><label>Имя:<br>
        <input name="name" size="25" type="text"></label></p>
		<p><label>Фамилия:<br>
		<input name="surname" size="25" type="text"></label></p>
		<p><label>Телефон:<br>
		<input name="phone" size="25" type="tel"></label></p>
		<p><label>Mail:<br>
		<input name="mail" size="25" type="email" placeholder="sophie@mail.com"></label></p>
		<p><label>Пароль:<br>
		<input name="password" size="25" type="password"></label></p>
            
            		<p><input name="login" type= "submit"></p>
		<p>У вас у есть аккаунт, то </br><a href= "vhod.html">входите</a>!</p>
		</form>
                
    </div>
    
	<div class="clear">

</div>
    
    <div class="footer">
        
    </div>
    
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script.js"></script>
</html>