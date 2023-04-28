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

$sql = "CREATE TABLE departmen (
  id_departmen INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nama_departmen VARCHAR(30) DEFAULT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabel departmen berhasil dibuat";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
