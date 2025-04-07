<?php
require 'functions.php';

if(isset($_POST['submit'])) {
	if(tambah($_POST) === 1) {
		header('location: index.php');
	} else {
		echo 'error'; die;
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width" />
		<title>Tambah</title>
	</head>
	<body>
		<h1>Tambah Data Mahasiswa</h1>
		<form action="" method="post" accept-charset="utf-8">
			<ul type="none">
				<li>
					<label for="nama">Nama :</label>
					<input type="text" value="" name="nama" id="nama"/>
				</li>
				<li>
					<label for="nrp">NRP :</label>
					<input type="text" value="" name="nrp" id="nrp"/>
				</li>
				<li>
					<label for="email">Email :</label>
					<input type="text" value="" name="email" id="email"/>
				</li>
				<li>
					<label for="jurusan">Jurusan :</label>
					<input type="text" value="" name="jurusan" id="jurusan"/>
				</li>
				<li>
					<button type="submit" name="submit">tambah data</button>
				</li>
			</ul>
		</form>
	</body>
</html>
