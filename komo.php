<?php
    session_start();
	include "2.php";
	header('Content-Type: text/html; charset=UTF-8 without BOM');
	
?>

<html>
<body background=#ffffff>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/text.css">
<div id="header">
<table align='center'>
<td  width='200' height='250'><img width='250' height='250' align='center' src='logo/1.png'></td>
</table>
</div>
<div id="menu1">
 <nav class="menu">
  <ul>
          <li><a href="index.php"><h3><p id="mc" align="center">Главная</p></h3></a></li>
                  <li><a href="plata.php"><h3><p id="mc" align="center">Сборка</p></h3></a>
                           
    </li>                         
           <li><a href="onas.php"><h3><p id="mc" align="center">О нас</p></h3></a></li>
       <li><a href="kontakty.php"><h3><p id="mc" align="center">Контакты</p></h3></a></li>
  </ul>
</nav>
</div>
<div id="con">
<div id="content">
<table width="60%"  border="0"
          align="center" cellspacing="0" cellpadding="0">
 <h6><p id="ghg" align="center">Новости</p></h6>
<?php
if (isset($_POST['exit'])) { $exit = $_POST['exit']; if ($exit == '') { unset($exit);} }
	if($exit=="Выйти")
	{
		unset($_SESSION['login']);
		unset($_SESSION['password']);
		unset($_SESSION['admin']);
		unset($_SESSION['id']);
	}
$_SESSION['FiltrAM']=$myrow['FiltrAM'];
?>
<?php
$ko=mysql_query("select * from novosti");
while($r=mysql_fetch_row($ko))
{        $j=$j+1;
                 echo "<tr>";
				 $id[$j]=$r[0];
                 echo "<td  width='200' bgcolor='#ffffff' height='150'><img width='1050' height='600' src='$r[2]'></td>";
				 echo "</tr>";
				 echo "<tr>";
                 echo "<td align='center' width='150' bgcolor='#ffffff' color='white'><h3><p id='gh'>$r[1]</p></h3></td>";
				 echo "</tr>";
                 echo "<td align='center' width='150'  bgcolor='#ffffff' color='white'><p id='gh'>$r[3]</p></td>";
				 $id[$j]=$r[0];
				 $name[$j]=$r[1];
				 $name[$j]=htmlspecialchars($name[$j]);
				 $stoimost[$j]=$r[5];
				 $ram[$j]=$r[4];
				 echo "<tr>";
		         echo '<td align="right" ><p id="gh"><form action="novosti.php" name="knopka3" method="post"><input type="submit" name="кнопка" value="Далее" class="osn"><input type="hidden" name="id" value=' . $id[$j] . '  Купить"><input type="hidden" name="name" value="' .$name[$j]. '"  Купить"><input type="hidden" name="stoimost" value=' . $stoimost[$j] . '  Купить"><input type="hidden" name="ram" value="' .$ram[$j]. '"  Купить"></form></p></td>';
				 echo "</tr>";
			 
		 }
		echo "</tr>";
?>
<?php
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    echo ("");
    }
    //если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
$password = stripslashes($password);
    $password = htmlspecialchars($password);
//удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);
$result = mysql_query("SELECT * FROM users WHERE login='$login'",$db); //извлекаем из базы все данные о пользователе с введенным логином
    $myrow = mysql_fetch_array($result);
    if (empty($myrow['password']))
    {
    //если пользователя с введенным логином не существует
    echo ("");
    }
    else {
    //если существует, то сверяем пароли
    if ($myrow['password']==$password) {
    //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
    $_SESSION['login']=$myrow['login']; 
    $_SESSION['id']=$myrow['id'];//эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
	$_SESSION['admin']=$myrow['admin'];
	
    echo " ";
    }
 else {
    //если пароли не сошлись

    echo ("");
    }
    }
    ?> 
</table>
</div>
<div id="login">
    <?php
if (empty($_SESSION['login']))
{echo "<form name='voiti' action='index.php' method='post'>
     <p>
     <label><p id='menucol' align='center'>Ваш логин</p></label>
    <input name='login' type='text' size='15' maxlength='15'>
    </p>
    <p>
    <label><p id='menucol' align='center'>Ваш пароль</p></label>
    <input name='password' type='password' size='15' maxlength='15'>
    </p>
    <p> 
    <input type='submit' name='submit' value='Войти' class='new'>
    </p></form>
	<a href='reg.php'>Зарегистрироваться</a> ";}
?>
	<center>
	<br>
	<form action="index.php" method="post"><input type="submit" name="exit" value="Выйти" class="new" align="center"></form>
	</center>
	<br>
    <?php
    // Проверяем, пусты ли переменные логина и id пользователя
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    // Если пусты, то мы не выводим ссылку
    echo "<h3><p id='gh2'>Вы вошли на сайт, как </p></h3><p id='usc'>гость</p>";
    }
    else
    {

    // Если не пусты, то мы выводим ссылку
    echo "<h3><p id='gh2'>Вы вошли на сайт, как</p><p id='usc'>".$_SESSION['login']."</p></h3>";
	echo "<a href='lich.php'>Ваш личный кабинет </a>";
    }
    ?>
	<?php
	if ($_SESSION['admin']=="1")
    {
    
    echo "<h3><p id='gh2' align='center'>Добро Пожаловать</p></h3><a href='admin.php'>ТОЙОН БАhЫЛЫК КЭЛЛЭ !!!</a>";
    }
	
?>
<br>
<br>
</div>
	 </div>
<div id="clear">
	</div>
<div id="down">
<table align='right' style="margin:0 0">
<tr>
<th colspan="5"><p id="mc" align="center">мы соц сетях</th>
</tr>
<tr>
<th><a href='https://ru-ru.facebook.com/'><img src="coc/1.png" width='50' height='50' alt="1"></a></th><th><a href='https://plus.google.com/?hl=ru'><img src="coc/2.png" width='50' height='50' alt="1"></a></th><th><a href='https://mail.ru/
'><img src="coc/3.png" width='50' height='50' alt="1"></a></th><th><a href='https://mail.ru/
'><img src="coc/4.png" width='50' height='50' alt="1"></a></th><th><a href='https://ok.ru/'><img src="coc/5.png" width='50' height='50' alt="1"></a></th>
</tr>
<tr>
<th><a href='www.rss.ru/
'><img src="coc/6.png" width='50' height='50' alt="1"></a></th><th><a href='https://twitter.com/?lang=ru'><img src="coc/7.png" width='50' height='50' alt="1"></a></th><th><a href='https://vk.com/'><img src="coc/8.png" width='50' height='50' alt="1"></a></th><th><a href='https://www.yandex.ru/'><img src="coc/9.png" width='50' height='50' alt="1"></a></th><th><a href='https://mail.yandex.ru/'><img src="coc/10.png" width='50' height='50' alt="1"></a></th>
</tr>
</table>
<table align='left' style="margin:60 0 0 0">
<tr>
<th><p id="te" align="center">Сделал Кузьмин Владислав Исип 17</th>
</tr>
</table>
<table align='left' style="margin:5 0 0 0">
<tr>
<th><p id="gh" align="center">манна туох эрэ баар буолуохтаах этэ да5аны гынаары суох ha классика</th>
</tr>
</table>
</div>
</div>
</font>
 </center>
</head>
</body>
</html>