<?php

require_once 'connect.php';

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Delfin</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>

 <body style="font-family:Tahoma;color:white;background-color: black;">
 
<style>
  body {
    background-image: url('img.jpg');
    background-repeat: no-repeat;
    background-size: cover;
  }
  
</style>


 <div style="background-color:#4682B4;padding:10px;text-align:center;">
  <h1>Дельфинарий</h1> 
  </div>
    <center><h2>Посетители</h2></center>
  </div>
<div style="overflow:auto">
   <center><table>
    <tr>
      <th>ID</th>
      <th>Фамилия</th>
      <th>Имя</th>
      <th>Отчество</th>
      <th>Номер телефона</th>
	  <th>Условаия посещения</th>
    </tr>
    <?php
      $pass = mysqli_query($connect, "SELECT * FROM `clients`");
      $pass = mysqli_fetch_all($pass);
      foreach ($pass as $pass) {
        echo '
        <tr>
          <td>'.$pass[0].'</td>
          <td>'.$pass[1].'</td>
          <td>'.$pass[2].'</td>
          <td>'.$pass[3].'</td>
          <td>'.$pass[4].'</td>
		  <td>'.$pass[5].'</td>
          <td><a href="delete.php?ID='.$pass[0].'">Удалить</a></td>

        </tr>
        ';
      }
    ?>
  </table>
  <h3>Добавить клиентa</h3>
  <form action="create_clients.php" method="post">
    <p>ID</p>
    <textarea name="ID"></textarea>
    <p>Фамилия</p>
    <textarea name="sname"></textarea>
    <p>Имя</p>
    <textarea name="fname"></textarea>
    <p>Отчество</p>
    <textarea name="tname"></textarea>
	<p>Номер телефона</p>
    <textarea name="pnumber"></textarea>
	<p>Условаия посещения</p>
    <textarea name="basket"></textarea>
    <button type="submit">Добавить</button>
  </form>
   </div>
 </center>

</body>
</html>