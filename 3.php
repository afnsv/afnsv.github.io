
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

    <div class="nov">
        
    </div>
    
    <div class="content">

<?php
    if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);} }
	if (isset($_POST['surname'])) { $surname = $_POST['surname']; if ($surname == '') { unset($surname);} }
    if (isset($_POST['mail'])) { $mail = $_POST['mail']; if ($mail == '') { unset($mail);} }
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
	if (isset($_POST['phone'])) { $phone = $_POST['phone']; if ($phone == '') { unset($phone);} }
 if (empty($mail) or empty($password))
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
	$id = stripslashes($id);
	$id = htmlspecialchars($id);
    $name = stripslashes($name);
    $name = htmlspecialchars($name);
    $surname = stripslashes($surname);
    $surname = htmlspecialchars($surname);
	$mail = stripslashes($mail);
    $mail = htmlspecialchars($mail);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
	$phone = stripslashes($phone);
    $phone = htmlspecialchars($phone);
	
	$id = trim ($id);
    $name = trim ($name);
    $surname = trim($surname);
    $mail = trim($mail);
    $password = trim($password);
	$phone = trim ($phone);
    include ("2.php");
	$des="SELECT id FROM registr WHERE mail='$mail'";
    $result = mysqli_query($link,$des);
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой mail.");
    }
	$des1 = "INSERT INTO registr (id, name, surname, mail, password, phone) VALUES ('".$id."', '".$name."', '".$surname."', '".$mail."','".$password."', '".$phone."')";
    $result2 = mysqli_query ($link,$des1);
    if ($result2=='TRUE')
    {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
    }
    else
    {
    echo "Ошибка! Вы не зарегистрированы.";
    }
    ?>



			<h1>Вход:</h1>
		<br/><br>
		<form action="3.php" method="post" name="loginf">
		<p><label>Имя:<br>
		<input name="name" size="25" type="text"></label></p>
		<p><label>Фамилия:<br>
		<input name="surname" size="25" type="text"></label></p>
		<p><label>Телефон:<br>
		<input name="phonr" size="25" type="tel"></label></p>
		<p><label>Mail:<br>
		<input name="Mail" size="25" type="email" placeholder="sophie@mail.com"></label></p>
		<p><label>Пароль:<br>
		<input name="password" size="25" type="password"></label></p>
		
		<p><input name="login" type= "submit"></p>
		<p>Еще не зарегистрированы, то </br><a href= "zareg.html">зарегистрируйтесь</a>!</p>
		</form>


    </div>
    
<br><br>
	<div class="clear">

</div>
    
    <div class="footer">
        
    </div>
    
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script.js"></script>
</html>