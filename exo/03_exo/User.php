<?php
class User {
  private $conn;
  public $connected = '';

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
      $this->connected = 'yes';
    }
  }


  function logout() {
    // session_start ();
    // On détruit les variables de notre session
    session_unset ();
    // On détruit notre session
    session_destroy ();
    // // On redirige le visiteur vers la page d'accueil
    // header ('location: login.php');
    $this->connected = 'no';
  }

  function setName($newUsername) {
    $updateName = "UPDATE users SET username = '$newUsername' WHERE id = 1";
    $requestSetName = $this->conn->prepare($updateName);
    $requestSetName->execute();
  }

  function setEmail($newEmail) {
    $updateEmail = "UPDATE users SET email = '$newEmail' WHERE id = 1";
    $requestSetEmail = $this->conn->prepare($updateEmail);
    $requestSetEmail->execute();
  }


  function deleteUser($deleteID) {
    $deleteUser = "DELETE FROM users WHERE id = '$deleteID'";
    $deleteRequest = $this->conn->prepare($deleteUser);
    $deleteRequest->execute();
  }
}
 ?>
