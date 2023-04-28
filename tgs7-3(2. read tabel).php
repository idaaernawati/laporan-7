<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tgs7no23";

// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$data = mysqli_query($conn, "SELECT * FROM pegawai");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Modul 3</title>
</head>
<body>
	<h2>Daftar Data Pegawai</h2>
	<a href="tgs7-3(3. create data).php">Tambah Data</a>

	<table border="1px">
		<tr>
			<th>No</th>
			<th>Nama Depan</th>
			<th>Nama Belakang</th>
			<th>Tanggal Lahir</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Gaji</th>
			<th>Aksi</th>
		</tr>

		<?php while ($row = mysqli_fetch_assoc($data)) { ?>
			<tr>
				<td><?php echo $row['id'] ?></td>
				<td><?php echo $row['fname'] ?></td>
				<td><?php echo $row['lname'] ?></td>
				<td><?php echo $row['tgl_lahir'] ?></td>
				<td><?php echo $row['alamat'] ?></td>
				<td><?php echo $row['jk'] ?></td>
				<td><?php echo $row['gaji'] ?></td>
				<td>
					<a href="tgs7-3(4. update data).php?id=<?php echo $row['id']; ?>">Edit</a>
					<a href="tgs7-3(5. delete data).php?id=<?php echo $row['id']; ?>">Hapus</a>
				</td>
			</tr>
		<?php } // end while ?>

	</table>

	<?php mysqli_close($conn); // menutup koneksi ke database ?>

</body>
</html>
