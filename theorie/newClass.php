<?php
class NewClass {
  //-------------different kind of
  // private
  // protected
  // public (default)
  private $data = "This is data";

  function getData() {
    return $this->data;
  }


  private $pwd = "azerty123";
  function checkPWD() {
    //decrypt
    //compare
    //send true or false
    return $this->pwd;
  }
}

class NewClass2 extends ParentClass {
  function print_data() {
    return $this->data;
  }
}

class UserCar extends Car {
  function driving_speed() {
    $this->getPublicSpeed("electric");
  }
}

// $object = new NewClass();
 ?>
