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

//memasukkan data ke tabel departmen
$sql = "INSERT INTO departmen (id_departmen, nama_departmen)
VALUES (1, 'Sales Marketing'),
(2, 'HRD'),
(3, 'Information & Technology')";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
