<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tgs7no23";

// membuat koneksi
$conn = mysqli_connect($servername, $username, $password);

// memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE tgs7no23";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
