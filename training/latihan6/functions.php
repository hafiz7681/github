<?php
	$conn = mysqli_connect('127.0.0.1','root','hafiz7681','myDataBase');

	function query($data) {
		global $conn;
		$result = mysqli_query($conn, $data);
		$rows = [];
		while( $row = mysqli_fetch_assoc($result) ) {
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
		$jurusan = htmlspecialchars($data['jurusan']);

		$insert = "INSERT INTO mahasiswa VALUES (NULL,'$gambar','$nama','$nrp','$email','$jurusan')";
		$result = mysqli_query($conn, $insert);

		return mysqli_affected_rows($conn);
	}

	function hapus($data) {
		global $conn;

		$wipe = "DELETE FROM mahasiswa WHERE id = $data";
		$result = mysqli_query($conn, $wipe);

		return mysqli_affected_rows($conn);
	}

	function ubah($data, $number) {
		global $conn;

		$gambar = htmlspecialchars($data['gambar']);
		$nama = htmlspecialchars($data['nama']);
		$nrp = htmlspecialchars($data['nrp']);
		$email = htmlspecialchars($data['email']);
		$jurusan = htmlspecialchars($data['jurusan']);

		$change = "UPDATE mahasiswa SET gambar='$gambar',nama='$nama',nrp='$nrp',email='$email',jurusan='$jurusan' WHERE id=$number";
		$result = mysqli_query($conn, $change);

		return mysqli_affected_rows($conn);
	}

	// function ...

?>