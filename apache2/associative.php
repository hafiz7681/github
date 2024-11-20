<!-- array associative -->
<?php
  $mahasiswa = [
    [
      "nama"=>"sandhika",
      "nrp"=>"043040023",
      "jurusan"=>"teknik informatika",
      "email"=>"sandhikagalih@unpas.ac.id",
      "gambar"=>"aqua.jpg"
    ],
    [
      "nama"=>"doddy ferdiansyah",
      "nrp"=>"033040001",
      "jurusan"=>"teknik industri",
      "email"=>"doddy@yahoo.com",
      "gambar"=>"keyboard.jpg"
    ],
    [
      "nama"=>"erik",
      "nrp"=>"023040123",
      "jurusan"=>"teknik planalogi",
      "email"=>"erik@gmail.com",
      "gambar"=>"pulpen.jpg"
    ]
  ];
?>
<!doctype html>
<html>
  <head>
    <title>daftar mahasiswa</title>
    <style>
      .gambar {
        width: 100px;
      }
    </style>
  </head>
  <body>
    
    <h1>daftar mahasiswa</h1>
    
    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
      <li>
        <img class="gambar" src="img/<?= $mhs["gambar"]; ?>" />
      </li>
      <li>nama : <?= $mhs["nama"]; ?></li>
      <li>nrp : <?= $mhs["nrp"]; ?></li>
      <li>jurusan : <?= $mhs["jurusan"]; ?></li>
      <li>email : <?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>
    
  </body>
</html>