<?php
class User {
  private $conn;

  function __construct() {
    $this->conn = new DataBase();
    $this->conn = $this->conn->getmyDB();
  }

  function test() {
    $stmt = $this->conn->prepare("SELECT * FROM users");
    if ($stmt->execute()) {
      while ($row = $stmt->fetch()) {
        $fetch[] = $row;
      }
      return $fetch;
    } else {
      return false;
    }
  }


  function insertNewUSer($username, $email, $password, $connected = 'no') {
    $insertUser = "INSERT INTO users SET username = '$username', email = '$email', password = '".sha1($password)."', connected = '$connected'";
    $requestInsert = $this->conn->prepare($insertUser);
    $requestInsert->execute();
  }


  function login($loginUser, $loginPwd) {
    // $loginUser = $_POST['loginUsername'];
    // $loginPwd = $_POST['loginPwd'];

    $selectLoger = "SELECT * FROM users WHERE username = '$loginUser' AND password = '".sha1($loginPwd)."'";
    $requestSelect = $this->conn->query($selectLoger);
    if ($loger = $requestSelect->fetch(PDO::FETCH_ASSOC)) {
      session_start();
      $_SESSION['username'] = $loginUser;
      $_SESSION['password'] = $loginPwd;
      header('Location: index.php?connected=yes');
    }
    // $loger = $requestSelect->fetch(PDO::FETCH_ASSOC);

    // if (!empty($loginUser) && !empty($loginPwd)) {
    //   if ($loginUser == $loger['username'] && $loginPwd == sha1($loger['password'])) {
    //     session_start();
    //     $_SESSION['username'] = $loginUser;
    //     $_SESSION['password'] = $loginPwd;
    //     // header('Location: read.php');
    //   } else {
    //     // header('Location: index.php?noConnection=no');
    //   }
    // } else {
    //   // header('Location: index.php?fillIn=no');
    // }
  }
}
 ?>
