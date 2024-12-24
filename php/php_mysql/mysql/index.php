<?php
// koneksi ke database
$conn = mysqli_connect("localhost","root","hafiz7681","phpdasar");
// query table mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
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
	<table border="1px" cellpadding="10px" cellspacing="0px">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>NRP</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>
	<?php while( $row = mysqli_fetch_assoc($result) ) : ?>
		<tr>
			<td>1</td>
			<td>
				<a href="">Ubah</a> |
				<a href="">Hapus</a>
			</td>
			<td><img width="50px" src="img/<?= $row["Gambar"]; ?>"></td>
			<td><?= $row["NRP"]; ?></td>
			<td><?= $row["Nama"]; ?></td>
			<td><?= $row["Email"]; ?></td>
			<td><?= $row["Jurusan"];?></td>
		</tr>
	<?php endwhile; ?>
	</table>

</body>
</html>