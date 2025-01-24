<?php
  $conn = mysqli_connect('127.0.0.1', 'root', '', 'myDataBase');

function query($data) {
  global $conn;
  $result = mysqli_query($conn, $data);
  $rows = [];
  while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah() {
  global $conn;
  
  $nama = $_POST['nama'];
  $nrp = $_POST['nrp'];
  $email = $_POST['email'];
  $jurusan = $_POST['jurusan'];
  
  $gambar = $_POST['gambar'];
  
  $syntax = "insert into mahasiswa values (
      null,'$gambar','$nama','$nrp','$email','$jurusan'
  )";
  
  mysqli_query($conn, $syntax);
  
  return mysqli_affected_rows($conn);
}

function hapus($id) {
  global $conn;
  
  $syntax = "delete from mahasiswa where id = $id";
 
  mysqli_query($conn, $syntax);
  
  return mysqli_affected_rows($conn);
}

function ubah($id) {
  global $conn;
  
  $nama = $_POST['nama'];
  $nrp = $_POST['nrp'];
  $email = $_POST['email'];
  $jurusan = $_POST['jurusan'];
  
  $gambar = $_POST['gambar'];
  
  $syntax = "update mahasiswa set
    gambar='$gambar', nama='$nama', nrp='$nrp', email='$email',
    jurusan='$jurusan' where id=$id
  ";
  
  mysqli_query($conn, $syntax);
  
  return mysqli_affected_rows($conn);
}

?>