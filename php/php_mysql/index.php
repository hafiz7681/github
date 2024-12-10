<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "hafiz7681", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "select * from mahasiswa");

// ambil data (fetch) mahasiswa dari object result :
// mysqli_fetch_row() // mengembalikan array numeric
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembalikan array numeric & associative
// mysqli_fetch_object() // mengembalikan object

// $mhs = mysqli_fetch_object($result);
// var_dump($mhs->Nama);

// while( $mhs = mysqli_fetch_assoc($result) ) {
// var_dump($mhs);
// }


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>NRP</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Jurusan</th>
	</tr>
	<?php $i = 1; ?>
	<?php while( $row = mysqli_fetch_assoc($result) ) : ?>
		<tr>
			
			<td><?= $i; ?></td>
			<td>
				<a href="">Ubah</a> | 
				<a href="">Hapus</a>
			</td>
			<td><img src="img/<?= $row["Gambar"]; ?>" width="50"></td>
			<td><?= $row["NRP"]; ?></td>
			<td><?= $row["Nama"]; ?></td>
			<td><?= $row["Email"]; ?></td>
			<td><?= $row["Jurusan"]; ?></td>
		</tr>
	<?php $i++; ?>
	<?php endwhile; ?>
	
</table>

</body>
</html>