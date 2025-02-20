<?php
	require 'functions.php';

	session_start();
	if( !$_SESSION['login'] ) {
		header('location: login.php'); exit;
	}
	
	$id = $_GET['id'];
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

	if( mysqli_affected_rows($conn) === 1 ) {
		header('location: index.php');
	} else {
		echo 'Data gagal di hapus!';
		if( isset($_POST['kembali']) ) {
			header('location: index.php');
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>halaman hapus.php</title>
</head>
<body>
	<form action="" method="post">
		<button type="submit" name="kembali">Kembali</button>
	</form>
</body>
</html>