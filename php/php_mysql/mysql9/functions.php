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
  
  $nama = htmlspecialchars($_POST['nama']);
  $nrp = htmlspecialchars($_POST['nrp']);
  $email = htmlspecialchars($_POST['email']);
  $jurusan = htmlspecialchars($_POST['jurusan']);
  
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
  
  if($ukuranFile > 2000000) {
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
  
  $nama = htmlspecialchars($_POST['nama']);
  $nrp = htmlspecialchars($_POST['nrp']);
  $email = htmlspecialchars($_POST['email']);
  $jurusan = htmlspecialchars($_POST['jurusan']);
  
  if($_FILES['gambar']['error'] === 4) {
    $gambar = $_POST['namaGambar'];
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

function register($data) {
  global $conn;
  
  // Menangkap variabel method $_POST
  $username = stripslashes(strtolower($data['username']));
  $password = mysqli_real_escape_string($conn, $data['password']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);
  
  // Melakukan query data users
  $result = mysqli_query($conn, "select username from users where username =
  '$username'");
  
  // Cek apakah ada username yang sama?
  if(mysqli_fetch_assoc($result)) {
    echo "<script>
      alert('username sudah terdaftar');
      document.location.href = 'register.php';
    </script>";
    return false;
  }
  
  // Username / password kosong?
  if($username == '' && $password == '') {
    echo "<script>
      alert('masukkan username / password');
      document.location.href = 'register.php';
    </script>";
    return false;
  }
  
  // Cek apakah Confirmasi password valid?
  if($password !== $password2) {
    echo "<script>
      alert('password dan konfirmasi tidak sama');
      document.location.href = 'register.php';
    </script>";
    return false;
  }
  
  // password dan username tidak boleh sama
  if($username == $password) {
    echo "<script>
      alert('demi keamanan anda, username dan password tidak boleh sama');
      document.location.href = 'register.php';
    </script>";
    return false;
  }
  
  // Lakukan pengacakan password
  $password = password_hash($password, PASSWORD_DEFAULT);
  
  /*
    Setelah password teracak dan tidak ada
    username yg sama, masukkan data
    inputan user ke database */
    mysqli_query($conn, "insert into users values (null, '$username',
    '$password')");
    
    return mysqli_affected_rows($conn);
}

?>