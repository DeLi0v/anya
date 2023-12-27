<?php
$connect = mysqli_connect('db', 'root', 'secret', 'delfin') or die ('не работает');
$connect->query( "SET CHARSET utf8" );
mysql_set_charset("utf8");
$connect->set_charset("utf-8");
?>
