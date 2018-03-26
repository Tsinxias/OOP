<?php
include "html.php";
include "form.php";
include "validate.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/master.css"> -->

  <?php
  $html = new Html();
  echo $html->charsetMeta('UTF-8');
  echo $html->otherMeta('name', 'viewport', 'width=device-width, initial-scale=1.0');
  echo $html->otherMeta('http-equiv', 'X-UA-Compatible', 'ie=edge');
  echo $html->styleSheet('master.css');


   ?>
  <title>Document</title>
</head>
<body>
  <h1>OOP Form</h1>
  <?php
  $object = new Form();
  echo $object->startForm('index.php', 'POST').'<br>';

  echo $object->inputText('Name : ', 'text').'<br>';
  echo $object->inputText('Age : ', 'number').'<br>';
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

  echo '<h3>Links</h3>';
  echo '<p>Seperate links</p>';
  echo $html->img('firstImg', 'https://i0.wp.com/lavieetlesreves.com/wp-content/uploads/2017/03/A25-He%CC%81risson.jpg?resize=1280%2C640&ssl=1', '200px', "400px");
  echo '<h6 id="firstA">click on the img for js test</h6>';
  echo $html->a('https://www.youtube.com/watch?v=Pb2eucSXbQo', 'Hérisson domestique').'<br>';

  echo '<p>image links to video</p>';
  echo $html->a('https://www.youtube.com/watch?v=Pb2eucSXbQo', $html->img('', 'https://i0.wp.com/lavieetlesreves.com/wp-content/uploads/2017/03/A25-He%CC%81risson.jpg?resize=1280%2C640&ssl=1', '200px', "400px")).'<br>';


  $validate = new Validator();
  echo 'Hola mundo is a string : '.$validate->checkString('Hola mundo').'<br>';
  echo '1253 is an int : '.$validate->checkInt(1253);

  echo $html->javaScript('random.js');
   ?>
</body>
</html>
