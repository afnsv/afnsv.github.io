<html>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Регистрация</title>
    </head>
    <body>
	<link rel="stylesheet" type="text/css" href="css\style.css" />
</head>
<body>

		<div id="container">
		<center>
		<div id="header"><img src="images/logoэ.png">
		</center>
		<link rel="stylesheet" type="text/css" href="css\menu.css" />

<nav class="top-menu">
  <ul class="menu-main">
      <li class="left-item"><a href="index.php">Главное</a></li>
    <li class="left-item"><a href="napitki.php">Напитки</a></li>
    <li class="left-item"><a href="onas.php">О нас</a></li>
    <li class="left-item"><a href="aksiya.php">Акции</a></li>
</ul>
</nav>
	
	
<div id="menu">

</div>

<div id="content">
    <h1>Регистрация</h1>
    <form action="3.php" method="post">
<p>
    <label>Ваше имя:<br></label>
    <input name="imya" type="text">
    </p>
<p>
    <label>Ваше фамилия:<br></label>
    <input name="familiya" type="text">
    </p>
<p>
    <label>Ваш Mail:<br></label>
    <input name="Mail" type="email" placeholder="sophie@mail.com">
    </p>
<p>
    <label>Ваш пароль:<br></label>
    <input name="password" type="password">
    </p>
<p>
	<label>Ваш Аватар:<br></label>
    <input name="image" type="file" accept=".jpg, .jpeg, .png" multiple>
    </p>
<p>
	<label>Введите номер телефона:<br></label>
    <input name="tel" type="tel">
    </p>
<p>
    <input type="submit" name="submit" value="Зарегистрироваться">
    </p>
	<p>
	<a href="index.php">Уже зарегистрированы?</a>
	</p>
    </form>
	</div>
	<div id="clear"></div>
	<div id="footer">Подвал сайта</div>
	</div>
    </body>
    </html>