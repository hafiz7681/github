<?php 
// koneksi ke database
$hostname = "localhost";  //hostname: localhost / ip: 127.0.0.1
$username = "root";  //username: root, dll
$password = "hafiz7681";  //password for username
$database = "phpdasar";  //database name: phpdasar, dll
$conn = mysqli_connect($hostname,$username,$password,$database);

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$box = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$box[] = $row;
	}
	return $box;
}

function tambah($data) {
	global $conn;

	$Nama = htmlspecialchars($data["Nama"]);
	$NRP = htmlspecialchars($data["NRP"]);
	$Email = htmlspecialchars($data["Email"]);
	$Jurusan = htmlspecialchars($data["Jurusan"]);
	$Gambar = htmlspecialchars($data["Gambar"]);

	$query = "INSERT INTO mahasiswa (Nama,NRP,Email,Jurusan,Gambar)
		VALUES ('$Nama','$NRP','$Email','$Jurusan','$Gambar')
	";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE ID = $id");
	return mysqli_affected_rows($conn);
}



?>