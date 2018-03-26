<?php
include 'html.php';
include "form.php";
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
  <h1>OOP Form</h1>
  <?php
  $object = new Form();
  echo $object->startForm('index.php', 'POST').'<br>';

  echo $object->inputText('Name : ', 'text').'<br>';
  echo $object->inputText('Age : ', 'number').'<br>';
  echo $object->endForm().'<br>';
  echo $object->selectOpen('Gender : ');
  echo $object->option('Male');
  echo $object->option('Female');
  echo $object->selectClose().'<br><br>';
  echo $object->textarea('2', '20').'<br>';

  echo $object->inputChoice('Créer une carte : ', 'radio', 'card', 'yes');
  echo $object->inputChoice('', 'radio', 'card', 'no').'<br>';

  echo $object->inputChoice('What you like : ', 'checkbox', 'like', 'Chocolate');
  echo $object->inputChoice('', 'checkbox', 'like', 'Cookies');
  echo $object->inputChoice('', 'checkbox', 'like', 'Cheese').'<br>';

  echo $object->submit('Submit');

  echo $object->endForm();
   ?>
</body>
</html>
