<?php
 $servername="localhost";
  $username="root";
  $password="";
  $databasename="hotel";
  $connect=mysql_connect($servername,$username,$password); 
  mysql_select_db($databasename,$connect);
 ?>