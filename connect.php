<?php
$connect = mysqli_connect('192.168.0.3', 'a2', '1', 'consulting') or die ('не работает');
$connect->query( "SET CHARSET utf8" );
mysql_set_charset("utf8");
$connect->set_charset("utf-8");
?>