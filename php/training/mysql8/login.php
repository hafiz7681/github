<?php
require 'functions.php';

if(isset($_POST['submit'])) {
  
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $result = mysqli_query($conn, "select * from users where username =
  '$username'");
  
  // mysqli_num_rows() = jumlah baris yg dikembalikan.
  if(mysqli_num_rows($result) === 1) {
    
    $row = mysqli_fetch_assoc($result);
    
    // password_verify(string, hash);
    if($verify = password_verify($password, $row["password"])) {
      header('location: index.php');
      exit;
    } else {
      $error = true;
    }
    
  }
  
}

?>
<!doctype html>
<html>
  <head>
    <title>Halaman Login</title>
  </head>
  <body>
    <h1>Halaman Login</h1>
    
    <?php if(isset($error)) : ?>
      <p style="color: red; font-style: italic;">username / password salah!</p>
    <?php endif; ?>
    
    <form action="" method="post">
      <ul>
        <li>
          <label for="username">Username :</label>
          <input type="text" name="username" id="username">
        </li>
        <li>
          <label for="password">Password :</label>
          <input type="password" name="password" id="password">
        </li>
        <li>
          <button type="submit" name="submit">Login</button>
        </li>
      </ul>
    </form>
  </body>
</html>