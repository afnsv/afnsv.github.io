<?php
 $databaseHost = "127.0.0.1"; 
 $databaseUser = "root";
 $databasePassword = "";
 $databaseName = "isip1703";
        
      $db=mysql_connect($databaseHost ,$databaseUser ,$databasePassword )or die ('Connection Error');
      mysql_select_db("isip1703",$db) or die ('Database Error');
 ?>