<?php
require 'functions.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "select * from mahasiswa where id = $id");
$row = mysqli_fetch_assoc($result);

if(isset($_POST['submit'])) {
	if(ubah($_POST) === 1) {
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
		<title>Ubah</title>
	</head>
	<body>
		<h1>Ubah Data Mahasiswa</h1>
		<form action="" method="post" accept-charset="utf-8">
			<ul type="none">
				<li>
					<label for="nama">Nama :</label>
					<input type="text" value="<?= $row['nama']; ?>" name="nama" id="nama"/>
				</li>
				<li>
					<label for="nrp">NRP :</label>
					<input type="text" value="<?= $row['nrp']; ?>" name="nrp" id="nrp"/>
				</li>
				<li>
					<label for="email">Email :</label>
					<input type="text" value="<?= $row['email']; ?>" name="email" id="email"/>
				</li>
				<li>
					<label for="jrs">Jurusan :</label>
					<input type="text" value="<?= $row['jurusan']; ?>" name="jurusan" id="jrs"/>
				</li>
				<li>
					<button type="submit" name="submit">ubah data</button>
				</li>
			</ul>
		</form>
	</body>
</html>
