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

//memasukkan data ke tabel pegawai
$sql = "INSERT INTO pegawai (id, fname, lname, tgl_lahir, alamat, jk, gaji)
VALUES (1, 'John', 'Doe', '2001-10-17', 'Jl. Pahlawan', 'Laki-Laki', 10000000),
(2, 'Jane', 'Smith', '2000-11-04', 'Jl. Ahmad Yani', 'Perempuan', 21000000),
(3, 'Muhammad', 'Ali', '1998-01-15', 'Jl. Yonosoewoyo', 'Laki-Laki', 8000000),
(4, 'Sarah', 'Lee', '1999-07-12', 'Jl. Jendral Sudirman', 'Perempuan', 17000000),
(5, 'Kevin', 'Wang', '2000-08-23', 'Jl. Mayjendsungkono', 'Laki-Laki', 25000000)";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
