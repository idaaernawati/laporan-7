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

// melakukan penghapusan data
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM pegawai WHERE id = $id"; // query hapus data
    
    if (mysqli_query($conn, $query)) {
        echo "Data berhasil dihapus";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Data tidak ditemukan";
}

mysqli_close($conn); // menutup koneksi ke database
?> 