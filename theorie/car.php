<?php
class Car {
  private $speed = 123;

  function getPublicSpeed($type) {
    if ($type == "electric") {
      return $this->speed/3;
    }
    return $this->speed/2;
  }
}

 ?>
