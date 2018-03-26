<?php
include 'car.php';
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
  $voiture = new Voiture();
  echo $voiture->checkBrand('Audi');
  echo $voiture->checkWeight();
  echo $voiture->checkPlate();
  echo 'Before the ride : '.$voiture->getKm().' km<br>';
  echo $voiture->checkKm();
  echo $voiture->checkYear();
  echo $voiture->getBrand();
  echo $voiture->ride();
  echo 'After the ride : '.$voiture->getKm().' km<br>';
  echo $voiture->checkKm();
  echo $voiture->ride();
  echo 'After the second ride : '.$voiture->getKm().' km<br>';
  echo $voiture->checkKm();

  echo $voiture->display();
   ?>
</body>
</html>
