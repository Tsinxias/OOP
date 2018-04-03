<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="main.css">
  <title>Document</title>
</head>
<body>

  <h2 id="addTitle">Add New User : </h2>
  <form class="addForm" action="newUser.php" method="post">
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

  <h2 id="addLogin">Login :</h2>
  <form class="loginForm" action="login.php" method="post">
    <label for="loginUsername">Username</label>
    <input type="text" name="loginUsername" value="">
    <br>
    <label for="loginPwd">Password</label>
    <input type="password" name="loginPwd" value="">
    <br>
    <button type="submit" name="loginBtn">Login</button>
  </form>

  <script src="jquery-3.2.1.js" charset="utf-8"></script>
  <script src="main.js" charset="utf-8"></script>
</body>
</html>
