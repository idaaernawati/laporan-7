<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tgs7no1";


// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

//memasukkan data ke tabel buku_tamu
$sql = "INSERT INTO buku_tamu (ID_BT, NAMA, EMAIL, ISI)
VALUES (1, 'John Doe', 'johndoe@gmail.com', 'Vegetarian'),
(2, 'Jane Smith', 'jane.smith@gmail.com', 'Alergi seafood'),
(3, 'Muhammad Ali', 'm.ali@gmail.com', 'Tidak makan daging'),
(4, 'Sarah Lee', 'sarah.lee@gmail.com', 'Penderita diabetes'),
(5, 'Kevin Wang', 'kevin.wang@gmail.com', 'Alergi telur dan susu')";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
