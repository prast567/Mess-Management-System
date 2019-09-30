<?php
include"dbconnect.php";
$query1  = "delete from count";
$query2 = "delete from countfinal";
$query3 = "delete from lastday";
$query4 = "delete from latejoin";
$query5 = "delete from messjoin";
$query6 = "delete from milkfirsthalf";
$query7 = "delete from milkfirsthalf";
$query8 = "delete from valueset2";
$query9 = "delete from reduction";
$query10 = "delete from purchases";
mysql_query($query1);
mysql_query($query2);
mysql_query($query3);
mysql_query($query4);
mysql_query($query5);
mysql_query($query6);
mysql_query($query7);

mysql_query($query8);
mysql_query($query9);
mysql_query($query10);



 ?>
