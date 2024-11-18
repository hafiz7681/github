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
  // lanjutan
  
  
  
?>