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
echo "Koneksi berhasil";
?>
