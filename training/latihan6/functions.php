<?php

$conn = mysqli_connect('localhost','root','hafiz7681','phpdasar');
	

	function query($data) {
		global $conn;
		$query = mysqli_query($conn, $data);
		$rows = [];
		while( $row = mysqli_fetch_assoc($query) ) {
			$rows[] = $row;
		}
		return $rows;
	}

	function add($data) {
		global $conn;

		$nama = $data['nama'];
		$email = $data['email'];
		$jurusan = $data['jurusan'];
		$gambar = $data['gambar'];

		$insert = "INSERT INTO mahasiswa VALUES (NULL,'$gambar','$nama','$email','$jurusan')";
		mysqli_query($conn, $insert);

		return mysqli_affected_rows($conn);
	}

	function delete() {
		global $conn;
	}



?>