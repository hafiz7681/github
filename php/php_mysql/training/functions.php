<?php
$conn = mysqli_connect('localhost','root','admin123','database');

function query($data) {
	global $conn;
	$result = mysqli_query($conn,$data);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}

	return $rows;
}

function tambah($data) {
	global $conn;

	$nama = $data['nama'];
	$nrp = $data['nrp'];
	$email = $data['email'];
	$jurusan = $data['jurusan'];

	$result = mysqli_query($conn,"insert into mahasiswa values(null,'img.png','$nama','$nrp','$email','$jurusan')");

	return mysqli_affected_rows($conn);
}

function ubah($data) {
	global $conn;
	$id = $_GET['id'];

	$nama = $data['nama'];
	$nrp = $data['nrp'];
	$email = $data['email'];
	$jurusan = $data['jurusan'];

	mysqli_query($conn,"update mahasiswa set nama = '$nama', nrp = '$nrp', email = '$email', jurusan = '$jurusan' where id = " . $id);

	return mysqli_affected_rows($conn);
}

?>
