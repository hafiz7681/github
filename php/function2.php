<?php
  function salam($waktu = "datang", $nama = "admin") {
    return "selamat $waktu, $nama";
  }
  
?>
<!doctype html>
<html>
  <head>
    <title>Latihan function</title>
  </head>
  <body>
    <h1><?= salam(); ?></h1>
  </body>
</html>