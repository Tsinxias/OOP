<?php
// $postUser = $_POST['username'];
// $postEmail = $_POST['email'];
// $postPwd = $_POST['pwd'];

class User {
  private $id;
  private $username;
  private $email;
  private $password;
  private $connected;
  public $db;
  //
  // function __construct($username, $email, $password, $connected ='no') {
  //   $this->username = $username;
  //   $this->email = $email;
  //   $this->password = $password;
  //   $this->connected = $connected;
  //   // $this->db = $db;
  // }

  function insertNewUser($postUser, $postEmail, $postPwd, $connectionDBinUser) {
    // $db = new DataBase('localhost', 'user', 'root', 'toor');
    $insertUser = "INSERT INTO users set username = '$postUser', email='$postEmail', password='".sha1($postPwd)."'";
    $requestInsert = $connectionDBinUser->prepare($insertUser);
    $request->execute();
  }

  function setUsername($username, $connectionDBinUser) {
    // $db = new DataBase('localhost', 'user', 'root', 'toor');
    $setUsername = "UPDATE users SET username = '$username' WHERE id = 1";
    $request = $connectionDBinUser->prepare($setUsername);
    $request->execute();

  }

  function setEmail() {

  }

  function remove() {

  }
}

$teddy = new User('Teddy', 'teddy@gmail.com', 'nicolay123');
 ?>
