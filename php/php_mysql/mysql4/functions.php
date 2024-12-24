<?php
	$conn = mysqli_connect("localhost","root","hafiz7681","phpdasar");

	function show($data) {
		global $conn;
		$result = mysqli_query($conn, $data);
		$rows = [];
		while( $row = mysqli_fetch_assoc($result) ) {
			$rows[] = $row;
		}
		return $rows;
	}

	function add($data) {
		global $conn;
		$nama = $data["Nama"];
		$nrp = $data["NRP"];
		$email = $data["Email"];
		$jurusan = $data["Jurusan"];
		$insert = "INSERT INTO mahasiswa VALUES (NULL,'$nama','$nrp','$email','$jurusan')";

		mysqli_query($conn, $insert);
		return mysqli_affected_rows($conn);
	}

	function delete($data) {
		global $conn;

		$id = $data["id"];
		$delete = "DELETE FROM mahasiswa WHERE id = $id";
		$result = mysqli_query($conn, $delete);

		return mysqli_affected_rows($conn);
	}

	function update() {
		global $conn;

		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$nrp = $_POST['nrp'];
		$email = $_POST['email'];
		$jurusan = $_POST['jurusan'];

		$update = "UPDATE mahasiswa SET nama='$nama', nrp='$nrp', email='$email', jurusan='$jurusan' wHERE id=$id";
		$result = mysqli_query($conn, $update);

		return mysqli_affected_rows($conn);
	}

?>