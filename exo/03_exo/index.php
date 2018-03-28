<?php
include 'Database.php';
include 'User.php';
require 'connect.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<h1>Add user</h1>
<form class="" action="index.php" method="post">
  <label for="username">Username</label>
  <input type="text" name="username" value="">
  <br>
  <label for="email">Email</label>
  <input type="email" name="email" value="">
  <br>
  <label for="pwd">Password</label>
  <input type="password" name="pwd" value="">
  <br>
  <button type="submit" name="button">Submit</button>
</form>

  <?php
  // $db = new DataBase();
  // $db->getDB('localhost', 'user', 'root', 'toor');
  $user = new User();
  $user->db = new DataBase('localhost', 'user', 'root', 'toor');
  $user->insertNewUser($_POST['username'], $_POST['email'], $_POST['pwd'], $user->db);
   ?>



   
  <!-- $user = new User("Tsin")

  $user->name // Tsin

  $user->updateName("Nicolay")

  class User {
    $id = 45
    function updateName($name){
      pdo->query(update name where this->id = )
    }
  } -->

</body>
</html>
