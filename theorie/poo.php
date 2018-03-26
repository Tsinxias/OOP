<?php
include "parentClass.php";
include "car.php";
include "newClass.php";
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
  <?php
  $object = new NewClass();
  echo $object->getData()."<br>";
  echo $object->checkPWD()."<br>";
  $object2 = new NewClass2();
  echo $object2->print_data()."<br>";
  var_dump($object)."<br>";
  var_dump($object2)."<br>";
  $car = new UserCar();
  echo $car->driving_speed()."<br>";
  var_dump($car);
   ?>
</body>
</html>
