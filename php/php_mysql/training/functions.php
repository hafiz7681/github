<?php
$conn = mysqli_connect('127.0.0.1','root','admin123','database');

function query($data) {
	global $conn;
	$result = mysqli_query($conn, $data);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data) {
	global $conn;

	$nama = htmlspecialchars($data['nama']);
	$nrp = htmlspecialchars($data['nrp']);
	$email = htmlspecialchars($data['email']);
	$jurusan = htmlspecialchars($data['jrs']);

	$gambar = upload();
	if($gambar === false) {
		return false;
	}

	mysqli_query($conn, "insert into mahasiswa values (null, '$gambar', '$nama', '$nrp', '$email', '$jurusan')");

	return mysqli_affected_rows($conn);
}

function upload() {

	$namafile = $_FILES['gambar']['name'];
	$tmpName = $_FILES['gambar']['tmp_name'];
	$error = $_FILES['gambar']['error'];
	$ukuranfile = $_FILES['gambar']['size'];

	if($error === 4) {
		return 'nophoto.png';
	} else {

		$gambarValid = ['jpg','png','jpeg','webp','gif'];
		$gambar = explode('.', $namafile);
		$gambar = strtolower(end($gambar));
		if(!in_array($gambar, $gambarValid)) {
			return false;
		}

		if($ukuranfile > 9999999999) {
			return false;
		}

		$namaAcak = uniqid() . '.' . $gambar;
		move_uploaded_file($tmpName, 'img/' . $namaAcak);

		return $namaAcak;
	}
}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "delete from mahasiswa where id = $id");

	return mysqli_affected_rows($conn);
}

function ubah($id, $data) {
	global $conn;
	
	$nama = htmlspecialchars($data['nama']);
	$nrp = htmlspecialchars($data['nrp']);
	$email = htmlspecialchars($data['email']);
	$jurusan = htmlspecialchars($data['jrs']);

	if($_FILES['gambar']['error'] !== 4) {
		$gambar = upload();
		if($gambar === false) {
			return false;
		}
	}
	if($_FILES['gambar']['error'] === 4) {
		$gambar = $_POST['gambarlama'];
	}

	mysqli_query($conn, "update mahasiswa set gambar='$gambar', nama='$nama', nrp='$nrp', email='$email', jurusan='$jurusan' where id = $id");

	return mysqli_affected_rows($conn);
}

function cari($data) {
	$data = htmlspecialchars($data);
	$cari = "select * from mahasiswa where nama like '%$data%' or nrp like '%$data%' or email like '%$data%' or jurusan like '%$data%'";
	
	return query($cari);
}

function signup($data) {
	global $conn;

	$username = htmlspecialchars(stripslashes(strtolower($data['username'])));
	$password = mysqli_real_escape_string($conn, $data['password']);
	$confirm = mysqli_real_escape_string($conn, $data['password2']);

	if(strlen($username) < 5 || strlen($password) < 8) {
		return false;
	}

	$result = mysqli_query($conn, "select username from users where username = '$username'");
	if(mysqli_fetch_assoc($result)) {
		return false;
	}

	if($password !== $confirm) {
		return false;
	}

	$password = password_hash($password, PASSWORD_DEFAULT);
	mysqli_query($conn, "insert into users values (null, '$username', '$password')");

	return mysqli_affected_rows($conn);
}

function sigin($data) {
	global $conn;
	session_start();

	$username = htmlspecialchars(stripslashes(strtolower($data['username'])));
	$password = mysqli_real_escape_string($conn, $data['password']);

	if(strlen($username) < 5 || strlen($password) < 8) {
		return false;
	}

	$result = mysqli_query($conn, "select * from users where username = '$username'");
	if(mysqli_num_rows($result) === 1) {
		$row  = mysqli_fetch_assoc($result);
		if(password_verify($password, $row['password']) === true) {
			$_SESSION['login'] = true;
			if($_POST['remember'] === "on") {
				$name = $row['username']; $id = $row['id'];
				$name_hash = password_hash($name, PASSWORD_DEFAULT);
				setcookie('key', $id, time()+10);
				setcookie('id', $name_hash, time()+10);
			}
			return 1;
		}
	}
}

?>
