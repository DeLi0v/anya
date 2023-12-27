<?php

require_once 'connect.php';

$sname = $_POST['sname'];
$fname = $_POST['fname'];
$mname = $_POST['tname'];
$pnumber = $_POST['pnumber'];
$basket = $_POST['basket'];

mysqli_query($connect, "INSERT INTO `delfin`.`clients` (`SName`, `FName`, `MName`, `PNum`, `Basket`) VALUES ('$sname', '$fname', '$mname', '$pnumber', '$basket');");

header('Location:index.php');
