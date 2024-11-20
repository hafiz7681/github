<!-- array biasa -->
<?php
  $mahasiswa = [
    ["sandhika", "043040023", "teknik informatika", "sandhikagalih@unpas.ac.id"],
    ["doddy ferdiansyah", "033040001", "teknik industri", "doddy@yahoo.com"],
    ["erik", "023040123", "teknik planalogi", "erik@gmail.com"]
  ];
?>
<!doctype html>
<html>
  <head>
    <title>daftar mahasiswa</title>
  </head>
  <body>
    
    <h1>daftar mahasiswa</h1>
    
    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
      <li>nama : <?= $mhs[0]; ?></li>
      <li>nrp : <?= $mhs[1]; ?></li>
      <li>jurusan : <?= $mhs[2]; ?></li>
      <li>email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
    
  </body>
</html>