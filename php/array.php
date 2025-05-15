<?php
  //array cara lama
  $hari = array("senin", "selasa", "rabu");
  //array cara baru
  $bulan = ["januari", "februari", "maret"];
  $arrl = [123, "string", false];
  
  // menampilkan array
  // var_dump() / print_r()
  var_dump($hari);
  echo "<br />";
  print_r($bulan);
  
  // menampilkan 1 elemen array
  echo "<br />";
  echo $arrl[0];
  echo $bulan[1];
  
  // menambahkan elemen baru pada array
  $hari[] = "kamis";
  $hari[] = "jumat";
  echo "<br />";
  var_dump($hari);
  
  echo "<br/><br/>";
  // latihan array2
  // menggunakan foreach
  $angka = [3,2,15,20,11,77,89,8];
?>
<!doctype html>
<html>
  <head>
    <title>latihan 2</title>
    <style>
      .kotak {
        width: 50px;
        height: 50px;
        background-color: salmon;
        text-align: center;
        line-height: 50px;
        margin: 3px;
        float: left;
      }
      .clear { clear: both; }
    </style>
  </head>
  <body>
    
    <?php for( $i = 0; $i < count($angka); $i++ ) : ?>
    <div class="kotak"><?= $angka[$i]; ?></div>
    <?php endfor; ?>
  
    <div class="clear"></div>
  
  <?php foreach( $angka as $a ) : ?>
    <div class="kotak"><?= $a; ?></div>
  <?php endforeach; ?>
  
  </body>
</html>