<?php
session_start();

if(isset($_SESSION['login'])) {
  header('location: index.php');
}

require 'functions.php';
if(isset($_POST['login'])) {
  
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $result = mysqli_query($conn, "select * from users where username =
  '$username'");
  
  $row = mysqli_fetch_assoc($result);
  
  if(mysqli_num_rows($result) > 0 && password_verify($password, $row['password'])) {
      $_SESSION['login'] = true;
      header('location: index.php');
      exit;
  } else {
    $error = true;
  }
  
  /* if(mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password, $row['password'])) {
      $_SESSION['login'] = true;
      header('location: index.php');
      exit;
    } else {
      $error = true;
    }
  } else {
    $error = true;
  } */
  
}

if(isset($_POST['signup'])) {
  header('location: register.php');
}

?>
<!doctype html>
<html>
  <head>
    <title>Halaman Login</title>
    <style>
      input {
        display: block;
        margin-bottom: 10px;
      }
      #id {
        margin-left: 15px;
      }
      p {
        color: red;
        font-style: italic;
      }
    </style>
  </head>
  <body>
    <h1>Halaman Login</h1>
    
    <?php if(isset($error)) : ?>
      <p>username / password salah</p>
    <?php endif; ?>
    
    <form action="" method="post">
      <label for="username">Username :</label>
      <input type="text" name="username" id="username">
      
      <label for="password">Password :</label>
      <input type="password" name="password" id="password">
      
      <button type="submit" name="login">Login</button>
      <button type="submit" name="signup" id="id">Signup</button>
    </form>
  </body>
</html>