<?php
/* standar output
echo, print
print_r("");
var_dump(""); */
$nama = "sandhika";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Belajar PHP</title>
  </head>
  <body>
    <h1>Halo, selamat datang <?php echo $nama; ?></h1>
    <!-- <?php 
      echo "<h1>halo, selamat datang sandhika</h1>";
    ?> -->
  </body>
</html>
<?php 
  /* $nama_depan = "sandhika";
  $nama_belakang = "galih";
  echo $nama_depan . " " . $nama_belakang; */
  $nama_depan = "sandhika_";
  $nama_depan .= "galih";
  echo $nama_depan;
?>