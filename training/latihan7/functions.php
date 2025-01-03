<?php
	$conn = mysqli_connect('localhost','root','hafiz7681','myDataBase');

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
		
		$nama = htmlspecialchars($data['nama']);
		$nrp = htmlspecialchars($data['nrp']);
		$email = htmlspecialchars($data['email']);
		$jurusan = htmlspecialchars($data['jurusan']);

		$gambar = upload();
		if( !$gambar ) {
			return false;
		}

		$insert = "INSERT INTO mahasiswa VALUES (NULL,'$gambar','$nama','$nrp','$email','$jurusan')";
		$result = mysqli_query($conn, $insert);

		return mysqli_affected_rows($conn);
	}

	function upload() {

		$namaFile = $_FILES['gambar']['name'];
		$ukuranFile = $_FILES['gambar']['size'];
		$error = $_FILES['gambar']['error'];
		$tmpName = $_FILES['gambar']['tmp_name'];

		if( $error === 4 ) {
			echo "<script>
				alert('pilih gambar terlebih dahulu!');
				document.location.href = 'tambah.php';
			</script>";
			return false;
		}

		$ektensiGambarValid = ['jpg', 'jpeg', 'png', 'gif', 'tmp'];
		$ektensiGambar = explode('.', $namaFile);
		$ektensiGambar = strtolower(end($ektensiGambar));
		if( !in_array($ektensiGambar, $ektensiGambarValid) ) {
			echo "<script>
				alert('yang anda upload bukan gambar!');
			</script>";
			return false;
		}

		if( $ukuranFile > 1000000 ) {
			echo "<script>
				alert('ukuran gambar terlalu besar!');
			</script>";
			return false;
		}

		move_uploaded_file($tmpName, 'img/' . $namaFile);

		return $namaFile;
	}

	function hapus($data) {
		global $conn;

		$id = $_GET['id'];
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

?>