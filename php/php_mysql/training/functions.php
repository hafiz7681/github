<?php
$conn = mysqli_connect('localhost','root','admin123','database');

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

?>
