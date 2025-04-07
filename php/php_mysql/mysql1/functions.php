<?php
  $conn = mysqli_connect('127.0.0.1', 'root', 'admin123', 'database');

function query($data) {
  global $conn;
  $result = mysqli_query($conn, $data);
  $rows = [];
  while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

?>
