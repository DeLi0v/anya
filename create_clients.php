<?php

require_once 'connect.php';

$ID = $_POST['ID'];
$sname = $_POST['sname'];
$fname = $_POST['fname'];
$mname = $_POST['tname'];
$pnumber = $_POST['pnumber'];
$basket = $_POST['basket'];

mysqli_query($connect, "INSERT INTO `consulting`.`clients` (`ID clienta`, `SName`, `FName`, `MName`, `PNum`, `Basket`) VALUES ('$ID', '$sname', '$fname', '$mname', '$pnumber', '$basket');");

header('Location:index.php');