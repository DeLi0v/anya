<?php



require_once 'connect.php';



$cli_id = $_GET['ID'];



mysqli_query($connect, "DELETE FROM `clients` WHERE `clients`.`ID clienta` = '$cli_id'");



header('Location:index.php');