<?php
	$conn = mysqli_connect('localhost', 'root', ' ', 'myDataBase');

	function query($conn, $data) {
		$result = mysqli_query($conn, $data);
		$rows = [];
		while( $row = mysqli_fetch_assoc($result) ) {
			$rows[] = $row;
		}
		return $rows;
	}

	function tambah($conn, $data) {
		$nama = htmlspecialchars($data['nama']);
		$nrp = htmlspecialchars($data['nrp']);
		$email = htmlspecialchars($data['email']);
		$jurusan = htmlspecialchars($data['jurusan']);

		$gambar = upload();
		if( !$gambar ) {
			return false;
		}

		mysqli_query($conn, "INSERT INTO mahasiswa VALUES (null, '$gambar', '$nama', '$nrp', '$email', '$jurusan')");

		return mysqli_affected_rows($conn);
	}

	function upload() {
		$namaFile = $_FILES['gambar']['name'];
		$tmpName = $_FILES['gambar']['tmp_name'];
		$error = $_FILES['gambar']['error'];
		$ukuranFile = $_FILES['gambar']['size'];

		if( $error === 4 ) {
			return "img/nophoto.jpeg";
		}

		if( $error === 0 ) {

			$formatFile = explode('.', $namaFile);
			$formatFile = strtolower(end($formatFile));
			$formatGambar = ['jpg', 'png', 'jpeg', 'webp'];
			if( !in_array($formatFile, $formatGambar) ) {
				return false;
			}
			if( $ukuranFile > 3000000 ) {
				return false;
			}

			$namaAcak = uniqid() . '.' . $formatFile;
			move_uploaded_file($tmpName, "img/" . $namaAcak);

			return $namaAcak;
		}

	}

	function ubah($conn, $data) {
		$nama = htmlspecialchars($data['nama']);
		$nrp = htmlspecialchars($data['nrp']);
		$email = htmlspecialchars($data['email']);
		$jurusan = htmlspecialchars($data['jurusan']);

		if( $_FILES['gambar']['error'] === 4 ) {
			$gambar = $_POST['oldgambar'];
		} else {
			$gambar = upload();
			if( !$gambar ) {
				return false;
			}
		}

		$id  = $_GET['id'];
		mysqli_query($conn, "UPDATE mahasiswa SET gambar = '$gambar', nama = '$nama', nrp = '$nrp', email = '$email', jurusan = '$jurusan' WHERE id = $id");

		return mysqli_affected_rows($conn);
	}

	function cari($conn, $data) {
		$syntax = "SELECT * FROM mahasiswa WHERE nama LIKE '%$data%' OR nrp LIKE '%$data%' OR email LIKE '%$data%' OR jurusan LIKE '%$data%'";
		$result = mysqli_query($conn, $syntax);

		if( mysqli_num_rows($result) >= 1 ) {
			return query($conn, $syntax);
		} else {
			return false;
		}

	}

	function signup($conn, $data) {
		$username = htmlspecialchars(stripslashes(strtolower($data['username'])));
		$password = htmlspecialchars($data['password']);
		$password2 = htmlspecialchars($data['password2']);

		if( strlen($username) === 0 || strlen($password) === 0 ) {
			return false;
			exit;
		}
		if( $password !== $password2 ) {
			return false;
		}

		$query = query($conn, "SELECT * FROM users WHERE username = '$username'");
		if( count($query) === 1 ) {
			return false;
		}

		$password = password_hash($password, PASSWORD_DEFAULT);
		mysqli_query($conn, "INSERT INTO users VALUES (null, '$username', '$password')");

		return mysqli_affected_rows($conn);
	}

	function login($conn, $data) {
		$username = htmlspecialchars(stripslashes(strtolower($data['username'])));
		$password = htmlspecialchars($data['password']);

		if( strlen($username) === 0 || strlen($password) === 0 ) {
			return false;
			exit;
		}

		$rows = query($conn, "SELECT * FROM users WHERE username = '$username'");
		if( count($rows) === 1 && password_verify($password, $rows[0]['password']) ) {
			session_start();
			$_SESSION['login'] = true;

			if( $data['cookie'] === "on" ) {
				$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
				$row = mysqli_fetch_assoc($result);

				$login = $row['username'];
				$key = $row['id'];

				$hash = password_hash($login, PASSWORD_DEFAULT);
				setcookie('login', $hash, time()+3600);
				setcookie('key', $key, time()+3600);
			}

			header('location: index.php'); exit;
		} else {
			return false;
		}

	}

?>