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

$sql = "CREATE TABLE pegawai (
  id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  fname VARCHAR(50) DEFAULT NULL,
  lname VARCHAR(30) DEFAULT NULL,
  tgl_lahir DATE DEFAULT NULL,
  alamat VARCHAR(50) DEFAULT NULL,
  jk VARCHAR(10) DEFAULT NULL,
  gaji INT(10) DEFAULT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabel pegawai berhasil dibuat";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
