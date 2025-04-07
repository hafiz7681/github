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

function tambah() {
  global $conn;
  
  $nama = $_POST['nama'];
  $nrp = $_POST['nrp'];
  $email = $_POST['email'];
  $jurusan = $_POST['jurusan'];
  
  $gambar = upload();
  if(!$gambar) {
    return false;
  }
  
  $syntax = "insert into mahasiswa values (
      null,'$gambar','$nama','$nrp','$email','$jurusan'
  )";
  
  mysqli_query($conn, $syntax);
  
  return mysqli_affected_rows($conn);
}

function upload() {
  $namaFile = $_FILES['gambar']['name'];
  $tmpFile = $_FILES['gambar']['tmp_name'];
  $error = $_FILES['gambar']['error'];
  $ukuranFile = $_FILES['gambar']['size'];
  
  if($error === 4) {
    echo "<script>
      alert('Pilih file terlebih dahulu!');
    </script>";
    return false;
  }
  
  $gambarValid = ['jpg', 'jpeg', 'png', 'gif'];
  $gambar = explode('.', $namaFile);
  $gambar = strtolower(end($gambar));
  if(!in_array($gambar, $gambarValid)) {
    echo "<script>
      alert('File yang anda masukkan bukan gambar!');
    </script>";
    return false;
  }
  
  if($ukuranFile > 1000000) {
    echo "<script>
      alert('Ukuran file terlalu besar!');
    </script>";
    return false;
  }
  
  $namaAcak = uniqid();
  $namaAcak = $namaAcak . '.' . $gambar;
  
  move_uploaded_file($tmpFile, 'img/'.$namaAcak);
  
  return $namaAcak;
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
  
  if($_FILES['gambar']['error'] === 4) {
    $gambar = $_POST['image'];
  } else {
    $gambar = upload();
  }
  
  $syntax = "update mahasiswa set
    gambar='$gambar', nama='$nama', nrp='$nrp', email='$email',
    jurusan='$jurusan' where id=$id
  ";
  
  mysqli_query($conn, $syntax);
  
  return mysqli_affected_rows($conn);
}

?>