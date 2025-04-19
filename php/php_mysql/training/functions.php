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

	$gambar = htmlspecialchars($data['gambar']);
	$nama = htmlspecialchars($data['nama']);
	$nrp = htmlspecialchars($data['nrp']);
	$email = htmlspecialchars($data['email']);
	$jurusan = htmlspecialchars($data['jrs']);

	mysqli_query($conn, "insert into mahasiswa values (null, '$gambar', '$nama', '$nrp', '$email', '$jurusan')");

	return mysqli_affected_rows($conn);
}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "delete from mahasiswa where id = $id");

	return mysqli_affected_rows($conn);
}

function ubah($id, $data) {
	global $conn;
	
	$gambar = htmlspecialchars($data['gambar']);
	$nama = htmlspecialchars($data['nama']);
	$nrp = htmlspecialchars($data['nrp']);
	$email = htmlspecialchars($data['email']);
	$jurusan = htmlspecialchars($data['jrs']);

	mysqli_query($conn, "update mahasiswa set gambar='$gambar', nama='$nama', nrp='$nrp', email='$email', jurusan='$jurusan' where id = $id");

	return mysqli_affected_rows($conn);
}

?>
