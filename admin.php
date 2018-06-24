<?php
    session_start();
	include "2.php";
	header('Content-Type: text/html; charset=UTF-8 without BOM');
?>

 <html>
 <body>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link rel="stylesheet" href="css/text.css">
     <center>
   <table border="1">
 <tr align="center">
 <?php
         $des=$_POST["name"];
		 $de=$_POST["surname"]; 
		 $qu=$_POST["mail"];
         $da=$_POST["password"];
		 $db=$_POST["admin"];
		 $lk=$_POST["id"];
		 $le=$_POST["tel"];
		 $y = $_POST['кнопка'];
		 $ad = $_POST['кнопка2'];
		 $rs=mysql_query("DELETE FROM registrasiya WHERE id='$y'");
		 $es=mysql_query("UPDATE  `isip1703`.`registrasiya` SET  `imya` =  '$des',`familiya` =  '$de',`Mail` =  '$qu',`password` =  '$da',`tel` = '$le' WHERE  `registrasiya`.`id` ='$lk'");
		 $es=mysql_query("UPDATE  `isip1703`.`registrasiya` SET  `admin` = '1' WHERE  `registrasiya`.`id` ='$ad'");
		 $res=mysql_query("Select * from registrasiya");
			 echo "<tr><td colspan='6'></td></tr>";
         while($r=mysql_fetch_row($res))
         {
			    		 $admin2=$r[6];
                 echo "<tr>";
                 echo "<td align='center'>$r[0]</td>";
                 echo "<td width='200'>$r[1]</td>";
                 echo "<td align='center' width='100'> $r[2]</td>";
                 echo "<td align='center' width='200'>$r[3]</td>";
                 echo "<td width='100' align='center'>$r[4]</td>";
				 echo "<td width='170' align='center'>$r[5]</td>";
				 $j=$j+1;
				 $i=$i+1;
				 $h[$i]=$r[0];
				 $h[$j]=$r[0];
				 if (!$admin2=="1")
				 {
				 echo '<td ><form action="admin.php" method="post"><input type="submit" name="кнопка" value="Удалить"><input type="hidden" name="кнопка" value=' .$h[$i]. '  Купить"></form></td>';
				 echo '<td ><form action="admin.php" method="post"><input type="submit" name="кнопка2" value="Админ"><input type="hidden" name="кнопка2" value=' .$h[$i]. '  Купить"></form></td>';
				 }
		 echo "</tr>";}
 
?>
     <th>id</th>      <th>Имя</th>     <th>Фамилия</th>    <th>Почта</th>    <th>Пароль</th> <th>Телефон</th> <th>Админ</th>
 </tr> 
 <form action="admin.php" method="POST">
 <form name="frmdropdown" method="post" action="admin2.php">
            <strong>id Ползователя : </strong> 
            <select name="id"> 
               <option value=""> Выбрать </option> 
            <?php
  
                 $dd_res=mysql_query("Select DISTINCT id from registrasiya");
                 while($r=mysql_fetch_row($dd_res))
                 { 
                       echo "<option value='$r[0]'> $r[0] </option>";
                 }
             ?>
           </select>
 <tr>Имя <input type="text" name="name" value=""></tr>
 <tr>Фамилия <input type="text" name="surname" value=""></tr>
 <tr>Почта <input type="text" name="mail" value=""></tr>
 <tr>Пароль <input type="text" name="password" value=""></tr>
  <tr>Телефон <input type="text" name="tel" value=""></tr>
  <tr><input type="submit" name="изменить" value="Изменить"/> 
  </form>
  </table>
 </center>
</form>
<a href='index.php' class="osn">Назад в главное меню</a>
<a href='adminN.php' class="osn">добавление новостей</a>
</body>
</html>